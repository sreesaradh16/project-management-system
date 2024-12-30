@extends("layouts.list")

@section("heading")
<h1 class="page-title">Reports</h1>
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">
        <a href="{{ route('reports.index') }}" style="color:#5e2dd8">Reports</a>
    </li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Reports</h3>
    </div>
    <div class="card-body">
        <div class="filter">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Project</label>
                        <select class="form-control select2-show-search" name="project_id" id="project_id">
                            <option value="" selected disabled>Select Project</option>
                            @foreach($active_projects as $active_project)
                            <option value="{{ $active_project->id }}" {{ request('project_id') == $active_project->id ? 'selected' : ''}}>{{ $active_project->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-header" style="padding-left: 0px;">
                <a onclick="filter()" class="btn btn-primary btn">Search</a>
                <a href="{{ route('reports.index') }}" class="btn btn-secondary btn ml-2">Clear</a>
            </div>
        </div>
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered text-nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="wd-25p">Name</th>
                        <th class="wd-20p">Total Hours</th>
                    </tr>
                </thead>
                <tbody id="result">
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
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    function filter() {
        let project_id = $('#project_id').val();

        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('reports.filter') }}",
            type: "post",
            data: {
                project_id: project_id,
            },
            dataType: "json",
            success: function(data) {
                $('#result').html(data.html);
            },
            error: function(error) {
                console.error("Error fetching cities:", error);
            },
        });
    }
</script>
@endpush