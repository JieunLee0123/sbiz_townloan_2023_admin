<?php
  
namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Post;
  
class Posts extends Component
{
    use WithFileUploads;
    public $posts, $title, $category, $body, $post_id;
    public $updateMode = false;
    public $param;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function mount($param)
    {
        $this->param = $param;

        // update
        if(session()->get('post')){
          $this->post_id = session()->get('post')->id;
          $this->category = session()->get('post')->category;
          $this->title = session()->get('post')->title;
          $this->body = session()->get('post')->body;
        }        

        // lists
        if($param === 'notice'){
          $this->posts = Post::all()->filter(function ($post, $key) {
              return $post->category === '공고';
          });
        } elseif($param === 'news'){
          $this->posts = Post::all()->filter(function ($post, $key) {
              return $post->category === '소식';
          });
        } else{
          $this->posts = Post::all();
        }
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        return view('livewire.posts');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->title = '';
        $this->category = '공고';
        $this->body = '';
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
        ]);

        Post::create($validatedDate);
        session()->flash('message', 'Post Created Successfully.');
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {        
        $post = Post::findOrFail($id);
        $this->title = $post->title;
        $this->category = $post->category;
        $this->body = $post->body;
  
        $this->updateMode = true;

        return redirect()->to('/update')->with( ['post' => $post] );
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
        ]);
  
        $post = Post::find($this->post_id);
        $post->update([
            'post_id' => $this->post_id,
            'category' => $this->category,
            'title' => $this->title,
            'body' => $this->body,
        ]);
  
        $this->updateMode = false;
        
        return redirect()->to('/notice');

        session()->flash('message', 'Post Updated Successfully.');
        $this->resetInputFields();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}