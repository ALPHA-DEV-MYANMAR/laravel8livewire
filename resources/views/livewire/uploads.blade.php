<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">

                    <div class="card">
                        <div class="card-header">
                            <h1>File Upload</h1>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='fileUpload' id="form-upload" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" wire:model="title">
                                </div>
                                <div class="form-group">
                                    <label for="filename">File</label>
                                    <input type="file" name="filename" class="form-control" wire:model="filename">
                                </div>
                                <br>
                                <button type="submit"  class="btn btn-success btn-sm">submit</button>
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
        margin-top: 50px;
    }
</style>
