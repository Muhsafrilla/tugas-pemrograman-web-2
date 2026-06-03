<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Series</h5>
            <table class="table">
                <tr>
                    <th>Nama Series</th>
                    <td>{{ $series->nama_series }}</td>
                </tr>
                <tr>
                    <th>Tipe Series</th>
                    <td>{{ $series->tipe_series }}</td>
                </tr>
                <tr>
                    <th>Target Pengguna</th>
                    <td>{{ $series->target_pengguna }}</td>
                </tr>
                <tr>
                    <th>Tahun Rilis</th>
                    <td>{{ $series->tahun_rilis }}</td>
                </tr>
                <tr>
                    <th>Generasi</th>
                    <td>{{ $series->generasi }}</td>
                </tr>
                <tr>
                    <th>Brand</th>
                    <td>{{ $series->brand->nama_brand }}</td>
                </tr>
            </table>
            <a class="btn btn-warning" href="{{ route('series.edit', $series) }}" role="button">Edit</a>
            <a class="btn btn-secondary" href="{{ route('series.index') }}" role="button">Kembali</a>
        </div>
    </div>

</x-app>
