<style>

.modal-content {
    background: #333;
    color: #000;
}

.select2-container--default .select2-selection--single {
    height: 34px!important;
}

span.select2 {
    width: 100%!important;
}



/* do not group these rules */





.panel.panel-default.panel-title {
    border-color: #000;
    background: #B0C5D3;
}

hr {
    margin-top: 5px;
    border: 0;
    border-top: 1px solid #333;
    margin-bottom: 12px;
}

.modal-body {
    padding: 2em;
    text-align: left;
    padding-left: 0px;
    padding-right: 0px;
    padding-top: 10px!important;
    background:#FFF;
}


.panel-title
{
    width: 100%;
    padding: 0px;
    margin: -29px 0px 30px 0px;
    border-radius: 0px!important;
}

.modal-footer {
    padding: 25px;
}


.row {
    margin-right: 20px;
    margin-left: 20px;
}



.close{
color:#FFF;
opacity:1;
}


.img-logo
{
	width: 120px;
    position: absolute;
    margin-left: calc(10% - 150px);
    margin-top: -46px;
}

.btn-book-now
{
    background-color: #dadada;
    color: #000;
    border-color: #dadada;
    opacity: 1;
}

.btn-book-now:hover
{
    opacity: 1;
    background-color: #B0C5D3;
    color: #000;
    border-color: #B0C5D3;
}


textarea {
    border-radius: 4px!important;
}


</style>


<form id="add_reserve" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#B0C5D3;"><span class='glyphicon glyphicon-calendar'></span> <?php echo $lang['titulo_efe_reserva']; ?></h4>
      </div>
      <div class="modal-body">
          
          <h5 style="padding-left: 30px;"><?php echo $lang['reserva_detalhes']; ?> </h5>
          <hr>
        <div class="row">
        <!-- Painel 1 - Detalhes de Reserva -->
        
            <!-- Data da Reserva -->
            <div class='col-md-6 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <span class="glyphicon glyphicon-calendar"></span> <?php echo $lang['data_reserva']; ?> *
                      <div class='input-group date' id='data_reseva_dt'>
                          <input type='text' readonly class="form-control" name="data_reserva" id="data_reserva" placeholder="Data de Reserva" />
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                  </div>
            </div>
            <!-- Hora da Reserva -->
            <div class='col-md-6 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <span class="fa fa-clock-o"></span> <?php echo $lang['hora_reserva']; ?> *
                      <div class='input-group date' id='hora_reseva_dt'>
                          <input type='text' readonly class="form-control" name="hora_reserva" id="hora_reserva" placeholder="Hora de Reserva" />
                          <span class="input-group-addon">
                              <span class="fa fa-clock-o"></span>
                          </span>
                      </div>
                  </div>
            </div>
            <!-- Adultos -->
            <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <img src="images/icon1p.png"> <?php echo $lang['adultos']; ?> *
                      <input type='number' class="form-control" name="adultos" id="adultos" value='1' />
                  </div>
            </div>
            <!-- Crianças -->
            <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <img src="images/icon2p.png"> <?php echo $lang['criancas']; ?>
                      <input type='number' class="form-control" name="criancas" id="criancas" value='0' />
                  </div>
            </div>
            <!-- Crianças -->
            <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <img src="images/icon3p.png"> <?php echo $lang['bebes']; ?>
                          <input type='number' class="form-control" name="bebes" id="bebes" value='0' />
                  </div>
            </div>
        </div>
            
            <h5 style="padding-left: 30px; padding-top: 5px;"><?php echo $lang['detalhes_pessoais']; ?> </h5>
            <hr>
            
            <div class="row">
            <!-- Painel 2 - Detalhes Pessoais -->
            
                <!-- Crianças -->
                <div class='col-md-8 col-sm-8 col-xs-12'>
                      <div class="form-group" >
                          <span class="glyphicon glyphicon-user"></span> <?php echo $lang['nome_cl']; ?> *
                              <input type='text' class="form-control" name="nome" id="nome" placeholder='<?php echo $lang['nome_cl_pl']; ?>' />
                      </div>
                </div>
                <!-- Pais -->
                <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <span class="fa fa-flag-o"></span> <?php echo $lang['pais']; ?> *
                          <select id="pais" name="pais" class="form-control"></select>
                      </div>
                </div>
                <!-- Email -->
                <div class='col-md-6 col-sm-6 col-xs-12'>
                      <div class="form-group">
                          <span class="glyphicon glyphicon-envelope"></span> <?php echo $lang['email']; ?> *
                          <input type='text' class="form-control" name="email" id="email" placeholder='<?php echo $lang['email_pl']; ?>' />
                      </div>
                </div>
                <!-- Telefone -->
                <div class='col-md-6 col-sm-6 col-xs-12'>
                      <div class="form-group">
                          <span class="glyphicon glyphicon-phone"></span> <?php echo $lang['telefone']; ?> *
                          <input type='number' class="form-control" name="telefone" id="telefone" placeholder='<?php echo $lang['telefone_pt']; ?>' />
                      </div>
                </div>
            
        
            </div>
            
            <h5 style="padding-left: 30px; padding-top: 5px;"><?php echo $lang['obs_termos']; ?> </h5>
            <hr>
            
            
            <div class="row">
            <!-- Painel 3 - Observações & Termos e Condições -->
            
                <!-- Observações -->
                <div class='col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Observacoes"><?php echo $lang['obs']; ?>:</label>
					            <div class="input-group" style='width:100%;'>
					            	<textarea class="form-control" rows="5" id="observacoes" name="observacoes"></textarea>
					          	</div>
					        </div>
			    </div>
			    
			    <!-- Termos & Condicoes -->
			    
			    <div class='col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Termos & Condicoes"><?php echo $lang['terms_condicoes']; ?>:</label>
					            <div class="input-group" style='width:100%;'>
					            	<textarea class="form-control" rows="6" readonly style="font-size: 10px"><?php echo $lang['terms_condictions']; ?>
					            	</textarea>
					          	</div>
					        </div>
			    </div>
            
            </div>
            
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-book-now"><span class="glyphicon glyphicon-book"></span> <font class="hidden-xs"> <?php echo $lang['button_reserva']; ?></font></button>
        <p style='text-align:center; margin:0;'><img class="img-logo" src="admin/images/lacigale_smal.png" ></p>  
      </div>
    </div>
  </div>
</form>




<input type="hidden" id="mensagem_ok" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modalok">
<div id="Modalok" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#5cb85c;"> <span class='glyphicon glyphicon-ok'></span> <?php echo $lang['success']; ?></h4>
      </div>
      <div class="modal-body" style="padding-left: 20px; padding-right: 20px;">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer" style="padding: 60px 30px 30px 150px;">

      <p style='text-align:center; margin:0;'><img class="img-logo" src="admin/images/lacigale_smal.png" ></p> 
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="mensagem_ko" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modalko">
<div id="Modalko" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#d9534f;"><span class='glyphicon glyphicon-warning-sign'></span> <?php echo $lang['aviso']; ?></h4>
      </div>
      <div class="modal-body" style="padding-left: 20px; padding-right: 20px;">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer" style="padding: 60px 30px 30px 150px;">

       <p style='text-align:center; margin:0;'><img class="img-logo" src="admin/images/lacigale_smal.png" ></p> 

      </div>
    </div>
  </div>
</div>


<div id="Modalok_reserves" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#5cb85c;"> <span class='glyphicon glyphicon-ok'></span> Sucesso</h4>
      </div>
      <div class="modal-body" style="padding-left: 20px; padding-right: 20px;">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer" style="padding: 60px 30px 30px 150px;">
        <p class="button-log"></p>
      <p style='text-align:center; margin:0;'><img class="img-logo" src="admin/images/lacigale_smal.png" ></p> 
      </div>
    </div>
  </div>
</div>

<div id="Modalko_reserves" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#d9534f;"><span class='glyphicon glyphicon-warning-sign'></span> Aviso</h4>
      </div>
      <div class="modal-body" style="padding-left: 20px; padding-right: 20px;">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer" style="padding: 60px 30px 30px 150px;">

       <p style='text-align:center; margin:0;'><img class="img-logo" src="admin/images/lacigale_smal.png" ></p> 

      </div>
    </div>
  </div>
</div>


<div id="Modalok_test" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#5cb85c;"> <span class='glyphicon glyphicon-ok'></span> Sucesso</h4>
      </div>
      <div class="modal-body" style="padding-left: 20px; padding-right: 20px;">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer" style="padding: 60px 30px 30px 150px;">
        <p class="button-log"></p>
      <p style='text-align:center; margin:0;'><img class="img-logo" src="admin/images/lacigale_smal.png" ></p> 
      </div>
    </div>
  </div>
</div>

<div id="Modalko_test" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#d9534f;"><span class='glyphicon glyphicon-warning-sign'></span> Aviso</h4>
      </div>
      <div class="modal-body" style="padding-left: 20px; padding-right: 20px;">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer" style="padding: 60px 30px 30px 150px;">

       <p style='text-align:center; margin:0;'><img class="img-logo" src="admin/images/lacigale_smal.png" ></p> 

      </div>
    </div>
  </div>
</div>




<form id="add_testimonails" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#B0C5D3;"><span class='glyphicon glyphicon-comment'></span> <?php echo $lang['add_test']; ?></h4>
      </div>
      <div class="modal-body">
          
          <h5 style="padding-left: 30px;"><?php echo $lang['det_test']; ?> </h5>
          <hr>
        <div class="row">
        <!-- Painel 1 - Detalhes do Comentário -->
        
            <!-- Nome da Pessoa -->

            <div class='col-md-12 col-sm-12 col-xs-12'>
                  <div class="form-group" >
                          <span class="glyphicon glyphicon-user"></span> <?php echo $lang['nome_cl']; ?> *
                              <input type='text' class="form-control" name="nome" id="nome" placeholder='<?php echo $lang['nome_cl_pl']; ?>' />
                   </div>
            </div>


            <!-- Mensagem -->

            <div class='col-md-12 col-sm-12 col-xs-12'>
                  <div class="form-group" >
                          <span class="glyphicon glyphicon-envelope"></span> <?php echo $lang['testemunho']; ?> *
                              <textarea class="form-control" rows="5" id="mensagem" name="mensagem" placeholder='<?php echo $lang['testemunho_pl']; ?>'></textarea>
                   </div>
            </div>
        </div>
            
            <h5 style="padding-left: 30px; padding-top: 5px;"><?php echo $lang['class']; ?> </h5>
            <hr>
            
            <div class="row">
            <!-- Painel 2 - Detalhes da Pontuação -->
            
                <!-- Classificação da Comida -->
                <div class='col-md-6 col-sm-6 col-xs-12'>
                      <div class="form-group" >
                          <span class="fa fa-cutlery"></span> <?php echo $lang['class_comida']; ?> *
                          <div id="class1">
                              
                          </div>
                             
                      </div>
                </div>

                <!-- Classificação dos Serviços -->
                <div class='col-md-6 col-sm-6 col-xs-12'>
                      <div class="form-group" >
                          <span class="fa fa-tasks"></span> <?php echo $lang['class_servico']; ?> *
                           <div id="class2">
                              
                          </div>   
                      </div>
                </div>

                <!-- Classificação dos Valores -->
                <div class='col-md-6 col-sm-6 col-xs-12'>
                      <div class="form-group" >
                          <span class="fa fa-usd"></span> <?php echo $lang['class_valor']; ?> *
                          <div id="class3">
                              
                          </div>  
                              
                      </div>
                </div>

                <!-- Classificação do Ambiente -->
                <div class='col-md-6 col-sm-6 col-xs-12'>
                      <div class="form-group" >
                          <span class="fa fa-globe"></span> <?php echo $lang['class_ambiente']; ?> *
                          <div id="class4">
                              
                          </div>  
                              
                      </div>
                </div>

                <!-- Classificação do Ambiente -->
                <div class='col-md-12 col-sm-12 col-xs-12'>
                      <div class="form-group" >
                          <span class="fa fa-hand-o-right"></span> <?php echo $lang['class_rec']; ?> *
                           <div id="class5"> 
                              
                          </div>  
                      </div>
                </div>
                
            
        
            </div>
            
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-book-now"><span class="glyphicon glyphicon-floppy-disk"></span> <font class="hidden-xs"> <?php echo $lang['btn-save']; ?></font></button>
        <p style='text-align:center; margin:0;'><img class="img-logo" src="admin/images/lacigale_smal.png" ></p>  
      </div>
    </div>
  </div>
</form>



<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#B0C5D3;"><?php echo $lang['shared']; ?></h4>
        </div>
        <div class="modal-body">
         <div class="row" style="margin-top: 30px;">

          <div class="col-xs-12" style="padding-bottom: 25px;">
           <button type="button" class="btn btn-default" style="width: 100%;" onclick="window.open('http://www.facebook.com/sharer.php?u=http://restaurantelacigale.com/');" ><img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" class="imagger_redes" /> <?php echo $lang['shared_facebook']; ?></button>
          </div>

          <div class="col-xs-12" style="padding-bottom: 25px;">
           <button type="button" class="btn btn-default" style="width: 100%;" onclick="window.open('https://plus.google.com/share?url=http://restaurantelacigale.com/');" ><img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" class="imagger_redes" /> <?php echo $lang['shared_google']; ?></button>
          </div>

          <div class="col-xs-12" style="padding-bottom: 25px;">
           <button type="button" class="btn btn-default" style="width: 100%;" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://restaurantelacigale.com/');"><img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" class="imagger_redes" /> <?php echo $lang['shared_linkedin']; ?></button>
          </div>

          <div class="col-xs-12" style="padding-bottom: 25px;">
           <button type="button" class="btn btn-default" style="width: 100%;" onclick="window.open('https://twitter.com/share?url=http://restaurantelacigale.com/&amp;text=Restaurante%20La%20Cigale&amp;hashtags=restaurantelacigale');"><img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" class="imagger_redes" /> <?php echo $lang['shared_twitter']; ?></button>
          </div>

          <div class="col-xs-12" style="padding-bottom: 25px;">
           <button type="button" class="btn btn-default" style="width: 100%;" onclick="window.open('mailto:jluiscalado@hotmail.com; jessicamluis@outlook.com ?Subject=Restaurante La Cigale&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://restaurantelacigale.com/');"><img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" class="imagger_redes" /> <?php echo $lang['shared_email']; ?></button>
          </div>

          <div class="col-xs-12" style="padding-bottom: 25px;">
           <a class="btn btn-default" style="width: 100%;" href="fb-messenger://share/?link= https%3A%2F%2Fwww.restaurantelacigale.com"><img src="../images/messenger.png" alt="Email" class="imagger_redes" /> <?php echo $lang['shared_messenger']; ?></a>


          </div>
          
         </div>
        </div>
        <div class="modal-footer" style="padding: 60px 30px 30px 150px;">
          <p style='text-align:center; margin:0;'><img class="img-logo" src="admin/images/lacigale_smal.png" ></p> 
        </div>
      </div>
      
    </div>
  </div>


