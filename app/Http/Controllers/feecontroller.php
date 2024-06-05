<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fee;


class feecontroller extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        die ('success');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fee= new fee;
        $fee->first_name= "DAN";
        $fee->mid_name = "KAMAU";
        $fee->last_name = "MWANGI";
        $fee->student_reg = "reg1755";
        $fee->amount = "67500";
        $fee->created_at = "2024-06-04";
        $fee->save();

        return response()->json(['message' => 'UPDATED SUCCESSFULLY.'], 500);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
         

         $fee = fee::find($id);
         $fee->first_name= "LONDAN33";
         $fee->save();
 
         return response()->json(['message' => 'UPDATED SUCCESSFULLY.'], 500);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fee = fee::find($id);
        $fee->delete();

        return response()->json(['message' => 'DELETED SUCCESSFULLY.'], 500);
    }
}
