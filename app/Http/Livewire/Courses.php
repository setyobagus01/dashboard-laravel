<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class Courses extends Component
{
    public function render()
    {
        return view('livewire.courses', [
            'courses' => Course::latest()->get()
        ]);
    }
}
