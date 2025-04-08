<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class PostCreate extends Component
{
    use WithFileUploads;
    public PostForm $form;

    public function savePost(){
        $this->form->store();

        Session::flash('message','Data Berhasil Ditambah');
        return redirect()->to('/posts');
    }

    public function render()
    {
        return view('livewire.posts.post-create');
    }

}
