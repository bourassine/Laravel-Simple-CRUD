@extends('crud.layout')

@section('content')
    <style>
        /* Custom CSS for enhanced styling */
        body {
            background-color: #f8f9fa;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: blue;
            color: #fff;
        }

        .btn {
            border-radius: 3px;
        }

        .table {
            border-radius: 5px;
        }
    </style>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">My CRUD Application | Bourassine Imen</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/crud/create') }}" class="btn btn-success btn-sm" title="Add New Line">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($crud as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
 
                                        <td>
                                            <a href="{{ url('/crud/' . $item->id) }}" class="btn btn-info btn-sm" title="View"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                            <a href="{{ url('/crud/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
 
                                            <form method="POST" action="{{ url('/crud' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
        </div>
    </div>
@endsection
