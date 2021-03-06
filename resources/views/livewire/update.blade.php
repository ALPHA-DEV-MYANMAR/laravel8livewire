
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="id" wire:model='ids'>
                    <div class="form-group">
                        <div>
                            <label for="firstname">First Name</label>
                            <input type="text" name="firstname" class="form-control" wire:model='firstname'>
                        </div>

                        <div>
                            <label for="lastname">Last Name</label>
                            <input type="text" name="lastname" class="form-control" wire:model='lastname'>
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" wire:model='email'>
                        </div>

                        <div>
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" wire:model='phone'>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click.prevent='update()'>Edit Student</button>
            </div>
        </div>
    </div>
</div>
