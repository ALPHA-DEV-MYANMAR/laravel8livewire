<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Contact Form</h3>
                        </div>
                        <div class="card-body">

                            <form wire:submit.prevent='submitForm'>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" wire:model="name">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" wire:model='email'>
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" wire:model='phone'>
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="msg" class="form-control" wire:model='msg'></textarea>
                                    @error('msg')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-success">submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .container{
        margin: 20px;
    }
</style>