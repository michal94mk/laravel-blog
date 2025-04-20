<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

class PostsCreate extends Component
{
    use WithFileUploads;
    
    public $title;
    public $slug;
    public $excerpt;
    public $content;
    public $status = 'draft';
    public $category_id;
    public $image;
    
    protected $rules = [
        'title' => 'required|min:3',
        'slug' => 'required|unique:posts',
        'excerpt' => 'nullable|max:500',
        'content' => 'required',
        'status' => 'required|in:published,draft',
        'category_id' => 'nullable|exists:categories,id',
        'image' => 'nullable|image|max:1024'
    ];
    
    public function updatedTitle($value)
    {
        $this->slug = Str::slug($value);
    }
    
    public function store()
    {
        $this->validate();
        
        try {
            $post = new Post();
            $post->title = $this->title;
            $post->slug = $this->slug;
            $post->excerpt = $this->excerpt;
            $post->content = $this->content;
            $post->status = $this->status;
            $post->category_id = $this->category_id;
            $post->user_id = Auth::id();
            
            if ($this->image) {
                $imagePath = $this->image->store('posts', 'public');
                $post->image = $imagePath;
            }
            
            $post->save();
            
            session()->flash('success', 'Post został pomyślnie utworzony.');
            return redirect()->route('admin.posts.index');
        } catch (\Exception $e) {
            session()->flash('error', 'Wystąpił błąd podczas tworzenia posta: ' . $e->getMessage());
        }
    }
    
    #[Layout('layouts.admin', ['header' => 'Dodaj nowy post'])]
    public function render()
    {
        return view('livewire.admin.posts-create', [
            'categories' => Category::orderBy('name')->get()
        ]);
    }
} 