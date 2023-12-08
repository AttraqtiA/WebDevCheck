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
                    <th scope="col">Name</th>
                    <th scope="col">Path</th>
                    <th scope="col">Rarity</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($character_list as $chara)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="row text-center">
                            <img style="width: 75px;" src="<?= 'images/' . $chara['name'] . '.webp' ?>"
                            alt="Foto KTP Kewarganegaraan Belobog">
                            <a href="character_details/{{ $chara }}" class="col mt-3">{{ $chara['name'] }}</a>
                        </td>
                        <td>{{ $chara['path'] }}</td>
                        <td>{{ $chara['rarity'] }}</td>

                        <td>
                            @if ($loop->first)
                                My very first Character
                            @elseif ($loop->last)
                                My very last Character
                            @else
                                My {{ $loop->iteration }}th Character
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot:content_here>


</x-frame>
