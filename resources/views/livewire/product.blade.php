<div>
    Title : <input type="text" wire:model="title"> <br>

    Name : <input type="text" wire:model="name"> <br>
<hr>
    <h3>Title : {{ $title }}</h3>

    <h3>Name : {{ $name }}</h3>
    
<hr>
<h3>Lifecycle Hook Method</h3>
<br>
@foreach ($infos as $info)
{{ $info }}<br>
@endforeach

</div>
