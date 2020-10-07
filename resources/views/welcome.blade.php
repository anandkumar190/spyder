<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">

 <style type="text/css">
     form .error {
  color: #ff0000;
}
 #declared_val{display: none;}

 </style>
    <title>Spyder</title>
  </head>

  <body>
  <div class="container">
    <br>
    <br>
  <h1>Shipping Rates Calculator </h1>
    <form action="{{url('shipcal')}}" id="formvalidate" method="get" >
       <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationTooltip01">Shipment Type *</label>

         <select name="isReturn" required   class="custom-select custom-select-lg mb-3">
            <option value="0" >Forward</option>
            <option  value="1" >Return</option>
         </select>
 
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
      </div>


      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label >Pick-up Area Pincode *</label>
          <input type="number"  name="pickupcode" id="pickupcode"  class="form-control"  placeholder="6 Digits Pick-up Area Pincode" >

        </div>

        <div class="col-md-4 mb-3">
          <label>Delivery Area Pincode *</label>
          <input type="number"   name="deliverycode" id="deliverycode" class="form-control"  placeholder="6 Digits Delivery Area Pincode"  >

        </div>
      </div>

      <div class="form-row">

          <div class="col-md-4 mb-3">
            <label >Approximate Weight * </label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Kg</span>
              </div>
              <input type="number"  name="weight" id="weight" class="form-control" placeholder="E.g. 0.5" >
            </div>
          </div>
     
          <div class="col-md-4 mb-3">
            <label>Dimensions</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span > 
                  <select name="measurement_in" id="measurement_in" class="form-control "required  >
                  <option value="0" >CM</option>
                  <option  value="1" >INCH</option>
                  </select>
               </span>

              </div>
              <input type="number"   name="length"  class="form-control dimensions" id="length" placeholder="L" >
              <input type="number"   name="breadth" class="form-control dimensions" id="breadth" placeholder="B"> 
              <input type="number"   name="height" class="form-control dimensions" id="height" placeholder="H">    
            </div>
            <spam id="dweight" ></spam>

          </div>
        </div>
        <div class="form-row">

            <div class="col-md-4 mb-3">
              <label >COD</label>

             <select name="is_cod"  id="is_cod" required   class="custom-select custom-select-md mb-3">
                <option  value="0" >NO</option>
                <option value="1" >YES</option>
             </select>

            </div>

            <div class="col-md-4 mb-3">
              <label>Declared Value in INR </label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">₹</span>
                </div>
                <input type="number"  name="declared"  id="declared" class="form-control" placeholder="Declared Value" >  
                  <input type="number"  name="declared"  id="declared_val" class="form-control" required  placeholder="Declared Value" >
              </div>
            </div>

        
          </div>
          <div class="form-row">

              <div class="col-md-4 mb-3">
                <label >FOD</label>

               <select name="is_fod"  id="is_fod" required   class="custom-select custom-select-md mb-3">
                  <option  value="0" >NO</option>
                  <option value="1" >YES</option>
               </select>

              </div>

              <div class="col-md-4 mb-3">
                <label>Declared Value in INR </label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">₹</span>
                  </div>
                  <input type="number"  name="fod_declared"  id="fod_declared" class="form-control" placeholder="FOD  Declared Value" >  
                    <input type="number"  name="fod_declared"  id="declared_val" class="form-control" required  placeholder="Declared Value" >
                </div>
              </div>

            </div>


            <div class="form-row">

                <div class="col-md-4 mb-3">
                  <label >Risk</label>

                 <select name="risk"  id="risk" required   class="custom-select custom-select-md mb-3">
                    <option  value="0" >owner</option>
                    <option value="1" >carrier</option>
                 </select>

                </div>


              </div>

      <button type="submit" class="btn btn-primary" >Submit form</button>

    </form>


</div>
<br>
<div class="container">
  <h2>Surface Mode</h2>           
  <table class="table table-hover">
    <thead>
          <tr>
            <th>S.NO.</th>
            <th>COURIER PROVIDER</th>
            <th>RATE (INR)</th>
            <th>SPYDER RATING</th>
          </tr>
    </thead>
    
    <tbody>
    @php $i=0; @endphp
    @if(!empty($vendorname))
@foreach($vendorname as $key=>$v_name)
          <tr>
            <td>{{++$i}} </td>
            <td>{{$v_name}}</td>
            <td>{{$sur_price[$key]}}</td>
            <td> <div class="progress">  <div class="progress-bar bg-success" style="width:70%"></div> </div></td>
          </tr>
@endforeach
@endif
    </tbody>

  </table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script type="text/javascript">
      // Wait for the DOM to be ready
$(document).ready(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("#formvalidate").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
 
      pickupcode: {
        required: true,
        minlength: 6,
        maxlength: 6
      },
      deliverycode: {
        required: true,
        minlength: 6,
        maxlength: 6
      },
      weight: {
        required: true
      },
       declared_val: {
        required: true
      }
    },
    // Specify validation error messages
    messages: {
      pickupcode: {
        required: "The pickup postcode field is required when order id is not present",
        minlength: "Your postcode must be 6 characters long.",
        maxlength: "Your postcode must be 6 characters long."
      },

      deliverycode: {
        required: "The delivery postcode field is required when order id is not present",
        minlength: "Your delivery must be  6 characters long.",
        maxlength: "Your delivery must be  6 characters long."
      },
      weight: {
        required: "The weight field is required"
      },

       declared_val: {
        required: "The Declared field is required"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }

  });


 
 $("#iscod").change(function(){
 
  var all=$(this).val();
   if (all==1){
    $("#declared").css({display: "none"});
    $("#declared_val").css({display: "block"});
   }else{
    $("#declared").css({display: "block"});
    $("#declared_val").css({display: "none"});
   }

    
 });


  $(".dimensions").change( function(){

   var length  = $('#length').val();
   var breadth = $('#breadth').val();
   var height  =  $('#height').val();

   var measurement_in  =  $('#measurement_in').val();

   var tamp=length*breadth*height;
  
  if(tamp > 0){
    if(measurement_in==0){
     tamp=tamp/27000;
     tamp=tamp*10;
     tamp=tamp.toFixed(3);
     $('#dweight').html('Volumetric Weight (Kg) '+tamp+" Kg");  
    }else{
      tamp=tamp/1728;
      tamp=tamp*10;
      tamp=tamp.toFixed(3);
      $('#dweight').html('Volumetric Weight (Kg) '+tamp+" Kg");  
    }

  }

  });




});






  </script>

  </body>
</html>