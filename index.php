<!DOCTYPE html>
<?php session_start();?>
<html>

	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/all.css" />
		<link rel="stylesheet" href="css/lrtk.css" />

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>

	<style>
		.item img{
			width: 100%;
		}
	</style>

	<body style="background-color:#262626;">
		<div id="navpage"></div>
		<!--页头轮播图-->
					<div id="carouselMenu" class="carousel slide">

						<ol class="carousel-indicators">

							<li data-target="#carouselMenu" data-slide-to="0" class="active"></li>

							<li data-target="#carouselMenu" data-slide-to="1"></li>

							<li data-target="#carouselMenu" data-slide-to="2"></li>

						</ol>

						<div class="carousel-inner">

							<div class="item active"><img src="img/139294.jpg" alt="" /></div>

							<div class="item"><img src="img/top2.jpg" alt="" /></div>

							<div class="item"><img src="img/top6.jpg" alt=""/></div>

						</div>

						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="center-vertical">&lsaquo;</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="center-vertical">&rsaquo;</span>
						</a>
					</div>
		<div class="container">

			<div class="row">
				<div class="col-md-1">
					
    		<!--空列-->
        
				</div>
				
				<div class="col-md-10">
					<!--导航-->
					<!--<div id="navpage"></div>-->
					
					
					

				</div>

			</div>

		</div>

		<!--缩略图-->
		<div class="container">

			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="img/img1.jpg" alt="">
						<div class="caption">
							<h3>家装参观1</h3>
							<p>井井有条的温馨绿洲</p>
							<p>
								<a href="testimg.html" class="btn btn-primary" role="button">预览</a>
								<a href="txt.html" class="btn btn-default" role="button">灵感全文</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="img/img2.jpg" alt="">
						<div class="caption">
							<h3>家装参观2</h3>
							<p>简化空间，增添幸福感</p>
							<p>
								<a href="testimg.html" class="btn btn-primary" role="button">预览</a>
								<a href="txt.html" class="btn btn-default" role="button">灵感全文</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="img/img3.jpg" alt="">
						<div class="caption">
							<h3>家装参观3</h3>
							<p>简化你的睡眠空间 </p>
							<p>
								<a href="#" class="btn btn-primary" role="button">预览</a>
								<a href="#" class="btn btn-default" role="button">灵感全文</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="img/img4.jpg" alt="">
						<div class="caption">
							<h3>家装参观4</h3>
							<p>寻找有序的平和感 </p>
							<p>
								<a href="#" class="btn btn-primary" role="button">预览</a>
								<a href="#" class="btn btn-default" role="button">灵感全文</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="img/微信图片_20180923111900.jpg" alt="">
						<div class="caption">
							<h3>家装参观5</h3>
							<p>抽出时间休息一下 </p>
							<p>
								<a href="#" class="btn btn-primary" role="button">预览</a>
								<a href="#" class="btn btn-default" role="button">灵感全文</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="img/139294.jpg" alt="">
						<div class="caption">
							<h3>家装参观6</h3>
							<p>城市中一个宁静的角落 </p>
							<p>
								<a href="#" class="btn btn-primary" role="button">预览</a>
								<a href="#" class="btn btn-default" role="button">灵感全文</a>
							</p>
						</div>
					</div>
				</div>

			</div>

			</div>
<div id="gotop"></div>
				<!--
	页脚
-->

			<div class="footer" id="footpage"></div>
			

		</div>
		

		<script type="text/javascript">
			//轮播图
			$(function() {

				$("#carouselMenu").carousel({

					interval: 1000, //间隔时间

					wrap: true //是否循环

				});

			})
			
			$("#footpage").load("footer.html");//导入页脚
			$("#navpage").load("nav.php");//导入
			$("#gotop").load("gotop.html");//导入
			
		</script>

	</body>

</html>