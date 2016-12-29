<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Page de test</title>
	<meta charset="UTF-8"/>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	
</head>
<style>
/* 5. CSS */
<!-- Écrire ici le code CSS relatif à la partie 5. HTML/CSS -->
<style>
ul {
  
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
    
}

li {
    float: left;
     list-style-type: none;
     border: 1px solid #555;
}

li a {
    display: block;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111111;
}
</style>
<body>

<img src="dev.png" alt="Image de test" />
<img src="dev.png" alt="Image de test" />
<img src="dev.png" alt="Image de test" />

<?php
/* 1. Php */
/* Écrire ici le code relatif à la partie 1. Php */
$date = '15-01-2008';
$d=date('Y-m-d', strtotime($date));
echo "la date est : ".$d;

echo "</br>";


$string = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce venenatis velit non nibh. Nullam feugiat vehicula eros. Nullam mi arcu, porta at, fermentum non, laoreet eget, sem. Nunc quam nunc, lacinia id, sagittis non, condimentum eget, augue. Nunc ultrices malesuada diam. Cras bibendum. Fusce lobortis pellentesque purus. Etiam ac purus et diam condimentum venenatis. Vestibulum imperdiet mattis dolor. Etiam sit amet nisi sed orci elementum tincidunt. Etiam aliquam neque non nibh. Mauris pede orci, fringilla sed, bibendum vitae, semper a, quam.";	
  //$str = strtoupper($string);

  $string1=$string;
  $string1= explode(" ", $string1);

for($i=0; $i< count($string1); $i+=2){

   $string1[$i]= strtoupper($string1[$i]);

   }

   for($i=0; $i< count($string1); $i++){

   echo " ".$string1[$i];

   }

   
   echo "</br>";echo "</br>";
  
   for($i=0; $i< strlen($string); $i+=2){

   $string[$i]= strtoupper($string[$i]);

   }

  echo "</br>";echo "</br>";
  
 
  echo $string;
  

/* 2. MySQL */
/* Écrire ici le code relatif à la partie 2. MySQL */

/* 3. Php/MySQL */
/* Écrire ici le code relatif à la partie 3. Php/MySQL */
include("conn.php");

    $conn_to_db = init_db();
  $sql = $conn_to_db->prepare( "SELECT * FROM places_small" );
  $sql->execute();
  $sql=$sql->fetch(PDO::FETCH_ASSOC);



     echo "</br>";

     foreach ($sql as $key => $value) {
         # code...
         echo " ".$key;
     }

echo "</br>";echo "</br>";
     
     $sql1 = $conn_to_db->prepare( "SELECT * FROM  places_small as s, countries as c
       WHERE c.id = s.pcountry" );
          $sql1->execute();
       $sql1=$sql1->fetch(PDO::FETCH_ASSOC);

       var_dump($sql1);



       $conn_to_db = init_db();
    $sql = "SELECT * FROM  places_small as s, countries as c
       WHERE c.id = s.pcountry ";
    $result = $conn_to_db->query($sql);

    var_dump($result);

      foreach ($result as $row) {
        echo $row["id"];
      }

?>

 </br> </br>

<script type="text/javascript">
/* 4. JavaScript */
/* Écrire ici le code relatif à la partie 4. JavaScript */

var nb_element_img;
nb_element_img=$("img").length;
alert(nb_element_img);



</script>

<!-- 5. CSS -->
<!-- Écrire ici le code HTML relatif à la partie 5. HTML/CSS -->



<ul>
  <li><a href="#home">Acceuille</a></li>
  <li><a href="#news">produit</a></li>
  <li><a href="#contact">presse</a></li>
  <li><a href="#about">partenaire</a></li>
  <li><a href="#about">acces cient</a></li>
  <li><a href="#about">contact</a></li>
</ul>


</body>
</html>
