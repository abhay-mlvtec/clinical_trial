<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ScreeningRequest;
use Carbon\Carbon;
use App\Models\Screening;
use App\Models\screeningResult;

class ScreeningFormController extends Controller
{
    public function screeningForm(Request $request) {
        return view('screening');
    }
    // Store Screening Form data
    public function screeningResult(ScreeningRequest $request) {

        $screening = Screening::create($request->all());

        $assigned_to = "";
        $is_eligible = false;
        $first_name = $request->input('first_name');
        $dob = $request->input('dob');
        $frequency = $request->input('frequency');
        $daily_frequency = $request->input('daily_frequency');
        $this->checkAge($dob);
        

        if($this->checkAge($dob)){
            $is_eligible = true;
            if($frequency == "Monthly" || $frequency == "Weekly"){
                $assigned_to = "Cohort A";
                $display_msg = "Participants $first_name is assigned to Cohort A";
            }
            else{
                $assigned_to = "Cohort B";
                $display_msg = "Candidate $first_name is assigned to Cohort B";
            }
        }
        else{
            $display_msg = "Participants must be over 18 years of age";
        }


        $screening->screeningResult()->create([
            'is_eligible' => $this->checkAge($dob),
            'assigned_to' => $assigned_to
        ]);
        
        return view('result',["data" => $display_msg]);
    }

    private function checkAge($dateOfBirth) {
        $dob = new Carbon($dateOfBirth);
        $currentDate = Carbon::now();
    
        // Calculate age
        $age = $dob->diffInYears($currentDate);
    
        // Check if age is 18 or more
        return $age >= 18;
    }
}
