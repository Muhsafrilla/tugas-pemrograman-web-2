<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('series.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nama_series" class="form-label">Nama Series</label>
            <input type="text" class="form-control @error('nama_series') is-invalid @enderror" id="nama_series"
                name="nama_series" value="{{ old('nama_series') }}">
            @error('nama_series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tipe_series" class="form-label">Tipe Series</label>
            <input type="text" class="form-control @error('tipe_series') is-invalid @enderror" id="tipe_series"
                name="tipe_series" value="{{ old('tipe_series') }}">
            @error('tipe_series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="target_pengguna" class="form-label">Target Pengguna</label>
            <input type="text" class="form-control @error('target_pengguna') is-invalid @enderror"
                id="target_pengguna" name="target_pengguna" value="{{ old('target_pengguna') }}">
            @error('target_pengguna')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tahun_rilis" class="form-label">Tahun Rilis</label>
            <input type="number" class="form-control @error('tahun_rilis') is-invalid @enderror" id="tahun_rilis"
                name="tahun_rilis" value="{{ old('tahun_rilis') }}">
            @error('tahun_rilis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="generasi" class="form-label">Generasi</label>
            <input type="number" class="form-control @error('generasi') is-invalid @enderror" id="generasi"
                name="generasi" value="{{ old('generasi') }}">
            @error('generasi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="brand_id" class="form-label">Brand</label>
            <select class="form-select @error('brand_id') is-invalid @enderror" id="brand_id" name="brand_id">
                <option value="">-- Pilih Brand --</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                        {{ $brand->nama_brand }}
                    </option>
                @endforeach
            </select>
            @error('brand_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('series.index') }}" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
