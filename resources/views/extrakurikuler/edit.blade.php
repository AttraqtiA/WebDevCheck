<x-frame>

    <x-slot:content_here>

        <div class="container mt-5">
            <form action="{{ route('extrakurikuler.update') }}" method="GET">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $extraEdit->title }}">
                </div>
                <div class="mb-3">
                    <label for="requirements" class="form-label">Requirements</label>
                    <input type="text" class="form-control" id="requirements" name="requirements"
                        placeholder="Requirements" value="{{ $extraEdit->requirements }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="{{ $extraEdit->price }}">
                </div>
                <div class="mb-3">
                    <label for="tutor_name" class="form-label">Tutor Name</label>
                    <input type="text" class="form-control" id="tutor_name" name="tutor_name"
                        placeholder="Tutor Name" value="{{ $extraEdit->tutor_name }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </x-slot:content_here>

</x-frame>
