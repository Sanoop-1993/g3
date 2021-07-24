@extends('project.master')
@section('content')

<section>
 <!-- Page content-->
 <div class="content-wrapper">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12" style="padding-right: 16px;">
        <div class="pull-right">
          <a href="{{url('job/create')}}" class="btn btn-sm btn-primary" style="margin-bottom: 5px;">
            Add new job  <em class="fa fa-plus"></em>
          </a>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">

        <div class="table-responsive">
          <table id="datatable2" class="table table-striped table-hover">
           <thead>
            <tr>
             <th>Sl.No</th>
             <th>Job number</th>
             <th>Customer</th>
             <th>Aircraft</th>
             <th>Part number</th>
             <th>Action</th>
           </tr>
         </thead>
         <tbody>
            @foreach($jobs as $job)

             <tr>
            <td>1</td>
            <td>{{$job->job_number}}</td>
            <td>{{$job->Customer}}</td>
            
            <td>{{$job->Aircraft}}</td>
            <td>{{$job->part_number}}</td>
          
            <td><a href="{{url('/job/edit/'.$job->id)}}"  class="btn btn-xs btn-primary">View</a></td>
          </tr>

             @endforeach
         
         
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</section>

@endsection