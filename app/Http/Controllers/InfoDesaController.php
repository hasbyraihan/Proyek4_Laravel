<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoDesaController extends Controller
{
    //
    private $database;

    public function __construct()
    {
        $this->database = \App\Services\FirebaseService::connect();
    }


    public function ReadPopulasi()
    {
        return response()->json($this->database->getReference('info-desa/populasi/')->getValue());
    }

    public function ReadKebutuhanRW()
    {
        return response()->json($this->database->getReference('info-desa/kebutuhan-rw/')->getValue());
    }
}
