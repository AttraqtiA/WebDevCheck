<x-frame>
    <x-slot:layout_pagetitle>
        {{ "Details : " . $selected_character['name'] }}
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
        <div class="mt-4 p-5 text-white">
            <button href="$_SERVER['HTTP_REFERER']">Done looking at the deets</button>

            <p>Character Path: {{ $selected_character['path'] }}</p>
            <p>Character Rarity: {{ $selected_character['rarity'] }}</p>
            <img src="https://hsr.honeyhunterworld.com/img/character/<?= str_replace(' ', '-', strtolower($selected_character['name'])) ?>-character_cut_in_front.webp" alt="Background Image" class="img-fluid mx-auto w-75">
        </div>



    </x-slot:content_here>


</x-frame>
