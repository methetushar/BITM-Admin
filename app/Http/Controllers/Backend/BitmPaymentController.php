<?php
/**
 * @Oshit Sutra Dhar
 */
namespace App\Http\Controllers\Backend;

use App\Model\BitmPayment;
use App\Http\Resources\BitmPaymentResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/*use App\Http\Controllers\Controller*/;

class BitmPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        if ($request->format() == 'html') {
            return view('layouts.backend_app');
        }
        $query  = BitmPayment::latest();
        if(!empty($request->field_name) && !empty($request->value)){
            $query->where($request->field_name,'like','%'.$request->value.'%');
        }

        $datas  = $query->paginate($request->pagination);
        return new BitmPaymentResource($datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend_app');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BitmPayment::create($request->all());
        return response()->json(['message' => 'Create Successfully!'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\BitmPayment  $bitmPayment
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, BitmPayment $bitmPayment)
    {
        if ($request->format() == 'html') {
            return view('layouts.backend_app');
        }
        return $bitmPayment;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\BitmPayment  $bitmPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(BitmPayment $bitmPayment)
    {
        return view('layouts.backend_app');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\BitmPayment  $bitmPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BitmPayment $bitmPayment)
    {
        $bitmPayment->update($request->all());
        return response()->json(['message' => 'Update Successfully!'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\BitmPayment  $bitmPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(BitmPayment $bitmPayment)
    {
        if($bitmPayment->delete()){
            return response()->json(['message' => 'Delete Successfully!'],200);
        }else{
            return response()->json(['message' => 'Delete Unsuccessfully!'],200);
        }
    }

    /**
     * Validate form field.
     *
     * @return \Illuminate\Http\Response
     */
    public function validateCheck($request)
    {
        return $request->validate([
            //ex: 'name' => 'required|email|nullable|date|string|min:0|max:191',
        ]);
    }
}
