<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return Inertia::render('categories', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required']
        ])->validate();

        Category::create($request->all());

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
            Category::find($request->input('id'))->update($request->all());
            return redirect()->back()
                ->with('message', 'Produto atualizado com sucesso.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Category::find($request->input('id'))->delete();
        return redirect()->back();
    }
}
