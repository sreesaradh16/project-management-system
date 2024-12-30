<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $projects =  $this->projectReport();

        return view('reports.index', [
            'projects' =>  $projects,
            'active_projects' => Project::where('status', true)->get()
        ]);
    }

    public function filter(Request $request)
    {
        $projects =  $this->projectReport($request->project_id);

        try {
            $html = view('reports.filter', [
                'projects' => $projects,
            ])->render();
        } catch (\Exception $e) {
            return response()->json(['status' => false]);
        }

        return response()->json(['status' => true, 'html' => $html]);
    }

    public function projectReport($project_id = null)
    {
        $projectsQuery = Project::join('tasks', 'projects.id', '=', 'tasks.project_id')
            ->join('time_entries', 'tasks.id', '=', 'time_entries.task_id')
            ->select(
                'projects.name as project_name',
                'tasks.name as task_name',
                DB::raw('SUM(time_entries.hours) as task_hours')
            );

        if ($project_id) {
            $projectsQuery->where('projects.id', $project_id);
        }

        $projects = $projectsQuery->groupBy('projects.id', 'tasks.id')
            ->orderBy('projects.id')
            ->get()
            ->groupBy('project_name')
            ->map(fn($group) => [
                'project_name' => $group->first()->project_name,
                'total_project_hours' => $group->sum('task_hours'),
                'tasks' => $group->map(fn($task) => [
                    'task_name' => $task->task_name,
                    'task_hours' => $task->task_hours,
                ])->toArray(),
            ])
            ->values();
        return $projects;
    }
}
