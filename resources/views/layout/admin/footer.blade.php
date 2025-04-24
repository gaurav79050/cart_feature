            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2025</span> <a href="#">Gaurav</a>, All rights reserved.</p>
                </div>
                
            </div>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('src/plugins/src/mousetrap/mousetrap.min.js')}}"></script>
    <script src="{{ asset('src/plugins/src/waves/waves.min.js')}}"></script>
    <script src="{{ asset('layouts/collapsible-menu/app.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- <script src="{{ asset('src/plugins/src/apex/apexcharts.min.js')}}"></script> -->
    <script src="{{ asset('src/assets/js/dashboard/dash_1.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
        ClassicEditor
            .create(document.querySelector('#requirement'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#benefits'))
            .catch(error => {
                console.error(error);
            });
</script>


</body>
</html>