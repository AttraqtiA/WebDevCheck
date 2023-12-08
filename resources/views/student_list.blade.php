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
        <form action="/student_list" method="GET" class="form-inline w-25 d-flex gap-2">
            <input class="form_control" type="search" name="search" placeholder="search">
            <button type="submit" class="btn btn-outline-success">Search</button>
        </form>

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
                    <th scope="col">EXTRACURRICULAR ID</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($student_list as $student)
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

                        <td>{{ $student['extracurricular_id'] }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <br>

        <div>
            {{ $student_list->links() }}
        </div>

    </x-slot:content_here>


</x-frame>
