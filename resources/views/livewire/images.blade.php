<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Upload images</h4>
                        </div>
                        <div class="card-body">
                            <form id="uploaded-images"  wire:submit.prevent="uploadImages()" enctype="multipart/form-data">
                            <div class="form-grop">
                                <label for="imags">imgs</label>
                                <input type="file" name="images" class="form-control" wire:model="images" multiple>
                            </div>
                            <button class="btn btn-success float-right">upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
