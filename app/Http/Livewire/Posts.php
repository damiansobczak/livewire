<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts;

    /**
     * Form variables.
     */
    public $title;
    public $description;

    protected $rules = [
        'title' => 'required|min:6',
        'description' => 'required|min:6',
    ];

    public function submit()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->title = '';
        $this->description = '';

        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
