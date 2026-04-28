<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('laptop.update', $laptop) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="merek" class="form-label">Merek</label>
            <input type="text" class="form-control @error('merek') is-invalid @enderror" id="merek" name="merek"
                value="{{ old('merek', $laptop->merek) }}">
            @error('merek')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control @error('tipe') is-invalid @enderror" id="tipe" name="tipe"
                value="{{ old('tipe', $laptop->tipe) }}">
            @error('tipe')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="processor" class="form-label">Processor</label>
            <input type="text" class="form-control @error('processor') is-invalid @enderror"id="processor"
                name="processor" value="{{ old('processor', $laptop->processor) }}">
            @error('processor')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="ram" class="form-label">RAM</label>
            <input type="number" class="form-control @error('ram') is-invalid @enderror" id="ram" name="ram"
                value="{{ old('ram', $laptop->ram) }}">
            @error('ram')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga"
                name="harga"value="{{ old('harga', $laptop->harga) }}">
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <a class="btn btn-warning" href="{{ route('laptop.index') }}" role="button">Cancel</a>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
