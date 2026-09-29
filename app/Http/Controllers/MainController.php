<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $array = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => '1.jpg'],
        ['id' => 2, 'title' => 'продукт 2', 'price' => 500, 'path' => '2.jpg'],
        ['id' => 3, 'title' => 'продукт 3', 'price' => 500, 'path' => '3.jpg'],
        ['id' => 4, 'title' => 'продукт 4', 'price' => 500, 'path' => '4.jpg'],
        ['id' => 5, 'title' => 'продукт 5', 'price' => 500, 'path' => '5.jpg']
    ];

    public function showIndex() {
        return view('home');
    }

    public function showArray() {
        $array = $this->array;
        return view('array', compact('array'));
    }

    public function shuffleArray() {

    }

    public function sortArray() {
        //$array = sort($this->array, SORT_ASC);
        //return view('array', compact('array'));
    }

    public function filterArray() {

    }
}
