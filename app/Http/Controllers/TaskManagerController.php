<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskManagerRequest;
use App\Http\Requests\UpdateTaskManagerRequest;
use App\Models\TaskManager;

class TaskManagerController extends Controller
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
    public function store(StoreTaskManagerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskManager $taskManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskManager $taskManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskManagerRequest $request, TaskManager $taskManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskManager $taskManager)
    {
        //
    }
}
