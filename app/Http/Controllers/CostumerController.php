<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreCostumerRequest;
use App\Http\Requests\UpdateCostumerRequest;
use App\Models\Costumer;
use App\Http\Resources\CostumerCollection;
use App\Filters\CostumerFilter;
use App\Http\Resources\CostumerResource;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //mostrar
        $filter = new CostumerFilter();
        $queryItems = $filter->transform($request);

        $costumers = Costumer::where($queryItems);
        return new CostumerCollection($costumers->paginate()->appends($request->query()));
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
    public function store(StoreCostumerRequest $request)
    {
        //guardar
        return new CostumerResource(Costumer::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Costumer $costumer)
    {
        $includeInvoices = request()->query('includeInvoices');
        if ($includeInvoices) {
            return new CostumerResource($costumer->loadMissing('invoices'));
        }
        return new CostumerResource($costumer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Costumer $costumer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCostumerRequest $request, Costumer $costumer)
    {
        //actualizar
        $costumer->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Costumer $costumer)
    {
        //eliminar
    }
}
