<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Counter extends Component
{

    /**
     * Initialize variables.
     */
    public $likes;
    public $post;

    /**
     * Fires when component mounts.
     *
     * @return void
     */
    public function mount(Post $post)
    {
        $this->post = $post;
        $this->likes = $post->likes;
    }

    /**
     * Increment function.
     *
     * @return void
     */
    public function increment()
    {
        $tmp = Post::findOrFail($this->post->id);
        if ($tmp) {
            $this->likes++;
            $tmp->update(['likes' => $this->likes]);
        }
    }

    /**
     * Decrement function.
     *
     * @return \Illuminate\Http\Response
     */
    public function decrement()
    {
        $tmp = Post::findOrFail($this->post->id);
        if ($tmp) {
            $this->likes--;
            $tmp->update(['likes' => $this->likes]);
        }
    }

    /**
     * Render component.
     *
     * @return view
     */
    public function render()
    {
        return view('livewire.counter');
    }
}
