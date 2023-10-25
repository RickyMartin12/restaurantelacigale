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

.row
{
    margin-right: 0px!important;
    margin-left: 0px!important;
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


div#edit_user {
    z-index: 99999999;
}

.bootbox-body {
    padding-left: 40px;
}

</style>


<div id="edit_user" enctype="multipart/form-data" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#B0C5D3;"><span class='glyphicon glyphicon-user'></span> Editar Utilizador</h4>
      </div>
      <div class="modal-body">
          
          <h5 style="padding-left: 30px;">Editar Perfil do Utilizador</h5>
          <hr>
        <div class="row">
            <!-- Username -->
          <div class='col-md-6 col-sm-6 col-xs-12'>
                  <div class="form-group" >
                          <span class="glyphicon glyphicon-user"></span> Nome do Utilizador
                              <input type='text' class="form-control" name="nome_username" id="nome_username" disabled />
                   </div>
            </div>
            
            <!-- Password -->
            
            
            <div class='col-md-6 col-sm-6 col-xs-12'>
                  <div class="form-group" >
                          <span class="fa fa-key"></span> Password
                              <input type='password' class="form-control" name="password_username" id="password_username" placeholder="***********" />
                   </div>
            </div>
            
            
            <!-- tipos de privilegios -->
            
            <div class='col-md-9 col-sm-9 col-xs-12'>
                  <div class="form-group" >
                          <span class="fa fa-user"></span> Tipo de Utilizador
                          <select class="form-control" name="tipo_pri_username" id="tipo_pri_username" onchange="changetypePrivilegesUsers()">
                          </select>
                   </div>
            </div>
            
            <!-- Privilegios -->
					    <div class='col-md-3 col-sm-3 col-xs-12'>
					        <div class="form-group">
					            <span class="glyphicon glyphicon-link"></span> Privilegios
					            <div class="input-group" style='width:100%;'>
					            	<input readonly style="border-radius: 4px;" type="text" class="form-control" name="privilegios_username" id="privilegios_username">
					          	</div>
					        </div>
					    </div>
					    
					    
			<!-- Email -->
			
			<div class='col-md-12 col-sm-12 col-xs-12'>
					        <div class="form-group">
					            <span class="glyphicon glyphicon-envelope"></span> Email
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="email_username" id="email_username">
					          	</div>
					        </div>
			</div>
			
			<!-- Imagem do Logotipo -->
			
			<div class='col-md-12 col-sm-12 col-xs-12'>
					        <div class="form-group">
					            <span class="glyphicon glyphicon-picture"></span> Logotipo
					            <div class="input-group" style='width:100%;'>
					                <div id="logo_img">
					                    
					                </div>
					                <br>
					                <br>
					                <div class="col-xs-12">
					               <!-- Carregamento de Imagens -->
					               
					               <form id="fileinfo" name="fileinfo" onsubmit="return uploadImages();">
                                        <br><input id="logotipo" name="file" type="file" class="btn-primary btn col-xs-12" accept="image/gif, image/jpeg, image/png"><br>
                                        <button type="submit" style="margin-top:15px;" class="btn btn-info col-xs-12" value="Upload" title="Carregar Logotipo">
                                        <span class="glyphicon glyphicon-picture" value="Upload"></span> Carregar imagem (png)</button>
                                    </form>
					                    
					                    
					                    
					                </div>
					                
					            
					          	</div>
					        </div>
			</div>
			
			
			
			
            
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="editInfoUserName($('#username').val())" class="btn btn-book-now"><span class="glyphicon glyphicon-floppy-disk"></span> <font class="hidden-xs"> Guardar</font></button>
        <p style='text-align:center; margin:0;'><img class="img-logo" src="images/lacigale_smal.png" ></p>  
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="mensagem_ok" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modalok">
<div id="Modalok" class="modal fade" role="dialog">
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

      <p style='text-align:center; margin:0;'><img class="img-logo" src="images/lacigale_smal.png" ></p> 
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
        <h4 class="modal-title" style="color:#d9534f;"><span class='glyphicon glyphicon-warning-sign'></span> Aviso</h4>
      </div>
      <div class="modal-body" style="padding-left: 20px; padding-right: 20px;">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer" style="padding: 60px 30px 30px 150px;">

       <p style='text-align:center; margin:0;'><img class="img-logo" src="images/lacigale_smal.png" ></p> 

      </div>
    </div>
  </div>
</div>

<!-- Formatação de PDFs -->

<!-- Tipos de Conversão de PDF -->

<div id="pdf_conf" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-arrows-alt" aria-hidden="true"></i> Formato & Orientação:</span></h4>
      </div>
      <div class="modal-body">
      <div class="w3-row-padding">
      <div class="w3-col l6 s12">
        <label>Formato:</label>
          <select class="form-control" id="pagesize">
          <option value="a2">A2</option>
          <option value="a3">A3</option>
          <option value="a4">A4</option>
          </select>
      </div>

      <div class="w3-col l6 s12">
        <label>Orientação:</label>
          <select class="form-control" id="orientation">
            <option value="portrait">Vertical</option>
            <option value="landscape">Horizontal</option>
          </select>
      </div>
        </div>
      </div>

    <div class="modal-footer r">
    <p style='text-align:center; margin:0;'><img class="img-logo" style="margin-top: -20px;" src="images/lacigale_smal.png" ></p>  
      <button type="button" class="btn btn-default cancel-edit" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>
        <font class="hidden-xs"> Fechar</font>
      </button>
      <button type="button" class="btn btn-success" onclick="generatePdf($('#pagesize').val(),$('#orientation').val())">
<span class="glyphicon glyphicon-ok"></span>
        <font class="hidden-xs"> Confirmar</font>
      </button>
    </div>
  </div>
  </div>
</div>






<!-- Testimonials -->

<!-- Edição Testemunhos -->


<div class="modal fade" id="edit_testimonial" tabindex="-1" role="dialog" aria-labelledby="clientes">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Comentário Numero #<span class="servico_id"></span></h4>
                </div>
                
                
                <div class="modal-body">
                <div class="row">

                <h5 style="padding-left: 30px;">Detalhes do Comentário </h5>
			          <hr>
			        <div class="row">
			        <!-- Painel 1 - Detalhes do Comentário -->
			        
			            <!-- Nome da Pessoa -->

			            <div class='col-md-12 col-sm-12 col-xs-12'>
			                  <div class="form-group" >
			                          <span class="glyphicon glyphicon-user"></span> Nome
			                              <input type='text' class="form-control" name="nome_edit" id="nome_edit" />
			                   </div>
			            </div>


			            <!-- Mensagem -->

			            <div class='col-md-12 col-sm-12 col-xs-12'>
			                  <div class="form-group" >
			                          <span class="glyphicon glyphicon-envelope"></span> Mensagem
			                              <textarea class="form-control" rows="5" id="mensagem_edit" name="mensagem_edit" ></textarea>
			                   </div>
			            </div>
			            
			            
        			</div>
        			
        			
        			<h5 style="padding-left: 30px; padding-top: 5px;">Classificação da experiencia </h5>
            <hr>
            
            <div class="row">
            <!-- Painel 2 - Detalhes da Pontuação -->
            
                <!-- Classificação da Comida -->
                <div class='col-md-6 col-sm-6 col-xs-12'>
                      <div class="form-group" >
                          <span class="fa fa-cutlery"></span> Classificação da Comida
                          <select class="form-control" name="class_comida_edit" id="class_comida_edit">
		                        
		                    </select>
                             
                      </div>
                </div>

                <!-- Classificação dos Serviços -->
                <div class='col-md-6 col-sm-6 col-xs-12'>
                      <div class="form-group" >
                          <span class="fa fa-tasks"></span> Classificação do Serviço
                          <select class="form-control" name="class_servicos_edit" id="class_servicos_edit">
		                        
		                    </select>
                      </div>
                </div>

                <!-- Classificação dos Valores -->
                <div class='col-md-6 col-sm-6 col-xs-12'>
                      <div class="form-group" >
                          <span class="fa fa-usd"></span> Classificação do Preço
                           <select class="form-control" name="class_valores_edit" id="class_valores_edit">
		                        
		                    </select>
                              
                      </div>
                </div>

                <!-- Classificação do Ambiente -->
                <div class='col-md-6 col-sm-6 col-xs-12'>
                      <div class="form-group" >
                          <span class="fa fa-globe"></span> Classificação do Ambiente
                            <select class="form-control" name="class_ambiente_edit" id="class_ambiente_edit">
		                        
		                    </select>
                              
                      </div>
                </div>

                <!-- Classificação do Ambiente -->
                <div class='col-md-12 col-sm-12 col-xs-12'>
                      <div class="form-group" >
                          <span class="fa fa-hand-o-right"></span> Recomendaria a um Amigo? 
                            <select class="form-control" name="class_rec_edit" id="class_rec_edit">
		                        
		                    </select>
                      </div>
                </div>
                
            
        
            </div>
            
            
            <h5 style="padding-left: 30px; padding-top: 5px;">Opções Avancadas </h5>
            <hr>
            
            <div class="row">
            <!-- Painel 3 - Opções Avancadas -->

			            <div class='col-md-12 col-sm-12 col-xs-12'>
			                  <div class="form-group" >
			                          <p style="text-align: left"><span class="glyphicon glyphicon-ok"></span> Activar Coluna</p>
			                              <div class="col-md-5 col-sm-12 col-xs-12">
                                              <div class="form-group" style="margin-top: 20px;">
                                                <div class="input-group">
                                                <input type='checkbox' checked name='my-checkbox' data-size='mini' data-off-color='danger' data-on-color='success' data-off-text="Não" data-on-text="Sim" name='active_field_opt' id='active_field_opt'>
                                                <input type="hidden" id="active_field_option">
                                    
                                                </div>
                                                </div>
                                            </div>
			                   </div>
			            </div>
            </div>
        			
        			


                    
                </div>
                </div>
                <div class="modal-footer">
                	 <p style='text-align:center; margin:0;'><img class="img-logo" style="margin-top: -20px;" src="images/lacigale_smal.png" ></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="saveIt($('.servico_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>
    </div>

