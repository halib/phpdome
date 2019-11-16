<!DOCTYPE html>
<?php session_start();?>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<style>
		#ul1 li a {
			color: #ccc;
			font: 25px kartika;
			
		}
		
		#ul1{
			background: #262626;
		}
		.dropdown-menu{
			background: #262626;
		}
		#ul1 li :hover{
			color: #222222;
		}
		
	</style>
	<body>
		<div>
						<ul class="nav nav-pills" id="ul1" >
							<li role="presentation" class="active" >
								<img src="img/未标题-1.png" />
								
							</li>
							
							<li role="presentation" class="active" >
								<a href="index.html">首页</a>
							</li>
							<li role="presentation" >
								<a href="Jpstyle.html">日式</a>
							</li>
							<li role="presentation">
								<a href="usastyle.html">美式</a>
							</li>
							<li role="presentation">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
									欧式 <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" >
									<li role="presentation">
										<a href="norEur.html">北欧风</a>
									</li>
									<li role="presentation">
										<a href="claEur.html">欧式古典</a>
									</li>
									<li role="presentation">
										<a href="simEur.html">简欧</a>
									</li>
								</ul>

							</li>
							
							<li role="presentation">
								<marquee  style="color:#EEEEEE ;height:54.3px;margin-left: 200px;width: 100%;"><p style="margin-top:20px;margin-top: 5px;font-size: 35px;">欢迎您<?php echo $_SESSION['username'];?>，找灵感，上意库！</p></marquee>
							</li>

					</div>

	</body>
	<style>mr
		/*.active{
			background: red;
		}*/
	</style>
</html>
