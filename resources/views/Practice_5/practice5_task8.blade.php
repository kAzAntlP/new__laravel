<x-layout>
    <x-slot:title>
        страница
    </x-slot>


    <p> массив = {{ $arr[0]}}.
    {{ $arr[1]}} .
    {{ $arr[2]}} .
    {{ $arr[3]}} .
    {{ $arr[4]}} </p>
    <p>Количество элементов массива = {{ count($arr)}}</p> 

</x-loyaut>