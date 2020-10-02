<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeboldalKeszitesController extends Controller
{
    public function index() {
        $meta_title = "Weboldal Készítés Olcsón | Céges Honlapkészítés";
        $meta_description = "Céges weblap készítés, honlapkészítés megengedhető áron, rövid határidővel. Mobil barát megjelenés, kereső optimalizált oldalak, közösségi média.";
        return view('weboldalkeszites', compact('meta_title', 'meta_description'));
    }
}
