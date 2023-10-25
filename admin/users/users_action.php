<?php
require_once '../connect.php';



switch ($_POST['action']){

  // Pesquisa por Nome
  
  

  case '1':

    
    // NIF

    $username = $_POST['username'];
    
    $var = "";
    
     
      $obter_clientes=" SELECT * FROM admins WHERE nome = '$username' LIMIT 1";
        $result = mysqli_query($conn, $obter_clientes);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);
  

break;

case '2':
    
    // Email

    $err = '';    

    $email_username = '';
    
    $nome_username = $_POST['nome_username'];
    
    
    // Validação de Emails
    
    if ($_POST['email_username'])
    {
        if (!filter_var($_POST['email_username'], FILTER_VALIDATE_EMAIL) === false) 
        {
            $email_username = $_POST['email_username'];
        } 
        else 
        {
            $err .= '<p> Endereço de Email Inválido </p>';
        }
    }
    else
    {
        $err .= '<p> Endereço de Email*</p>';
    }
    
    
    // Tipos de Utilizadores
    
    $tipo_pri_username= $_POST['tipo_pri_username'];
    
    //Tipos de Privilegios
    
    
    $privilegios_username = $_POST['privilegios_username'];
    
    //Imagem Anterior
    
    $image_tmp = $_POST['image_tmp'];
    

    
    if (!$err) 
    {
        
        // Logo
        
        $logo = $_POST['logo'];
        $password_username= $_POST['password_username'];
        
        
        // Logo e Password não foram alterados - Caso 1
        
        if ($logo == '' && $password_username == '')
        {
            $sql = "UPDATE admins SET email = '$email_username', tipo = '$tipo_pri_username', privilegios = $privilegios_username WHERE nome='$nome_username'";
            $result = mysqli_query($conn,$sql);
            if ($result) 
            {
                $response = 1; 
            } 
            else 
            {
                $response = 0;
            }
        }
        
        // Logo nao foi alterado mas password alterado
        
        else if ($logo == '' && $password_username != '')
        {
            $password = md5($password_username);
            $sql = "UPDATE admins SET email = '$email_username', tipo = '$tipo_pri_username', privilegios = $privilegios_username, pass = '$password' WHERE nome='$nome_username'";
            $result = mysqli_query($conn,$sql);
            if ($result) 
            {
                $response = 2; 
            } 
            else 
            {
                $response = 0;
            }
        }
        
        // Logo foi alterado mas pasword nao foi alterado
        
        else if ($logo != '' && $password_username == '')
        {
            
            $l = explode("\\",$logo);
            
            
            
            $logo_path = 'logo/' . $l[2];
            
            $lg = $l[2];
            
            
            
            $sql = "UPDATE admins SET email = '$email_username', tipo = '$tipo_pri_username', privilegios = $privilegios_username, logo = '$logo_path' WHERE nome='$nome_username'";
            $result = mysqli_query($conn,$sql);
            if ($result) 
            {
                $response = 3; 
            } 
            else 
            {
                $response = 0;
            }
        }
        
        // Logo e Password Alterados
        
        else if ($logo != '' && $password_username != '')
        {
            
            
            $password = md5($password_username);
            
            
            $l = explode("\\",$logo);
            
            
            
            $logo_path = 'logo/' . $l[2];
            
            $lg = $l[2];
            
            
            
            $sql = "UPDATE admins SET email = '$email_username', tipo = '$tipo_pri_username', privilegios = $privilegios_username, pass = '$password' , logo = '$logo_path' WHERE nome='$nome_username'";
            $result = mysqli_query($conn,$sql);
            if ($result) 
            {
                $response = 4; 
            } 
            else 
            {
                $response = 0;
            }
        }

        $r=array('error'=>'','success' => $response, 'user' => $nome_username);
        echo json_encode($r);
    }
    else
    {
        $r = array('error' =>$err, 'success' =>'', 'user' => $nome_username);
        echo json_encode($r);
    }
    
    
    
    
break;



}


mysqli_close($conn);


?>