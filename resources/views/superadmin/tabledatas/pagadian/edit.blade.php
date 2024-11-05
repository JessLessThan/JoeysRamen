@extends('superadmin.layouts.superadmin')

@section('title', 'Edit Table Data')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Edit Pagadian Table Data</h1>
    
    <div class="card">
        <h3 class="mt-lg-3 px-3">Table Data Info
            <a href="{{ url('super-admin/pagadiantabledatas') }}" class="btn btn-danger float-end ">Back</a>
        </h3>
        <div class="card-body">
            <form action="{{ route('super-admin.pagadiantabledatas.update', $pagadiantabledata->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="table">Table Number</label>
                    <input type="text" name="table" class="form-control" value="{{ $pagadiantabledata->table }}" required>
                </div>
                
                <div class="form-group">
                    <label for="table_capacity">Table Capacity</label>
                    <input type="number" name="table_capacity" class="form-control" value="{{ $pagadiantabledata->table_capacity }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Update Table</button>
            </form>
        </div>
    </div>
</div>
@endsection
