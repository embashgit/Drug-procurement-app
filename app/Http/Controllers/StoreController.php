<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drugs =Drug::all();
        $all_drugs = Drug::all();
        return view('drugs.all', compact('drugs', 'all_drugs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $all_drugs = Drug::all();
        return View('drugs.create', compact('all_drugs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $formInput = $request->except('image');
         $this->validate($request, array(
            'name'=> 'required',
            'description'=>'required',
            'manufacturer'=>'required',
            'produce_at'=> 'required|date', //|date_format:n-j-Y
            'expire on'=>'nullable',
            'description'=>'required',
            'voucher'=>'nllable',
            'supplier'=>'required',
            'destination'=>'nullable',
            'delivery'=>'nullable',
            'price'=>'required',
            'in_store'=>'nullable',
            'cost_carton'=>'nullable',
            'cost_pack'=>'nullable',
            'receipt_no'=>'nullable',
            'qtycarton'=>'required',
            ));

          $image = $request->file('image');
        if($image){
            $imageName = date("Y-m-d"). '-' .$image->getClientOriginalName();
            $image->move(public_path('/uploads/images'), $imageName );
            $formInput['image'] = $imageName;
        }
           Drug::create($formInput);
       \Session::flash('success_message', 'A New Drug has been stored successfully!');
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
