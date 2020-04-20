<?php  
include('menubar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>docteur</title>
</head>
<body>

<div class="docteur"> 
	<?php  
include('menu_doc.php');
?>
	<br>
	<br>
	<h1>Docteur Gastrologue</h1>
	<br>
	<a href=""><div class="img">
	</div></a>
	
	<div class="blabla">
		<p> nom: DJILSI</p>
		<p> prenom: Baham</p>
		<p> spécialté: Gastrologue</p>
		

		<img src="image/phone.jpg" style="width: 16px; height: 16px;" ><label> 00 336 321 564</label><br>
		<img src="image/mail.png" style="width: 17px; height: 17px;" ><label> doc.kinkong@gmail.com</label>

	</div>
	<a href=""><div class="img2">
	</div></a>
	
	<div class="blabla2">
			<p> nom: JACK</p>
		<p> prenom: Maissane</p>
		<p> spécialté: Gastrologue</p>
		
		<img src="image/phone.jpg" style="width: 16px; height: 16px;" ><label> 00 234 654 888</label><br>
		<img src="image/mail.png" style="width: 17px; height: 17px;" ><label> doc.dupond@gmail.com</label>
	</div>
	<br>
	<br>
		<a href=""><div class="img3">
	</div></a>
	
	<div class="blabla3">
		<p> no: JONSON</p>
		<p> prenom: Sarah</p>
		<p> spécialté: neurologue</p>
		

		<img src="image/phone.jpg" style="width: 16px; height: 16px;" ><label> 00 336 321 564</label><br>
		<img src="image/mail.png" style="width: 17px; height: 17px;" ><label> doc.kinkong@gmail.com</label>

	</div>
	<a href=""><div class="img4">
	</div></a>
	
	<div class="blabla4">
			<p> nom: TAVAULT</p>
		<p> prenom: Norman</p>
		<p> spécialté: neurologue</p>
		
		<img src="image/phone.jpg" style="width: 16px; height: 16px;" ><label> 00 234 654 888</label><br>
		<img src="image/mail.png" style="width: 17px; height: 17px;" ><label> doc.dupond@gmail.com</label>
	</div>
</div>
<br>
<br>
<img src="image/doctor_heart_rate.png">
	        <?php  
include('footer.php');

?>
<style>
	body{
		margin:0;
		padding:0;
		background-color: #B8D7D5;
		 
	
	}
	.docteur{
		position: relative;
	top: 56%;
    margin-top: 100px;
	left: 10%;
	
	transform: translate(-50% -50%);
	height: 750px;
	width:1100px;
	padding: 60px 40px;
	box-sizing: border-box;
	background-color: rgba(49,96,100,0.4);
	}
	.img{
		height: 200px;
		width:200px;
		background-image:url("image/docteur8.jpg");
		background-size:cover;
	}
	.blabla{
		position:absolute;
		padding-left:10px;
		margin-top:-200px;
		margin-left:200px;
			height: 200px;
		width:200px;
		background-color: transparent;
		border: solid 1px #4B908E;
		color:#fff;
/*#4B908E*/
	}
	.img2{
		position:absolute;
		margin-top:-200px;
		margin-left:600px;


			height: 200px;
		width:200px;
		background-image:url("image/docteur7.jpg");
		background-size:cover;

	}
	.blabla2{
			position:absolute;
		margin-top:-200px;
		margin-left:800px;
			padding-left:10px;
			height: 200px;
		width:200px;
		background-color: transparent;
		border: solid 1px #4B908E;
		color:black;

	}
	.img3{
				position:absolute;

			height: 200px;
		width:200px;
		background-image:url("image/docteur2.jpg");
		background-size:cover;
	}
	.blabla3{
				position:absolute;
		
		margin-left:200px;
			padding-left:10px;
			height: 200px;
		width:200px;
		background-color: transparent;
		border: solid 1px #4B908E;
		color:#fff;
	}
	.img4{
			position:absolute;
		
		margin-left:600px;


			height: 200px;
		width:200px;
		background-image:url("image/docteur1.jpg");
		background-size:cover;
	}
	.blabla4{
			position:absolute;
		
		margin-left:800px;
			padding-left:10px;
			height: 200px;
		width:200px;
		background-color: transparent;
		border: solid 1.5px #4B908E;
		color:#fff;
	}
	label{
		font-size: 12px;
	}
	.menu a.active {
    background-color: #ECF9EE;
    color: black;
}
h1{
	text-align: center;
}
	</style>

</body>
</html>