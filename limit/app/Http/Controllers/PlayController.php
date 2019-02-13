<?php

namespace App\Http\Controllers;

use App\Forms\PlayForm;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    public function index(FormBuilder $formBuilder){
        $form = $formBuilder->create(PlayForm::class);
        return view('play', compact('form'));
    }
}
