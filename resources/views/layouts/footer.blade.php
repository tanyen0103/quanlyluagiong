
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('public/teamplates/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/teamplates/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('public/teamplates/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('public/teamplates/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('public/teamplates/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('public/teamplates/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('public/teamplates/js/demo/chart-pie-demo.js') }}"></script>


{{-- Model Search table --}}
<script>
    // Function fomr search
    $(document).ready(function(){
        $("#button-addon2").click(function(){
            // Lấy giá trị từ ô tìm kiếm
            var searchValue = $("#searchInput").val().toLowerCase();
            // Lặp qua từng dòng trong bảng và ẩn những dòng không chứa từ khóa tìm kiếm
            $("table tbody tr").each(function(){
                var rowText = $(this).text().toLowerCase();
                if(rowText.indexOf(searchValue) == -1){
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        });
    });

    // Function auto update time
    function updateTime() {
        var now = new Date();
        var options = {
            timeZone: 'Asia/Ho_Chi_Minh',
            year: 'numeric', month: 'numeric', day: 'numeric',
            hour: 'numeric', minute: 'numeric', second: 'numeric',
            hour12: true
        };
        var dateString = now.toLocaleDateString('vi-VN', options);
        document.getElementById("current-time").textContent = dateString;
    }
    setInterval(updateTime, 1000);

</script>




