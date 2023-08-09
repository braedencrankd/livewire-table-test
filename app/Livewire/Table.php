<?php

namespace App\Livewire;

use Livewire\Component;

class Table extends Component
{

    public $movies = [];
    public $headings = [];
    public $data = [];

    public function mount()
    {
        $this->movies = \App\Models\Movie::all();
        $movie = $this->movies->first();

        $this->headings = array_keys($movie->toArray());

        // replace _ with space
        // captialize first letter of each word
        $this->headings = array_map(function ($heading) {
            return ucwords(str_replace('_', ' ', $heading));
        }, $this->headings);

        $data = [
            1 => ['name' => 'Name', 'completed' => 0],
            2 => ['name' => 'Name 2', 'completed' => 1],
        ];
    }

    public function render()
    {
        return view('livewire.table', [
            'movies' => $this->movies,
            'headings' => $this->headings,
            'data' => $this->data,
        ]);
    }
}