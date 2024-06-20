@extends('layouts-admin.default')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <x-select-and-table title="Data Laporan Kejadian" description="Daftar laporan kejadian yang telah diunggah"
                :statuses="['Belum Diverifikasi', 'On Process', 'Selesai']"
                :table-headers="['No', 'Jenis Kejadian', 'Lokasi', 'Tanggal Kejadian', 'Waktu Kejadian', 'Terakhir Update', 'Status', 'Action']"
                create-route="{{ route('create-laporankejadian') }}" 
                baseUrl="laporan-kejadian"/>
        </div>
    </div>
</div>
@endsection