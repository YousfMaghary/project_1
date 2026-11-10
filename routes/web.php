<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $name = 'yousf';
    $departments = [
        '01' => 'Tichnical',
        '02' => 'Financial',
        '03' => 'Sales ',
    ];
    //  return view ('about',['name'=>$name]);
    // return view('about')->with(key : 'name',value: $name);
    return view('about', compact('name', 'departments'));
});

Route::post('/about', function () {
    $name = $_POST ['name'];
    $departments = [
        '01' => 'Tichnical',
        '02' => 'Financial',
        '03' => 'Sales ',
    ];
    return view('about', compact('name'));
});


Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->get();
    return view('tasks', compact ('tasks')) ;
});
Route::post('/create', function () {
    $task_name = $_POST['name'];
    DB::table('tasks')->insert(['name' => $task_name]);
    return redirect('tasks');
});
