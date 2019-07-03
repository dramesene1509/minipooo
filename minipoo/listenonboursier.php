<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../learn_php_oo/stylepoo.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> 
</head>
<body>
<?php
     include ("menu.php");
    ?>

  <table id="mydatatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
          <tr>
          <th>matricule</th>
          <th>nom</th>
          <th>prenom</th>
          <th>mail</th>
          <th>telephone </th>
          <th>datedenaissance</th>
          <th>addresse</th>
      </tr> 
      </thead>
        <tbody>
       <?php     
include_once ("nonboursier.php");
include_once ("ServiceEtudiant.php");
        //$etudiant= new Etudiant();
       $findal1= new ServiceEtudiant();
       $appel1=$findal1->listesnonboursiers();
      $nbourse=array(); 
       if($appel1){
        while(($b1=$appel1->fetch(PDO::FETCH_ASSOC))){
            $nbourse[]= $b1;
            echo '<tr>';
            echo  '<td>'.$b1['matricule'].'</td>';
            echo  '<td>'.$b1['nom'].'</td>';
            echo  '<td>'.$b1['prenom'].'</td>';
            echo  '<td>'.$b1['mail'].'</td>';
            echo  '<td>'.$b1['telephone'].'</td>';
            echo  '<td>'.$b1['datedenaissance'].'</td>';
            echo  '<td>'.$b1['addresse'].'</td>';
            echo '</tr>';
           
          
    }
}
?>  
</tbody>
</table>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
        $('#mydatatable').DataTable({
            dom: "<'row'<'col-sm-4'f><'col-sm-offset-2 col-sm-6'B>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-xs-12 col-sm-7 col-sm-offset-5 text-right'p>>",
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sFirst": "Premier",
                    "sLast": "Dérnier",
                    "sNext": "Suivant",
                    "sPrevious": "Précedent",
                },
                "sSearch": "Recherche:",
                "sEmptyTable": "Aucune donnée disponible",
                "sInfo": "affichage de _START_ à _END_ sur _TOTAL_ éléments",
                "sInfoEmpty": "Aucune donnée disponible",
                "sInfoFiltered": "(Recherché sur _MAX_ éléments au total)",
                "infoPostFix": "",
                "thousands": ",",
                "sLengthMenu": "Afficher par _MENU_ éléments",
                "loadingRecords": "Chargement...",
                "processing": "procéssus...",
                "sZeroRecords": "Aucun résultat trouvé",
            },
            "iDisplayLength": 10,
            "lengthChange": false,
            "info": false,
            responsive: false
        });
    });
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
    padding: 16px;
    ;
    text-align: center;
    
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