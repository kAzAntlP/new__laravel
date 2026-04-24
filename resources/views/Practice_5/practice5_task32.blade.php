<x-layout>
    <x-slot:title>
        страница
    </x-slot>

<!-- 32.
Модифицируйте предыдущую задачу так,
чтобы для первой li добавлялся CSS класс first, а для последней - класс last.
-->





<ul>
    @foreach ($melon as $index => $item)
        <li class={{ $index === 0 ? 'first' : '' }}{{ $index === count($items) - 1 ? ' last' : '' }}>
            {{ $index }}. {{ $item }}
        </li>
    @endforeach
</ul>



</x-loyaut>