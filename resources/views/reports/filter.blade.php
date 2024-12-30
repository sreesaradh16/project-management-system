@foreach($projects as $key => $project)
<tr style="background-color: #f8e08e; font-weight: bold;">
    <td>{{ $key + 1 }}</td>
    <td>{{ $project['project_name'] }}</td>
    <td>{{ $project['total_project_hours'] }}</td>
</tr>
@foreach($project['tasks'] as $task)
<tr>
    <td> </td>
    <td>{{ $task['task_name'] }}</td>
    <td>{{ $task['task_hours'] }}</td>
</tr>
@endforeach
@endforeach