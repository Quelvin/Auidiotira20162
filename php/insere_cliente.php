<?php

	include('_conexao.php');

	if (isset($_POST['enviar_cliente'])) {
    
    $nome = strip_tags(trim($_POST['inputNome']));
    $telefone = strip_tags(trim($_POST['inputTelefone']));
    $email = strip_tags($_POST['inputEmail']);
    

	$sqlquery = "INSERT INTO cliente (nome,telefone,email) VALUES ('$nome',$telefone,'$email');";

    if ($con->query($sqlquery) === TRUE) {

    //echo "New record created successfully";
        header('Location: http://localhost/stable/cadastro.html');
        exit;

    } else {
    echo "Error: " . $sqlquery . "<br>" . $con->error;
    }

    //mysqli_query($con, $sqlquery);

    	


    

 
    
   
    
}


