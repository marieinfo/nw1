<?php  
include('menubar.php');

if (isset($_POST["submit"])) {
    # code...
    $servername = "localhost";
$username = "root";
$password = "";
$db="hopital_licence";
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gendre=$_POST["gender"];
$adresse=$_POST["adresse"];
$date_naiss=$_POST["date_naiss"];
$lieu_naiss=$_POST["lieu_naiss"];
$nationalite=$_POST["nationalité"];
$site_f=$_POST["site_f"];
$service=$_POST["service"];
$date_e=$_POST["date_e"];
$mode_e = $_POST["mode_e"];
$h_e = $_POST["heure_e"];


// hadou gah ?
$er="";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
//  id_p  nom_p   prenom_p  date_naiss  sexe  nationalite   adresse_p   lieu_naiss  situation_f   n_service   type_entre  date_entre  heure_entre
// tesstaf li9 ykou kifkif matzidliiche good?
$sql = "INSERT INTO patient ( nom_p ,  prenom_p , date_naiss , sexe , nationalite  , adresse_p ,  lieu_naiss  ,situation_f  , n_service ,  type_entre , date_entre , heure_entre
)
 VALUES ('$firstname', '$lastname','$date_naiss','$gendre' , '$nationalite' ,'$adresse', '$lieu_naiss', '$site_f', '$service','$mode_e','$date_e','$h_e')";
$conn->query($sql);
$conn->close();


}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Bulletin-admission</title>
	<link rel="stylesheet" type="text/css" href="admiss.css">
    <link rel="shortcut icon" type="image/x-icon" href="image/logof.png" sizes="16x16 32x32" /> 
    <style type="text/css">
body
{
 background-size: cover;
  background-color: #73C0B0;
  margin: 0;
  padding:0;
}
.plus_grand{
  position: relative;
  width: 100%;
  height: 900px;
  margin-top: 0px;
  top: 0px;
  background-image: url(image/doc2.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  

}
.le_grand{
  position: absolute;
  top: 0%;
    margin-top: 100px;
  left: 20%;
  
  transform: translate(-50% -50%);
  height: 750px;
  width:870px;
  padding: 80px 40px;
  box-sizing: border-box;
  background-color: rgba(49,96,100,0.6);
}
input[type=text], input[type=password], select{
  background-color: transparent;
  width: 25%;
  margin: 15px;
  margin-bottom: 5px;
  border: none;
  border-bottom: solid 2px black;
  outline: none;
  color: #fff;
  font-size: 16px;
}
input[type=submit]{
  /*  */
  /*height: 30px;
  width: 200px;
  outline: none;
  font-size: 16px;
  background-color: transparent;
  border: #158792 solid 2px;
  color: white;
    margin-top: 25px;
    margin-left: 30%;

    border-radius: 5px;
     display: inline-block;*/
     height: 30px;
outline: none;
font-size: 16px;
background-color: transparent;
border: #158792 solid 2px;
color: white;
margin-top: 25px;
margin-left: 30%;
border-radius: 5px;
display: inline-block;
/* */
}
.sec{
  /* */
  margin-left: 10%;
  background: transparent;
  outline: none;
  border: 2px solid #158792;
  color: white;
  text-transform: capitalize;
  font-size: 14px;
  padding: 4px;
  border-radius: 4px;
  height: 30px;
  }
h1{
  text-align: center;
  color: #316064;
  font-family: "Arial Black", Gadget, sans-serif;
  font-size: 28px;
  font-weight: bold;
}
label{
  margin: 10px;
  color :black;
  font-family:  Georgia, serif;
  font-size: 14px;
}
input[type=submit]:hover{
  color: black;
  background-color: #316064;
  cursor: pointer;
  border: transparent;
}
input[type=radio]{
margin: 15px;
}
.logo{
  width: 100px;
  height: 100px;
  overflow: hidden;
  position: absolute;
  top: -50px;
  left: 42%;

  transform: translate(-50% -50%);
  border-radius: 50%;
  background-color: transparent;
  background-image: url(image/logof.png);
  background-size: cover;
}
option{
    font-size:18px;
    background-color:#ffffff;
}
option:before{
    content: ">";
    font-size:20px;
    display:none;
    padding-right:10px;
    padding-left:5px;
    color:#fff;

}
option:hover{
    display:inline;
    background-color: green;

}





</style>

</head>
<body>
  <div class="plus_grand">
    <div class="le_grand">
    <div class="logo">
    </div>
    <h1>Bulletin D'Admission </h1>
    
    
     <form action="" method="post">
              <label for="id">code</label>
               <input type="text" id="idcode" name="code" style="width: 100px"><br>

        <label for="fname">Nom</label> <label style="padding: 0 0 0 185px" for="lname">Prenom</label>
        <label for="fname" style="padding: 0 0 0 180px; margin: 10px;" >sexe</label><br> 
        <input type="text" id="fname" name="firstname" >  
        <input type="text" id="lname" name="lastname" >
              <input type="radio" id="male" name="gender" value="male">
  <label style="font-size: 15px; font-style: normal;" for="male">Mal</label>
  <input type="radio" id="female" name="gender" value="female">
  <label style="font-size: 15px; font-style: normal;" for="female">Femelle</label><br>



        <label for="adr">Adresse</label> <label style="padding: 0 0 0 282px" for="naiss">date-naissance</label> 
        <label style="padding: 0 0 0 90px" for="fname">lieu-de-naissance</label><br>
        <input style="width: 40%" type="text" id="adresse" name="adresse">
        
        <input style="width: 20%" type="text" id="date_naiss" name="date_naiss">
      <input  style="width: 20%" type="text" id="lieu_naiss" name="lieu_naiss" ><br>




      <label  for="nationalité">Nationalité</label>
        <label for="fname" style="padding: 0 0 0 190px; margin: 10px;" >situation-familialle</label><br> 
       
        <input type="text" id="e" name="nationalité" >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" id="" name="site_f" value="marie">
  <label style="font-size: 15px; font-style: normal;" for="male">Marié (e)</label>
  <input type="radio" id="" name="site_f" value="celibataire">
  <label style="font-size: 15px; font-style: normal;" for="female">Célibataire</label>
    <input type="radio" id="" name="site_f" value="divore">
  <label style="font-size: 15px; font-style: normal;" for="female">Divorcé (e)</label><br>

      <label  for="entré">Date-Entré</label>
        <label for="heur_e" style="padding: 0 0 0 130px; margin: 10px;" >Heure </label>
        <label style="padding: 0 0 0 200px;" for="service">Service</label><br>
<input type="text" id="date_e" name="date_e" >
<input type="text" id="heure_e" name="heure_e" >
   <select id="ser" name="service">
          <option value="cardiologie">Cardiologie</option>
          <option value="gastro">gastro</option>
          <option value="neurologie">neurologie</option>
        </select><br>


      <label  for="m_entré">Mode d'Entré</label><br>
          <select id="coun" name="mode_e">
          <option value="normal">Normal</option>
          <option value="evacuation">Evacuation</option>
          <option value="accident">Accident</option>
          <option value="event">Evénement</option>
        </select><br><br>


        <input type="submit" value="envoyez" name="submit">
      <button class="sec">hospitaliser</button>
      </form>
    
  </div>
  </div>
	
  <img src="image/doctor_heart_rate.png">
          <?php  
include('footer.php');

?>

    
</body>

</ht