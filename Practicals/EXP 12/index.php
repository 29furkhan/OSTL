<!DOCTYPE html>
<html>
<head>
	<title>
		Experiment 9
	</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit-icons.min.js"></script>


<script type="text/javascript">
	var data = "";
	$(document).ready(function(){
		$("#survey").on("submit",function(event){
		  event.preventDefault();
		  $.ajax({
		  	url:'tmp.php',
		  	type:"POST",
	        data:$(this).serialize(),
	        success:function(data){
	             data = JSON.parse(data);
	             alert(data.email);
	        } 
		  });
		});
	});

	function checkEmail(){
		var email = document.getElementById('email').value;
		$.ajax({
		  	url:'tmp.php',
		  	type:"POST",
	        data:{'email':email},
	        success:function(data){
	             data = JSON.parse(data);
	             if(data.value=="1"){
	             	document.getElementById('email').style.border="solid #00FF00";
	             }
	             else{
	             	document.getElementById('email').style.border="solid red";
	             }
	        } 
		});
	}

	function checkName(){
		var name = document.getElementById('name').value;
		$.ajax({
		  	url:'tmp.php',
		  	type:"POST",
	        data:{'name':name},
	        success:function(data){
	             data = JSON.parse(data);
	             if(data.value=="1"){
	             	document.getElementById('name').style.border="solid #00FF00";
	             }
	             else{
	             	document.getElementById('name').style.border="solid red";
	             }
	        } 
		});
	}

	function checkCasid(){
		var casid = document.getElementById('casid').value;
		$.ajax({
		  	url:'tmp.php',
		  	type:"POST",
	        data:{'casid':casid},
	        success:function(data){
	             data = JSON.parse(data);
	             if(data.value=="1"){
	             	document.getElementById('casid').style.border="solid #00FF00";
	             }
	             else{
	             	document.getElementById('casid').style.border="solid red";
	             }
	        } 
		});
	}

	function checkAge(){
		var age = document.getElementById('age').value;
		$.ajax({
		  	url:'tmp.php',
		  	type:"POST",
	        data:{'age':age},
	        success:function(data){
	             data = JSON.parse(data);
	             if(data.value=="1"){
	             	document.getElementById('age').style.border="solid #00FF00";
	             }
	             else{
	             	document.getElementById('age').style.border="solid red";
	             }
	        } 
		});
	}


</script>


</head>

<body>
	<div style="margin-top:5%;display: flex;justify-content: center;">
		<div style="border: 1px solid black;width: 40%;height: 500px;overflow-y: auto;" class="uk-card uk-card-hover uk-card-body">
	            <center><h3 class="uk-card-title;">SURVEY FORM</h3></center>
	            <hr style="border: 1px solid lightgrey;">
	            <br>
	            <form id="survey">
	            	<div style="display: flex;justify-content: space-around;">
	            		<div>
	            			<h4 class="uk-comment-title ">NAME</h4>	
	            		</div>
	            		<div class="">
					        <div class="uk-inline">
					            <span class="uk-form-icon" uk-icon="icon: user"></span>
					            <input name="name" id="name" onkeyup="checkName();" class="uk-input" type="text">
					        </div>
					    </div>
					</div>
					<br>
					<div style="display: flex;justify-content: space-around;">
	            		<div>
	            			<h4 class="uk-comment-title ">EMAIL</h4>	
	            		</div>
	            		<div class="">
					        <div class="uk-inline">
					            <span class="uk-form-icon" uk-icon="icon: mail"></span>
					            <input onkeyup = "checkEmail();" id="email" name="email" class="uk-input" type="email">
					        </div>
					    </div>
					</div>
					<br>
					<div style="display: flex;justify-content: space-around;">
	            		<div>
	            			<h4 class="uk-comment-title ">CASID</h4>	
	            		</div>
	            		<div class="">
					        <div class="uk-inline">
					            <span class="uk-form-icon" uk-icon="icon: lock"></span>
					            <input  onkeyup="checkCasid();" id="casid" name="casid" class="uk-input" type="text">				 
					        </div>	
					    </div>
					</div>
					<br>
					
					<div style="display: flex;justify-content: space-around;">
	            		<div>
	            			<h4 class="uk-comment-title ">AGE&nbsp&nbsp&nbsp</h4>	
	            		</div>
	            		<div class="">
					        <div class="uk-inline">
					            <span class="uk-form-icon" uk-icon="icon: users"></span>
					            <input onkeyup = "checkAge();" id="age" name="äge" class="uk-input" type="text">
					        </div>
					    </div>
					</div>
					<br>
					<div style="display: flex;justify-content: space-around;">
	            		<div class="">
					        <div class="uk-inline">
					            <input id="submit" type="submit"  value="submit" class="uk-button uk-button-primary">
					        </div>
					    </div>

					</div>
				</form>
	        </div>
	</div>
	    


</body>
</html>



