(function($) {
  "use strict"; 
        $('#data1').DataTable();
        $('#data-export').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
   })(jQuery); 