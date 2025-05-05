<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storedevice_stateRequest;
use App\Http\Requests\Updatedevice_stateRequest;
use App\Models\device_state;

class DeviceStateController extends Controller
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
    public function store(Storedevice_stateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(device_state $device_state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(device_state $device_state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedevice_stateRequest $request, device_state $device_state)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(device_state $device_state)
    {
        //
    }
}
