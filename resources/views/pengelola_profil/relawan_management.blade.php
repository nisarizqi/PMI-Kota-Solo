@extends('layouts-pengelolaProfil.default')
@section('content')

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            
            @section('content')
            <div class="content-wrapper">
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <div class="w-100 text-center">
                                <h1 class="card-title card-title-dash">LIST RELAWAN</h1>
                            </div>
                        </div>
                        <br>
                        <div class="d-sm-flex justify-content-between align-items-start">
                        <a href="{{ url('/pengelolaProfil/add-volunteer') }}" class="btn btn-primary btn-sm me-2" type="button">
                                    <i class="mdi mdi-account-plus"></i> Tambah Akun
                             </a>
                            <div class="d-flex ms-auto align-items-center">
                            <form class="search-form" action="#">  
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                                    <span class="input-group-text"><i class="icon-search"></i></span>
                                </div>
                            </form>
                            </div>
                        </div>
                       
                      
                            <div class="table-responsive  ">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                            <td>aura</td>
                                            <td>relawan@gmail</td>
                                            <td>aura12</td>
                                            <td><label class="btn btn-danger btn-sm">Hapus</label> <label class="btn btn-info btn-sm">Edit</label></td>
                                    </tr>
                                    <tr>
                                            <td>sekar</td>
                                            <td>relawan3@gmail</td>
                                            <td>sekar12</td>
                                            <td><label class="btn btn-danger btn-sm">Hapus</label> <label class="btn btn-info btn-sm">Edit</label></td>
                                    </tr>
                                    <tr>
                                            <td>dyang</td>
                                            <td>relawan2@gmail</td>
                                            <td>dyang12</td>
                                            <td><label class="btn btn-danger btn-sm">Hapus</label> <label class="btn btn-info btn-sm">Edit</label></td>
                                    </tr>
                                    <tr>
                                            <td>raisa</td>
                                            <td>relawan@gmail</td>
                                            <td>raisa12</td>
                                            <td><label class="btn btn-danger btn-sm">Hapus</label> <label class="btn btn-info btn-sm">Edit</label></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
            @endsection
    
</div>
</div>
@endsection

   
    
