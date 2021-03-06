 <!DOCTYPE html>
 
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Chinese Zodiac</title>
		<style type="text/css">
			
			body{
				padding-left: 0px;
				margin-left: 0px;
			}
			
			h2 {
				font-size: 3em;
				color: White;
				font-family: arial;
				text-align: center;
				margin-top: 0px;
				margin-bottom: 0px;
				
			}
			h3{
				margin-top: 0px;
				padding-top: 0px;
				font-size: 1em;
				text-align: center;
				color: blue;
				margin-bottom: 0px;
				
			}
			h1{
				margin-top: 0px;
				padding-left: 50px;
				display: inline-block;
			}
			
			/* Feature */
			header { 
				border-top-left-radius: 10px;
				border-top-right-radius: 10px;
				background:red;
				width: 1390px;
				height: 320px;
				padding:20px;
				padding-left: 10px;
				padding-bottom: 0px;
				margin-bottom: 0px;
				margin: 10px 10px 0px 10px;
				}
			
			
			a { 
				margin:0; 
				padding:10px; 
				text-align:center; 
				left:0px;
				left: 0px;
				right: 0px;
				text-decoration: none;
				color: black;
				font-size: large;
				}
			a:hover { 
				color:white;
				border:1px solid black;
				border-radius: 0px 17px 0px 17px;
				background-color: rgba(255, 0, 0, 1);
				padding: 10px;
				
				}	
					
				nav{
					height: 40px;
					width: 1415px;
					text-align: center;
					padding-top: 20px;
					border: 1px solid red;
					margin-left: 10px;
					margin-right: 10px;
					background: repeating-linear-gradient(
					  to right,
					  #f6ba52,
					  #f6ba52 10px,
					  #ffd180 10px,
					  #ffd180 20px
					);
				}
				aside{
					margin-left: 10px;
					height: 700px;
					width: 20%;
					border: 1px solid red;
					background-color: red;
					text-decoration: none;
					padding-left: -20px;					
				}	
				ul li{
					text-decoration: none;
					color: black;
					list-style-type: none;
					padding-bottom: 10px;
				}
				ul li:nth-child{
					
				}
				/*footer{
					height: 25px;
					width: 1418px;
					text-align: center;
					padding-top: 10px;
					margin-left: 10px;
					margin-right: 10px;
					margin-top: 300px;
					border: 1px solid red;
					background-color: red;
					border-radius: 0px 0px 8px 8px;
					position: fixed;
				}*/
				footer {
				   position: absolute;
				   bottom: 0;
				   top:1114px;
				   left:10px;
				   height:30px;
				   width: 1418px;
				   padding-top: 10px;
				   background-color:red;
				   border: 1px solid red;
				   border-radius: 0px 0px 8px 8px;
				   color: white;
				   text-align: center;
				   background-color:red;
				background-image:
				radial-gradient(white, rgba(255,255,255,.2) 2px, transparent 40px),
				radial-gradient(white, rgba(255,255,255,.15) 1px, transparent 30px),
				radial-gradient(white, rgba(255,255,255,.1) 2px, transparent 40px),
				radial-gradient(rgba(255,255,255,.4), rgba(255,255,255,.1) 2px, transparent 30px);
				background-size: 550px 550px, 350px 350px, 250px 250px, 150px 150px; 
				background-position: 0 0, 40px 60px, 130px 270px, 70px 100px;
				
				}

				#content{
					font-family: 'Segoe UI', Frutiger, 'Frutiger Linotype', 'Dejavu Sans',
					 'Helvetica Neue', Arial, sans-serif;
					width: 1000px;
					height: 670px;
					padding-left:7%; 
					margin-left: 21%;
					margin-top: -680px;
					background-color: #fff; 
					background-image: 
					linear-gradient(90deg, transparent 79px, #abced4 79px,
					 #abced4 81px, transparent 81px),
					linear-gradient(#eee .1em, transparent .1em);
					background-size: 100% 1.2em;
				}
				
					
			
	</style>
	</head>
	<body>
		<div>		
			<?php include("Includes/inc_header.php") ?>
		</div>
		<div>
			<?php include("Includes/inc_button_nav.php") ?>
		</div>
		<div>
			<?php include("Includes/inc_text_links.php") ?>
		</div>
		
		<div id="content">
		    <p><?php
		    If (isset($_GET['page'])) {
		      switch ($_GET['page']) {
		        case 'site_layout':
		          include('Includes/inc_site_layout.php');
		          break;
		        case 'control_structures':
		          include('Includes/inc_control_structures.php');
		          break;
		        case 'string_functions':
		          include('Includes/inc_string_functions.php');
		          break;
		        case 'web_forms':
		          include('Includes/inc_web_forms.php');
		          break; 
		        case 'midterm_assignment':
		          include('Includes/inc_midterm_assignment.php');
		          break;
		        case 'state_information':
		          include('Includes/inc_state_information.php');
		          break;
		        case 'user_templates':
		          include('Includes/inc_user_templates.php');
		          break;
		        case 'final_project':
		          include('Includes/inc_final_project.php');
		          break;
		        case 'home_page': // A value of 'home_page' means to display the default page
		        default:
		          include('Includes/inc_home.php');
		          break;
		        }
		    } else { 
		      // If no button has been selected, then display the default page
		      include('Includes/inc_home.php');
		    }
			?></p>
		</div>	
		<div>
			<?php include("Includes/inc_footer.php") ?>
		</div>
</body>
</html>