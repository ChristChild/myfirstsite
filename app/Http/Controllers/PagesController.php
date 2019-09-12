<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contact()
    {
      $tasks =[
        'Go to church',
        'Go to the store',
        'Go to the movies'
      ];
    //    return view('contact', [
      //    'tasks' => $tasks,
    //      'foo' => 'foobar'
      //  ]);

        return view('/contact')->withTasks($tasks)->withfoo('JC');
    }
}
