
  @extends('admins.layouts.Apps.app')
  @section('contents')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New condition</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New condition</li>
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
              <form  method="post" id="post_form" action="{{ route('condition.store') }}">
                @csrf

                <div class="card-body">                       
                    <label>Condition Name</label>
                    <input class="form-control" type="text" name="condition_name">
                    
             </div>  
             <br>             
      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                 
                <a href="/condition"  role="button" class="btn btn-success float-left">View condition List</a>
                  <button type="submit" class="btn btn-primary float-right" name="condition" value="condition">Save</button>   
              </div>
             </div>
            </form>
               <br>
        </div>
    </section>
  </div> 

@endsection
