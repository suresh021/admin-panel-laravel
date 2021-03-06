
@extends('admin.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
<!--   <div class="row">
     <div class="col-md-8">
        <h4><strong>Menu</strong></h4>
      
    </div>
    <div class="col-md-4">
         <a href="{{ URL::to('admin/menus/create') }}" class="btn btn-success btn-sm pull-right">Add New menu</a>
    </div>
  </div> -->
</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
        @if(Session::has('success_message'))
            <div class='alert alert-info' role='alert'>
                  <span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>
                    {{Session('success_message')}}
                  <span class='sr-only'>Error:</span>
              </div>
        @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Parent-ID</th>
                  <th>URL</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($menus as $menu)
                <tr>
                  <td>{{$menu->id}}</td>
                  <td>{{$menu->name}}</td>
                  <td>{{$menu->parent_id}}</td>
                  <td>{{$menu->url}}</td>
                  <td> 

                  <a href="{{ URL::to('admin/menus/edit',['id'=>$menu->id])}}"><button type="button" class="btn btn-box-tool text-green" title="Edit" >
                  <i class="fa fa-edit"></i></button></a>

                  <form method="POST" onclick="return confirm('Are you sure to delete this item?')" action="">
                  <a href="{{ URL::to('admin/menus/delete',['id'=>$menu->id])}}"><button type="button"  class="btn btn-box-tool text-red" title="Delete"><i class="fa fa-trash"></i></button></a>
                  </form>

                </td>
                </tr>
                @endforeach
                </tbody>
               
              </table>
              {{ $menus->links() }}
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection