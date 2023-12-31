@extends('app')
@section('content')
<div class="px-4 py-5">
    <div class="card">
        <div class="card-header">
            <div class="card-title pt-2">
                <div class="d-flex justify-content-between">
                    <h4>Data Surat Keluar&nbsp;</h4>
                    <div>
                        <a href="{{route('suratkeluars.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>&nbsp;
                        <a href="{{url('suratkeluarimport')}}" class="btn btn-warning"><i class="fa fa-upload"></i> Import Data</a>&nbsp;
                        <a href="{{url('suratkeluarpdf')}}" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i>Export PDF</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table" id="listdata">
                    <thead>
                        <tr>
                            <th>No.Surat</th>
                            <th>Tgl. Surat</th>
                            <th>Tgl. Keluar</th>
                            <th>Tujuan</th>
                            <th>Isi Ringkas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($query as $row)
                        <tr>
                            <td>{{$row->no_surat}}</td>
                            <td>{{$row->tgl_surat}}</td>
                            <td>{{$row->tgl_keluar}}</td>
                            <td>{{$row->tujuan}}</td>
                            <td>{{$row->ringkasan}}</td>
                            <td>
                                <form action="{{route('suratkeluars.destroy',$row->id)}}" method="post">
                                    <a class="mx-1 btn btn-success btn-sm"
                                        href="{{route('suratkeluars.show', $row->id)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>&nbsp;
                                    <a class="mx-1 btn btn-warning btn-sm"
                                        href="{{route('suratkeluars.edit', $row->id)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>&nbsp;
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah yakin akan menghapus data ini?');">
                                        <i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection