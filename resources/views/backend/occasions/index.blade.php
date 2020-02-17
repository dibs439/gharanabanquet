@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Occasion List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Heading</th>
                              <th>Updated</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach($occasions as $occasion)
                            <tr>
                              <td>{{ $occasion->id }}</td>
                              <td>{{ $occasion->name }}</td>
                              <td>{{ $occasion->heading }}</td>
                              <td>@if(isset($occasion->updated_at)) {{ $occasion->updated_at->format('d/m/Y')   }}@endif</td>
                              <td class="text-center">
                                <a href="{{ url('/backend/occasions/edit/'. $occasion->id) }}">Edit</a> |
                                <a href="{{ url('/backend/occasionDetails/'. $occasion->id) }}">Details</a>
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
