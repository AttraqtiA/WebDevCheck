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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Student</th>
                    <th scope="col">Extracurricular</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($relation_list as $relation)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $relation->student->name }}</td>

                        <td>
                            <a href="extrakurikuler_details/{{ $relation['id'] }}" class="col mt-3">{{ $relation->extracurricular->name }}</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot:content_here>


</x-frame>
