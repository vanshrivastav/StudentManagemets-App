<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Batche;
use Carbon\Carbon; 
use Illuminate\View\View;


class BatcheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $batches = Batche::all();
        return view ('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Batche::create($input);
        return redirect('batches')->with('flash_message', 'Batches Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $batche = Batche::find($id);
        return view('batches.show')->with('batche', $batche);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $batche = Batche::find($id);
        return view('batches.edit')->with('batches', $batche);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): Redirectresponse
    {
        $batche = Batche::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batche')->with('flash_message', 'batche Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): Redirectresponse
    {
        Batche::destroy($id);
        return redirect('batche ')->with('flash_message', 'Batche deleted!'); 
    }
}