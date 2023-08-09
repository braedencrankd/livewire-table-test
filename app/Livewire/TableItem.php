<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;

class TableItem extends Component
{
    public $movie;
    public $title;

    public function mount($movieId = null)
    {
        $this->movie = Movie::find($movieId);
        $this->title = $this->movie->title;
    }

    public function render()
    {
        return view('livewire.table-item', [
            'movie' => $this->movie,
            'title' => $this->title,
        ]);
    }

    public function updated($name, $value)
    {
        $this->movie->update([
            $name => $value,
        ]);
    }
}