<x-frame>
    {{-- <x-slot:layout_pagetitle>
        {{ "Details : " . $selected_extra['name'] }}
    </x-slot:layout_pagetitle> --}}

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
        {{ $selected_extra['name'] }}
    </x-slot:sectiontitle>
    <x-slot:menu_icon>
        {{ $menu_icon }}
    </x-slot:menu_icon>

    <x-slot:content_here>
        <div class="mt-4 p-5 text-white">

            <p>Requirements : {{ $selected_extra['requirements'] }}</p>
            <p>Price : {{ $selected_extra['price'] }}</p>
            <p>Tutor Name : {{ $selected_extra['tutor_name'] }}</p>

        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Nickname</th>
                    <th scope="col">Grade number</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Sosmed</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Province</th>
                    <th scope="col">Country</th>
                    <th scope="col">Postcode</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Notes</th>
                    {{-- <th scope="col">EXTRACURRICULAR ID</th> --}}

                </tr>
            </thead>

            <tbody>
                @foreach ($selected_extra->pivot as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="student_details/{{ $student['name'] }}" class="col mt-3">{{ $student['name'] }}</a></td>

                        <td>{{ $student['nickname'] }}</td>
                        <td>{{ $student['grade_number'] }}</td>
                        <td>{{ $student['phone'] }}</td>
                        <td>{{ $student['sosmed'] }}</td>
                        <td>{{ $student['email'] }}</td>
                        <td>{{ $student['password'] }}</td>
                        <td>{{ $student['gender'] }}</td>
                        <td>{{ $student['birthdate'] }}</td>
                        <td>{{ $student['nationality'] }}</td>
                        <td>{{ $student['address'] }}</td>
                        <td>{{ $student['city'] }}</td>
                        <td>{{ $student['province'] }}</td>
                        <td>{{ $student['country'] }}</td>
                        <td>{{ $student['postcode'] }}</td>
                        <td><img src={{ $student['photo'] }}></td>
                        <td>{{ $student['notes'] }}</td>

                        {{-- <td>{{ $student['extracurricular_id'] }}</td> --}}

                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot:content_here>


</x-frame>
