<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Post;
use Livewire\Component;

class DashboardIndex extends Component
{
    public $hasPosts = false;

    public function getPostsProperty()
    {
        return Post::query()
            ->select('id', 'user_id', 'category_id', 'title', 'body', 'featured_image', 'likes', 'dislikes')
            ->with('categories:id,name')
            ->with('user:id,name,profile_photo_path')
            ->get();

    }

    public function render()
    {
        $posts = Post::query()
            ->where('user_id',auth()->user()->id)
            ->orderBy('likes','desc')
            ->get();

        if(sizeof($posts) > 0)
        {
            ray('true');
            $this->hasPosts = true;
        } else {
            ray('false');
        }

        return view('livewire.Dashboard.dashboard-index', ['posts' => $posts]);
    }

    public function toProfile()
    {
        return redirect()->route('profile.show');
    }
}
