<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Categorypost;

class Navigation extends Component
{
    public function render()
    {

        $categorypost = Categorypost::all();

        return view('livewire.navigation', compact('categorypost'));
    }
}
