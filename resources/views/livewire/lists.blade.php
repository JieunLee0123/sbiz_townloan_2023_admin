<div>
  @if (session()->has('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
  @endif

  <table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th width="150px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->category }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>
            <button wire:click="edit({{ $post->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
