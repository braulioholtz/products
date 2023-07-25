<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return Inertia::render('products', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required']
        ])->validate();

        Product::create($request->all());

        return redirect()->back()
            ->with('message', 'Produto criado com sucesso.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required'],
        ])->validate();

        if ($request->has('id')) {
            Product::find($request->input('id'))->update($request->all());
            return redirect()->back()
                ->with('message', 'Produto atualizado com sucesso.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Product::find($request->input('id'))->delete();
        return redirect()->back();
    }

}
