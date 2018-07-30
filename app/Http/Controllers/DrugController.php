<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $all_drugs = Drug::all();

        $drugs = Drug::where('id', '<', 5)->get();

        return view('drugs.index',compact('drugs','all_drugs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $drug = Drug::FindOrFail($id);
        $all_drugs = Drug::all();
        return View('drugs.show', compact('drug', 'all_drugs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Drug $drug, Request $request)
    {
        if ($request->ajax()) {
            $response = [
                'id'=> $drug->id,
                'qtypack' => $drug->qtypack,
                'name' => $drug->name,
                'qtycarton' =>$drug->qtycarton,
                'delivery' =>$drug->delivery,
                'supplier' =>$drug->supplier,
                'expire_on' =>$drug->expire_on,
                'produce_at' =>$drug->produce_at

            ];
            return Response::json($response);

        }else{
              $all_drugs = Drug::all();

        $drugs = Drug::where('id', '<', 5)->get();

        return view('drugs.index',compact('drugs','all_drugs'));      
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $drug = Drug::FindOrFail($id);
        $drug->update($request->all());

        if($request->hasFile('image')){
            $file = $request->file('image');
            $imageName = date("Y-m-d"). '-' .$file->getClientOriginalName();
            $drug->image = $imageName; 
            $file->move(public_path('/uploads/images'), $imageName );
            $request['image'] = $imageName;
            $drug->save();
        }

        return redirect()->route('drugs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
