<head>
        <title>Sistema de Administração - La Cigale</title>
        <?php include 'header/head.php' ?>
</head>


  
    
<!-- Sessão do Utilizador -->
<?php include 'request/session.php' ?>

<!-- Content -->
<div id="content_info">
    <!-- Header -->
    <?php include 'header/header.php' ?>
    
    
    <link href="css/select.dataTables.css" rel="stylesheet" type="text/css"/>
    <link href="css/buttons.dataTables.css" rel="stylesheet" type="text/css"/>
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>  
    <link href="css/mytables.css" rel="stylesheet" type="text/css"/>
    <link href="css/testimonials.css" rel="stylesheet" type="text/css"/>
        <!-- Mostra o Conteudo da Página Correspondente -->
        <div class="cont_page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Gestão de Testemunhos</h3>
                        <br>
                        <div class="table-responsive">
                            <table id="example" class="display responsive nowrap table-striped dataTable" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th>ID/Acções</th>
                                  <th>Nome</th>
                                  <th>Comida</th>
                                  <th>Serviço</th>
                                  <th>Valor</th>
                                  <th>Ambiente</th>
                                  <th>Amigos</th>
                                  <th>Activar Filtro</th>
                                  <th>Mensagem</th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <th>ID/Acções</th>
                                  <th>Nome</th>
                                  <th>Comida</th>
                                  <th>Serviço</th>
                                  <th>Valor</th>
                                  <th>Ambiente</th>
                                  <th>Amigos</th>
                                  <th>Activar Filtro</th>
                                  <th>Mensagem</th>
                                </tr>
                              </tfoot>
                            </table>
                        </div>

                     </div>
                </div>
            </div>
        </div>
        

      
        
        

    
    <!-- Footer -->
    <?php include 'footer/footer.php' ?>
    
    <!-- Scripts para edição/remoção de informação dos testemunhos -->
    
    
    <script>
    
    var active;
    
    searchValueByTestimonials();
        
        
        // Activar Colunas
        
        
        function activeFilters(id,vl){
             $(".back").show(); 
             $(".load").show();
             if (vl != 1)
             {
                 dataValue="id="+id+"&action=3";
                 $.ajax({ url:'testimonials/action_testimonials.php',
                 data:dataValue,
                 type:'POST', 
                 cache:false,
                 success:function(data){
            
              if (data == 0){
                      $(".back").hide(); 
                    $(".load").hide();
                      $('.debug-url').html('Surgiu um erro activar a Coluna. <br> Por Favor tente mais tarde');
                      $("#mensagem_ko").trigger('click');
              }
            
              if (data == 1)
              {
                    $(".back").hide(); 
                    $(".load").hide();
                    $('.debug-url').html('O Testemunho #<strong>'+id+'</strong> foi activado com sucesso.');
                    $("#mensagem_ok").trigger('click');
                   setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
                   setInterval( function () {table.ajax.reload();}, 1000 ); 
                 }
                },
                  error:function(){
                   $(".back").hide(); 
                    $(".load").hide();
                   $('.debug-url').html('O Testemunho #<strong>'+id+'</strong> não foi activado, p.f. verifique a ligação Wi-fi.');
                   $("#mensagem_ko").trigger('click');
                  }
                });
            
              }
              else {
               $(".back").hide(); 
               $(".load").hide();
               $('.debug-url').html('O Testemunho #<strong>'+id+'</strong> já se encontra activado');
               $("#mensagem_ko").trigger('click');
               }
            }
            
            	function confirmDeleteTestimonials(id)
            	{
                    table = $('#example').DataTable();
                    bootbox.dialog({
                      message: "Tem a certeza que pretende apagar o Testemunho com o numero: #<strong>"+id+"</strong> ?",
                      title: "<span style='color:#f0ad4e;'><span class='glyphicon glyphicon-exclamation-sign'></span> Confirmar</span>",
                      buttons: {
                        default: {
                          label: "<span class='glyphicon glyphicon-remove-sign'></span> <span class='hidden-xs'>Fechar</span>",
                          className: "btn-default",
                        },
                        danger: {
                          label: "<span class='glyphicon glyphicon-trash'></span><span class='hidden-xs'> Apagar</span>",
                          className: "btn-danger",
                          callback: function() {
                            dataValue='id='+id+'&action=4';
                         $.ajax({
                          type: "POST",
                          cache:false,
                          url: "testimonials/action_testimonials.php",
                          data: dataValue,
                          success: function(data){
                            if(data == 2){
                              table.row("#"+id).remove().draw();
                              $('.debug-url').html('O Testemunho com o numero: #<strong>'+id+'</strong> foi apagado com sucesso.');
                              $("#mensagem_ok").trigger('click');
                              setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
                              table.ajax.reload(); 
                            }
                            else{
                              $('.debug-url').html('O Testemunho com o numero: #<strong>'+id+'</strong> não foi apagado.');
                              $("#mensagem_ko").trigger('click');
                              setTimeout(function(){  $('#Modalko').modal('hide');}, 2500);
                    
                            }
                    
                          },
                          error:function(data){
                            $('.debug-url').html('O Testemunho com o numero: #<strong>'+id+'</strong> não foi apagado, p.f. verifique a ligação Wi-Fi.');
                            $("#mensagem_ko").trigger('click');
                          }
                       });
                    
                          }
                        },
                      }
                    });
    }
    
    
        
        $("[name='my-checkbox']").bootstrapSwitch();
        
          $('.bootstrap-switch-id-active_field_opt').on('switchChange.bootstrapSwitch', function (event, state) {
         if (state == true) {
        
            active = $("#active_field_option").val('1');
            
        
         } else {
            
        
            active = $("#active_field_option").val('0');
        
            
         }
           event.preventDefault();
        });
        
        
        
        // Ediçao de Testiminuhos
        
        function editTestimonialsTable(arr)
        {
            var clientesModal =  $("#edit_testimonial");
            
            // Nome
            
            $("#nome_edit").val(arr.nome);
            
            // Mensagem
            
            $("#mensagem_edit").val(arr.mensagem);
            
            // Classificação da Comida
            
            $("#class_comida_edit").html('<option value="'+arr.classifcacao_comida+'">'+arr.classifcacao_comida+'</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>');
            
            // Classificação do Serviço
            
            $("#class_servicos_edit").html('<option value="'+arr.classifcacao_servicos+'">'+arr.classifcacao_servicos+'</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>');
            
            // Classificação do Valor
            
            $("#class_valores_edit").html('<option value="'+arr.classifcacao_valor+'">'+arr.classifcacao_valor+'</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>');

            // Classificação do Ambiente
            
            $("#class_ambiente_edit").html('<option value="'+arr.classifcacao_ambiente+'">'+arr.classifcacao_ambiente+'</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>');
        
            // Classificação de Recomendação
            
            $("#class_rec_edit").html('<option value="'+arr.classificacao_recommended+'">'+arr.classificacao_recommended+'</option><option value="20">20</option><option value="40">40</option><option value="60">60</option><option value="80">80</option><option value="100">100</option>');
            
            
            $("#active_field_option").val(arr.activar_field);

            var active_field = $("#active_field_option").val();

            if (active_field == 1)
            {
                $("[name='my-checkbox']").bootstrapSwitch('state', true);
            }
            else
            {
                $("[name='my-checkbox']").bootstrapSwitch('state', false);
            }
            
            clientesModal.modal('show');
            
        }
        
        
        function saveIt(vl)
        {
            $(".back").show(); 
             $(".load").show();
		    dataValue="action=5&id="+vl+"&nome="+$('#nome_edit').val()+"&mensagem="+$('#mensagem_edit').val()+"&comida="+$('#class_comida_edit').val()+"&servicos="+$('#class_servicos_edit').val()+"&valores="+$('#class_valores_edit').val()+"&ambiente="+$("#class_ambiente_edit").val()+"&rec="+$("#class_rec_edit").val()+"&active="+$("#active_field_option").val();


	        
	        $.ajax({ url:'testimonials/action_testimonials.php',
                 data:dataValue,
                 type:'POST', 
                 cache:false,
                 success: function(data){


                     if (data == 1) {
                        $(".back").hide(); 
                        $(".load").hide();
                     	$('.debug-url').html('O Testemunho  <strong class="cpt">'+vl+'</strong> foi modificado com sucesso');
                          $("#mensagem_ok").trigger('click');
                          $('html, body').animate({ scrollTop: 0 }, 500);
                          setTimeout(function(){
                          $('#Modalok').modal('hide');},2500);
                              reWriteRowTable(vl);
                             }
                             else if (data == 0){
                                $(".back").hide(); 
                                $(".load").hide();
                               $('.cancel-edit').trigger('click');
                               $('.debug-url').html('Testemunho #<strong>'+vl+'</strong> não foi modificada!');
                                  $("#Modalko").modal();
                                  setTimeout(function(){  $('#Modalko').modal('hide');}, 2500);
                             }
                        },
                            error:function(){
                                $(".back").hide(); 
                                $(".load").hide();
                                $('.cancel-edit').trigger('click');
                                $('.debug-url').html('Testemunho # <strong> ' +vl+ ' </strong> não foi modificada, p.f. verifique a ligação Wi-Fi.');
                                $("#Modalko").modal();
                        
                        }
                    });

        }
        
        
        // Escrever os Valores Alterados na Datatable
        
        function reWriteRowTable(vl){

		var clientesModal = $('#edit_testimonial');

    		table = $('#example').DataTable();
    
    		data = table.row("#"+vl ).data();
    		
    
        
        data['nome'] = $('#nome_edit').val();
        
        data['mensagem'] = $('#mensagem_edit').val();
        
        data['classifcacao_comida'] = $('#class_comida_edit').val();
        
        data['classifcacao_valor'] = $('#class_servicos_edit').val();
        
        data['classifcacao_ambiente'] = $("#class_ambiente_edit").val();
        
        data['classificacao_recommended'] = $("#class_rec_edit").val();
        
        data['activar_field'] = $("#active_field_option").val();
    
    
    		table.row("#"+vl ).data(data).draw(false);
    
    		
    		$("#"+vl).addClass('blink').removeClass('selected');
    		setTimeout(function(){ $("#"+vl).removeClass('blink'); }, 10000);
        table.ajax.reload();
    
        clientesModal.modal('hide');
    
    

	}
    
    
    
        
        
        function searchValueByTestimonials()
        {
            table = $('#example').DataTable( {
            dom: "Blfrtip",
            rowId: "id",
            "paging": true,
            "serverside":true,
            order: [],
            "ajax": 
      {
        "url" : "action_datatables_testimonials.php",
        "type": "GET"
      },
      columns: [
        { data: "id", render: function ( data, type, row ) {
          return '<button title="Editar Serviço:'+data+'" class="btn-sm btn btn-info btn-edit"><span class="glyphicon glyphicon-edit"></span> '+data+'</button><button style="margin-left: 5px;" title="Apagar '+data+'" class="btn-sm btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button><button style="margin-left: 5px;" title="Activar coluna '+data+'" class="btn-sm btn-active btn btn-default"><span class="glyphicon glyphicon-ok"></span></button>';
          }},
        { data: "nome" },
        { data: "classifcacao_comida"},
        { data: "classifcacao_servicos"},
        { data: "classifcacao_valor"},
        { data: "classifcacao_ambiente"},
        { data: "classificacao_recommended"},
        { data: "activar_field"},
        { data: "mensagem"}
      ],
      
      "rowCallback": function(row, data, index){
        if(data['activar_field'] == 1)
            $(row).find('td:eq(0) .btn-active').addClass('btn-success').removeClass('btn-default');
        },
      select: 
        {
          style:    'os',
          selector: 'td:first-child'
        },
        buttons: [
          {
            extend: 'colvis', text: '<i class="fa fa-scissors"></i>',
            titleAttr: 'Esconder Colunas',
            exportOptions: { orthogonal: 'export', columns: ':visible' }
          },
          {
            extend: 'print', 
            text: '<i class="fa fa-print"></i>',
            titleAttr: 'Imprimir',
            exportOptions: { orthogonal: 'export', columns: ':visible' }
          },
          {
            extend: 'excelHtml5',
            text: '<i class="fa fa-file-excel-o"></i>',
            titleAttr: 'Excel',
            key: {key: 't', altkey: true},
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config)
            {
              config.filename = 'testmonials';
              $.fn.dataTable.ext.buttons.excelHtml5.action(e,dt,button,config);
            }
          },
          {  
            extend: '',
            className:'buttons-pdf-format',
            text: '<i class="fa fa-file-pdf-o"></i>',
            titleAttr: 'PDF'
           },
           {
            extend: 'pdfHtml5',
            className:'a4landscape hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'landscape',
            pageSize: 'A4',
            footer: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'testmonials';
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
              customize: function(doc) {
              doc.styles.title = {
                color: 'black',
                fontSize: '12',
                alignment: 'left'
              }
           }    
          },
          {
            extend: 'pdfHtml5',
            className:'a4portrait hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'portrait',
            pageSize: 'A4',
            footer: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' }, action:function(e,dt,button,config){
              config.filename = 'testmonials';
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
            customize: function(doc) {
              doc.styles.title = {
                color: 'black',
                fontSize: '12',
                alignment: 'left'
              }
           }    
          },
          {
            extend: 'pdfHtml5',
            className:'a3portrait hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'portrait',
            pageSize: 'A3',
            footer: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'testmonials';

              config.pagesize = $('#pagesize').val();
              config.orientation = $('#orientation').val();
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
            customize: function(doc) {
              doc.styles.title = {
                color: 'black',
                fontSize: '12',
                alignment: 'left'
              }
           }    
          },
          {
            extend: 'pdfHtml5',
            className:'a3landscape hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'landscape',
            pageSize: 'A3',
            footer: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'testmonials';

              config.pagesize = $('#pagesize').val();
              config.orientation = $('#orientation').val();
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
            customize: function(doc) {
              doc.styles.title = {
                color: 'black',
                fontSize: '20',
                alignment: 'left'
              }
            }
          },


          {
            extend: 'pdfHtml5',
            className:'a2portrait hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'portrait',
            pageSize: 'A2',
            footer: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'testmonials';
              

              
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
            customize: function(doc) {
              doc.styles.title = {
                color: 'black',
                fontSize: '20',
                alignment: 'left'
              }
           }    
          },
          {
            extend: 'pdfHtml5',
            className:'a2landscape hidden',
            text: '<i class="fa fa-file-pdf-o"></i>',
            orientation: 'landscape',
            pageSize: 'A2',
            footer: true,
            exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'testmonials';
              
              $.fn.dataTable.ext.buttons.pdfHtml5.action(e,dt,button,config);
            },
            customize: function(doc) {
              doc.styles.title = {
                color: 'black',
                fontSize: '20',
                alignment: 'left'
              }
            }
          },

          {
           extend: 'csv',
           filename: 'cliente_assistencia',
           text: '<i class="fa fa-file-text-o"></i>',
           titleAttr: 'CSV',
           key: {key: 'l', altkey: true},
           exportOptions: { orthogonal: 'export', columns: ':visible' },
            action:function(e,dt,button,config){
              config.filename = 'testmonials';
              
              $.fn.dataTable.ext.buttons.csvHtml5.action(e,dt,button,config);
            }
          }

          ],
              "language": {
                "emptyTable":"Sem resultados",         
                "paginate": {
                  "first":      "Primeiro",
                  "last":       "Ultimo",
                  "next":       "Seguinte",
                  "previous":   "Anterior"
                },
                "zeroRecords": "Não tem registos",
                "loadingRecords": "A carregar...",
                "processing":     "A processar ...",
                "info": "Página nº _PAGE_ de _PAGES_",
                "infoEmpty": "Sem registos disponiveis",
                "infoFiltered": "(filtro de _MAX_ registos totais)",
                "search" : "Pesquisar Cliente: "
              }


     });
        }
        
        
        
    $('#example tbody').on( 'click', '.btn-edit', function () {
       arr = table.row($(this).parents('tr')).data();
       $('.servico_id').html(arr.id);
        editTestimonialsTable(arr);
	});

	$('#example tbody').on( 'click', '.btn-danger', function () {
       arr = table.row($(this).parents('tr')).data();
       confirmDeleteTestimonials(arr.id);
	});
	
	// Activação de Filtros
	
	$('#example tbody').on( 'click', '.btn-active', function () 
	{
       arr = table.row($(this).parents('tr')).data();
       activeFilters(arr.id,arr.activar_field);
    });


 






    









        function generatePdf(p,o){
        $('#pdf_conf').modal('hide');
        $('.back').fadeIn();
        setTimeout(function(){
        $('.'+p+''+o).trigger('click');}, 500);
        setTimeout(function(){$('.back').fadeOut();}, 1000);
        } 
        
        
        $('#example_length').addClass('col-xs-12 col-md-6 col-sm-5 pull-left').removeClass('dataTables_length');
        $('.dt-buttons').addClass('col-xs-12 col-md-6 col-sm-7 pull-right').removeClass('dt-buttons');
        
        
        $('#example_wrapper').on( 'click', '.buttons-pdf-format', function () {
            $('#pdf_conf').modal();
        });
        
    </script>
    
    
    
</div>


</div>
</div>
</div>

<!-- End Content -->





