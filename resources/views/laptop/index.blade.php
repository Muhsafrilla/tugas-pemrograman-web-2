<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('laptop.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($laptops as $laptop)
            <li class="list-group-item">
                {{ $loop->iteration }}.
                {{ $laptop->merek }} --
                {{ $laptop->tipe }} --
                {{ $laptop->processor }} --
                {{ $laptop->ram }} --
                {{ $laptop->harga }}
                <a class="btn btn-warning btn-sm" href="{{ route('laptop.edit', $laptop) }}" role="button">Edit</a>
                <form action="{{ route('laptop.destroy', $laptop) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda Yakin')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

</x-app>
