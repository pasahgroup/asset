
  
  <?php $__env->startSection('contents'); ?>

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
              <form  method="post" id="post_form" action="<?php echo e(route('inclusive.update',$inclusives->id)); ?>">
                <?php echo csrf_field(); ?>
             <input type="hidden" name="_method" value="PUT">
                <div class="card-body">                       
                    <label>Inclusive Name</label>
                    <input class="form-control" type="text" name="inclusive_name" value="<?php echo e($inclusives->inclusive); ?>">
                    
             </div>               
      <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <a href="/inclusive"  role="button" class="btn btn-success float-left">View Inclusive List</a>
              <button type="submit" class="btn btn-primary float-right" name="inclusive" value="inclusive">Update</button>         
              </div>
             </div>
            </form>
               <br>
        </div>
    </section>
  </div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/admins/inclusives/editInclusive.blade.php ENDPATH**/ ?>