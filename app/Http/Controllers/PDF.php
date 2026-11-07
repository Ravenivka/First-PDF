<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Spatie\LaravelPdf\Support\pdf;
use \Spatie\LaravelPdf\Enums\Orientation;
use Spatie\LaravelPdf\Enums\Format;


class PDF extends Controller
{
    public function print(){
        return pdf()
            ->view('index')
            ->name('index.pdf');
    }
    public function preview(){
        return view('diplom');
    }
    public function convert(){
        //$src=(realpath('img/diplom.jpg'));
        return pdf()
            ->view('diplom')
            ->orientation(orientation::Portrait)
            ->format(Format::A4)
            ->name('index.pdf');
    }

}
