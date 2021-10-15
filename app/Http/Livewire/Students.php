<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Students extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $ids;

    public function resetInputFields(){
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store(){
        $validateData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Student::create($validateData );
        $this->resetInputFields();
        $this->emit('studentAdded');
    }

    public function edit($id){
        $student = Student::where('id',$id)->first();
        $this->ids= $student->id;
        $this->firstname= $student->firstname;
        $this->lastname= $student->lastname;
        $this->email= $student->email;
        $this->phone= $student->phone;
    }

    public function update(){
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        if($this->ids){
            $student = Student::find($this->ids);
            $student->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);
            $this->resetInputFields();
            $this->emit('StudentUpdate');
        }
    }

    public function delete($id){
        $student = Student::where('id',$id)->first();
        $student->delete();
        $this->resetInputFields();
    }

    public function render()
    {
        $students = Student::orderBy('id','DESC')->get();
        return view('livewire.students',[
            'students' => $students
        ]);
    }
}
