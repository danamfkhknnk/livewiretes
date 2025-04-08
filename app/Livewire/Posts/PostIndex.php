<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class PostIndex extends Component
{
    public function render()
    {
        return view('livewire.posts.post-index',[
            'posts' => auth()->user()->posts()->latest()->get(),
        ]);
    }

    public function cleanSession(){
        session()->forget(keys: 'success');
    }

    public function deletePost($id){
        $post = Post::findOrFail($id);
        Storage::disk('public')->delete($post->image);
        $post->delete();

        Session::flash('message','Data Berhasil Dihapus');
        return redirect()->to('/posts');
    }
}