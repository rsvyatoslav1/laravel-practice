<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $array = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 1500, 'path' => '1.jpg'],
        ['id' => 2, 'title' => 'продукт 2', 'price' => 500, 'path' => '2.jpg'],
        ['id' => 3, 'title' => 'продукт 3', 'price' => 5000, 'path' => '3.jpg'],
        ['id' => 4, 'title' => 'продукт 4', 'price' => 300, 'path' => '4.jpg'],
        ['id' => 5, 'title' => 'продукт 5', 'price' => 700, 'path' => '5.jpg']
    ];

    public function showIndex() {
        return view('home');
    }

    public function showArray() {
        $array = $this->array;
        return view('array', compact('array'));
    }

    public function shuffleArray() {
        $array = $this->array;
        shuffle($array);
        return view('array', ['array' => $array]);
    }

    public function sortArray() {
        $array = $this->array;

        $count = count($array);
        for ($i = 0; $i < $count - 1; $i++) {
            for ($j = 0; $j < $count - $i - 1; $j++) {
                if ($array[$j]['price'] > $array[$j + 1]['price']) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }

        return view('array', ['array' => $array]);
    }

    public function filterArray() {
        $filteredArray = [];
        foreach ($this->array as $item) {
            if ($item['price'] > 1000) {
                $filteredArray[] = $item;
            }
        }

        return view('array', ['array' => $filteredArray]);
    }
}
