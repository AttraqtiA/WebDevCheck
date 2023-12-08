<x-frame>
    <x-slot:layout_pagetitle>
        "Coba-coba"
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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">CODE</th>
                    <th scope="col">PROJECT</th>
                    <th scope="col">SEMESTER</th>
                    <th scope="col">PROJECT</th>
                    <th scope="col">DESCRIPTION</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($projects as $pro)
                    @if ($loop->even)
                        @php($semester = 'EVEN')
                    @else
                        @php($semester = 'ODD')
                    @endif
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $pro['code'] }}</td>
                        <td>
                            <a href="showproject/{{ $pro['code'] }}">
                                {{ $pro['title'] }}
                            </a>
                        </td>
                        <td>{{ $semester }}</td>
                        <td>{{ $pro['course'] }}</td>
                        <td>
                            @if ($loop->first)
                                My Very FIRST Project
                            @elseif ($loop->last)
                                My LAST Project
                            @else
                                My {{ $loop->iteration }}th Project
                            @endif ( )
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot:content_here>

</x-frame>
