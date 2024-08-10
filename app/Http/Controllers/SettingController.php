<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientTypeRequest;
use App\Http\Requests\ProviderTypeRequest;
use App\Http\Requests\StoreProviderRequest;
use App\Models\PatientType;
use App\Models\ProviderType;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request)
    {

        $patientTypes = PatientType::get();
        // return view('Setting.index', compact('patientTypes'));
        // return view('Setting.index', compact('patientTypes'));
        // return view('Setting.index');
        if(request()->ajax())
        {
            // return view('partials.setting-table', compact('patientTypes'))->render();
            $type = $request->input('type');

        // Fetch the data based on the type
        switch ($type) {
            case 'patient':
                $data = \App\Models\PatientType::get(['name','description']);
                break;
            case 'provider':
                $data = \App\Models\ProviderType::get(['name','description']);
                break;
            case 'appointment':
                $data = \App\Models\AppointmentType::get(['name','description']);
                break;
            // Add more cases as needed
            default:
                $data = collect();
                break;
        }



        return response()->json($data);
        }
        return view('Setting.index', compact('patientTypes'));

    }

    public function listPatientTypes(){

        $patientTypes = PatientType::get();

        return response()->json($patientTypes);

    }

    public function createPatientTypes(PatientTypeRequest $request){
        try {
            $patientType = PatientType::create($request->all());
            return response()->json(['message' => 'Patient Type successfully!']);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function listProviderTypes(){
        $providerTypes = ProviderType::get();

        return response()->json($providerTypes);
    }
    public function createProviderTypes(ProviderTypeRequest $request){
        try {
            $providerType = ProviderType::create($request->all());
            return response()->json(['message' => 'Provider Type successfully!']);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function listAppointmentTypes(){

    }

    public function createAppointmentTypes(){

    }

    public function listLabTypes(){

    }
    public function createLabTypes(){

    }

    public function listChargeTypes(){

    }

    public function createChargeTypes(){

    }

    public function listExpenseTypes(){

    }

    public function createExpenseTypes(){

    }

    public function listRefundTypes(){

    }


    public function createRefundTypes(){

    }
}
