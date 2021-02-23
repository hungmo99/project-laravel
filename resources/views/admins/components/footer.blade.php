<div class="footer-wrapper">
    <div class="footer-section f-section-1">
        <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
    </div>
    <div class="footer-section f-section-2">
        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
    </div>
</div>
</div>
<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('admins/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('admins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('admins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admins/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admins/assets/js/app.js')}}"></script>
<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
     $("#id_attr").change(function(event) {
            var sku_detail = $('#sku').text();
            var id_attr = $('#id_attr option:selected').text();
            var sku_done = sku_detail + id_attr;
            console.log(sku_detail, id_attr);
            $('#sku_detail').val(sku_done);
        });
</script>
<script>
$(document).ready(function() {
App.init();
});
</script>
<script src="{{asset('admins/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset('admins/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('admins/assets/js/dashboard/dash_1.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo3/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jan 2021 13:33:59 GMT -->

</html>
