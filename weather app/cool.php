<?php

if ($_GET['City']) {
	                   
	                   $forecastPage = file_get_contents("https://www.weather-forecast.com/locations/".$_GET['City']."/forecasts/latest");
	                   $pageArray = explode('/h2>(7&ndash;10 days)</span><p class="b-forecast__table-description-content"><span class="phrase">', $forecastPage);

	                    $secondPageArray = explode('</span></p></td></tr><tr class="b-forecast__table-days js-forecast-header js-daynames"><th class="b-forecast__ta', $pageArray[1]);
	                 $weather = $secondPageArray[0];
} 




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Project</title>
    <style type="text/css">
    	
       html { 
  background: url(ks.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

body {
	background:none;
}

  .container{
  	text-align: center;
  	margin-top: 200px;
  	width: 450px;


  }
  #weather{
    margin-top: 15px;
  }
  input {
  	margin: 20px 0;
  }
    </style>
  </head>
  <body>

  	<div class="container">

  		<h1>What's the Wheather ?</h1>
  		<form>
  <div class="form-group">
    <label for="City">Enter the name of City.</label>
    <input type="text" class="form-control" id="City" name="City" aria-describedby="emailHelp" placeholder="Eg: Londan, Germany!">
    <small id="emailHelp" class="form-text text-muted">The weather may not be 100% accurate.</small>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
  	 <div id="weather">
  		
  		<?php
  		if ($weather) {
  			echo '<div class="alert alert-success" role="alert">
                   ' .$weather. '
                       </div>'; 

  		}
  	?>
  		

  	</div>



  </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


