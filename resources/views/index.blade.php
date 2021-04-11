<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Website</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="fontawesome-free/css/all.min.css">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<style>
body {
	margin: 0;
	padding: 0;
	/*background: linear-gradient(120deg, #fff 75%, #e01533 25%);*/
	font-family: 'PT Sans', sans-serif;
}


/*====================Style for navigation======================*/
.navigation {
	z-index: 20;
	width: 100%;
	top: 3%;
	position: absolute;
	display: flex;
	align-items: center;
}

.logo {
	width: 15%;
	display: flex;
	align-items: center;
}

.logotype {
	max-width: 60px;
	margin-left: 50%;
}

.nav-menu {
	width: 20%;
}

.menu {
	display: flex;
	justify-content: center;
	align-items: center;
	list-style: none;
	width: 100%;
}

.nav-item {
	padding: 0 10px;
}

.nav-link {
	text-decoration: none;
	color: #e01533;
	font-size: 16px;
	border-bottom: 2px solid transparent;
	transition: .3s;
	font-weight: bold;
}

.nav-link:hover {
	border-bottom: 2px solid #e01533;
}

.search-block {
	width: 40%;
	display: flex;
	justify-content: center;
	align-items: center;
}

.searsh {
	display: flex;
	background-color: #fff;
	border: 2px solid #e01533;
	border-radius: 30px;
	width: 50%;
	z-index: 1;
}

.search-form {
	padding-left: 5%;
	width: 90%;
	height: 25px;
	z-index: 10;
	border-radius: 30px;
	border: none;
	outline: none;
	font-weight: bold;
	color: #6f6f6f;
}

.search-btn {
	color: #e01533;
	font-size: 17px;
	width: 10%;
	display: flex;
	justify-content: center;
	align-items: center;
	text-decoration: none;
}

.personal-item {
	width: 15%;
}

.auth {
	display: flex;
	justify-content: space-between;
	align-items: center;
	width: 100%;
}

.auth-link {
	display: flex;
	justify-content: space-between;
	align-items: center;
	color: #6f6f6f;
	text-decoration: none;
	font-weight: bold;	
	font-size: 16px;
	transition: .3s;
}

.auth-link i {
	padding: 0 5px;
	font-size: 20px;
	color: #e01533;
}

.auth-link:hover {
	color: #e01533;
}

/*=====================Style for main-information===============*/
.main-information {
	position: absolute;
	top: 20%;
	display: flex;
	justify-content: space-around;
	align-items: center;
	height: 60%;
	width: 100%;
}

.text-inform h1 {
	color: #000;
	font-size: 70px;
	margin: 0;
	padding: 0;
}

.text-inform strong {
	color: #e01533;
	text-decoration: underline;
}

.tagline {
	color: #6f6f6f;
	font-size: 20px;
	margin: 10px 0;
	padding: 0;
}

.inform-link {
	margin-top: 20px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	width: 70%;
}

.inform-btn {
	border: 2px solid #e01533;
	border-radius: 20px;
	text-decoration: none;
	font-size: 18px;
	font-weight: bold;
	padding: 3px 15px;
	transition: .3s;
}

.read {
	color: #e01533;
}

.read:hover {
	color: #fff;
	background: #e01533;
}

.shop {
	color: #fff;
	background: #e01533;
}

.shop:hover {
	color: #e01533;
	background: #fff;
}
.first{
	height: 800px;
	background: linear-gradient(120deg, #fff 75%, #e01533 25%);
}


</style>
<body>
<div class="first">
	<div class="navigation">
		<div class="logo">
			<img src="{{asset('img/logo.png')}}" alt="logo" class="logotype">
		</div>

		<div class="nav-menu">
			<ul class="menu">
				<li class="nav-item"><a href="#" class="nav-link">{{__('lang.men')}}</a></li>
				<li class="nav-item"><a href="#" class="nav-link">{{__('lang.women')}}</a></li>
				<li class="nav-item"><a href="#" class="nav-link">{{__('lang.guys')}}</a></li>
				<li class="nav-item"><a href="#" class="nav-link">{{__('lang.girls')}}</a></li>
			</ul>
		</div>

		<div class="search-block">
			<div class="searsh">
				<input type="text" class="search-form" placeholder="{{__('lang.search')}}">
				<a href="#" class="search-btn"><i class="fas fa-search"></i></a>
			</div>
		</div>

		<div class="personal-item">
			<div class="auth">
				<div class="login">
					<a href="upload" class="auth-link"><i class="fas fa-user-circle"></i>{{__('lang.upload')}}</a>
				</div>
				<div class="car">
					<a href="charts" class="auth-link"><i class="fas fa-shopping-cart"></i>{{__('lang.chart')}}</a>
				</div>
			</div>
		</div>
	</div>

	<div class="main-information">
		<div class="text-inform">
			<h1>{{__('lang.new')}} <strong>Jordan</strong></h1>
			<p class="tagline">{{__('lang.popular')}}</p>
			<div class="inform-link">
				<div class="inform-btn read">{{__('lang.read')}}</div>
				<div class="inform-btn shop">{{__('lang.buy')}}</div>
			</div>
		</div>

		<div class="photo-model">
			<img src="{{asset('img/jordan1.png')}}" alt="">
		</div>
	</div>
</div>

</body>
</html>