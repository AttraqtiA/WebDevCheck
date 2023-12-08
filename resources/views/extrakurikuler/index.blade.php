<x-frame>
    <x-slot:layout_pagetitle>
        {{ $pagetitle }}
    </x-slot:layout_pagetitle>

    <x-slot:active_home>
        {{ $active_home }}
    </x-slot:active_home>
    <x-slot:active_character>
        {{ $active_character }}
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
        <div class="text-end">
            <div class="btn-group" role="toolbar" aria-label="Basic example">
                <div class="btn-group me-2" role="group" aria-label="Basic example">
                    <form method="GET" action="{{ route('extrakurikuler.create') }}">
                       <button class="btn btn-primary" href="{{ route('extrakurikuler.create') }}">TAMBAH</button>
                    </form>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Requirement</th>
                    <th scope="col">Price</th>
                    <th scope="col">Tutor Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($extra_list as $extra)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="/extrakurikuler/{{ $extra['id'] }}" class="col mt-3">{{ $extra['name'] }}</a>
                        </td>

                        <td>{{ $extra['requirement'] }}</td>
                        <td>{{ $extra['price'] }}</td>
                        <td>{{ $extra['tutor_name'] }}</td>
                        <td>
                            <a href="{{ route('extrakurikuler.edit', $extra) }}"><button class="btn btn-info" id="edit" name="edit">EDIT</button></a>
                            <button class="btn btn-danger" id="delete" name="delete">DELETE</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot:content_here>


</x-frame>
