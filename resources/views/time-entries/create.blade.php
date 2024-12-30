@extends("layouts.app")

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
        <h3 class="mb-0 card-title">Create Time Entry</h3>
    </div>
    <form action="{{ route('time_entries.store') }}" method="post" id="form">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Task</label>
                        <select class="form-control select2-show-search" name="task_id" id="task_id" data-placeholder="Task">
                            @foreach($tasks as $task)
                            <option value="{{ $task->id }}" {{ old('task_id') == $task->id ? 'selected' : '' }}>{{ $task->name }} ( {{ $task->project->name }} )</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Hours</label>
                        <input type="number" class="form-control" name="hours" value="{{ old('hours') }}" placeholder="Hours">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" value="{{ old('date') }}" placeholder="Date">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="1" placeholder="description">{{ old('description')}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success mt-1">Save</button>
            <a href="{{ route('time_entries.index') }}" class="btn btn-danger mt-1">Cancel</a>
        </div>
    </form>
</div>
@endsection
@push('scripts')
<script>
    initJqueryValidator("#form", {
        rules: {
            task_id: 'required',
            hours: 'required',
            date: 'required',
            description: 'required',
        },
        messages: {
            task_id: "Task is required",
            hours: 'Hours is required',
            date: 'Date is required',
            description: 'Description is required',
        },
    });
</script>
@endpush