
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <script type="text/javascript" src="../js/index.js"></script>
  <script type="text/javascript" src="../js/addrow.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div id="particles-js" style="z-index: -1;" ></div>
		<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

		<style type="text/css">
		
	/* ---- reset ---- */ 
	canvas{ 
		display: block;
	 	vertical-align: bottom; 
	 	}
	  /* ---- particles.js container ---- */ 
	#particles-js{ 
	  	position:absolute; 
	  	width: 100%; 
	  	height: 100%; 
	  	}
	  
	   /* ---- stats.js ---- */ 
	.count-particles{ background: #000022; position: absolute; top: 48px; left: 0; width: 80px; color: #13E8E9 text-align: left; text-indent: 4px; line-height: 14px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; font-weight: bold; } 

	.js-count-particles{ 
; 
	} 

	#stats, .count-particles{ 
		-webkit-user-select: none; 
		margin-top: 5px; 
		margin-left: 5px; 
	} 

	#stats{ 
		border-radius: 3px 3px 0 0; 
		overflow: hidden; 
	} 

	.count-particles{ 
		border-radius: 0 0 3px 3px; 
	}

		</style>

		<script type="text/javascript">
			particlesJS("particles-js", {"particles":{"number":{"value":30,"density":{"enable":true,"value_area":204.2650760819035}},"color":{"value":"#ff5000"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":false,"anim":{"enable":false,"speed":9.176472499005207,"opacity_min":0.0974492654761615,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffd91e","opacity":0.9620472365193137,"width":2},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
		</script>

		
	<!--particle ends here-->
	</head>
		
	
<body onload="logo()">
	<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #3b4237; width: 100%; margin: 0;">
		  <a class="navbar-brand" href="#" onClick="return false" onmousedown = "javascript:content('default');">
		  	<img src="../images/logo.jpg" id="logo" width="50" height="50" /> <span style="color: #ef8b00; font-weight: bold">Tech</span><span style="font-weight: bold">Zone</span>
		  </a>
		  <button class="navbar-toggler" style="color: white;" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon" style="color: white;"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" id="aboutus" href="#" onClick="return false" onmousedown = "javascript:content('aboutus');">About Us <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" id="aboutus" href="#" onClick="return false" onmousedown = "javascript:content('aboutus');">Change timetable <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <button class="mybtn btn btn-outline-danger my-sm-0" type="submit">logout</button>
		    </form>
		  </div>
	</nav><br>
	<div class="container">
		<table class="table table-bordered" id="tab_logic">
		  <thead class="thead-light" >
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Time</th>
		      <th scope="col">Mon</th>
		      <th scope="col">Time</th>
		      <th scope="col">Tue</th>
		      <th scope="col">Time</th>
		      <th scope="col">Wed</th>
		      <th scope="col">Time</th>
		      <th scope="col">Thu</th>
		      <th scope="col">Time</th>
		      <th scope="col">Fri</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td><input type="text" size="4" class='form-control input-md' name=0></td>
		      <td><input type="text" size="4" class='form-control input-md' name=0></td>
		      <td><input type="text" size="4" class='form-control input-md' name=0></td>
		      <td><input type="text" size="4" class='form-control input-md' name=0></td>
		      <td><input type="text" size="4" class='form-control input-md' name=0></td>
		      <td><input type="text" size="4" class='form-control input-md' name=0></td>
		      <td><input type="text" size="4" class='form-control input-md' name=0></td>
		      <td><input type="text" size="4" class='form-control input-md' name=0></td>
		      <td><input type="text" size="4" class='form-control input-md' name=0></td>
		      <td><input type="text" size="4" class='form-control input-md' name=0></td>
		      <!-- <td><input type="button" name="" value="add row"></td> -->
		    </tr>
		    <tr id="addr1"></tr>
		  </tbody>
		</table>
		<input type="button" class="btn btn-danger" value="Add row" id="add_row"  name=""> <small>Leave the boxes empty if not needed</small>
	</div>
	<!-- <footer class="footer" style="text-align: center; background-color: #f2f2f2; padding-top: 2%; padding-bottom: 2%;">

		Copyright 2019 <a href="#">@TechZone</a>
	</footer> -->
</body>
</html>