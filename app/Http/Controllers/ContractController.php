<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContractRequest;
use App\Models\Company;
use App\Models\CompanyOrder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyOrder = Company::with(['orders'])->get();
        return response()->json([
            'status'  => true,
            'data'    => $companyOrder,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContractRequest $request)
    {
        $companyOrder = CompanyOrder::create($request->only(['company_id', 'order_id', 'start', 'end']));
        return response()->json([
            'status'  => true,
            'data'    => $companyOrder,
            'message' => 'Contract created successfully'
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return response()->json([
            'status'  => true,
            'data'    => $company->load('orders'),
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
