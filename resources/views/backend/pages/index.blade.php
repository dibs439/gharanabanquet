@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Page List</div>

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
                              <th>Category</th>
                              <th>Title</th>
                              <th>Updated</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach($pages as $page)
                            <tr>
                              <td>{{ $page->id }}</td>
                              <td>{{ $page->category }}</td>
                              <td>{{ $page->heading }}</td>
                              <td>@if(isset($page->updated_at)) {{ $page->updated_at->format('d/m/Y')   }}@endif</td>
                              <td class="text-center"><a href="{{ url('/backend/pages/edit/'. $page->id) }}">Edit</a></td>
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
