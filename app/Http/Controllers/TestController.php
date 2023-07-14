<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(): int
    {
        return 123;
    }

    public function  welcome(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('welcome');
    }

    public function newView(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('newView');
    }
}
