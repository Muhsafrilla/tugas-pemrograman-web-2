<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Brand</h5>
            <table class="table">
                <tr>
                    <th>Nama Brand</th>
                    <td>{{ $brand->nama_brand }}</td>
                </tr>
                <tr>
                    <th>Negara Asal</th>
                    <td>{{ $brand->negara_asal }}</td>
                </tr>
                <tr>
                    <th>Tahun Berdiri</th>
                    <td>{{ $brand->tahun_berdiri }}</td>
                </tr>
            </table>
            <a class="btn btn-warning" href="{{ route('brand.edit', $brand) }}" role="button">Edit</a>
            <a class="btn btn-secondary" href="{{ route('brand.index') }}" role="button">Kembali</a>
        </div>
    </div>

</x-app>
