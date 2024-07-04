<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Website Palang Merah Indonesia</title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/select.dataTables.min.css') }}">
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
<!-- endinject -->
<link rel="shortcut icon" href="{{ asset('assets/images/logo-bunga.png') }}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<!-- Leaflet JavaScript -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and dependencies (ensure these are at the bottom of your body tag) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

<style>
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }

    #map {
        height: 400px;
        width: 100%;
        margin-bottom: 1rem;
    }

    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }

    .alert ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .alert li {
        margin-bottom: 10px;
    }
</style>