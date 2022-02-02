<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Personal extends Component
{

    public $currentStep = 1;
    public $name, $overview, $street, $city , $from , $telephone ,$mobile , $email , $avatar , $user_id;

    public $successMsg = '';

    public function render()
    {
        return view('admin.personals.create');
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'overview' => 'required',
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'street'    => 'required',
            'city'      => 'required',
            'from'      => 'required',
            'telephone' => 'required',
            'mobile'    => 'required',
            'email'     => 'required',
            'avatar'    => 'required',
            'user_id'   => 'required',
        ]);

        $this->currentStep = 3;
    }


    public function submitForm()
    {
        Personal::create([

            'name'           => $this->name,
            'overview'       => $this->overview,
            'street'         => $this->street,
            'city'           => $this->city,
            'from'           => $this->from,
            'telephone'      => $this->telephone,
            'mobile'         => $this->mobile,
            'email'          => $this->email,
            'user_id'        => auth()->id(),

        ]);

        $this->successMsg = 'Personal successfully created.';

        $this->clearForm();

        $this->currentStep = 1;
    }


    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->name = '';
        $this->overview = '';
        $this->street = '';
        $this->city = '';
        $this->from = '';
        $this->telephone = '';
        $this->mobile = '';
        $this->email = '';

    }

}
