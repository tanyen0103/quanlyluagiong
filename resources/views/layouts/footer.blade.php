
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('public/teamplates/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/teamplates/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{-- <!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> --}}

{{-- font awsome --}}
<script src="https://kit.fontawesome.com/5470c24891.js" crossorigin="anonymous"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('public/teamplates/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('public/teamplates/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('public/teamplates/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('public/teamplates/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('public/teamplates/js/demo/chart-pie-demo.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>


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

    // Search table
    $(document).ready(function(){
        $("#button-addon2").click(function(){
            var searchValue = $("#searchInput").val().toLowerCase();
            var resultsFound = false;

            $("table tbody tr").each(function(){
                var rowText = $(this).text().toLowerCase();
                if(rowText.indexOf(searchValue) == -1){
                    $(this).hide();
                } else {
                    $(this).show();
                    resultsFound = true;
                }
            });

            if (!resultsFound) {
                $("#noResults").show();
                $("#searchInput").val("Không có kết quả bạn tìm"); // Thay đổi nội dung của ô nhập liệu
            } else {
                $("#noResults").hide();
                $("#searchInput").val(searchValue); // Giữ nguyên nội dung của ô nhập liệu
            }
        });
    });


    $(document).ready(function(){
        // Search table
        $("#button-addon2").click(function(){
            var searchValue = $("#searchInput").val().toLowerCase();
            var resultsFound = false;

            $("table tbody tr").each(function(){
                var rowText = $(this).text().toLowerCase();
                if(rowText.indexOf(searchValue) == -1){
                    $(this).hide();
                } else {
                    $(this).show();
                    resultsFound = true;
                }
            });

            if (!resultsFound) {
                $("#noResults").show();
                $("#searchInput").val("Không có kết quả bạn tìm"); // Thay đổi nội dung của ô nhập liệu
            } else {
                $("#noResults").hide();
                $("#searchInput").val(searchValue); // Giữ nguyên nội dung của ô nhập liệu
            }
        });

        // Search card
        $("#button-addon2-card").click(function(){
            var searchValue = $("#searchInputCard").val().toLowerCase();
            var resultsFound = false;

            $("h5.card-title").each(function(){
                var titleText = $(this).text().toLowerCase();
                if(titleText.indexOf(searchValue) == -1){
                    $(this).closest(".card").hide();
                } else {
                    $(this).closest(".card").show();
                    resultsFound = true;
                }
            });

            if (!resultsFound) {
                $("#noResults").show();
                $("#searchInputCard").val("Không có kết quả bạn tìm");
            } else {
                $("#noResults").hide();
                $("#searchInputCard").val(searchValue);
            }
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

    function confirmDelete() {
        if (confirm('Bạn có chắc chắn muốn xóa?')) {
            document.querySelector('form').submit();
        } else {
            return false;
        }
    }

    // Spinner loading
    const spinnerWrapperEl = document.querySelector('.yt-loader');
    window.addEventListener('load', () => {
        spinnerWrapperEl.style.opacity = '0';

        setTimeout(() => {
            spinnerWrapperEl.style.display = 'none';
        }, 200);
    });

    $('.alert .close').on('click', function () {
        $(this).parent().fadeOut();
    });

    // Modal Show Images
    // Open the Modal
    function openModal(img) {
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the modal image and set it to the clicked image
    var modalImg = document.getElementById("img01");
    modalImg.src = img.src;

    // Get the caption element and set its text
    var captionText = document.getElementById("caption");
    captionText.innerHTML = img.alt;

    // Show the modal
    modal.style.display = "block";

    // When the user clicks on <span> (x), close the modal
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    }
    }

</script>




