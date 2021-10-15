<div>
    Title : <input type="text" wire:model="title">
    Name : <input type="text" wire:model="name"> 

    <br>

    <hr>

    <h1>LifeCycle Hook</h1>

    @foreach ($infos as $info)
        {{ $info }} <br>
    @endforeach
</div>
