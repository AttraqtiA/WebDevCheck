<?php

use Illuminate\Support\Facades\Route;
use App\Models\Projects;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Editor\StudentController as EditorStudentController;

use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\Admin\StudentExtraPivotController;

use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CharacterController::class, 'index']);
Route::get('/character_details/{find_chara}', [CharacterController::class, 'show']);

Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function() {
    Route::get('/student_list', [StudentController::class, 'index'])->middleware('auth')->name('student_list');
    Route::get('/relation', [StudentExtraPivotController::class, 'index'])->middleware('auth')->name('relation');
});

Route::group([
    'middleware' => 'editor',
    'prefix' => 'editor',
    'as' => 'editor.'
], function() {
    Route::get('/student_list', [EditorStudentController::class, 'index'])->middleware('auth')->name('student_list');
});


Route::get('/extrakurikuler', [ExtracurricularController::class, 'index'])->middleware('auth')->name('extrakurikuler');
Route::get('/extrakurikuler/create', [ExtracurricularController::class, 'create'])->middleware('auth')->name('extrakurikuler.create');
Route::get('/extrakurikuler/store', [ExtracurricularController::class, 'store'])->middleware('auth')->name('extrakurikuler.store');

Route::get('/extrakurikuler/{id}', [ExtracurricularController::class, 'show'])->middleware('auth')->name('extrakurikuler.show');
Route::get('/extrakurikuler/edit/{id}', [ExtracurricularController::class, 'edit'])->middleware('auth')->name('extrakurikuler.edit');
Route::get('/extrakurikuler/update', [ExtracurricularController::class, 'update'])->middleware('auth')->name('extrakurikuler.update');


// exercise projects
Route::view(
    '/projects',
    'exerciseppt',
    [

        "sectiontitle" => "My Projects",
        "pom_logo" => "images/pom_icon.png",
        "menu_icon" => "images/chara_icon.png",

        'projects' => Projects::allData(),
    ]
);

Route::get(
    '/showproject/{code}',
    function ($code) {
        return view(
            'showproject',
            [
                "sectiontitle" => "Detail Project",
                "pom_logo" => "images/pom_icon.png",
                "menu_icon" => "images/chara_icon.png",

                'selected_project' => Projects::dataWithCode($code)
            ]
        );
    }
);

Auth::routes();
//https://comfypace.com/lesson/19/36/133

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
