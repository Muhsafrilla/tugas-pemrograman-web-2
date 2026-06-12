<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('brand.create') }}" role="button">Create</a>
    <a class="btn btn-secondary mb-3" href="{{ route('brand.trash') }}" role="button">🗑 Trash</a>

    <form action="">
        <div class="row g-3 mb-3">
            <div class="col-md-8">
                <input type="text" class="form-control" id="keyword" name="keyword"
                    placeholder="search brand name ...">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </form>

    <ul class="list-group">
        @foreach ($brands as $brand)
            <li class="list-group-item">
                {{ $brands->firstItem() + $loop->index }}.
                {{ $brand->nama_brand }} --
                {{ $brand->negara_asal }} --
                {{ $brand->tahun_berdiri }} --
                {{ $brand->deskripsi ?? '-' }}
                <a class="btn btn-info btn-sm" href="{{ route('brand.show', $brand) }}" role="button">Detail</a>
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
    {{ $brands->links() }}

</x-app>
