@extends('layout.master')
@section('title', 'Tampilan Alat Musik')

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
</div>

    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <a href="{{ url('alatmusik/create') }}" class="btn btn-primary"><i class="bi bi-plus-square"></i></a>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        @if (session()->has('info'))
            <div class="alert alert-success">
                {{ session()->get('info') }}
            </div>
        @endif
        <table class="table">


    <thead>
    <tr>
    <th>Nama Alat Musik</th>
    <th>Tipe Alat</th>
    <th></th>

    </tr>
    </thead>
     <tbody>
    @foreach ($nama_alat as $item)
    <tr>

        <td>{{$item->nama_alat}}</td>
        <td>{{$item->jenis_alat}}</td>

        <td>
            <a href="{{ url('alatmusik/' . $item->id) }}" class="btn btn-sm btn-primary">Tampil</a>
            <a href="{{ url('alatmusik/' . $item->id . '/edit') }}"
                class="btn btn-sm btn-warning">Ubah</a>
        </td>

        
    </tr>
    @endforeach



    </tbody> 
    </table>
    </div>

    </div>

@endsection