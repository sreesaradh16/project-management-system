@extends("layouts.list")

@section("heading")
<h1 class="page-title">Time Entries</h1>
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('time_entries.index') }}" style="color:#5e2dd8">Time Entries</a></li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Time Entries</h3>
        <div class="card-options">
            <a href="{{ route('time_entries.create') }}" class="btn btn-primary btn">Create Time Entry</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                <thead>
                    <tr>
                        <th class="wd-15p">#</th>
                        <th class="wd-20p">Project Name</th>
                        <th class="wd-20p">Task Name</th>
                        <th class="wd-15p">Hours</th>
                        <th class="wd-15p">Date</th>
                        <th class="wd-15p">Description</th>
                    </tr>
                </thead>
                <tbody id="result">
                    @foreach($time_entries as $key=>$time_entry)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $time_entry->task->project->name }}</td>
                        <td>{{ $time_entry->task->name }}</td>
                        <td>{{ $time_entry->hours }}</td>
                        <td>{{ $time_entry->date }}</td>
                        <td>{{ $time_entry->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection