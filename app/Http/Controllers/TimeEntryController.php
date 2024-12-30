<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TimeEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimeEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('time-entries.index', [
            'time_entries' => TimeEntry::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('time-entries.create', [
            'tasks' => Task::where('status', true)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_id' => 'required|integer|exists:tasks,id',
            'hours' => 'required|numeric|min:0.5|max:24',
            'date' => 'required|date',
            'description' => 'required|string|max:1000',
        ]);

        DB::beginTransaction();
        try {
            TimeEntry::create([
                'task_id' => $request->task_id,
                'hours' => $request->hours,
                'date' => $request->date,
                'description' => $request->description,
            ]);
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return back()->withErrors('Something went wrong');
        }
        DB::commit();
        return redirect()->route('time_entries.index')->with('success', 'Time entry created successfully');
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
