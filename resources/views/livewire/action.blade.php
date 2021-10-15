<div>
    <textarea wire:keydown.enter='message($event.target.value)'></textarea> <br>
    Message : {{ $value }} <br>
    Sun : {{ $sum }}

    <hr>

    <form wire:submit.prevent='getSun'>
        <input type="text" name="num1" wire:model='num1'>
        <input type="text" name="num2" wire:model='num2'>
        <button type="submit">Submit</button>
    </form>

</div>
