<?php      

    // Enregistrement du message

    $pseudo=$_POST["pseudo"];
    $message=$_POST["message"];
    
    $mysqli=new mysqli ("localhost","root","","TP");    
    $stmt = $mysqli->prepare("INSERT INTO minichat(Pseudo,Message) VALUES(?,?)");  //stmt protection contre les injections
    $stmt->bind_param('ss',$pseudo,$message);
    $stmt->execute();
    $stmt->close();    
    
    // Redirection 
    header('Location: minichat.php');
?>