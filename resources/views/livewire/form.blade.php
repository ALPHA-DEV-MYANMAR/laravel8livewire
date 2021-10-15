<div>
    Name: <br>
        <input type="text" wire:model="name">   

        <br>
        
        Message : <br>

        <textarea wire:model="message"></textarea>
        
        <br>

        Gather: <br>
        Male<input type="radio" wire:model="gather" value="male">
        Female<input type="radio" wire:model="gather" value="female">

        <br>

        Colors: <br>
        Red<input type="checkbox" value="Red" wire:model='colors'><br>
        Yellow<input type="checkbox" value="Yellow" wire:model='colors'><br>
        Green<input type="checkbox" value="Green" wire:model='colors'><br>

        Fruit: <br>
        <select wire:model='fruit'>
            <option value="">Select fruit</option>
            <option value="Apple">Apple</option>
            <option value="Mango">Mango</option>
            <option value="Banana">Banana</option>
        </select>

        <hr>
        Name : {{ $name }} <br>
        Message : {{ $message }} <br>
        Gather : {{ $gather }} <br>
        Color : @foreach ($colors as $color)
            {{ $color }}
        @endforeach

        <br>

        Fruit: {{ $fruit }}

</div>

