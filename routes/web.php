<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('home');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/jobs', function (){
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});





Route::get('/jobs/{id}', function($id){

    $jobs = [
        [
            'id' => '1',
            'title' => 'Director',
            'salary' => '$40,000'
        ],
        [
            'id' => '2',
            'title' => 'Programmer',
            'salary' => '$10,000'
        ],
        [
            'id' => '3',
            'title' => 'Cricketer',
            'salary' => '$50,000'
        ],
        [
            'id' => '4',
            'title' => 'Engineer',
            'salary' => '$40,000'
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function(){
    return view('contact');
});