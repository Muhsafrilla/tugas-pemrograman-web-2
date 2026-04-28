<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <ul class="list-group">
        @foreach ($laptops as $laptop)
            <li class="list-group-item">
                {{ $loop->iteration }}.
                {{ $laptop->merek }} --
                {{ $laptop->tipe }} --
                {{ $laptop->processor }} --
                {{ $laptop->ram }} --
                {{ $laptop->harga }}
            </li>
        @endforeach
    </ul>

</x-app>
