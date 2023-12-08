<x-frame>
    <x-slot:layout_pagetitle>
        "Project"
    </x-slot:layout_pagetitle>

    <x-slot:active_home>
        ""
    </x-slot:active_home>
    <x-slot:active_character>
        ""
    </x-slot:active_character>

    <x-slot:pom_logo>
        {{ $pom_logo }}
    </x-slot:pom_logo>
    <x-slot:sectiontitle>
        {{ $sectiontitle }}
    </x-slot:sectiontitle>
    <x-slot:menu_icon>
        {{ $menu_icon }}
    </x-slot:menu_icon>

    <x-slot:content_here>
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Project Title: {{ $selected_project['title'] }}</h1>
            <p>Project Course: {{ $selected_project['course'] }}</p>
            <p>Project Code: {{ $selected_project['code'] }}</p>
        </div>
    </x-slot:content_here>

</x-frame>