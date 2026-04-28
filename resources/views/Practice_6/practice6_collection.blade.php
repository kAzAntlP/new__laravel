<x-layout>
    <x-slot:title>
        страница
    </x-slot>

    <ul>

    @foreach ($buda->chunk(3) as $chunk)
    <div class="row">
        @foreach ($chunk as $product)
            <div class="col-xs-4">{{ $product->name }}</div>
        @endforeach
    </div>
@endforeach

    </ul>

</x-loyaut>