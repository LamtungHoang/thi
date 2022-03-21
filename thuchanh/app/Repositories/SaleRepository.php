<?php

namespace App\Repositories;

use App\Models\Sale;

class SaleRepository extends BaseRepository
{
    public function getModel()
    {
        return Sale::class;
    }

    public function store($request)
    {
        $product = new Sale();
        $product->name = $request->name;
        $product->phone = $request->phone;
        $product->email = $request->email;
        $product->address = $request->address;
        $product->name_sell = $request->name_sell;
        $product->status_id = $request->status_id;
        $product->save();
    }

    public function update($request, $id)

    {
        $product = Sale::find($id);
        $product->name = $request->name;
        $product->phone = $request->phone;
        $product->email = $request->email;
        $product->address = $request->address;
        $product->name_sell = $request->name_sell;
        $product->status_id = $request->status_id;
        $product->save();
    }

}

