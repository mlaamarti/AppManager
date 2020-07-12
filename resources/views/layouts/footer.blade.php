    <script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL::asset('plugins/data-tables/js/datatables.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="{{URL::asset('js/metisMenu.js')}}"></script>
    <script src="{{URL::asset('plugins/slimscroll/slimscroll.js')}}"> </script>
    <script src="{{URL::asset('plugins/apex-charts/js/apexcharts.js')}}"></script>
    <script src="{{URL::asset('js/jquery.cookie-1.4.1.min.js')}}"></script>
    <script src="{{URL::asset('js/color.js')}}"></script>
    <script src="{{URL::asset('js/index.js')}}"></script>
    <script src="{{URL::asset('js/datatable-init.js')}}"></script>

    @if(Route::currentRouteName() == 'ads-manager' || Route::currentRouteName() == 'myads')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
        <script>
            new ClipboardJS('.btn');
        </script>
    @endif

    <script src="{{URL::asset('js/main.js')}}"></script>

</body>

</html>
