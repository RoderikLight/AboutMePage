<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function card1Content()
    {
        return view('content.card1');
    }

    public function card2Content()
    {
        return view('content.card2');
    }

    public function card3Content()
    {
        return view('content.card3');
    }

    public function card4Content()
    {
        return view('content.card4');
    }

    public function card5Content()
    {
        return view('content.card5');
    }
}