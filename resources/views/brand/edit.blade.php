<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('brand.update', $brand->id) }}">
        @csrf
        @method('PUT') {{-- wajib ada untuk edit --}}
        <div class="mb-3">
            <label for="nama_brand" class="form-label">Nama Brand</label>
            <input type="text" class="form-control @error('nama_brand') is-invalid @enderror" id="nama_brand"
                name="nama_brand" value="{{ old('nama_brand', $brand->nama_brand) }}">
            @error('nama_brand')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="negara_asal" class="form-label">Negara Asal</label>
            <input type="text" class="form-control @error('negara_asal') is-invalid @enderror" id="negara_asal"
                name="negara_asal" value="{{ old('negara_asal', $brand->negara_asal) }}">
            @error('negara_asal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
            <input type="number" class="form-control @error('tahun_berdiri') is-invalid @enderror" id="tahun_berdiri"
                name="tahun_berdiri" value="{{ old('tahun_berdiri', $brand->tahun_berdiri) }}">
            @error('tahun_berdiri')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('brand.index') }}" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-app>
