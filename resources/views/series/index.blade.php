<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('series.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($seriess as $series)
            <li class="list-group-item">
                {{ $loop->iteration }}.
                {{ $series->nama_series }} --
                {{ $series->tipe_series }} --
                {{ $series->target_pengguna }} --
                {{ $series->tahun_rilis }} --
                {{ $series->brand->nama_brand }} --
                {{ $series->generasi }}
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

</x-app>
