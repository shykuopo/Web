<!doctype html>
<html>
<head>
    <title>Ken’s website</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 
<script
	src="https://code.jquery.com/jquery-1.12.3.js"
	integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="
	crossorigin="anonymous"></script>
  
   <style>
   
   		html, body {
   			height:100%;
   		
   		}
   
   		.container {
   			background-image:url("background.jpg");
   			width:100%;
   			height:100%;
   			background-position:center;
   			background-size:cover;
   			padding-top:180px;
   		}
   
   		.center {
   			text-align:center;
   		
   		}
   		
   		.white {
   			color:white;
   		
   		}
   		
   		p {
   			padding-top:10px;
   			padding-bottom:10px;
   		}
   		
   		button {
   			margin-top:15px;
   		
   		}
   		
   		.alert {
   			margin-top:28px;
   			display:none;
   		
   		}
   </style>
   
   </head>

<body>
	
	<div class="container">
	
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3 center">
				
				<h1 class="center white">Weather Predictor</h1>
				
				<p class="lead center white">Enter your city below to get a forecase for the weather.</p>
				
				<form class="form-group">
				
					<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..."/>
				
				</form>
				
					<button id="findMyWeather"class="btn btn-success btn-lg center">Find My Weather</button>
					
					<div id="success" class="alert alert-success">Success</div>
					
					<div id="fail" class="alert alert-danger">Could not found the weather data of your city, Please try again later.</div>
				
					<div id="noCity" class="alert alert-danger">Please enter a city.</div>
					
			</div>
			
		</div>
		
	</div>
	
	<script>
		
		$("#findMyWeather").click(function(event) {
		
			event.preventDefault();
			
			$(".alert").hide();
			
			if ($("#city").val() != "") {
		
				$.get("scraper.php?city="+$("#city").val(), function(data) {
			
					
					
					if (data=="") {
					
						$("#fail").fadeIn();
						
					} else {
						
						
						$("#success").html(data).fadeIn();
						
					}
			
				});
			
			} else {
			
				$("#noCity").fadeIn();
				
			}
			
		});
	
	</script>
	
</body>
</html>
