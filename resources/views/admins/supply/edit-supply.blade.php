
  @extends('admins.layouts.Apps.app')
  @section('contents')

   <script type="text/javascript" src="../js/jquery360.min.js"></script>
 <link rel="stylesheet" href="../../css/mformf.css">

<!------ Include the above in your HEAD tag ---------->

 
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-11 form-box">
                <form method="post" id="post_form" role="form" class="registration-form" action="{{ route('supply.update',$supplies->id) }}" enctype="multipart/form-data">

                    <fieldset>
                           @csrf   
                           <input type="hidden" name="_method" value="PUT">                   
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Supply updating form</h3>
                                
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">

                                <div class="form-group col-md-8 col-sm-8">
                                    <label>Supply name</label>
                                    <input type="text" class="form-control" name="supply_name" value="{{$supplies->supply_name}}">
                                </div>
                             
                               <div class="form-group col-md-4 col-sm-4">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$supplies->phone}}">
                                </div>                            
                                 
                             
                            </div>




  <div class="row">
 <div class="form-group col-md-8 col-sm-8">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{$supplies->email}}">
                                </div>

                                

                                <div class="form-group col-md-4 col-sm-4">
                                    <label>Location</label>                              
                                    <input type="text" class="form-control" name="location" value="{{$supplies->location}}">
                            </div>
                            </div>





                              <div class="row">                             
                                <div class="form-group col-md-4 col-sm-4">
                                    <label>TIN</label>
                                    <input type="text" class="form-control" name="tin" value="{{$supplies->supply_name}}">
                                </div>
                                   <div class="form-group col-md-4 col-sm-4">
                                    <label>VRN</label>
                                    <input type="text" class="form-control" name="vrn" value="{{$supplies->supply_name}}">
                                </div>


                                     <div class="form-group col-md-4 col-sm-4">
                                         <label>Status</label>
                                        <select class="form-control" name="status" id="status">

                                        <option>{{$supplies->status}}</option>

                                              <option></option>                                             
                                                <option>Active</option>
                                                 <option>Inactive</option>
                                                 <option>Suspended</option>                                                
                                                  <option>NA</option>
  
                                        </select>
                                    </div>

                             </div>
                 

                            <a  href="/supply" role="button" class="previous btn-previous"><i class="fas fa-angle-double-left"></i></a>
                            <button type="submit" class="submit float-right">Update</button>
                        </div>
                    </fieldset>
                  
                </form>
            </div>
        </div>
        <br>
    </div>









    <script type='text/javascript'>
    $(document).ready(function(){

        // Department Change
        $('#category').change(function(){

             // Department id
             var id = $(this).val();

             // Empty the dropdown
             $('#subcategory').find('option').not(':first').remove();
//alert(id);
             // AJAX request 
             $.ajax({
                 url: 'getEmployees/'+id,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){

                     var len = 0;
                     if(response['data'] != null){
                          len = response['data'].length;
                     }

                     if(len > 0){
                          // Read data and create <option >
                          for(var i=0; i<len; i++){

                               var id = response['data'][i].category_id;
                               var name = response['data'][i].subcategory;

                               var option = "<option value='"+name+"'>"+name+"</option>";

                               $("#subcategory").append(option); 
                          }
                     }

                 }
             });
        });
    });
    </script>






    <script type="text/javascript">        
        $(document).ready(function () {
    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"]').on('focus', function () {
        $(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        parent_fieldset.find('input[type="text"],input[type="emailx"]').each(function () {
            if ($(this).val() == "") {
                $(this).addClass('input-error');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
            });
        }

    });

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

    // submit
    $('.registration-form').on('submit', function (e) {

        $(this).find('input[type="text"],input[type="emailx"]').each(function () {
            if ($(this).val() == "") {
                e.preventDefault();
                $(this).addClass('input-error');
            } else {
                $(this).removeClass('input-error');
            }
        });

    });
   
});
    </script>
      @endsection