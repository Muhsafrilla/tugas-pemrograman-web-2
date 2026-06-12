<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('series.create') }}" role="button">Create</a>

    {{-- Search & Filter --}}
    <form action="{{ route('series.index') }}" method="GET">
        <div class="row g-3 mb-3">
            <div class="col-md-5">
                <input type="text" class="form-control" name="keyword" placeholder="Search series name ..."
                    value="{{ request('keyword') }}">
            </div>
            <div class="col-md-4">
                <select name="brand_id" class="form-select">
                    <option value="">-- Filter by Brand --</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ request('brand_id') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->nama_brand }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </form>

    <ul class="list-group">
        @foreach ($seriess as $series)
            <li class="list-group-item">
                {{ $seriess->firstItem() + $loop->index }}.
                {{ $series->nama_series }} --
                {{ $series->tipe_series }} --
                {{ $series->target_pengguna }} --
                {{ $series->tahun_rilis }} --
                {{ $series->generasi }} --
                <span class="badge bg-primary">{{ $series->brand->nama_brand }}</span>
                <a class="btn btn-info btn-sm" href="{{ route('series.show', $series) }}" role="button">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ route('series.edit', $series) }}" role="button">Edit</a>
                <form action="{{ route('series.destroy', $series) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda Yakin')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    {{ $seriess->links() }}

</x-app>
