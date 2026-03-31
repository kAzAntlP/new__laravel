<x-layout>
    <x-slot:title>
        страница
    </x-slot>

     
<?php
    // $age = 17; 
    
    // if ($age >= 18 ) {
    //     $result = true;
    // } else {
    //     $result = false;
    // }
    // var_dump($result)
?>



@if($num > 0)
    больше нуля 
@elseif($num == 0)
    ноль
@else
    мньше нуля
@endif



    
</x-loyaut>