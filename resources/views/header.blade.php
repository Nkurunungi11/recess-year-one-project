
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta property="og:title" content="Welcome to UTF"></meta>
 		
		<meta property="og:description" content="" /> 
		
		<title>UFT | welcome</title> 

		<link rel="canonical" href="https://blog.gitea.io/2016/12/welcome-to-gitea/">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
		<link rel="stylesheet" href="https://blog.gitea.io/styles/main.css">

		<link rel="shortcut icon" type="image/x-icon" href="https://blog.gitea.io/images/favicon.png">
		<link rel="icon" type="image/x-icon" href="https://blog.gitea.io/images/favicon.png">
		<style>
		 	#headline{font-size:30px; font-weight:400; border-bottom:3px solid limegreen; color:gray;}
		 	a{text-decoration:none; }
		 	.navbar-brand{position:absolute; left:5%; top:4px; border:1px solid black; padding-right:4px; padding-left:4px; z-index:10; border-radius:4px; background:wheat; font-weight:800; font-size:40px;} 
		 	#navMenu{position:absolute; left:0%; top:0px; border:1px solid red; width:100%; padding:4px; padding-right:50px; background:limegreen; border-top:3px solid gray; }
		 	#navMenu a{float:right; margin-right:20px;}
		 	#add-more-container{position:absolute; top:160px; left:4%; background:linen; border-radius:5px; padding:4px; color:gray;}
		 	#add-more-container:hover{border:2px solid gray; color:white}
		 	#add-more-button{font-size:40px; color:gray; }
		 	#recomendr_div{position:absolute; left:2%; top:280px; width:16%; }
		 	#recomendr_div table{border-top:1px solid skyblue;}
		</style>
 
	</head>
	
	
	<body>

			<nav class="navbar">
				<div class="container">
					<div class="navbar-brand">
						<a href="/home">  UTF </a> 
					</div>
					
					<div class="navbar-menu" id="navMenu">
						<div class="navbar-end"> 

							<a class="navbar-item" href="manual">
								<i class="fa fa-question"></i>&nbsp;
								Manual
							</a> 
							<a class="navbar-item" href="/members">
								<i class="fa fa-group"></i>&nbsp;
								Members 
							</a> 
							<a class="navbar-item" href="/agents">
								<i class="fa fa-comment"></i>&nbsp;
								Agents
							</a> 
							<a class="navbar-item" href="payments">
								<i class="fa fa-plug"></i>&nbsp;
								Payments
							</a>
							<a class="navbar-item" href="/districts">
								<i class="fa fa-code"></i>&nbsp;
								Districts
							</a> 
							<a class="navbar-item" href="/donations">
								<i class="fa fa-donation"></i>&nbsp;
								Donations
							</a> 
							<a class="navbar-item" href="/home">
								<i class="fa fa-home"></i>&nbsp;
								Home
							</a>  
							 
						</div>
					</div>
					<div class="navbar-background" id="navbar-background"></div>
				</div>
			</nav>

			@yield('content')

	</body>
</html>


