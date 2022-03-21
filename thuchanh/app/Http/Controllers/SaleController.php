<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Status;

class SaleController extends Controller
{

    public function index()
    {
        $sales = DB::table('sales')->get();
        return view('list', compact('sales'));
    }

    public function create()
    {
        $statuses = Status::all();
        return view('create', compact('statuses'));
    }
    public function store(Request $request)
    {
        $data = $request->except('_token');
        DB::table("sales")->insert($data);
        return redirect()->route("sale.index");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $statuses = Status::all();
        $product = DB::table("sales")->where("id", $id)->first();
        return view("update", compact("sales", "statuses"));
    }
    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        DB::table("sales")->where("id",$id)->update($data);
        return redirect()->route("sale.index");
    }

    public function destroy($id)
    {
        DB::table('sales')->where('id', $id)->delete();
        return redirect()->route('sale.index');
    }
}
