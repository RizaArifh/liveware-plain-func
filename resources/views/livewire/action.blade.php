<div>
    <button type="button" wire:click="addTwoNumber(20,30)" >Sum</button> <br>

    <textarea name="" id="" cols="30" rows="5" wire:keydown.enter="DisplayMessage($event.target.value)"></textarea>

<form wire:submit.prevent="getSum">
    <label for="">Enter Number to sum</label> <br>
    <input type="text" name="num1" wire:model="num1" >
    <input type="text" name="num2" wire:model="num2">
    <button type="submit">Submit</button>
</form>

<hr>
    Sum : {{ $sum }}
<br>
    Message : {{ $message }}
</div>
