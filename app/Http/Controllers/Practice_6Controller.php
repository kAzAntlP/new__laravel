<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Collection;

// task all
class Practice_6Controller extends Collection
{
     public function show()
    {
        $all = collect([1, 2, 3])->all();

        return view('Practice_6.practice6_all', ['buda' => $all]);
    }
}