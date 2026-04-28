<x-layout>
    <x-slot:title>
        страница
    </x-slot>

<!-- 30.
Из действия в представление передается массив со строками. 
Выведите элементы этого массива в виде списка ul. 
Сделайте так, чтобы перед значением элемента, выводился еще и порядковый номер итерации, начиная с 0.
-->






    <h3>Результат оброботки массива</h3>
{{-- <table>
    <thead>
        <tr style = "background-color: #bebebe;">
            @foreach ($melon as $index => $cell)
                <th style="padding: 10px;"> {{  $index }} </th> 
            @endforeach
        </tr>
    </thead>

    <tbody>
        <tr style = "background-color: aliceblue;">
            @foreach ($melon as $cell)
                <td style="padding: 10px;"
                >{{ $cell }}</td> 
            @endforeach 
        </tr>
    </tbody>
</table>  --}}

<ul>
     @foreach ($melon as $index => $cell)
        <th style="padding: 10px;"> {{  $index }} </th>
        <td style="padding: 10px;">{{ $cell }}</td> 
        <br>
    @endforeach 
</ul>



</x-loyaut>