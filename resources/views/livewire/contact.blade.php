<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    .<div class="card">

                        <div class="card-header">
                            Contact Form
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='submitForm'>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" class="form-control" type="text" name="name" wire:model='name'>
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="text" name="email" wire:model='email'>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input id="phone" class="form-control" type="text" name="phone" wire:model='phone'>
                                    @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Message</label>
                                    <textarea id="my-input" class="form-control" type="text" name="msg" wire:model="msg"></textarea>
                                    @error('msg')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <br>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
