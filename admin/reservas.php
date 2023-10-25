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
    <link href="css/reserves.css" rel="stylesheet" type="text/css"/>
        <!-- Mostra o Conteudo da Página Correspondente -->
        <div class="cont_page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Gestão de Reservas</h3>
                        <br>
                        <div class="table-responsive">
                            <table id="example" class="display responsive nowrap table-striped dataTable" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th>Acção</th>
                                  <th>Data</th>
                                  <th>Hora</th>
                                  <th>Adt</th>
                                  <th>Cri</th>
                                  <th>Beb</th>
                                  <th>Nome</th>
                                  <th>Pais</th>
                                  <th>Email</th>
                                  <th>Telefone</th>
                                  <th>Observações</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <th>Acção</th>
                                  <th>Data</th>
                                  <th>Hora</th>
                                  <th>Adt</th>
                                  <th>Cri</th>
                                  <th>Beb</th>
                                  <th>Nome</th>
                                  <th>Pais</th>
                                  <th>Email</th>
                                  <th>Telefone</th>
                                  <th>Observações</th>
                                  <th></th>
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
    
    searchValueByReserves();
        
        
        // Activar Colunas
        
        
        
            
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
                            dataValue='id='+id+'&action=2';
                         $.ajax({
                          type: "POST",
                          cache:false,
                          url: "reservas/action_reservas.php",
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
                            $('.debug-url').html('O Cliente Assistente com o numero: #<strong>'+id+'</strong> não foi apagado, p.f. verifique a ligação Wi-Fi.');
                            $("#mensagem_ko").trigger('click');
                          }
                       });
                    
                          }
                        },
                      }
                    });
    }
   
    
    
        
        
        function searchValueByReserves()
        {
            table = $('#example').DataTable( {
            dom: "Blfrtip",
            rowId: "id",
            "paging": true,
            "serverside":true,
            order: [],
            "ajax": 
      {
        "url" : "action_datatables_reserves.php",
        "type": "GET"
      },
      columns: [
        { data: "id", render: function ( data, type, row ) {
          return '<button style="margin-left: 5px;" title="Apagar '+data+'" class="btn-sm btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>';
          }},
        { data: "data_reserva" , render: function ( data, type, row ) {
          myDate = new Date(data*1000);
          a = moment(myDate).format('DD/MM/YYYY');
          return a;
          }
        },
        { data: "hora_reserva" , render: function ( data, type, row ) {
          date = new Date(data * 1000);
          year = date.getFullYear();
          month = date.getMonth() + 1; 
          day = date.getDate();
          hours = date.getHours();
          minutes = date.getMinutes();
          seconds = date.getSeconds();
          month = (month < 10) ? '0' + month : month;
          day = (day < 10) ? '0' + day : day;
          hours = (hours < 10) ? '0' + hours : hours;
          minutes = (minutes < 10) ? '0' + minutes : minutes;
          seconds = (seconds < 10) ? '0' + seconds: seconds;
          return hours + ':' + minutes;
          }
        },
        { data: "adultos"},
        { data: "criancas"},
        { data: "bebes"},
        { data: "nome" },
        { data: "pais"},
        { data: "email"},
        { data: "telefone"},
        { data: "observacoes"},
        { data: "tstp", className: "hidden"}
      ],
      "columnDefs": [
         {"orderData": [11], "targets": [1]}
      ],
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
              config.filename = 'reserves';
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
              config.filename = 'reserves';
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
              config.filename = 'reserves';
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
              config.filename = 'reserves';

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
              config.filename = 'reserves';

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
              config.filename = 'reserves';
              

              
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
              config.filename = 'reserves';
              
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
              config.filename = 'reserves';
              
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
        
        
        $('#example_length').addClass('col-xs-12 col-md-6 col-sm-6 pull-left').removeClass('dataTables_length');
        $('.dt-buttons').addClass('col-xs-12 col-md-6 col-sm-6 pull-right').removeClass('dt-buttons');
        
        
        $('#example_wrapper').on( 'click', '.buttons-pdf-format', function () {
            $('#pdf_conf').modal();
        });
        
    </script>
    
    
    
</div>


</div>
</div>
</div>

<!-- End Content -->






