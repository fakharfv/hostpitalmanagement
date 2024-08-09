<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PatientController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $data = Patient::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('first_name', function($row){
                    return  '<b><a href="'.route('patient.show', $row->id).'" class="text-decoration-underline">'.$row->first_name.'</a></b>';
                })
                ->rawColumns(['first_name'])
                ->make(true);
        }
        return view('patient.index');
    }

    public function show($id) {

        $patient = Patient::find($id)->first();
        return view('Patient.details-patient', compact('patient'));
    }

    public function create() {

        return view('patient.add-patient');
    }

    public function store(StorePatientRequest $request) {

        $patient = Patient::create($request->all());

        if($request->hasFile('profile_image'))
        {

            $path = $request->file('profile_image')->getRealPath();
            $logo = file_get_contents($path);
            $base64 = base64_encode($logo);
            $patient->update(['image' => $base64]);
        }

        return redirect()->route('patient.list')->withSuccess('patient create successfully');
    }

    public function filterPatient(Request $request)
    {
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $cnic = $request->cnic;
        $phone = $request->phone;
        if ($request->ajax()) {
            $patients = Patient::query()
                    ->when($firstName , function($query) use ($firstName) {
                        $query->where('first_name', 'like', '%'.$firstName.'%');
                    })
                    ->when($lastName , function($query) use ($lastName) {
                        $query->where('last_name', 'like', '%'.$lastName.'%');
                    })
                    ->when($cnic , function($query) use ($cnic) {
                        $query->where('cnic', $cnic);
                    })
                    ->when($phone , function($query) use ($phone) {
                        $query->where('phone', $phone);
                    });

                    return DataTables::of($patients) // Note the use of ::of instead of ::eloquent
                    ->addIndexColumn()
                    ->make(true);
        }
    }

    public function listPatients(Request $request){
        $query = $request->input('q');
        $patients = Patient::where('first_name', 'LIKE', '%' . $query . '%')
                            ->orWhere('last_name', 'LIKE', '%' . $query . '%')
                            ->get(['id','first_name','last_name']);
        return response()->json($patients);
    }
}
