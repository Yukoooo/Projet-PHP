<?php 
include('harry.php')
include('recuperationDonnees.php')




echo "Bonjour tout le monde" ; 


//création variable 

$prenom = "Laurie";
$nom = "Feuillerat"; 

echo $prenom;
echo $nom;

?> 



<?php




    echo $_POST["pseudo"] ; 
    echo "<br>";
    echo $_POST["mail"] ; 
    echo "<br>";
    echo password_hash($_POST["password"],PASSWORD_BCRYPT);
    echo "<br>";
    echo $_POST["tel"];

    

?>

