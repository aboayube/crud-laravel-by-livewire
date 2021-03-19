<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Upload;
class Uploads extends Component
{
    public $title;
    public $filename;
    use WithFileUploads;
    public function fileUpload(){
        $validateData=$this->validate([
            'title'=>'required',
            'filename'=>'required'
        ]);
        $filename=$this->filename->store('files','public');
        $validateData['filename']=$filename;
        Upload::create($validateData);
        session()->flash('message','success upload');
        $this->emit('fileUploaded');
    }
    public function render()
    {
        return view('livewire.uploads');
    }
}
