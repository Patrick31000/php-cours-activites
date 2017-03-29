<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php foreach($students as $student){
       echo "<li>".$student."</li> ";
       }?>
       </li>
     </ul> 
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day"><?php for($d=1; $d<=31; $d++){
       echo '<option value="' . $d . '">'.$d.'</option>';
       }
       ?></select>
       <label for="month">Month</label>
       <select  name="month"><?php for($m=1; $m<=12; $m++){
       echo '<option value="' . $m . '">'.$m.'</option>';
       } ?></select>
       <label for="year">Year</label>
       <select  name="year"><?php for($y=0; $y<=3000; $y++){
       echo '<option value="' . $y . '">'.$y.'</option>';
       } ?></select>
     </form>
     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <?php 
     if($_GET['sexe'] == "fille"){
         echo '<p>Je suis une fille</p>';  
     }
      else if($_GET['sexe'] == "garçon"){
     echo '<p>Je suis un garçon</p>';
      } 
      else  {
        echo '<p>Je suis indéfini</p>';
      }
      ?>
       
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <!-- Instruction : Afficher ce bloc dans les autres cas -->

  </body>
</html>
