@extends('project.master')
@section('content')


<section>
 <!-- Page content-->
<form action="{{'/job/store'}}" method="post">
    @csrf

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- <div class="row"> -->
      <div class="panel panel-default">
        <div class="panel-body">
         <div class="row">
           <div class="col-md-6">
             <label class="control-label">
               Job number
             </label>
             <input type="text" name="job_number" class="form-control" placeholder="Job number" required="true" value="{{old('job_number')}}">
             @error('job_number')

             <div class="alert alert-danger">{{$message}}</div>

             @enderror
           </div>

           <div class="col-md-6">
             <label class="control-label">
               Customer
             </label>
             <div class="input-group">
              <select name="customer_number" class="form-control select2-2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" required="true">
                <option value="" >Select</option>

                @foreach($customers as $customer)
                <option value="{{$customer->id}}">{{$customer->Customer}}</option>
                @endforeach
                
               
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
           <label class="control-label">
            Aircraft
          </label>
          <div class="input-group">
           <select name="aircraft_number" class="form-control select2-2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" required="true">
             <option value="">Select</option>
                @foreach($aircrafts as $aircraft)
                <option value="{{$aircraft->id}}">{{$aircraft->Aircraft}}</option>
                @endforeach
           </select>
         </div>
       </div>
     </div>

     <br>
     <div class="addpartnumber">
       <div class="row">
         <div class="col-md-3">
           <label class="control-label">
            Part number
          </label>
          <div class="input-group">
           <select name="part_number"  id="part_number" class="form-control select2-2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" required="true">
             <option value="">Select</option>
              @foreach($partnumbers as $partnumber)
                <option value="{{$partnumber->id}}">{{$partnumber->part_number}}</option>
                @endforeach
           </select>
           <span class="input-group-addon cp" data-toggle="modal" data-target="#add-partnumber" required="true">
             <i class="fa fa-plus"></i>
           </span>
         </div>
       </div>
       <div class="col-md-4">
         <label class="control-label">
           Description
         </label>
         <textarea name="description"   data-dependent="part_number" id="description" rows="2" class="form-control" placeholder="Type.."></textarea>
       </div>
       <div class="col-md-2">
         <label class="control-label">
           Serial number
         </label>
         <input type="text" name="serial_number" class="form-control" placeholder="Serial number" required="true">
       </div>
       <div class="col-md-1">
         <label class="control-label">
           TSN
         </label>
         <input type="text" name="tsn" class="form-control" placeholder="TSN" required="true">
       </div>
       <div class="col-md-1">
         <label class="control-label">
           TSO
         </label>
         <input type="text" name="tsd" class="form-control" placeholder="TSO" required="true">
       </div>
       <div class="col-md-1">
         <button type="button" class="btn btn-success addMore" style="margin-top: 25px;"><i class="fa fa-plus"></i></button>
       </div>
     </div>
   </div>
   <br>
   <div class="row">
     <div class="col-md-4">
       <label class="control-label">
         Work details
       </label>
       <input type="text" name="work_details" class="form-control" placeholder=" Work details" required="true">
     </div>
     <div class="col-md-4">
       <label class="control-label">
         P.O.NO
       </label>
       <input type="text" name="po_no" class="form-control" placeholder=" P.O.NO" required="true">
     </div>
     <div class="col-md-4">
       <label class="control-label">Upload P.O</label>
       <input type="file" name="file" style="background-color: #fff;" class="form-control" placeholder="Choose File">
     </div>
   </div>
   <div class="row">
    <div class="col-md-12">
      <label class="control-label">Notes</label>
      <textarea name="notes" rows="3" class="form-control" placeholder="Type.."></textarea>
    </div>
  </div>

  <hr>
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right">
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#createworkpack">Save & Create workpack</button>
      </div>
    </div>
  </div>
</div>

</form>
</div>
<!-- </div> -->
</div>
</div>
</section>


@endsection