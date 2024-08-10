<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProviderRequest;
use App\Models\Provider;
use Illuminate\Http\Request;
use DataTables;

class ProviderController extends Controller
{
    public function index(Request $request){

        if ($request->ajax()) {

            $data = Provider::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function($row){
                        $link = '<a href="#" class="edit-provider" data-id="'.$row->id.'">'.$row->name.'</a>';
                        return  $link;
                    })
                    ->addColumn('phone', function($row){
                        return  ($row->phone) ? $row->phone : '-';
                    })
                    ->addColumn('pmdc', function($row){
                        return  $row->pmdc;
                    })
                    ->addColumn('qualification', function($row){
                        return  $row->qualification;
                    })
                    ->rawColumns(['name', 'phone', 'pmdc', 'qualification'])
                    ->make(true);
        }

        return view('provider.index');
    }

    public function create() {

    }

    public function store(StoreProviderRequest $request) {

        $provider = Provider::create($request->all());

        session()->flash('success', 'User Saved successfully');
        return response()->json(['message' => 'User Saved successfully']);
    }

    public function edit(Provider $provider)
    {
        $view = view('Provider.edit-modal', compact('provider'))->render();
        return response()->json($view);
    }

    public function update(StoreProviderRequest $request , Provider $provider)
    {

        $provider->update($request->all());

        return response()->json(['redirect_url' => route('provider.list')]);
    }
}
