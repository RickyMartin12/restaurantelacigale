<?php

date_default_timezone_set('Europe/Lisbon');

require_once '../../common.php';

require_once '../connect.php';

$response = 0;


switch ($_POST['action']){

  case '1':

  	// Visualizar os valores dos testimonials
  	
  	$query = "SELECT * FROM comentario WHERE activar_field = 1 ";
    $result = mysqli_query($conn, $query);
    
    $count = 0;
    $sum_com_food = 0;
    $sum_com_servicos = 0;
    $sum_com_valor = 0;
    $sum_com_ambiente = 0;
    $sum_recommended = 0;
    
    
    if (mysqli_num_rows($result) > 0) 
    {
             while($row = mysqli_fetch_assoc($result)) 
             {
                 $sum_com_food += $row['classifcacao_comida'];
                 $sum_com_servicos += $row['classifcacao_servicos'];
                 $sum_com_valor += $row['classifcacao_valor'];
                 $sum_com_ambiente += $row['classifcacao_ambiente'];
                 $sum_recommended += $row['classificacao_recommended'];
                 
                 $count = $count + 1;
				$arr3[] = array(
				    'id'=> $row['id'], 
				    'nome' => $row['nome'], 
				    'assunto' => $row['assunto'], 
				    'mensagem' => $row['mensagem'], 
				    'classifcacao_comida' => $row['classifcacao_comida'], 
				    'classifcacao_servicos' => $row['classifcacao_servicos'],
				    'classifcacao_valor' => $row['classifcacao_valor'], 
				    'classifcacao_ambiente' => $row['classifcacao_ambiente'],

				);
             }
     }
     
     
     $sum_med_com_food = ($sum_com_food / $count);
     $sum_med_com_servicos = ($sum_com_servicos / $count);
     $sum_med_com_valor = ($sum_com_valor / $count);
     $sum_med_com_ambiente = ($sum_com_ambiente / $count);
     $med_recommended = ($sum_recommended / $count);
     
     $ranking_media = ($sum_med_com_food + $sum_med_com_servicos + $sum_med_com_valor + $sum_med_com_ambiente) / 4;
     

     

     
     $arr4[] = array ('testimonials' => $arr3, 'fod' => $sum_med_com_food, 'ser' => $sum_med_com_servicos, 'valor' =>  $sum_med_com_valor, 'ambiente' => $sum_med_com_ambiente, 'media' => $ranking_media, 'rec' => $med_recommended);
     
     echo json_encode($arr4);
    
    
    
    break;
    
    case '2':
        
        $err='';
        
        // Novo Comentario
        
        
        
        // Nome da Pessoa
        
        if(!$_POST['nome'])
        {
            $err .= "- ".$lang['nome_pessoa']." <span class='w3-text-red'> *</span><br>";
        }
        else
        {
            $nome = $_POST['nome'];
        }
        
        // Mensagem
        
        if(!$_POST['mensagem'])
        {
            $err .= "- ".$lang['mensagem']." <span class='w3-text-red'> *</span><br>";
        }
        else
        {

            if (strlen($_POST['mensagem']) > 700)
            {
                $err .= "- O testemunho não pode ter mais de 700 caracteres, por favor rectifique o texto. <span class='w3-text-red'> *</span><br>";
            }
            else
            {
                $mensagem = $_POST['mensagem'];
            }
        }
        
        // Classificação da comida
        
        if(!$_POST['vote1'])
        {
            $err .=   "- ".$lang['classificacao_comida'] . "<span class='w3-text-red'> *</span><br>";
        }
        else
        {
            $vote1 = $_POST['vote1'];
        }
        
        // Classificação dos servicos
        
        if(!$_POST['vote2'])
        {
            $err .=   "- ".$lang['classificacao_servico'] . "<span class='w3-text-red'> *</span><br>";
        }
        else
        {
            $vote2 = $_POST['vote2'];
        }
        
        // Classificação do valor
        
        if(!$_POST['vote3'])
        {
            $err .=   "- ".$lang['classificacao_preco'] . "<span class='w3-text-red'> *</span><br>";
        }
        else
        {
            $vote3 = $_POST['vote3'];
        }
        
        // Classificação do ambiente
        
        if(!$_POST['vote4'])
        {
            $err .=   "- ".$lang['classificacao_ambiente'] . "<span class='w3-text-red'> *</span><br>";
        }
        else
        {
            $vote4 = $_POST['vote4'];
        }
        
        
        // Classificação recomendada
        
        if(!$_POST['vote5'])
        {
            $err .=   "- ".$lang['classificacao_rec_amigo'] . "<span class='w3-text-red'> *</span><br>";
        }
        else
        {
            $vote5 = $_POST['vote5'];
        }
        
        
        if (!$err) 
        {

        $sql ="INSERT INTO comentario (nome, assunto, mensagem, classifcacao_comida, classifcacao_servicos, classifcacao_valor, classifcacao_ambiente, classificacao_recommended, activar_field) VALUES ('$nome', '-/-', '$mensagem',$vote1, $vote2, $vote3, $vote4, $vote5, 0)";
        $result = mysqli_query($conn,$sql);
        if ($result) 
        {
            $response = 1; 
            $last_id = mysqli_insert_id($conn);
        }  
        else 
        {
            $response = 0;
            $last_id = 0; 
        }

        $r=array('error'=>'','success' => $response,'id' => $last_id);
        echo json_encode($r);
        }
        else
        {
        $r = array('error' =>$err, 'success' =>'','id' =>'');
        echo json_encode($r);
        }

        if ($response == 1)
        {
           // Server

           $body_server_alt = "This is the body in plain text for non-HTML mail servers";
           $subject_server = "Pedido de Informações dos Testemunhos";
           $body_server = "<div style='width:95%; margin-left:2.5%;'>
        <h4>Foi efectuado um novo comentário no Restaurante La Cigale. Por Favor verifique o comentário e valide se for oportuno.</h4>
        <hr>
        <b> Nome:</b> $nome<br /><br />
        <b> Mensagem:</b> $mensagem<br /><br />
        <b> Classificação Comida :</b> $vote1 <br /><br />
        <b> Classificação Serviços:</b> $vote2 <br /><br/>
        <b> Classificação Valor:</b> $vote3 <br /><br />
        <b> Classificação Ambiente:</b> $vote4 <br /><br />
        <b> Classificação recomendada:</b> $vote5 <br /><br />
        <br>
        </div>";

           
         $from ="jluiscalado@hotmail.com";
         $name = "Jéssica Luis Calado";

         $to_server1 = "jluiscalado@hotmail.com";
         $to_name1 = "Jéssica Luis Calado";

         $to_server2 = "jessicamluis@outlook.com";
         $to_name2 = "Jéssica Luis";

           /*ServersendtoOwnEmail($GLOBALS['from'], $GLOBALS['name'], $GLOBALS['to_server1'], $GLOBALS['to_name1'], $GLOBALS['to_server2'], $GLOBALS['to_name2'], $GLOBALS['subject_server'], $GLOBALS['body_server'], $GLOBALS['body_server_alt']);*/
           


        
        


         }
        
        
    break;
    
    case '3':
        
        $id = $_POST['id'];

        $sql=" UPDATE comentario SET activar_field = 1 WHERE id = $id";
          $result = mysqli_query($conn,$sql);
          if ($result)
          {
              echo 1;
          }
          else
          {
              echo 0;
          }
        
    break;
    
    
    case '4':
        
        $reg_del= "DELETE FROM comentario WHERE id ='{$_POST['id']}'";
        $result = mysqli_query($conn,$reg_del);
        if ($result){
          echo 2; 
        }
        else {
          echo 0;
        }
        
    
    break;
    
    case '5':
        
        $id = $_POST['id'];

        $nome = $_POST['nome'];
        
        $mensagem = $_POST['mensagem'];
        
        $comida = $_POST['comida'];
        
        $servicos = $_POST['servicos'];
        
        $valores = $_POST['valores'];
        
        $ambiente = $_POST['ambiente'];
        
        $rec = $_POST['rec'];
        
        $active = $_POST['active'];
        
        
        $sql =" UPDATE comentario SET nome='$nome', mensagem='$mensagem', classifcacao_comida=$comida, classifcacao_servicos=$servicos, classifcacao_valor=$valores, classifcacao_ambiente=$ambiente, classificacao_recommended=$rec, activar_field=$active  WHERE id = $id";
        
         $result = mysqli_query($conn,$sql);
          if ($result)
          echo 1;
        else  
          echo 0;
        
        break;
        
    break;
    
    
}

mysqli_close($conn);
    
?>