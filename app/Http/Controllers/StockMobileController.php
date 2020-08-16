<?php

namespace App\Http\Controllers;

use App\Models\Stock_mobile;
use Illuminate\Http\Request;
use Datatables;
use View;
use App\DataTables\Stock_mobileDatatable;

class StockMobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // return Datatables::of(Stock_mobile::query())->make(true);
        $data = Stock_mobile::all();

        if ($request->ajax()) {
            $data = Stock_mobile::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                        //    $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm">View</a>';
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                           $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Delete</a>';
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                }
                // echo($data);
        return view('datatable2', $data);
        // return $dataTable->render('datatable2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Stock_mobileDatatable $dataTable)
    {
        return $dataTable->render('export');
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
     * @param  \App\Stock_mobile  $stock_mobile
     * @return \Illuminate\Http\Response
     */
    public function show(Stock_mobile $stock_mobile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock_mobile  $stock_mobile
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock_mobile $stock_mobile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock_mobile  $stock_mobile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock_mobile $stock_mobile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock_mobile  $stock_mobile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock_mobile $stock_mobile)
    {
        //
    }
}
