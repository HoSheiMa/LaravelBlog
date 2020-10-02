<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebshopKeszitesController extends Controller
{
    public function index() {
        $meta_title = "Webáruház készítés olcsón";
        $meta_description = "";
        return view('webshopkeszites', compact('meta_title', 'meta_description'));
    }
}
