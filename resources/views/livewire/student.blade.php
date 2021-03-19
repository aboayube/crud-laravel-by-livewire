<div>
    @include('livewire.create')
    @include('livewire.update')
<section>
    <style>
        nav svg{
            max-height: 20px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('message'))
<div class="alert alert-success">
    {{session('message')}}
</div>
                @endif
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>all Student<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                                Add new Student
                               </button></h3>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="search" wire:model="searchTerm">
                        </div>
                    </div>
                 
                   

                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>edit</th>
                            </tr>
                            @foreach ($students as $student)
                            <tr>
                                <th>{{$student->firstname}}</th>
                                <th>{{$student->lastname}}</th>
                                <th>{{$student->email}}</th>
                                <th>{{$student->phone}}</th>
                                <th>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#updateStudentModal" wire:click.prevent="edit({{$student->id}})">
                                        edit new Student
                                       </button>                                 
                             <button class="btn btn-danger" wire:click.prevent="delete({{$student->id}})">delete</button>
                                    </th>
                            </tr>  
                            @endforeach
                        </thead>
                    </table>
                    {{$students->links()}}
                </div>
            </div>
        </div> </div>
    </div>
</section>
</div>
