<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-secondary mb-3" href="{{ route('brand.index') }}" role="button">← Kembali</a>

    <h5>Data Brand yang Dihapus</h5>

    @if ($brands->isEmpty())
        <div class="alert alert-info">Tidak ada data di trash.</div>
    @else
        <ul class="list-group">
            @foreach ($brands as $brand)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>
                        {{ $loop->iteration }}.
                        {{ $brand->nama_brand }} --
                        {{ $brand->negara_asal }} --
                        {{ $brand->tahun_berdiri }}
                    </span>
                    <span>
                        <form action="{{ route('brand.restore', $brand->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Restore</button>
                        </form>
                        <form action="{{ route('brand.force-delete', $brand->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus permanen?')">Force Delete</button>
                        </form>
                    </span>
                </li>
            @endforeach
        </ul>
    @endif

</x-app>
