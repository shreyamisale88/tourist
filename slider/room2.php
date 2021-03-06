<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="animate.min.css"/>
	
</head>
<body>
	<div class="background fix">
		<div class="book2 fix  wow animated  zoomIn" data-wow-delay="3sec">
			<p><i>Welcome! We get your request.<br/>
			You will get an e-mail after a while</i> :)</p>
			<a href="room.php">re-regester</a>
		</div>
    </div>

    <style>
		*{
	margin:0;
	padding:0;
}
body{
	font-family: 'Roboto', sans-serif;
}
.main{
	width:1200px;
	height:auto;
	margin:0 auto;
}
.fix {
	overflow:hidden;
}
.header{
	position:fixed;
	z-index:9999;
	width:100%;
	background-color:white;
}
.logo {
	
}
.logo img {
	height: 53px;
	margin-left: 481px;
	width: 48px;
	float: left;
}
.logo p {
	float: right;
	height: 47px;
	width: 270px;
	font-size: 37px;
	padding-top: 5px;
	margin-right: 715px;
}
.menu {
	width: 1201px;
	height: 36px;
	padding-bottom: 16px;
}
.menu ul {
	list-style: none;
	float: right;
	margin-right: 203px;
}
.menu ul li{
	display:inline-block;
}
.menu ul li a {
	color: #777;
	padding: 20px 20px 5px 20px;
	display: block;
	text-decoration: none;
	font-size: 18px;
}
.menu ul li a:hover{
	color: black;
	border-bottom:2px solid #f8d848;
}
.banner {
	width:1200px;
	height: 504px;
	background-size: cover;
	margin-top: 105px;
}
.banner img {
	width:1200px;
}
.abouts {
	width: 1200px;
	height: auto;
	position:relative;
}
.abouts::before {
	position: absolute;
	content: "WELCOME TO SAYMA HOTEL - THE MOST BEAUTIFUL HOTEL IN BANGLADESH";
	width: 700px;
	height: 63px;
	top: -37px;
	background-color: white;
	z-index: 444;
	margin-left: 237px;
	color: black;
	text-align: center;
	font-size: 25px;
	font-weight: unset;
}
.about_extra {
	height: auto;
	width: 860px;
	margin: 0 auto;
	padding-top: 73px;
}
.about_single {
	width: 385px;
	float: left;
	margin-right: 10px;
	height: 400px;
	padding-top: 50px;
	margin:0 22px;
}
.about_single h1 {
	padding: 7px;
	font-weight:inherit;
	font-size:30px;
}
.about_single p {
	padding: 7px;
	color: #777;
	font-size: 18px;
}
.about_single img {
	height: 43px;
	padding-top: 5px;
}
.about_imges {
	width: 860px;
	margin: 24px;
}
.about_imges img {
	width: 127px;
	height: 99px;
	margin-right: 5px;
}
.about_imges img:hover {
	transform:scale(1.2);
	transition:0.5s;
}
.about_room{
	height: 1000px;
	width: 860px;
	margin: 0 auto;
	padding-top: 73px;
}
.about_room_left {
	width: 230px;
	height: auto;
	float: left;
}
.about_room_left h1 {
	font-size: 28px;
	font-weight: unset;
}
.about_room_left img {
	width: 230px;
	margin-top: 52px;
}
.about_room_left p{
	color:#777;
}
.about_room_left img{}
.about_room_right {
	width: 630px;
	float: right;
	height: auto;
}
.about_room_right h1{
	font-size: 28px;
	font-weight: unset;
}
.about_room_right_single {
	float: left;
	width: 295px;
	margin: 0 10px;
	height: 278px;
	margin-top: 51px;
}
.about_room_right_single img {
	width: 295px;
	height: 200px;
}
.about_room_right_single p {
	margin-top: 10px;
}
.about_room_right_single h3 {
	color: #f8d848;
}
.service {
	width: 1100px;
	height: auto;
	margin: 0 auto;
}
.service p {
	color: #777;
	text-align: center;
}
.service h1 {
	text-align: center;
	margin-bottom: 70px;
	font-weight: normal;
}

.single_service_left {
	width: 550px;
	float: left;
	padding-top: 101px;
}
.single_service_left p {
	text-align: left;
}
.single_service_left h2 {
	font-weight: unset;
}
.single_service_right {
	width: 550px;
}
.single_service_right img{
	width: 550px;
}
.footer_first {
	width: 1000px;
	margin: 0 auto;
	height: auto;
}
.footer_first_single {
	width: 233px;
	height: auto;
	float: left;
	margin: 50px;
}
.footer_first_single h1 {
	font-size: 18px;
	font-weight: unset;
}
.footer_first_single p {
	color: #777;
	font-size: 15px;
}
.footer_first img {
	width: 30px;
}
.footer_last {
	background-color: #181818;
	width: 1200px;
	height: auto;
}
.footer_last p {
	color: #777;
	font-size: 12px;
	margin: 20px;
	padding-left: 80px;
}

/*about*/
.banner_about {
	background: url("img/about4.jpg");
	height: 504px;
	background-size: cover;
	margin-top: 105px;
}
.banner_about p {
	display: block;
	padding: 4px;
	text-align: center;
	width: 558px;
	margin: auto;
	margin-top: 442px;
	font-size: 26px;
	background-color: white;
	color: black;
}
.about_img {
	width: 1200px;
	height: auto;
}
.about_img img {
	float: left;
	width: 600px;
	height: 320px;
}
.about2 {
	width: 1200px;
	height: auto;
	padding: 120px 0;
}
.about2_in {
	width: 566px;
	margin: 0 auto;
}
.about2 h1{
	padding: 7px;
	font-weight:inherit;
}
.about2 p{
	padding:7px;
	color:#777;
}
.about2 img {
	width: 255px;
	margin: 0px 152px;
}
.about_check_room {
	width: 1200px;
	height: 88px;
	background-color: black;
	color: white;
	text-align: center;
}
.about_check_room:hover{
	background-color:#beb61d;
}
a{
	text-decoration:none;
}
.about_check_room p {
	margin-top: 31px;
	font-size: 20px;
}

/*room*/
.banner_room{
	background: url("img/room4.jpg");
	height: 504px;
	background-size: cover;
	margin-top: 105px;
 }
 .banner_room p {
	display: block;
	padding: 5px;
	text-align: center;
	width: 837px;
	margin: auto;
	margin-top: 464px;
	font-size: 26px;
	background-color: white;
	color: black;
}
.help_contact {
	width: 427px;
	height: auto;
	margin: 120px auto;
}
.help_contact p {
	text-align: center;
	color: #777;
	margin: 15px 0;
}
.help_contact h2 {
	font-weight: inherit;
	text-align: center;
}
.help_contact a {
	text-decoration: none;
	margin-left: 148px;
	background-color: #f8d848;
	color: white;
	padding: 5px 25px 5px 25px;
}
.help_contact a:hover {
	box-shadow: 6px 12px 5px grey;
}
.single_room {
	width: 1200px;
	height: auto;
}
.single_room_left {
	width: 565px;
	height: 529px;
	float: left;
}
.single_room_left img {
	height: 553px;
}
.single_room_right {
	width: 605px;
	height: 472px;
	float: right;
	padding: 56px 0 0 30px;
	background-color: #F6F6F6;
}
.right_up{}
.right_up h2 {
	font-weight: inherit;
}
.right_up p {
	color: #777;
	margin-bottom: 10px;
}
.right_down{}
.right_down_single {
	width: 292px;
	float: left;
	padding-right: 10px;
}
.right_down_single img{}
.right_down_single h2 {
	font-weight: inherit;
	margin: 20px 0;
}
.right_down_single p {
	color: #777;
	margin-bottom: 41px;
}
.single_room_right a {
	text-decoration: none;
	background-color: #e9ab18;
	margin-top: 50px;
	padding: 12px 41px;
	color: white;
}
.single_room_right a:hover {
	box-shadow:6px 12px 5px grey;
}

/*spa*/
.banner_spa {
	background: url("img/facial.jpg");
	height: 435px;
	background-size: cover;
}
 .banner_spa p {
	display: block;
	padding: 4px;
	text-align: center;
	width: 837px;
	margin: auto;
	margin-top: 365px;
	font-size: 26px;
	background-color: white;
	color: black;
}
.about {
	width: 1200px;
	height: auto;
}
.about_spa_extra {
	height: auto;
	width: 1000px;
	margin: 0 auto;
	padding-top: 73px;
}
.about_spa_single_left {
	width: 385px;
	float: left;
	margin-right: 10px;
	height: 400px;
	padding-top: 50px;
	margin:0 22px;
}
.about_spa_single_left h1 {
	padding: 7px;
	font-weight:inherit;
	font-size:30px;
}
.about_spa_single_left p {
	padding: 7px;
	color: #777;
	font-size: 18px;
}
.about_spa_single_right {
	width: 385px;
	float: right;
	margin-right: 10px;
	height: 400px;
	padding-top: 50px;
	margin:0 22px;
}
.about_spa_single_right img {
 width:100%;
}
.about_spa2{
	width: 1200px;
	height: auto;
}
.about_spa2_extra {
	height: auto;
	width: 1050px;
	margin: 0 auto;
	padding: 65px 0;
}
.about_spa2_single {
	width: 244px;
	float: left;
	margin: 0 53px;
}
.about_spa2_single_heading{}
.about_spa2_single_heading img {
	float: left;
}
.about_spa2_single_heading h3 {
	float: left;
	padding: 6px 3px;
}
.about_spa2_single p {
	color: #777;
	padding: 15px 0;
	font-size: 18px;
}


/*restrurant*/


 .banner_restaurant{
	background: url("img/restrurant.jpg");
	height: 504px;
	background-size: cover;
	margin-top: 105px;
 }
 .banner_restaurant p {
	display: block;
	padding: 4px;
	text-align: center;
	width: 837px;
	margin: auto;
	margin-top: 433px;
	font-size: 26px;
	background-color: white;
	color: black;
}
.banner_restaurant2 {
	background: url("img/restrurant3.jpg");
	background-attachment:fixed;
	width: 1200px;
	height: 450px;
}
.banner_restaurant3{
	background: url("img/restrurant2.jpg");
	background-attachment:fixed;
	width: 1200px;
	height: 400px;
}

/*contact*/

h1 {
	text-align: center;
	font-weight: normal;
}
.single_contact {
	margin-top: 71px;
	height: 265px;
}
.single_contact_left {
	width: 453px;
	height: auto;
	float: left;
	margin: 79px 10px 0 138px;
}
.single_contact_left p {
	color: #777;
}
.single_contact_right {
	width: 585px;
	margin: 79px 0 0 10px;
	float: right;
	height: auto;
}
.single_contact_right p{
	color:#777;
}
.about_contact_single_right{
	width: 385px;
	float: right;
	margin-right: 10px;
	height: 400px;
	padding-top: 50px;
	margin:0 22px;
}
.about_contact_single_right img {
	width: 385px;
	height: 336px;
}

/*BOOK*/

.background {
	background-image: url("keys-hotel-aures-aurangabad2.jpg");
	background-size: cover;
	width: 1200px;
	margin: 0 auto;
	height: auto;
	z-index:-1;
	margin-top: 105px;
}
.book {
	background-color: white;
	width: 962px;
	height:auto;
	margin: 150px auto 0 auto;
	opacity: 0.8;
	z-index: 9999;
}
.book input[type="text"] {
	background-color: white;
	color: #1f1f1f;
	width: 300px;
	height: 30px;
	margin: 10px;
	font-size: medium;
	border:2px solid #7878;
}
.book input[type="email"] {
	background-color: white;
	color: #1f1f1f;
	width: 300px;
	height: 30px;
	margin: 10px 0;
	font-size: medium;
	border:2px solid #7878;
}
.book input[type="date"] {
	background-color: white;
	color: #525252;
	width: 459px;
	height: 30px;
	margin: 10px 0 10px 10px;
	font-size: medium;
	border: 2px solid #7878;
}
.book select{
	background-color: white;
	color: #6c6c6c;
	width: 464px;
	height: 30px;
	margin: 10px 0 10px 10px;
	font-size: medium;
	border: 2px solid #7878;
}
.book textarea {
	width: 941px;
	height: 181px;
	padding: 10px 0 0 0;
	box-sizing: border-box;
	border: 2px solid #7878;
	border-radius: 4px;
	background-color: white;
	resize: none;
	font-size: larger;
	margin: 10px;
}
.book input[type="submit"] {
	margin: 30px 10px 80px 10px;
	padding: 10px 30px;
	color: white;
	background-color: #e0c030;
	border: 2px solid #f8a548;
}
.book input[type="submit"]:hover {
	background-color: #B1A222;
	border: none;
}


/*book2*/

.book2 {
	background-color: white;
	width: 962px;
	height: 500px;
	margin: 150px auto 0 auto;
	opacity: 0.8;
	z-index: 9999;
}
.book2 p {
	text-align: center;
	padding-top: 160px;
	color: #777;
	font-size: 30px;
	font-weight: bolder;
	padding-bottom: 55px;
}
.book2 a {
	text-decoration: none;
	background-color: #f8d848;
	color: white;
	margin-left: 410px;
	padding: 10px 30px;
	margin-bottom: 20px;
}
.book2 a:hover {
	background-color: #B1A222;
}
</style>
</body>
</html>