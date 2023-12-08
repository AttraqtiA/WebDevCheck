<x-frame>

    <x-slot:content_here>

        <div class="container mt-5">
            <form action="{{ route('extrakurikuler.store') }}" method="GET">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="requirements" class="form-label">Requirements</label>
                    <input type="text" class="form-control" id="requirements" name="requirements"
                        placeholder="Requirements">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                </div>
                <div class="mb-3">
                    <label for="tutor_name" class="form-label">Tutor Name</label>
                    <input type="text" class="form-control" id="tutor_name" name="tutor_name"
                        placeholder="Tutor Name">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </x-slot:content_here>

</x-frame>
