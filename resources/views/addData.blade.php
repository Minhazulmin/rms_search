<!DOCTYPE html>
<html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>searching data</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    
    <div class="container-fluid">
    	 <hr style="padding: 0px!important;margin:0px!important;">
      
     
    	<div class="row">

    		<div class="col-sm-6 ml-0">
    			<div class="card mshadow mt-3">
    				<div class="card-header bg">
    					ADD PRODUCT
    				</div>
    				<div class="card-body">
    					<div class="input-group mb-3">
			              <div class="input-group-prepend">
			                <span class="input-group-text">Name:</span>
			              </div>
			              <input type="text" id="name" class="form-control">
			            </div>
                        <div class="input-group mb-3">
			              <div class="input-group-prepend">
			                <span class="input-group-text">phone:</span>
			              </div>
			              <input type="text" id="phone" class="form-control">
			            </div>
                        <div class="input-group mb-3">
			              <div class="input-group-prepend">
			                <span class="input-group-text">Address:</span>
			              </div>
			              <input type="text" id="address" class="form-control">
			            </div>

			            <button type="submit" id="addbutton" onclick="addData()" class="btn btn-primary">ADD</button>
			            <button type="reset" class="btn btn-danger" value="Reset">Reset</button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function addData() {
    	var name = $('#name').val();
    	var phone = $('#phone').val();
    	var address = $('#address').val();
		console.log(name)
    	$.ajax({
    		type:"POST",
    		dataType:"json",
    		data:{name:name,phone:phone,address:address},
    		url:"/user/store",
    		success:function(data){
    			console.log('Successully Data Added')
    		}
    	})
    }


</script>