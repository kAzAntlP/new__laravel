<x-layout>
    <x-slot:title>
        страница
    </x-slot>

<!-- 13.	С помощью комментариев Blade закомментируйте
 какую-нибудь часть кода представления. -->





<p>

@isset($city, $month, $day)
    {{ $city }}
    {{-- $month --}}
    {{ $day }}
@else
    Год: {{ $year ?? now()->year }}<br>
    Месяц: {{-- $month ?? now()->month --}}<br>
    День: {{ $day ?? now()->day }}
@endisset
    
</p>
</x-loyaut>