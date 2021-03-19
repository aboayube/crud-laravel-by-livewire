<div>
    <section>
        <div class="container">
            <div class="row">
                @if(session()->has('message'))
<div class="alert alert-success">{{session('message')}}</div>
                @endif
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>File Upload</h3>
                        </div>
                        <div class="card-body">
                            <form id="form-upload" wire:submit.prevent="fileUpload()" enctype="multipart/form-data">
                            <div class="form-grop">
                                <label for="title">title</label>
                                <input type="text" class="form-control" name="title" wire:model="title">
                            </div>
                            <div class="form-grop">
                                <label for="filename">filename</label>
                                <input type="file" class="form-control" wire:model="filename" name="file">
                            </div>
                            <button class="btn btn-success float-right  ">add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
