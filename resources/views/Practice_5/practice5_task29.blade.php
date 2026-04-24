<x-layout>
    <x-slot:title>
        страница
    </x-slot>

<!-- 29.	
Дан массив с именами юзеров. Если в массиве есть элементы,
то выведите каждый элемент в своем абзаце. Если элементов нет, выведите сообщение об этом.
-->






<h3>Результат оброботки массива</h3>
<table>
    <thead>
        <tr style = "background-color: #bebebe;">
            @foreach ($massif as $index => $cell)
                <th style="padding: 10px;"> {{  $index }} </th> 
            @endforeach
        </tr>
    </thead>

    <tbody>
        <tr style = "background-color: aliceblue;">
            @foreach ($massif as $cell)
                <td style="padding: 10px;"
                >{{ $cell }}</td> 
            @endforeach 
        </tr>
    </tbody>
</table>





</x-loyaut>