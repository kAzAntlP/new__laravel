<x-layout>
    <x-slot:title>
        страница
    </x-slot>

<!--19.	Передайте из действия в представление массив с числами.
Выведите этот массив в виде списка ul.-->






    <h3>Результат оброботки массива</h3>
    
<ul>
    <p>Массив в спске ul</p>
    @foreach ($nums as $number)
        <li>{{ $number }}</li>
    @endforeach
</ul>
  

</x-loyaut>