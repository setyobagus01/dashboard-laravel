<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use Illuminate\Http\Client\Request;
use Livewire\WithFileUploads;

class Courses extends Component
{

    use WithFileUploads;
    public $title;
    public $category;
    public $currentlesson;
    public $totallesson;
    public $img_url;

    protected $rules = [
            'title' => 'required',
            'category' => 'required',
            'totallesson' => 'required',
            'currentlesson' => 'required',
            'img_url' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',
    ];

    public function render()
    {
        return view('livewire.courses');
    }

    public function store()
    {
       
        $this->validate();

        
        $file = $this->img_url;
        $fileName = $file->getClientOriginalName();
        $this->img_url->storeAs('images', $fileName, 'public');

        $course = Course::create([
            'title' => $this->title,
            'img_url' => $fileName,
            'category' => $this->category,
            'totallesson' => $this->totallesson,
            'currentlesson' => $this->currentlesson,
            'imagename' => $this->img_url->getClientOriginalName()
        ]);

        $this->resetInput();

        dd($course);
        
        
    }   

    private function resetInput()
    {
        $this->title = null;
        $this->category = null;
        $this->totallesson = null;
        $this->currentlesson = null;
        $this->img_url = null;
    }
}
