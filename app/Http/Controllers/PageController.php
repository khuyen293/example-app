<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function home() {
        return view('home');
    }

    public function product() {
        return view('product');
    }
}