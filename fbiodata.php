

<?php
include ('main.php');
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KSJI | Commandery No. 497</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Alerts-->
  <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style> 

	.modal
{
    overflow: hidden;
}

.modal-dialog{
    margin-right:0;
    margin-left: 300px;
	width: 750px;
}

.modal-header{
  height:45px;background-color:#CD5C5C;
  color:#fff;

}
.modal-title{
  margin-top:-10px;
  font-size:20px;
}
.modal-header .close{
  margin-top:-10px;
  color:#fff;
}

.modal-body{
  color:#888;
  
}

.modal-body p {
  text-align:center;
  padding-top:10px;
}




.require{
			color:red;
		}
		
.form-control2 {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control2:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
}
.form-control2::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control2:-ms-input-placeholder {
  color: #999;
}
.form-control2::-webkit-input-placeholder {
  color: #999;
}
.form-control2::-ms-expand {
  background-color: transparent;
  border: 0;
}
.form-control2[disabled],
.form-control2[readonly],
fieldset[disabled] .form-control2 {
  background-color: #eee;
  opacity: 1;
}
.form-control2[disabled],
fieldset[disabled] .form-control2 {
  cursor: not-allowed;
}
textarea.form-control2 {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
	</style>
	</head>
	<body>

  

    <!-- Main content -->
   
    <!-- Main content -->
	    <form id="formcont" role="form" method="Post" action="" enctype="multipart/form-data">

		  <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
			<i class="glyphicon glyphicon-user"></i>
              <h3 class="box-title">Member Registration </h3>
		
			   <a href="#myModal" data-backdrop="false" data-toggle="modal" class = "btn btn-info"   style = "width:200px; margin-top:30px; margin-right:250px; float: right">Click to Add New Member</a>
			   
			   <div class="box-tools pull-right">
            <div class="has-feedback">
              <!----<input type="text" class="form-control input-sm" placeholder="Search...">
              <span class="glyphicon glyphicon-search form-control-feedback"></span>---->
			  <label>
			  <input list="employeeid" name="findlist" class="form-control2" id="employeesearch" placeholder="Search Here....">
			  <span class="glyphicon glyphicon-search form-control-feedback"></span></label>
            </div>
			
			<div id="listemployeeHere"></div>
			</div>
			</div>
			</div>
			</div>	
			  

			 <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">Add New Member</h4> 
		</div>
		
		
		
     
	  
        <!-- left column -->
		<div class="modal-body">
				<div>				  
				  <img src="userimage.png" width="150" height="150" id="showImg" name="showImg" align = "right"/> 
				  </div>
				  
				  <div>
				  <input type="file" id="InputFile" name="InputFile" align = "right">
				  </div>
				  
				  <div id="picerrors" style="color:red;"></div>	
		  
			 		  
		
		
		 <h3 class="box-title" > <b>Bio Data </b></b></h3>
		   <div id="displayinfo">
		   </div>
		 
	      

        <!-- left column -->
	<div id="displayerrormsghere"></div>
	<div class="box-body">
          <div class="row">
            <div class="col-md-4">			
              <label>Member ID</label>
               <input type="text" class="form-control" id="EMPLOYID" name="EMPLOYID" placeholder="Member ID"> 
              </div>
			  </div>
			  </div>
			  
			<div id="displayerrormsghere"></div>
			<div class="box-body">
          <div class="row">
			<div class="col-md-4">
                <label>Title<span class="require">*</span></label>
                <select id="title" name="title" class="form-control select" style="width: 100%;">
				  <option value=""> Select Title... </option>
                  <option>BRO</option>
                  <option>S/K</option>
                  <option>LT.</option>
                  <option>CAPT</option>
                  <option>MAJOR</option>
				  <option>BRIG. GEN.</option>
                  <option>SIR</option>
				    </select>
					<div id="titleError" style="color:red;"></div>
              </div>  
			  
			  
	
				 
            <div id="displayerrormsghere"></div>
			<div class="col-md-8"> 
			<div class="form-group"> 
                  <label for="Surnames">Surname<span class="require">*</span></label> 
                  <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter Surname"> 
				  <div id="snameError" style="color:red;"></div>				  
				  </div>
				  </div>
				  </div>
				  </div>
				  
				
				  
		  
            <div id="displayerrormsghere"></div>
			<div class="box-body">
          <div class="row">
			<div class="col-md-6">
				<div class="form-group">
                  <label for="Firstname">First Name<span class="require">*</span></label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
				  <div id="fnameError" style="color:red;"></div>
                </div>
				</div>
				
				
				
			
		  <div class="col-md-6">
				<div class="form-group">
                  <label for="othernames">Other Names</label>
                  <input type="text" class="form-control" id="othernames" name="othernames" placeholder="Enter Other Names">
                </div>
				</div>
				</div>
				</div>
				
			<div class="box-body">
          <div class="row">	
            <div class="col-md-6">
				<div class="form-group">
                  <label for="Date">Date of Birth<span class="require">*</span></label>
                  <input type="date" class="form-control" id="d_birth" name="d_birth" placeholder="Date of Birth...">
				  <div id="d_birthError" style="color:red;"></div>
                </div>
				</div>
				
				
            <div class="col-md-6">
				<div class="form-group">
                  <label for="placebirth">Place of Birth</label>
                  <input type="text" class="form-control" id="placebirth" name="placebirth" placeholder="Place of Birth" >
                </div>
				</div>
				</div>
				</div>
				
				
			<div class="box-body">
          <div class="row">	 
            <div class="col-md-6">
				<label>Region</label>
                <select class="form-control select" id="region" name="region" style="width: 100%" >
				  <option> Select Region... </option>
                  <option>GREATER ACCRA</option>
                  <option>EASTERN</option>
                  <option>WESTERN</option>
                  <option>CENTRAL</option>
                  <option>ASHANTI</option>
                  <option>BRONG AHAFO</option>
                  <option>VOLTA</option>
                  <option>NORTHERN</option>
                  <option>UPPER EAST</option>
                  <option>UPPER WEST</option>
                  </select>
				  </div>
				  </div>
				  </div>
				  
				 
				  <div class="box-header with-border">
	       <h3 class="box-title"> <b></b></h3>
		   </div>
				  
				  <label for="Marital Status">Marital Status</label>
				  <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio"  id="OptionsRadio1" name="OptionsRadio1[]" value="Unmarried" >
                      Single
                    </label>
					
					<label>
                      <input type="radio"   id="OptionsRadio1"  name="OptionsRadio1[]" value="Married"  >
                      Married
                    </label>
					
					 <label>
                      <input type="radio"   id="OptionsRadio1" name="OptionsRadio1[]" value="Widower" >
                      Widower
                    </label>
					</div>
					</div>
					
					<div class="box-body">
					</div>
					
					<label for="Catholicism">Are you a Practicing Roman Catholic? </label>
				  <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio"  id="OptionsRadio4" name="OptionsRadio4[]" value="Yes" >
                      Yes
                    </label>
					
					<label>
                      <input type="radio"  id="OptionsRadio4" name="OptionsRadio4[]" value="No" >
                      No
                    </label>
					</div>
					</div>
					
         
					
                 <div class="box-body">
          <div class="row">
            <div class="col-md-9">
				  <label>Select Parish / Church</label>
                <select class="form-control select" id="church" name="church" style="width: 100%;">
				  <option> Select Parish / Church... </option>
                  <option>ST. THOMAS MORE CATHOLIC CHURCH, ACHIMOTA</option>
				  <option>SS. THOMAS MORE AND JOHN FISHER CATHOLIC CHURCH, NEW ACHIMOTA</option>
                  <option>CHRIST THE KING CATHOLIC CHURCH, CANTOMENT</option>
				  <option>ST. PAUL CATHOLIC CHURCH, KPEHE</option>
				  <option>ST. THOMAS AQUINAS CATHOLIC CHURCH, LEGON</option>
				  <option>ST. KIZITO CATHOLIC CHURCH, NIMA</option>
				  </Select>
				  </div>
				  </div>
				  </div>
				 
				 
				  
			<div class="box-body">
          <div class="row">	  
            <div class="col-md-6">
				  <label>Occupation</label>
                <select class="form-control select" id="occupation" name="occupation" style="width: 100%;">
				  <option> Select Occupation... </option>
                  <option>CIVIL SERVANT</option>
                  <option>SELF EMPLOYED</option>
                  <option>STUDENT</option>
                  <option>RETIREE</option>
                  <option>GOVERNMENT OFFICIAL</option>
				  </select>
				  </div>
				  </div>
				  </div>
				  
				  <div class="box-body">
				  </div>
				  
				  <label for="Marital Status">Member of any Organisation condemned by the Church? </label>
				  <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" id="OptionsRadio6" name="OptionsRadio6[]" value="Yes"  >
                      Yes
                    </label>
					
					<label>
                      <input type="radio"  id="OptionsRadio6" name="OptionsRadio6[]" value="No" >
                      No
                    </label>
				</div>
				   </div>
				   </label>       
				
				<div class="box-header with-border">
	       <h3 class="box-title"> <b>Postal and Residential Address </b></h3>
		   </div>
				
				
				<div class="box-body">
          <div class="row">
            <div class="col-md-6">
				<div class="form-group">
                  <label for="Firstname">Address Line 1</label>
                  <input type="text" class="form-control" id="Address1" name="Address1" placeholder="P. O. Box">
                </div>
				</div>
				
				
				 <div class="col-md-6">
				<div class="form-group">
                  <label for="Firstname">Address Line 2</label>
                  <input type="text" class="form-control" id="Address2" name="Address2" >
                </div>
				</div>
				</div>
				</div>
				
				<div class="box-body">
          <div class="row">
		  <div class="col-md-6">
				<div class="form-group">
                  <label for="Firstname">Address Line 3</label>
                  <input type="text" class="form-control" id="Address3" name="Address3" >
                </div>
				</div>
				</div>
				</div>
				
				
				<div class="box-body">
          <div class="row">
		  <div class="col-md-3">
				<div class="form-group">
                  <label for="Firstname">House No.</label>
                  <input type="text" class="form-control" id="hseno" name="hseno" placeholder="House No.">
                </div>
				</div>
				
				<div class="col-md-4">
				<div class="form-group">
                  <label for="Streetname">Street Name</label>
                  <input type="text" class="form-control" id="strtno" name="strtno" placeholder="Street Name">
                </div>
				</div>
				
				<div class="col-md-5">
				<div class="form-group">
                  <label for="City">City or Town</label>
                  <input type="text" class="form-control" id="cittwn" name="cittwn" placeholder="Enter City or Town">
                </div>
				</div>
				</div>
				</div>
				
				
			<div class="box-body">
          <div class="row">	
		  <div class="col-md-6">
				<label>Region</label>
                <select class="form-control select" id="region2" name="region2" style="width: 100%" >
				  <option> Select Region... </option>
                  <option>GREATER ACCRA</option>
                  <option>EASTERN</option>
                  <option>WESTERN</option>
                  <option>CENTRAL</option>
                  <option>ASHANTI</option>
                  <option>BRONG AHAFO</option>
                  <option>VOLTA</option>
                  <option>NORTHERN</option>
                  <option>UPPER EAST</option>
                  <option>UPPER WEST</option>
                  </select>
				  </div>
            
			<div id="displayerrormsghere"></div>
			<div class="col-md-6">
				<div class="form-group">
				<label>Cell Group<span class="require">*</span></label>
                <select id="cell_group" class="form-control select" id="cellgrp" name="cellgrp" style="width: 100%;">
				  <option> Select Cell Group...  </option>
                  <option>POKUASE</option>
                  <option>ACHIMOTA 1</option>
				  <option>ACHIMOTA 2</option>
                  <option>LEGON</option>
				  </select>
				  <div id="cell_groupError" style="color:red;"></div>
				</div>
				</div>
				</div>
				 </div>
				
				
		<div class="box-header with-border">
	       <h3 class="box-title"> <b>Contact Details </b></h3>
		   </div>
				
			 <div id="displayerrormsghere"></div>
			 <div class="box-body">
          <div class="row">
            <div class="col-md-5">
				<div class="form-group">
                  <label for="phone"><span>Contact Number 1<span class="require">*</span></label>
                  <input type="text" class="form-control" id="contact_1" name="contact_1" placeholder="Phone Number 1....">
				  <div id="contactError" style="color:red;"></div>
				  </div>
				  </div>
				  
				   <div class="col-md-5">
				  <div class="form-group">
                  <label for="phone">Contact Number 2</label>
                  <input type="Text" class="form-control" id="contact_2" name="contact_2" placeholder="Phone Number 2...." >
                </div>
				</div>
				</div>
				</div>
				
			<div class="box-body">
          <div class="row">	 
            <div class="col-md-7">
				<div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="tEmail1" name="tEmail1" placeholder="Enter email">
				  <div id="EmailError" style="color:red;"></div>
                </div>
				</div>
				</div>
				</div>
				</form>
				
				  
				  <div class="modal-footer">
				  <button type="submit" id = "save_btn" name = "save_btn" class="btn btn-success" style = "float:right; margin: 3px">Save</button>
<a href="fbiodata.php"><button type="button" id ="cancel_btn" name = "cancel_btn"class="btn btn-danger" style = "float:right; margin: 3px">Cancel</button></a>
              </div>
			  </div>	
</div>
</div>
</div>	


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Alert-->
<script src="bower_components/sweetalert2.all.min.js"></script>



<script>

	$("document").ready(function(){
		function getmemid(){
			$.ajax({
			url: 'getmemid.php',
			method: 'POST',
			//data: {},
			success: function(data){
				$("#EMPLOYID").val(data);
				
				$("input[value=Married]").click(function(){
					
					$("input[value=Unmarried]").prop("checked",false);
					$("input[value=Widower]").prop("checked",false);
				});
				$("input[value=Unmarried]").click(function(){
					
					$("input[value=Married]").prop("checked",false);
					$("input[value=Widower]").prop("checked",false);
				});
				$("input[value=Widower]").click(function(){
					
					$("input[value=Married]").prop("checked",false);
					$("input[value=Unmarried]").prop("checked",false);
				});
			}
		});
		}
		getmemid();
		
		$("#employeesearch").keyup(function(){
			var employeeids = $(this).val();
			$.ajax({
			url: 'serachemployee.php',
			method: 'POST',
			data: {employeeids:employeeids},
			success: function(data){
				$("#listemployeeHere").html(data);			
			}
		});
		});
		
		
		$("#showfileds").click(function(e){
			e.preventDefault();
			$(".form-control").prop("disabled",false);
		});
					$("#InputFile").change(function(){
						showImages(this);
					});
					function showImages(input){
						if(input.files && input.files[0]){
							var imagetype = input.files[0].type;
							var imageExt = ["image/jpeg","image/png","image/gif"];
							if(!((imagetype==imageExt[0]) || (imagetype==imageExt[1]) || (imagetype==imageExt[2]) )){
								alert("File is not a valid Image");
							}else{
								var reader = new FileReader();
								reader.onload = function(e){
									$("#avatar").css("display","none");
									$("#showImg").attr("src",e.target.result);
								}
								reader.readAsDataURL(input.files[0]);
							}
							
						}
						
					}
					
		$("input[name='findlist']").on("input", function(){
					var seletd = $(this).val();
					var kkk = seletd.length;
					if(kkk == 11 || kkk > 11){	
						$.ajax({
						url: 'insertintoFormFbio.php',
						method: 'post',
						dataType: 'json',
						data: {seletd:seletd},
						success: function(data){
							$("#title").val(data.title);							
							$("#sname").val(data.sname);
							$("#fname").val(data.fname);
							$("#d_birth").val(data.d_birth);		
							$("#cell_group").val(data.cell_group);
							$("#contact_1").val(data.contact_1);
							$("#showImg").attr("src","images/"+data.p_pic);
							
							if(data.m_status.match("Married")){
								$("input[value=Married]").prop("checked",true);
								if($("input[value=Married]").is(":checked")){
									$("input[value=Unmarried]").prop("checked",false);
									$("input[value=Widower]").prop("checked",false);
								}
							}if(data.m_status.match("Unmarried")){
								$("input[value=Unmarried]").prop("checked",true);
								if($("input[value=Unmarried]").is(":checked")){
									$("input[value=Married]").prop("checked",false);
									$("input[value=Widower]").prop("checked",false);
								}
							}if(data.m_status.match("Widower")){
								$("input[value=Widower]").prop("checked",true);
								if($("input[value=Widower]").is(":checked")){
									$("input[value=Unmarried]").prop("checked",false);
									$("input[value=Married]").prop("checked",false);
								}
							}
							
							if(data.p_catholic.match("Yes")){
								$("input[value=Yes]").prop("checked",true);
								if($("input[value=Yes]").is(":checked")){
									$("input[value=No]").prop("checked",false);
								}
							}if(data.p_catholic.match("No")){
								$("input[value=No]").prop("checked",true);
								if($("input[value=No]").is(":checked")){
									$("input[value=Yes]").prop("checked",false);
								}
							}
							
							//$("#InputFile").val(data.p_pic);								
							$("#EMPLOYID").val(data.Mem_Id);
							$("#othernames").val(data.oname);
							$("#placebirth").val(data.p_birth);
							$("#region").val(data.region);
							$("#region2").val(data.region_1);
							$("#Church").val(data.parish);
							$("#occupation").val(data.occupation);
							var addvalus = data.address;
							var addvaluesplit = addvalus.split("/");
							$("#Address1").val(addvaluesplit[0]);
							$("#Address2").val(addvaluesplit[1]);
							$("#Address3").val(addvaluesplit[2]);
							$("#hseno").val(data.hse_no);
							$("#strtno").val(data.street_name);
							$("#cittwn").val(data.city);
							$("#contact_2").val(data.contact_2);
							$("#tEmail1").val(data.email_add);
						}
						});
						
					}
				});
				
		$("#formcont").submit(function(e){
			e.preventDefault();	
			var title = $("#title").val();
			var sname = $("#sname").val();
			var fname = $("#fname").val();
			var d_birth = $("#d_birth").val();		
			var cell_group = $("#cell_group").val();
			var contact_1 = $("#contact_1").val();
			var pimage = $("#InputFile").val();
			
			if(pimage ==""){
				$("#picerrors").text("You must Upload your Picture");				
			}else{
				$("#picerrors").text("");
			}
			
			if(title ==""){
				$("#titleError").text("You must Select Title");
			}else{
				$("#titleError").text("");
			}
			
			if(sname ==""){
				$("#snameError").text("You must enter Surname");
			}else{
				$("#snameError").text("");
			}
			
			if(fname ==""){
				$("#fnameError").text("You must enter First Name");
			}else{
				$("#fnameError").text("");
			}
			
			if(d_birth ==""){
				$("#d_birthError").text("You must select Date of Birth");
			}else{
				$("#d_birthError").text("");
			}
			
			if(cell_group ==""){
				$("#cell_groupError").text("You must select Cell Group");
			}else{
				$("#cell_groupError").text("");
			}
			
			if(contact_1 ==""){
				$("#contactError").text("You must enter Contact Number");
			}else{
				$("#contactError").text("");
			}
			
			$.ajax({
					url: "upload.php",
					type: "POST",
					mimeTypes: "multipart/form-data",
					contentType: false,
					processData: false,
					cache: false,
					data: new FormData(this),
					success: function(data){
						if(data.match("successfully")){
							alert("Member Registered Successfully");
							$(".form-control").prop("disabled",true);
							$("#displayinfo").html('<div class="alert alert-danger" <h2><i class="icon fa fa-check"></i> <strong>Member Registerd / Updated Successfully!</strong></div>');
							$("#displayinfo").fadeOut(8000);
						}if(data.match("failed")){
							$("#displayinfo").html('<div class="alert alert-danger" <h2><i class="icon fa fa-check"></i> <strong>Failed to Add Mmber</strong></div>');
							$("#displayinfo").fadeOut(8000);
						}if(data.match("failed1")){
							$("#displayinfo").html('<div class="alert alert-danger" <h2><i class="icon fa fa-check"></i> <strong>Error on upload: Invalid file definition</strong></div>');
						}if(data.match("imageError")){
							alert("Please select an Image and Continue");
							$("#picerrors").text("You must Upload A Picture");
						}if(data.match("emptyimageerror")){
							$("#picerrors").text("");
						}if(data.match("errorcont")){
							$("#contactError").text("You must enter Contact Number");
						}if(data.match("errortitl")){
							$("#titleError").text("You must Select Title");
						}if(data.match("errorsnam")){
							$("#snameError").text("You must enter Surname");
						}if(data.match("errorfnam")){
							$("#fnameError").text("You must enter First Name");
						}if(data.match("errordbrth")){
							$("#d_birthError").text("You must select Date of Birth");
						}if(data.match("errorcellgrp")){
							$("#cell_groupError").text("You must select Cell Group");
						}
					   
					}, 
					error: function(XMLHttpRequest, textStatus, errorThrown) {
						console.log(XMLHttpRequest, textStatus, errorThrown);
					}
					});
			
		});
	});
	
	
	$("#myModal").draggable({
      handle: ".modal-header"
  });
</script>
</body>
</html>
