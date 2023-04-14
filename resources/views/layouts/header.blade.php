{{-- Template --}}

    <!-- Custom fonts for this template-->
    <link href="{{asset('public/teamplates/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('public/teamplates/css/sb-admin-2.min.css')}}" rel="stylesheet">

    {{-- font awsome --}}
    <script src="https://kit.fontawesome.com/5470c24891.js" crossorigin="anonymous"></script>

    <style>
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
    </style>

