@extends("layouts.list") 

@section("heading")
<h1 class="page-title">Projects</h1>
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('projects.index') }}" style="color:#5e2dd8">Projects</a></li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Projects</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                <thead>
                    <tr>
                        <th class="wd-15p">#</th> 
                        <th class="wd-20p">Project Name</th>
                        <th class="wd-15p">Status</th> 
                    </tr>
                </thead>
                <tbody id="result">
                    @foreach($projects as $key=>$project)
                    <tr>
                        <td>{{ $key+1 }}</td> 
                        <td>{{ $project->name }}</td>
                        <td>{{ statusName($project->status) }}</td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 