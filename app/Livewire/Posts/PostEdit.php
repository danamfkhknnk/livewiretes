<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

class PostEdit extends Component
{

    use WithFileUploads;
    public PostForm $form;


    public function mount(Post $post){
        $this->form->setPost($post);
    }

    public function updatePost(){
        $this->form->update();

        Session::flash('message','Data Berhasil diedit');
        return redirect()->to('/posts');
    }

    public function render()
    {
        return view('livewire.posts.post-edit');
    }
}
