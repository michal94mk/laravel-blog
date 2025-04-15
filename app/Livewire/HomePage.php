<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Layout;
use App\Models\Post;

class HomePage extends Component
{
    #[Url]
    public ?int $selectedPostId = null;

    // Go to a specific post details page using SPA navigation
    public function viewPost($postId)
    {
        return $this->redirect(route('post.show', ['postId' => $postId]), navigate: true);
    }

    // Render the view for the home page
    #[Layout('layouts.blog')]
    public function render()
    {
        $posts = Post::withCount('comments')->latest()->take(5)->get();

        return view('livewire.home-page', compact('posts'));
    }
}