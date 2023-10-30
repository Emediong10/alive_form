<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\Chapter;
use Livewire\Component;

class Register extends Component
{
    public $currentStep = 1;
    public $firstname, $middlename, $lastname, $dob, $email, $phone, $gender, $chapter, $status = 1;
    public $successMsg = '', $monthly_outreach, $outreach, $outreach_experience, $christian_standard, $graduate, $professional, $attended_mission, $good_standing_adventist;
    public  $will_support, $have_supported, $show_outreach=false, $show_monthly_amount=false, $monthly_support, $monthly_amount, $currency;

    public function render()
    {
        $chapters=Chapter::where('active',1)->get();
        return view('livewire.register',compact('chapters'));
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'dob' => 'required',
            'email'=>'required|email|unique:applications,email',
            'phone'=>'required|unique:applications,phone',
            'chapter'=>'required'
        ]);

        $this->currentStep = 2;
    }

    public function skip($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function secondStepSubmit()
    {
        $this->currentStep = 3;
        if($this->show_outreach==true)
        {
            $validatedData = $this->validate([
                'outreach_experience' => 'required',
            ]);

        }

    }

    public function thirdStepSubmit()
    {
        $this->currentStep = 4;
        if($this->show_monthly_amount)
        {
            $validatedData = $this->validate([
                'monthly_support' => 'required',
                'monthly_amount' => 'required',
                'currency'=>'required'
            ]);
        }

    }

    /**
     * Write code on Method
     */
    public function submitForm()
    {
        //dd($this);
        $answers=[
            'monthly_outreach'=>$this->monthly_outreach,
            'outreach'=> $this->outreach,
            'outreach_experience'=> $this->outreach_experience,
            'graduate'=> $this->graduate,
            'professional'=> $this->professional,
            'attended_mission'=> $this->attended_mission,
            'good_standing_adventist'=> $this->good_standing_adventist,
            'will_support'=> $this->will_support,
            'have_supported'=> $this->have_supported,
            'monthly_support'=> $this->monthly_support,
            'monthly_amount'=> $this->monthly_amount,
            'currency'=> $this->currency
        ];

        Application::create([
            'firstname'=>$this->firstname,
            'middlename'=>$this->middlename,
            'lastname'=>$this->lastname,
            'gender'=>$this->gender,
            'dob'=>$this->dob,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'chapter_id'=>$this->chapter,
            'answers'=>[$answers],
            'member_type_id'=>null,
            'status'=>0
        ]);

        $this->successMsg = 'Form Submitted Successfully.';
        session()->flash('success_message',$this->successMsg);
        $this->reset();
        $this->currentStep = 1;
    }

    /**
     * Write code on Method
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function clearForm()
    {

    }
}
