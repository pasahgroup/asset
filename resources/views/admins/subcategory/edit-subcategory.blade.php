
  @extends('admins.layouts.Apps.app')
  @section('contents')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="{{ route('subcategory.update',$subcategories->id) }}">
                @csrf
             <input type="hidden" name="_method" value="PUT">
              

                <div class="card-body">                       
                   

   <div class="row">

                                <div class="form-group col-md-4 col-sm-6" >
                                    <label>Category</label>
                                <select class="form-control" name="category_name">
                                    <option value="{{$subcategories->id}}">{{$subcategories->category}}</option>
                                                                   
@foreach ($categories as $category) 
  <option value="{{$category->id}}">{{$category->category}}</option>
 @endforeach 
                               
                                </select>
                            </div>


                                <div class="form-group col-md-4 col-sm-6">
                                   <label>Subategory Name</label>
                     <input class="form-control" type="text" name="subcategory_name" value="{{$subcategories->subcategory}}">
                                </div>
                                 
                            </div>

             </div> 


              <br>                
      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <a href="/subcategory"  role="button" class="btn btn-success float-left"><i class="fas fa-angle-double-left"></i></a>
              <button type="submit" class="btn btn-primary float-right" name="category" value="category">Update</button>         
              </div>
             </div>
            </form>
               <br>
        </div>
    </section>
  </div> 

@endsection
