<div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form >
            <input type="hidden" name="id" wire:model="ids">
            <div class="form-group">
                <label for="firstname">firstname</label>
             <input type="text" name="firstname" class="form-control" wire:model="firstname">
             @error('firstname')
                 <span class="text-danger">{{$message}}</span>
             @enderror
            </div>
            <div class="form-group">
                <label for="lastname">lastname</label>
             <input type="text" name="lastname" class="form-control" wire:model="lastname">
             @error('lastname')
             <span class="text-danger">{{$message}}</span>
         @enderror  </div>
            <div class="form-group">
                <label for="email">email</label>
             <input type="text" name="email" class="form-control" wire:model="email">
             @error('email')
             <span class="text-danger">{{$message}}</span>
         @enderror </div>
            <div class="form-group">
                <label for="phone">phone</label>
             <input type="text" name="phone" class="form-control" wire:model="phone">
             @error('phone')
             <span class="text-danger">{{$message}}</span>
         @enderror </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="update()">Add Student</button>
        </div>
      </div>
    </div>
  </div>