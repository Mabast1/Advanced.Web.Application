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
				color: yellow;
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
				}
			a:hover { 
				color:white;
				border:1px solid black;
				border-radius: 50px;
				background-color: rgba(255, 0, 0, 1);
				padding: 10px;
				
				}	
					
				nav{
					height: 40px;
					width: 1418px;
					text-align: center;
					padding-top: 20px;
					border: 1px solid silver;
					margin-left: 10px;
					margin-right: 10px;
				}
				aside{
					margin-left: 10px;
					height: 480px;
					width: 20%;
					border: 1px solid silver;
					text-align: center;
					
				}	
				footer{
					height: 40px;
					width: 1418px;
					text-align: center;
					padding-top: 20px;
					border: 1px solid silver;
					margin-left: 10px;
					margin-right: 10px;
				}
				#content{
					margin-top: -480px;
					width: 80%;
					margin-left: 21%;
					margin-bottom: 480px;
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