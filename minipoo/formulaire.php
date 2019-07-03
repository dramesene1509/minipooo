<?php 
    include_once ("etudiant.php");
    include_once ("boursier.php");
    include_once ("nonboursier.php");
    include_once ("ServiceEtudiant.php");
    include_once ("pension.php");
    include_once ("loger.php");
    
    //include ("menu.php");
    if (isset($_POST['inserer']) && $_POST['addresse']!=""){
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $tel = $_POST['tel'];
        $datedenaissance = $_POST['datedenaiss'];
        $addresse = $_POST['addresse'];

        $nonboursier= new  Nonboursier ($matricule,$nom,$prenom,$mail,$tel,$datedenaissance,$addresse); 
        $service= new ServiceEtudiant();
        $service->addEtudiant($nonboursier);
        /*$EtuServices->addEtudiant($etud); */
        
    }
        elseif (isset($_POST['inserer']) && $_POST['libelle']!=""){
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $tel = $_POST['tel'];
        $datedenaissance = $_POST['datedenaiss'];
        $libelle=$_POST['libelle'];

        $etu=new Boursier($matricule,$nom,$prenom,$mail,$tel,$datedenaissance,$libelle);
        $test= new ServiceEtudiant();
        $test->addEtudiant($etu);
        }
        elseif (isset($_POST['inserer']) && $_POST['libelle']!="" && $_POST['chambre']!=""&& $_POST['batiment']){
            $matricule = $_POST['matricule'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $mail = $_POST['mail'];
            $tel = $_POST['tel'];
            $datedenaissance = $_POST['datedenaiss'];
            $libelle=$_POST['libelle'];
            $chambre=$_POST['chambre'];
                $batiment=$_POST['batiment'];
        //$idpension=$_POST['id_pension'];

        $loger=new Loger($matricule,$nom,$prenom,$mail,$tel,$datedenaissance,$libelle,$chambre,$batiment);
        $test0= new ServiceEtudiant();
        $test0->addEtudiant($loger);
        

     
       
    
     
      
 
    }
    include_once ("menu.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
  
</head>
<body>
    

    <div class="container">
    <form action='formulaire.php' method='POST'>
    <fieldset><legend>Formulaire d'enregistrement d'Apprenants</legend>
        <div id ="input">
        <li><label for="name"> </label>
    <input type="text" name="matricule" placeholder="matricule" required/><br/><br/>

    <li><label for="name"></label>
        <input type="text" name="nom" placeholder="nom" required/><br/><br/>

        <li><label for="name"> </label>
    <input type="text" name="prenom" placeholder="prenom" required/><br/><br/>

    <li><label for="name"></label>
    <input type="text" name="mail" placeholder="mail" required/><br/><br/>

    <li><label for="name"></label>
    <input type="number" name="tel"  pattern="[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{2}" maxlength="9" placeholder="tel" required/><br/><br/>

    <li><label for="name"></label>
    <input type="date" name="datedenaiss" placeholder="" required/><br/><br/>
</div>
    <li>
        <p>
        Non Boursier<input type="radio" name="opt_rad" id="nonBoursier" value="oui" onclick="showHideBourse()">
                    <label for="nonBoursier"></label>
                    <fieldset id="infoNonBoursier" hidden>

                    <label  for="name">Adresse</label>
                    <input  type="text" name='addresse' id="adresse" placeholder="Adresse"/>
                    </fieldset>
        Boursier<input type="radio" name="opt_rad" id="Boursier" value="oui" onclick="showHideBourse()">
                    <label for="Boursier"></label>
                    <fieldset id="infoBoursier">
                    <label for="statut">Type de Bourse :</label>
                    <select size="1" name="libelle" id="status">
                        <optgroup>
                        <option value="demi">Demie Bourse</option>
                        <option value="complete">Bourse Complet</option>
                        </optgroup>
                             </select> <br/>
                        <div id="nonloger">
                    <input type="radio" name="opt_rad" id="nonLoger" value="non" onclick="showHideBourse()"/>nonloger
                    <label for="nonloger"></label>

                    <input type="radio" name="opt_rad" id="Loger" value="non" onclick="showHideBourse()"/>Loger
                    <label for="Loger"></label>
                                 <fieldset id="infoLoger">
                            <label for="name">Chambre : </label>
                    <select size="1" name="chambre" id="status">
                            <optgroup>
                                    <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </optgroup>
                        </select> <br/>
                        <select size="1" name="batiment" id="status">
                            <optgroup>
                            <label for="name">BATIMENTS : </label>
                                <option value="PAVILLON A">PAVILLON A</option>
                                <option value="PAVILLON B">PAVILLON B</option>
                            </optgroup>
                        </select> <br/>
                    </div>
                <p>
            </fieldset>         
					
        <div>
             <input type="submit" name="inserer" value="insérer" required/><br/><br/>
        </div>
        
   </fieldset>
    </form>
    <style>
body{
   
}

</style>
</div>
  
   <script>
        document.getElementById('infoNonBoursier').style.display='none';
        document.getElementById('infoBoursier').style.display='none';
    function showHideBourse() {
                        if (document.getElementById('nonBoursier').checked) {
                            document.getElementById('infoNonBoursier').style.display='block';
                            document.getElementById('infoBoursier').style.display='none';
                        }

                        else if(document.getElementById('Boursier').checked) {
                            document.getElementById('infoBoursier').style.display='block';
                            document.getElementById('infoNonBoursier').style.display='none';
                            document.getElementById('infoLoger').style.display='none';

                          
                }
                if (document.getElementById('Loger').checked) {
                                document.getElementById('infoLoger').style.display='block';
                        }
    }
           
    </script>
</body>
</html> 
<style>
body{
  background: url(bluebackground.jpg) no-repeat center fixed ; 
  background-size: cover;
}
.menu{
  margin-right: 5%;
  margin-left: 5%;
  margin-top: 0%;
}


  * {
    box-sizing: border-box;
  }
  
  /* Add padding to containers */
  .container {
    padding: 125px;
    width:50%;
    text-align: center;
    display:inline block;
    margin right:10%
    
  }
  
  /* Full-width input fields */
  input[type=text], input[type=date], input[type=number],input[type=submit]{
    width: 100%;
    //padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 10px;
    text-align: center;
  }
  
 // input[type=text]:focus, input[type=date]:focus {
    background-color: #ddd;
    outline: none;
  }
  
  /* Overwrite default styles of hr */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
  
  /* Set a style for the submit button */
  .registerbtn {
    background-color: rgb(197, 70, 48);
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    border-radius: 5px;
  }
  
  .registerbtn:hover {
    opacity: 1;
  }
  #amina{
    text-align: center;
    width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    
  }*
  /*Strip the ul of padding and list styling*/
ul {
	list-style-type:none;
	margin:0;
	padding:0;
	position: absolute;
}

/*Create a horizontal list with spacing*/
li {
	display:inline-block;
	float: left;
	margin-right: 1px;
}

/*Style for menu links*/
li a {
	display:block;
	min-width:140px;
	height: 50px;
	text-align: center;
	line-height: 50px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #fff;
	background: #2f3036;
  text-decoration: none;
  margin-top: 5%;
}

/*Hover state for top level links*/
li:hover a {
	background: rgb(197, 70, 48);
}

/*Style for dropdown links*/
li:hover ul a {
	background: #dddddd;
	color: #2f3036;
	height: 40px;
  line-height: 40px;
  
}

/*Hover state for dropdown links*/
li:hover ul a:hover {
	background:  rgb(197, 70, 48);;
	color: #fff;
}

/*Hide dropdown links until they are needed*/
li ul {
	display: none;
}

/*Make dropdown links vertical*/
li ul li {
	display: block;
	float: right;
}

/*Prevent text wrapping*/
li ul li a {
	width: auto;
	min-width: 100px;
	padding: 0 20px;
}

/*Display the dropdown on hover*/
ul li a:hover + .hidden, .hidden:hover {
	display: block;
}

/*Style 'show menu' label button and hide it by default*/
.show-menu {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	text-decoration: none;
	color: #fff;
	background: #19c589;
	text-align: center;
	padding: 10px 0;
	display: none;
}

/*Hide checkbox*/
input[type=checkbox]{
    display: none;
}

/*Show menu when invisible checkbox is checked*/
input[type=checkbox]:checked ~ #menu{
    display: block;
}


/*Responsive Styles*/

@media screen and (max-width : 760px){
	/*Make dropdown links appear inline*/
	ul {
		position: static;
		display: none;
	}
	/*Create vertical spacing*/
	li {
		margin-bottom: 1px;
	}
	/*Make all menu links full width*/
	ul li, li a {
		width: 50%;
	}
	/*Display 'show menu' link*/
	.show-menu {
		display:block;
	}
}
</style>


