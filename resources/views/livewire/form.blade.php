<div>

    <div class="form-group">
        <label for="name">Name :</label>
        <input id="name" class="form-control" type="text" wire:model.debounce.1000ms="name">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" class="form-control" type="text" wire:model="message"></textarea>
    </div>

    <div class="form-group">
        <label for="maritalstatus">Marital Status</label>
        Single <input id="maritalstatus1" class="form-control" type="radio" value="Single" wire:model="marital_status">
        Married <input id="maritalstatus2" class="form-control" type="radio" value="Married" wire:model="marital_status">
    </div>

    <div class="form-group">
        <label for="favcolor">Favorite Color</label>
        Red <input id="favcolor" class="form-control" type="checkbox" value="Red" wire:model="colors">
        Yellow <input id="favcolor" class="form-control" type="checkbox" value="Yellow" wire:model="colors">
        Green <input id="favcolor" class="form-control" type="checkbox" value="Green" wire:model="colors">
    </div>

    <div class="form-group">
        <label for="favfruit">Favorite Fruit</label>
        <select name="" id="favfruit" wire:model="fruit">
            <option value="">Select Fruit</option>
            <option value="Apple">Apple</option>
            <option value="Manngo">Manngo</option>
            <option value="Banana">Banana</option>
        </select>
    </div>



    <br><hr>
    inputed <br>
    Name : {{ $name }} <br>
    Message : {{ $message }}<br>
    Martial_status : {{ $marital_status }}<br>
    Favorite Color :
    @foreach ($colors as $color)
<li>{{ $color }}</li>
    @endforeach
    <br>
    Favorite Fruit : {{ $fruit }}<br>

</div>
