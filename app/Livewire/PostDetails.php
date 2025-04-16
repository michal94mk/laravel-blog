<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\Post;
use App\Models\Comment;
use App\Models\PostView;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class PostDetails extends Component
{
    use WithPagination;

    public int $postId;
    public $post;
    public string $newComment = '';

    public function mount($postId)
    {
        $this->postId = $postId;
        $this->post = Post::with('user')->findOrFail($this->postId);
        
        // Increment view count
        $this->post->increment('view_count');
        
        // Also track detailed view information
        $ip = Request::ip();
        $userAgent = Request::header('User-Agent');
        $userId = Auth::id() ?? null;
        
        // Optional: track unique views using IP + post combination
        $existingView = PostView::where('post_id', $this->postId)
            ->where('ip_address', $ip)
            ->whereDate('created_at', now()->toDateString())
            ->first();
            
        if (!$existingView) {
            PostView::create([
                'post_id' => $this->postId,
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'user_id' => $userId
            ]);
        }
    }

    public function addComment()
    {
        if (!Auth::check()) {
            session()->flash('error', 'Musisz być zalogowany, aby dodać komentarz.');
            return;
        }

        $this->validate([
            'newComment' => 'required|min:3|max:500'
        ]);

        Comment::create([
            'post_id' => $this->post->id,
            'user_id' => Auth::id(),
            'content' => $this->newComment,
        ]);

        $this->newComment = '';
        session()->flash('success', 'Komentarz został dodany.');
        $this->resetPage();
    }

    #[Layout('layouts.blog')]
    public function render()
    {
        return view('livewire.post-details', [
            'comments' => Comment::where('post_id', $this->post->id)
                ->with('user')
                ->latest()
                ->paginate(5)
        ]);
    }
}
