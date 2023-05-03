<form>
    <input type="hidden" wire:model="post_id">
    
    <div class="form-group">
        <label for="category">Category</label>
        <select name="" class="form-control" id="category" wire:model="category">
          <option value="공고">공고</option>
          <option value="소식">소식</option>
        </select>
        @error('category') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter Title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="body">Body:</label>
        <textarea type="text" class="form-control" id="body" wire:model="body" placeholder="Enter Body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>