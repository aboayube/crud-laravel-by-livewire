<?php

namespace App\Http\Livewire;
use App\Models\Students;
use Livewire\Component;
use Livewire\WithPagination;

class Student extends Component
{
    public $ids;
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $searchTerm;

    public function resetInputFields(){
        $this->firstname='';
        $this->lastname='';
        $this->phone='';
        $this->email='';
    }
    public function store(){
        $validatedData = $this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'phone'=>'required',
            'email'=>'required|email',

        ]);
        Students::create($validatedData);
        session()->flash('message','student created successfly');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }

    public function edit($id){
        $student=Students::where('id',$id)->first();
        $this->ids=$student->id;
        $this->firstname=$student->firstname;
        $this->lastname=$student->lastname;
        $this->phone=$student->phone;
        $this->email=$student->email;
    }
    public function update(){
        $this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
        ]);
        if($this->ids){
           $student=Students::find($this->ids);
           $student->update([
               'firstname'=>$this->firstname,
               'lastname'=>$this->lastname,
               'email'=>$this->email,
               'phone'=>$this->phone,
           ]);
           session()->flash('message','Student Update success');
           $this->resetInputFields();
           $this->emit('studentUpdate');
        }
    }

    public function delete($id){
        if($id){
            Students::where('id',$id)->delete();
            session()->flash('message','student delete');
        }
    }


    public function render()
    {
        $searchTerm='%'.$this->searchTerm.'%';
$students=Students::where('firstname','LIKE',$searchTerm)
        ->OrWhere('lastname','LIKE',$searchTerm)
        ->OrWhere('phone','LIKE',$searchTerm)
        ->OrWhere('email','LIKE',$searchTerm)
        ->orderBy('id','DESC')->paginate(3);
        return view('livewire.student',['students'=>$students]);
   
    }
}
