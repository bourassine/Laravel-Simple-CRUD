<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Crud;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $crud = Crud::all();
        return view('crud.index')->with('crud', $crud);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Crud::create($input);
        return redirect('crud')->with('flash_message', 'Crud Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $crud = Crud::find($id);
        return view('crud.show')->with('crud', $crud);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $crud = Crud::find($id);
        return view('crud.edit')->with('crud', $crud);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $crud = Crud::find($id);
        $input = $request->all();
        $crud->update($input);
        return redirect('crud')->with('flash_message', 'Crud Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Crud::destroy($id);
        return redirect('crud')->with('flash_message', 'Crud deleted!');
    }
}
