
  @extends('admins.layouts.Apps.app')
  @section('contents')
  <style type="text/css">    
    .red {
    color: red;
    }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subategory List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subategory List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of Subategory</h3>

          <div class="card-tools">
            <a href="/addSubcategory" class="btn btn-primary" >
              <i class="fas fa-plus"></i>New Subategory
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                     <th>Subcategory</th>  
                    <th>Category</th>              
                    <th>Action</th> 
                                 
                  </tr>
                  </thead>
                  <tbody>
                   

                    @foreach ($subcategories as $subcategory)
                            <tr>
                    <td>{{ $subcategory->id }}</td>
                     <td>{{ $subcategory->subcategory }}</a></td> 
                         <td>{{ $subcategory->category }}</a></td>                    

                    <td><a href="/editSubcategory/{{$subcategory->id}}"><i class="fa fa-edit"></i></a>
                     <a href="/destroySubcategory/{{$subcategory->id}}" onclick="return confirm('Are you sure? You want to delete {{ $subcategory->subcategory}}','Category')"><i class="fa fa-trash red"></i></a></td>
                                </tr>
                     @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                     <th>Subcategory</th>  
                    <th>Category</th>              
                    <th>Action</th>    
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
