<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(FormsRequest $request)
    {
        // $request->validate([
        //     'course' => ['required', 'max:100'],
        //     'workload' => ['required', 'integer'],
        // ]);
        // $data = $request->except('_token');

        // /*$validation =*/ Validator::make(
        //     $data,
        //     [
        //         'course' => ['required', 'max:100'],
        //         'workload' => ['required', 'integer'],
        //     ]
        // )->validate();

        // if ($validation->fails()) {
        //     return redirect()->back()->withInput()->withErrors($validation->errors());
        // }

        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
