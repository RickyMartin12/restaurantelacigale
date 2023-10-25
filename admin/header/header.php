<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- TopBar -->

<script>

function startDateTime() {
  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){
    dd='0'+dd;
} 
if(mm<10){
    mm='0'+mm;
} 

var today2 = dd+'/'+mm+'/'+yyyy;

var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("ct").innerHTML = today2 + " " + h + ":" + m + ":" + s;
    var t = setTimeout(startDateTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}





</script>


<body onload="startDateTime()">

  <!-- Loader -->
<div class="back" style="display:block;">
    <div class="load"></div>
</div>

<!-- NavBar -->

<div class="row" style="background-color:#414042; border-radius: 0px!important; padding-top: 30px; width: 100%;">
    <div class="col-md-4 pull-left"><img style="width: 120px;" src="images/lacigale_smal.png"></div>
    <div class="col-md-4"><span id="ct"></span></div>
    <div class="col-md-4"><img src="images/<?php echo $logo; ?>" style="width:40px; height: 40px; border-radius: 50px;"> <span style="color: #fff;"><?php echo $_COOKIE['name']; ?></span>
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="color: #fff; background: transparent;">
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#" data-toggle="modal" data-target="#edit_user" ><span class="glyphicon glyphicon-edit"></span> Editar Perfil</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
      </div>
      
       
    
    </div>
</div>

    
<input type="hidden" id="privilegios_tipo" name="privilegios_tipo" value="<?php echo $a ?>">
<input type="hidden" id="username" value="<?php echo $_COOKIE['name']; ?>">


<!-- Acessos aos Administradores -->


    <div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#"><span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
      
      
        <ul class="sidebar-nav" id="sidebar">
          <li class="active"><a href="index.php" ><span id="text_menu">Inicio</span><span class="sub_icon glyphicon glyphicon-home"></span></a></li>  
          <li><a href="testimonials.php" ><span id="text_menu">Testemunhos</span><span class="sub_icon glyphicon glyphicon-list-alt"></span></a></li>
          <li><a href="reservas.php" ><span id="text_menu">Reservas</span><span class="sub_icon glyphicon glyphicon-calendar"></span></a></li>
          <!-- <li><a href="utilizadores.php" ><span id="text_menu">Utilizadores</span><span class="sub_icon glyphicon glyphicon-user"></span></a></li> -->
          
          
        </ul>
      </div>
          
        <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
              






<script>




// Activar Paginas no menu


var cururl = window.location.pathname;
var curpage = cururl.substr(cururl.lastIndexOf('/') + 1);
var hash = window.location.hash.substr(1);
if((curpage == "" || curpage == "/" || curpage == "admin") && hash=="")
{
//$("nav .navbar-nav > li:first-child").addClass("active");
}
else
{
$("#sidebar li").each(function()
{
    $(this).removeClass("active");
});
if(hash != "")
$("#sidebar li a[href*='"+hash+"']").parents("li").addClass("active");
else
$("#sidebar li a[href*='"+curpage+"']").parents("li").addClass("active");
}


//Identificar os Tipos de Privilegios


function changetypePrivilegesUsers()
{
    $("#tipo_utilizador").val();
    
    if ($("#tipo_pri_username").val() == 'Administrator')
    {
        $("#privilegios_username").val(2);
    }
    if ($("#tipo_pri_username").val() == 'Gestor')
    {
        $("#privilegios_username").val(4);
    }
    if ($("#tipo_pri_username").val() == 'GestorPlus')
    {
        $("#privilegios_username").val(3);
    }
    if ($("#tipo_pri_username").val() == 'SuperUser')
    {
        $("#privilegios_username").val(1);
    }
}


    getUserNameInfo($("#username").val());


//Obter informações do Utilizador

function getUserNameInfo(username)
{
        var s = '';
        var str1 = '';
        setTimeout(function()
        { 
            dataValue='action=1&username='+username;
            $.ajax({ url:'users/users_action.php',
            data:dataValue,
            type:'POST', 
            cache:false,
            success: function(data){
              $('.back').fadeOut();
              
              arr = JSON.parse(data);
              
                //Username
                $("#nome_username").val(arr[0].nome);
                
                //Tipos de Privilegios
                
                $("#tipo_pri_username").html('<option value="'+arr[0].tipo+'">'+arr[0].tipo+'</option><option value="Administrator">Administrator</option><option value="Gestor">Gestor</option><option value="GestorPlus">GestorPlus</option><option value="SuperUser">SuperUser</option>');
                
                
                // Accessos 
                
                $("#privilegios_username").val(arr[0].privilegios);
                
                // Email
                
                $("#email_username").val(arr[0].email);
                
                // Logotipo
                
                $("#logo_img").html('<img src="images/'+arr[0].logo+'" style="width: 150px;"><br><input type="hidden" id="img_tmp" value="'+arr[0].logo+'" >');
                
                  
                },
                error:function(data){
                    $('#Modalko .debug-url').html('Não existe Testimonials, verifique a ligação Wi-Fi.');
                    $("#mensagem_ko").trigger('click');
                     $('.back').fadeOut();
                  }
                });
            
            }, 1000);
}




</script>


<?php include 'modals_admin.php' ?>


<script>
    
    // Editar Utilizador Correspondente

function editInfoUserName(username)
{
		var logo = $('#logotipo').val(); 
		
		$(".back").show(); 
        $(".load").show();
		
		
		dataValue='&nome_username='+username+'&tipo_pri_username='+$("#tipo_pri_username").val()+'&privilegios_username='+$("#privilegios_username").val()+'&email_username='+$("#email_username").val()+'&password_username='+$("#password_username").val()+'&logo='+logo+'&image_tmp='+$("#img_tmp").val()+'&action=2';
		
		
		
		
  	$.ajax({ url:'users/users_action.php',
    data:dataValue,
    type:'POST', 

    success: function(data)
    {
        arr=[];
        arr =  JSON.parse(data);
        if (arr.error)
        {
            $(".back").hide(); 
            $(".load").hide();
            $('.debug-url').html('Por favor, verifique:<br><br>'+arr.error+'<br> e tente novamente.');
            $('#Modalko').modal();
            $('#edit_user').modal('hide');
        }
        else if (arr.success == 0)
        {
            $(".back").hide(); 
            $(".load").hide();
            $('.debug-url').html('Surgiu um erro, a edição dos Utilizadores, não foi criado!');
            $('#Modalko').modal();
            $('#edit_user').modal('hide');
         }
         else if (arr.success == 1)
         {
            $(".back").hide(); 
            $(".load").hide();
           $('.debug-url').html('A informação do Utilizador com o nome <strong class="cpt">'+arr.user+'</strong> foi editado com sucesso');
           $("#mensagem_ok").trigger('click');
           $('html, body').animate({ scrollTop: 0 }, 500);
           setTimeout(function(){
           $('#Modalok').modal('hide');},2500);
          
           $('#edit_user').modal('hide');
           
         }
         else if (arr.success == 2 || arr.success == 3 || arr.success == 4)
         {
             $(".back").hide(); 
            $(".load").hide();
             $('.debug-url').html('A informação do Utilizador com o nome <strong class="cpt">'+arr.user+'</strong> foi editado com sucesso');
             $('.close').css('display','none');
             $(".button-log").html('<a href="logout.php" class="btn btn-success"><span class="glyphicon glyphicon-log-out"></span> Logout</a>')
           $("#mensagem_ok").trigger('click');
           $('html, body').animate({ scrollTop: 0 }, 500);
          
           $('#edit_user').modal('hide');
           
         }
    },
    error: function()
    {
        $(".back").hide(); 
        $(".load").hide();
      $('.debug-url').html('A edição de Utilizadores não foi criado, p.f. verifique a ligação Wi-Fi.');
      $('#Modalko').modal();
      $('#edit_user').modal('hide');
    }
  });
}


// Carregamento do Logotipo

function uploadImages() {
            $(".back").show(); 
            $(".load").show();
            var fd = new FormData(document.getElementById("fileinfo"));
            $.ajax({
              url: "users/users_logo.php",
              type: "POST",
              data: fd,
              processData: false, 
              contentType: false,
              success:function(data){
                  if (data == 1)
                  {
                      $(".back").hide(); 
                      $(".load").hide();
                      $("#edit_user").modal('hide');
                      $('.debug-url').html('A Imagem foi carregada com sucesso.');
                      $("#mensagem_ok").trigger('click');
                      
                  }
                  else if (data == 0)
                  {
                      $(".back").hide(); 
                    $(".load").hide();
                      $("#edit_user").modal('hide');
                      $('.debug-url').html('Erro ao Carregar a Imagem');
                      $("#mensagem_ko").trigger('click');
                  }
               
    }
})
.done(function( data ) {});
      return false;
    }
    



</script>




