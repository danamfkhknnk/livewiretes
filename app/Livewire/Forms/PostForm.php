<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    public $title = '';
    public $image;
    public $content = '';

    public function store(){
        $data = $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $data['slug'] = str()->slug($data['title']);
        if($this->image) {
            $data['image'] = $this->image->store('posts','public');
        }

        auth()->user()->posts()->create($data);
        $this->reset();
    }
}