
<script src="js/bootstrap.min.js"></script>
<script src="js/bootbox.min.js"></script>
<script src="js/momentjs/moment-with-locales.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/dataTables.buttons.min.js"></script>
<script src="js/buttons.colVis.js"></script>
<script src="js/buttons.print.min.js"></script>
<script src="js/buttons.html5.min.js"></script>
<script src="js/pdfmake.min.js"></script>
<script src="js/vfs_fonts.js"></script>
<script src="js/jszip.min.js"></script>
<script src="js/dataTables.colReorder.min.js"></script>
<script src="js/select2.full.min.js"></script>




<script>

var c = 0;


$("#sidebar").css('display', 'block');
setTimeout(function() {$(".back").fadeOut(); });
  
$("#menu-toggle").click(function(e) {
        e.preventDefault();
        c = c + 1;
        
        if (c % 2 == 1)
        {
            $("#sidebar").css('display', 'none');
            
        }
        else
        {
            
            $("#sidebar").css('display', 'block');
        }
        $("#wrapper").toggleClass("active");
        
        
});

</script>




