<x-layout>
    <x-slot:title>
        страница
    </x-slot>

<!-- 26.	27.	Передайте из действия в представление массив с работниками:

Выведите этот массив в виде списка ul.
-->






<h3>Результат оброботки массива</h3>
<table>
    <thead>
        <tr style = "background-color: #bebebe;">
            @foreach ($massif[0] as $index => $cell)
                <th style="padding: 10px;"> {{  $index }} </th> 
            @endforeach
        </tr>
    </thead>

    <tbody>
        <tr style = "background-color: aliceblue;">
            @foreach ($massif[0] as $cell)
                <td style="padding: 10px;"
                >{{ $cell }}</td> 
            @endforeach 
        </tr>
        <tr style = "background-color: aliceblue;">
            @foreach ($massif[1] as $cell)
                <td style="padding: 10px;"
                >{{ $cell }}</td> 
            @endforeach 
        </tr>
        <tr style = "background-color: aliceblue;">
            @foreach ($massif[2] as $cell)
                <td style="
                padding: 10px;
                "
                >{{ $cell }}</td> 
            @endforeach 
        </tr>

    </tbody>
</table>


<!-- <ul>
    @foreach ($massif as $employee)
        <li>
            {{ $employee['name'] }} {{ $employee['surname'] }} — зарплата: {{ $employee['salary'] }} руб.
        </li>
    @endforeach
</ul> -->



</x-loyaut>