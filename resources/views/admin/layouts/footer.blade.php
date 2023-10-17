
<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <script>
                    document.write(new Date().getFullYear());
                </script>
                © Mnotion - mnotion.com
            </div>
            <div class="col-md-6">
                <div
                    class="text-md-end footer-links d-none d-md-block"
                >
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->
</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="end-bar">
<div class="rightbar-title">
<a href="javascript:void(0);" class="end-bar-toggle float-end">
    <i class="dripicons-cross noti-icon"></i>
</a>
<h5 class="m-0">Settings</h5>
</div>

<div class="rightbar-content h-100" data-simplebar="">
<div class="p-3">
    <!-- Settings -->
    <h5 class="mt-3">Color Scheme</h5>
    <hr class="mt-1" />

    <div class="form-check form-switch mb-1">
        <input
            class="form-check-input"
            type="checkbox"
            name="color-scheme-mode"
            value="light"
            id="light-mode-check"
            checked=""
        />
        <label class="form-check-label" for="light-mode-check"
            >Light Mode</label
        >
    </div>

    <div class="form-check form-switch mb-1">
        <input
            class="form-check-input"
            type="checkbox"
            name="color-scheme-mode"
            value="dark"
            id="dark-mode-check"
        />
        <label class="form-check-label" for="dark-mode-check"
            >Dark Mode</label
        >
    </div>

    <!-- Width -->
    <h5 class="mt-4">Width</h5>
    <hr class="mt-1" />
    <div class="form-check form-switch mb-1">
        <input
            class="form-check-input"
            type="checkbox"
            name="width"
            value="fluid"
            id="fluid-check"
            checked=""
        />
        <label class="form-check-label" for="fluid-check"
            >Fluid</label
        >
    </div>

    <div class="form-check form-switch mb-1">
        <input
            class="form-check-input"
            type="checkbox"
            name="width"
            value="boxed"
            id="boxed-check"
        />
        <label class="form-check-label" for="boxed-check"
            >Boxed</label
        >
    </div>

    <!-- Left Sidebar-->
    <h5 class="mt-4">Left Sidebar</h5>
    <hr class="mt-1" />
    <div class="form-check form-switch mb-1">
        <input
            class="form-check-input"
            type="checkbox"
            name="theme"
            value="default"
            id="default-check"
        />
        <label class="form-check-label" for="default-check"
            >Default</label
        >
    </div>

    <div class="form-check form-switch mb-1">
        <input
            class="form-check-input"
            type="checkbox"
            name="theme"
            value="light"
            id="light-check"
            checked=""
        />
        <label class="form-check-label" for="light-check"
            >Light</label
        >
    </div>

    <div class="form-check form-switch mb-3">
        <input
            class="form-check-input"
            type="checkbox"
            name="theme"
            value="dark"
            id="dark-check"
        />
        <label class="form-check-label" for="dark-check"
            >Dark</label
        >
    </div>

    <div class="form-check form-switch mb-1">
        <input
            class="form-check-input"
            type="checkbox"
            name="compact"
            value="fixed"
            id="fixed-check"
            checked=""
        />
        <label class="form-check-label" for="fixed-check"
            >Fixed</label
        >
    </div>

    <div class="form-check form-switch mb-1">
        <input
            class="form-check-input"
            type="checkbox"
            name="compact"
            value="condensed"
            id="condensed-check"
        />
        <label class="form-check-label" for="condensed-check"
            >Condensed</label
        >
    </div>

    <div class="form-check form-switch mb-1">
        <input
            class="form-check-input"
            type="checkbox"
            name="compact"
            value="scrollable"
            id="scrollable-check"
        />
        <label class="form-check-label" for="scrollable-check"
            >Scrollable</label
        >
    </div>
</div>
<!-- end padding-->
</div>
</div>

<div class="rightbar-overlay"></div>

<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '#content' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
<script>
    const curentTime = () => {
        const element = document.getElementById('clock');

        let date = new Date(),
        hours = date.getHours(),
        minutes = date.getMinutes(),
        seconds = date.getSeconds();

        let day;
        day = hours < 12 ? "AM" : "PM";
        hours = hours > 12 ? hours - 12 : hours;
        hours = hours == 0 ? (hours = 12) : hours;

        hours = hours < 10 ? `0${hours}` : hours;
        minutes = minutes < 10 ? `0${minutes}` : minutes;
        seconds = seconds < 10 ? `0${seconds}` : seconds;

        element.textContent = `${hours}:${minutes}:${seconds} ${day}`;

    };
    curentTime();
    setInterval(curentTime, 1000);
</script>
<!-- /End-bar -->


{{-- <script>
    $.NotificationApp.send("Title","Your awesome message text","bottom-right","success","Icon")
</script> --}}
<!-- bundle -->

<script src="{{url('admin/assets/js/jquery/jquery-3.5.1.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#division-dropdown').on('change', function() {
            var divisionId = $(this).val();

            $('#district-dropdown').html('');
            $.ajax({
                url: '/fetch/district',
                method: 'POST',
                dataType: 'json',
                data:{division_id: divisionId,_token:"{{ csrf_token() }}"},
                success: function(response) {
                    $('#district-dropdown').html('<option value="">Select District</option>');
                    $.each(response.districts,function(index, val){
                        $('#district-dropdown').append('<option value="'+val.id+'">'+val.name+'</option>')
                    });
                    $('#upazila-dropdown').html('<option value="">Select Upazila</option>');
                }
            });
        });

        $('#district-dropdown').on('change', function() {
            var districtId = $(this).val();
            
            $('#upazila-dropdown').html('');
            $.ajax({
                url: '/fetch/upazila',
                method: 'POST',
                dataType: 'json',
                data:{district_id: districtId,_token:"{{ csrf_token() }}"},
                success: function(response) {
                    $('#upazila-dropdown').html('<option value="">Select Upazila</option>');
                    $.each(response.upazilas,function(index, val){
                        $('#upazila-dropdown').append('<option value="'+val.id+'">'+val.name+'</option>')
                    });
                }
            });
        });
    });

    
</script>
<script src="{{url('admin/assets/js/vendor.min.js')}}"></script>
<script src="{{url('admin/assets/js/app.min.js')}}"></script>
<!-- third party js -->
<script src="{{url('admin/assets/js/vendor/apexcharts.min.js')}}"></script>
<script src="{{url('admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.j')}}"></script>
<script src="{{url('admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- third party js ends -->

<!-- Todo js -->
<script src="{{url('admin/assets/js/ui/component.todo.js')}}"></script>
<script src="{{url('admin/assets/js/vendor/Chart.bundle.min.js')}}"></script>

<!-- demo app -->
<script src="{{url('admin/assets/js/pages/demo.dashboard.js')}}"></script>
<script src="{{url('admin/assets/js/pages/demo.dashboard-analytics.js')}}"></script>
<script src="{{url('admin/assets/js/pages/demo.dashboard-crm.js')}}"></script>
<script src="{{url('admin/assets/js/pages/demo.dashboard-projects.js')}}"></script>
<!-- end demo js-->

<!-- Datatables js -->
<script src="{{url('admin/assets/js/vendor/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin/assets/js/vendor/dataTables.bootstrap5.js')}}"></script>
<script src="{{url('admin/assets/js/vendor/dataTables.responsive.min.js')}}"></script>
<script src="{{url('admin/assets/js/vendor/responsive.bootstrap5.min.js')}}"></script>
<script src="{{url('admin/assets/js/vendor/dataTables.checkboxes.min.js')}}"></script>
<!-- third party js -->
    
<!-- SimpleMDE js -->
<script src="{{url('admin/assets/js/vendor/simplemde.min.js')}}"></script>
<!-- Page init js -->
<script src="{{url('assets/js/pages/demo.inbox.js')}}"></script>
<!-- Datatable Init js -->
<script src="{{url('admin/assets/js/pages/demo.datatable-init.js')}}"></script>
<script src="{{url('admin/assets/js/pages/demo.customers.js')}}"></script>


</body>
</html>
