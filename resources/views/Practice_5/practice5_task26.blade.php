<x-layout>
    <x-slot:title>
        страница
    </x-slot>

<!-- 26.	Передайте из действия в представление двухмерный массив с числами.
Выведите его в виде HTML таблицы.-->






<h3>Результат оброботки массива</h3>
<table border="1" style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            @foreach ($date[0] as $index => $cell)
                <th style="padding: 8px; text-align: left;">Колонка {{ $index + 1 }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($date as $row)
            <tr>
                @foreach ($row as $cell)
                    <td style="padding: 8px; border: 1px solid #ddd;">{{ $cell }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>




</x-loyaut>