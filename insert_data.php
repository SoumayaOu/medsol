<?php
    include_once 'connect_db.php';
    $success  = "";
    if(isset($_POST['add']))
    {  
        $cin_med = $_POST['cin_med'];
    $nom_med = $_POST['nom_med'];
    $prenom_med = $_POST['prenom_med'];
    $adresse_med = $_POST['adresse_med'];
	$specialite = $_POST['specialite'];
	$email_med = $_POST['email_med'];
	$pw_med = $_POST['pw_med'];
        
        $sql =  "insert into medecin(cin_med, nom_med, prenom_med,specialite,adresse_med, email_med, pw_med) values( '$cin_med', '$nom_med', '$prenom_med', '$adresse_med', '$specialite', '$email_med', '$pw_med')";
        $del = "delete from medecin where cin_med='$cin_med'";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully !";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>                   