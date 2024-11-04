@extends('superadmin.layouts.superadmin')

@section('title', 'Edit Table Data')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Edit Ozamiz Table Data</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('super-admin.ozamiztabledatas.update', $ozamiztabledata->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="table">Table Number</label>
                    <input type="text" name="table" class="form-control" value="{{ $ozamiztabledata->table }}" required>
                </div>
                
                <div class="form-group">
                    <label for="table_capacity">Table Capacity</label>
                    <input type="number" name="table_capacity" class="form-control" value="{{ $ozamiztabledata->table_capacity }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Update Table</button>
            </form>
        </div>
    </div>
</div>
@endsection
