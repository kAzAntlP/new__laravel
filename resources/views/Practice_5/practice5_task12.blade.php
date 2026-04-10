<x-layout>
    <x-slot:title>
        страница
    </x-slot>

<!-- 11.12.	Пусть в переменной хранится строка с тегами, например:
<?php
	// $str = '<b>text</b>';
?>
Выведите эту строку на экран так, чтобы теги выполнили свое действие (то есть чтобы в данном случае текст стал жирным). -->





<p>

@isset($city, $month, $day)
    {{ $city }}
    {{ $month }}
    {{ $day }}
@else
    Год: {{ $year ?? now()->year }}<br>
    Месяц: {{ $month ?? now()->month }}<br>
    День: {{ $day ?? now()->day }}
@endisset
    
</p>
</x-loyaut>