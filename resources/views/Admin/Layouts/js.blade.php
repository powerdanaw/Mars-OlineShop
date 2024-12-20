
    <!-- Jquery Core Js -->

    <script src="{{ asset('AdminAssets/assets/bundles/libscripts.bundle.js')}}"></script>

    <!-- Plugin Js -->
    <script src="{{ asset('AdminAssets/assets/bundles/apexcharts.bundle.js')}}"></script>




    <script src="{{ asset('AdminAssets/assets/bundles/dataTables.bundle.js')}}"></script>

    
    
    <script src="{{ asset('AdminAssets/assets/plugin/date-persian/jquery.persiandatepicker.js')}}"></script>




    <script src="{{ asset('AdminAssets/assets/plugin/date-persian/jquery.Bootstrap-PersianDateTimePicker.js')}}"></script>


    <script src="{{ asset('AdminAssets/assets/plugin/date-persian/persian-date.min.js')}}"></script>




    <script src="{{ asset('AdminAssets/assets/plugin/date-persian/persian-datepicker.js')}}"></script>



    <script src="{{ asset('AdminAssets/assets/plugin/date-persian/persian-datepicker.min.js')}}"></script>





    <!-- Jquery Page Js -->
    <script src="{{ asset('AdminAssets/assets/js/template.js')}}"></script>

    <script src="{{ asset('AdminAssets/assets/js/page/index.js')}}"></script>


    <script src="{{ asset('AdminAssets/assets/fontawesome/js/all.js')}}"></script>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&amp;callback=myMap"></script>  
    <script>
        $('#myDataTable')
        .addClass( 'nowrap')
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    </script>


    @yield('js')