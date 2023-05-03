<div>
    @if($param === 'create' || $param === null)
        @include('livewire.create')
    @elseif($param === 'notice')  
        @include('livewire.lists')
    @elseif($param === 'news') 
        @include('livewire.lists')
    @elseif($param === 'update') 
        @include('livewire.update')
    @endif
</div>
