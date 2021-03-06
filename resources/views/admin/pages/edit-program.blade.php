
@extends('admin.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Edit program</strong></h4>
      
    </div>
    <div class="col-md-4">
         <a href="{{ URL::to('admin/programs') }}" class="btn btn-success btn-sm pull-right">See All programs</a>
    </div>
  </div>

</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              {{Form::model($row,array('url'=>['admin/programs/edit',$row->id],'enctype' => 'multipart/form-data'))}} 
              <div class="box-body">
              <!-- show errors/messages here  -->
        @if(Session::has('success_message'))
            <div class='alert alert-info' role='alert'>
                  <span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>
                    {{Session('success_message')}}
                  <span class='sr-only'>Error:</span>
            </div>
        @endif
@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Oops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
       
          <hr>
        
        
              <!-- /errors -->
               

                <div class="row">
                    <div class="col-md-12">
                         <div class="form-group">
                            <label for="title">Title of program</label>                  
                            {{ Form::text('title', Input::old('title'), array('placeholder' => 'program title goes here in sentence case','class'=>'form-control')) }}
                          </div>

                          <div class="form-group">
                            <label for="text">Description</label>
                            <textarea name="description" id="compose-textarea" class="form-control textarea" placeholder="program details" style="width: 100%; height: 300px; line-height: 18px; border: 1px solid #dddddd; padding: 10px">{{null !==(Input::old('description'))?Input::old('description'):$row->description}}</textarea>
                         </div>

                   </div>
                </div>

                      <div class="row">

                          <div class="col-md-6">
                               <div class="form-group">
                              <label for="title">Value</label>                  
                              {{ Form::text('value', Input::old('value'), array('placeholder' => 'Number between 1-100','class'=>'form-control')) }}
                              <p class="help-block">Record with highest value appears first</p>
                            </div>
                          </div>

                          <div class="col-md-6">
                           <div class="col-md-6">
                               <div class="form-group">
                                <img src="{{asset($row->image)}}" height="80" style="border: 2px solid;float: right;">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputFile">Change Image</label>
                                <input type="file" name="image" id="exampleInputFile">
                                <p class="help-block">Less than 2 MB</p>
                              </div>
                            </div>

                          </div>

                      </div>

              

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection