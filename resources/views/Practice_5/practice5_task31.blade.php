<x-layout>
    <x-slot:title>
        страница
    </x-slot>

<!-- 31.	
Модифицируйте предыдущую задачу так, чтобы порядковый номер итерации начинался с 1.
-->



<ul>
     @foreach ($melon as $index => $cell)
        <th style="padding: 10px;"> {{ $index }} </th>
        <td style="padding: 10px;">{{ $cell }}</td> 
        <br>
    @endforeach 
</ul>



</x-loyaut>