<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('brand.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($brands as $brand)
            <li class="list-group-item">
                {{ $loop->iteration }}.
                {{ $brand->nama_brand }} --
                {{ $brand->negara_asal }} --
                {{ $brand->tahun_berdiri }}
                <a class="btn btn-warning btn-sm" href="{{ route('brand.edit', $brand) }}" role="button">Edit</a>
                <form action="{{ route('brand.destroy', $brand) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda Yakin')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

</x-app>
