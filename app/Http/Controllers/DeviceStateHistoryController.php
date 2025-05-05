<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storedevice_state_historyRequest;
use App\Http\Requests\Updatedevice_state_historyRequest;
use App\Models\device_state_history;

class DeviceStateHistoryController extends Controller
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
    public function store(Storedevice_state_historyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(device_state_history $device_state_history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(device_state_history $device_state_history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedevice_state_historyRequest $request, device_state_history $device_state_history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(device_state_history $device_state_history)
    {
        //
    }
}
