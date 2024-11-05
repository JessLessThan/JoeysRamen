@extends('superadmin.layouts.superadmin')

@section('title', 'DataTable - Ozamiz')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
           
            <h1 class="mb-4">Ozamiz Table Data</h1>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            <div class="card">
                
                <div class="card-header d-flex justify-content-between align-items-center">
                    
                    <h3>Tables</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Table Number</th>
                                    <th>Table Capacity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tables as $table) <!-- Change from $ozamiztabledata to $tables -->
                                <tr>
                                    <td>{{ $table->table }}</td>
                                    <td>{{ $table->table_capacity }}</td>
                                    <td>
                                        <a href="{{ route('super-admin.ozamiztabledatas.edit', $table->id) }}" class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection