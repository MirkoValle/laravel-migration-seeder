<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;


class TrainController extends Controller
{
    //
    public function index(){

        $trains = train::where('Orario_di_partenza', '2024-07-18' )->get();
        return view('pages.home', compact('trains'));
    }
}