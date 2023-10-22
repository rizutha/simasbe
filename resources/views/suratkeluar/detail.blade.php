@extends('app')
@section('content')
<div class="px-4 py-5">
    <div class="card">
        <div class="card-header">
            <div class="card-title pt-2">
                <div class='d-flex justify-content-between'>
                    <h4 class="">Data Surat keluar</h4>
                    <a href="{{ url('suratkeluarfile/' . $suratkeluar->file_surat) }}" target="_blank" class="btn btn-primary"><i class="fa fa-file mx-1"></i>Lihat File</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
                    <div class='row'>
                        <p class='col-2'>Nomor Surat</p>
                        <tr>: {{$suratkeluar->no_surat}}</tr>
                    </div>
                    <div class='row'>
                        <p class='col-2'>Tanggal Surat</p>
                        <tr>: {{$suratkeluar->tgl_surat}}</tr> 
                    </div>
                    <div class='row'>  
                        <p class='col-2'>Tanggal keluar</p><tr>: {{$suratkeluar->tgl_keluar}}</tr>
                    </div>
                    <div class='row'> 
                        <p class='col-2'>Tujuan</p><tr>: {{$suratkeluar->Tujuan}}</tr>
                    </div> 
                    <div class='row'> 
                        <p class='col-2'>Ringkasan</p><tr>: {{$suratkeluar->ringkasan}}</tr>
                    </div> 
        </div>
    </div>
</div>
@endsection