{{-- Template --}}

    <!-- Custom fonts for this template-->
    <link href="{{asset('public/teamplates/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('public/teamplates/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        @font-face{
            font-family: 'UTM AVO';
            src: url("{{ asset('public/home/font/UTM_AVO.TTF') }}") format('truetype');
        }

        @font-face{
            font-family: 'UTM AVO BOLD';
            src: url("{{ asset('public/home/font/UTM_AVOBOLD.TTF') }}") format('truetype');
        }

        @font-face{
            font-family: 'UTM AVO BOLD ITALIC';
            src: url("{{ asset('public/home/font/UTM_AVOBOLD_ITALIC.TTF') }}") format('truetype');
        }

        @font-face{
            font-family: 'UTM AVO ITALIC';
            src: url("{{ asset('public/home/font/UTM_AVO_ITALIC.TTF') }}") format('truetype');
        }

        body{
            font-family: 'UTM AVO';
        }

        a, a:hover{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
        .btn{
            border-radius: 2px;
        }
        .card-header:first-child {
            border-radius: 0px;
        }

        .h-0_5r{
            height: 0.5rem;
        }

        .h-1r{
            height: 1rem;
        }

        .h-2r{
            height: 2rem;
        }

        .h-3r{
            height: 3rem;
        }

        .h-4r{
            height: 4rem;
        }

        .h-5r{
            height: 5rem;
        }

        #button-addon2{
            z-index: 1;
        }

        /* breadcrumb  */
        .breadcrumb,
        .bg-gradient-primary{
            background-image: url("{{ asset('public/home/images/bg-creadcrum-01-01.png') }}");
            background-size: 100% auto;
            background-color: #4e73df;
            color: #fff;
        }

        .breadcrumb-item.active {
            color: #fff;
        }

        .breadcrumb li a{
            color: #fff;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: #fff;
        }

        /* scrollbar tabel  */
        .table-responsive::-webkit-scrollbar {
            height: 0.5rem;
            width: 10px;
        }

        .table-responsive::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .table-responsive::-webkit-scrollbar-thumb {
            background-color: #4e73df;
            border-radius: 5px;
        }

        .table-responsive::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }
        #noResults {
            color: red;
        }


        /* Modal Images_____________________________ */
        /* The Modal (background) */
        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.9);
        }

        /* Modal Content */
        .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #fff;
        padding: 10px 0;
        height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
        }

        @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        }

        .close:hover,
        .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
        }
    </style>

