
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
<script>
    let container = document.getElementById("showup");
    let getup = document.getElementById("getup");
    let timeNow = new Date().getHours();
    let greeting =
    timeNow >= 5 && timeNow < 12
        ? "Good Morning "
        : timeNow >= 12 && timeNow < 18
        ? "Good Afternoon"
        : "Good Evening";
    container.innerHTML = `${greeting}`;
    getup.innerHTML = `${greeting}`;
</script>

{{-- <script>
    $.NotificationApp.send("Title","Your awesome message text","bottom-right","success","Icon")
</script> --}}
<!-- bundle -->


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

<!-- Datatable Init js -->
<script src="{{url('admin/assets/js/pages/demo.datatable-init.js')}}"></script>
</body>
</html>
