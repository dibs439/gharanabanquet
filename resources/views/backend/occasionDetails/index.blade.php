@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Occasion Details List >> {{ $occasionDetails[0]->occasion->name ?? '' }}</div>

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
                              <th>Title</th>
                              <th>Sub Title</th>
                              <th>Photo</th>
                              <th>Updated</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach($occasionDetails as $occasionDetail)
                            <tr>
                              <td>{{ $occasionDetail->id }}</td>
                              <td>{{ $occasionDetail->title }}</td>
                              <td>{{ $occasionDetail->sub_title }}</td>
                              <td>
                                    @if(isset($occasionDetail->photo) && $occasionDetail->photo != '')
                                    <img src="{{ url(env('OCCASIONS_PIC_MAX').$occasionDetail->photo) }}" class="img-thumbnail" style="width:100px;" />
                                    @endif
                              </td>
                              <td>@if(isset($occasionDetail->updated_at)) {{ $occasionDetail->updated_at->format('d/m/Y')   }}@endif</td>
                              <td class="text-center">
                                <a href="{{ url('/backend/occasionDetails/edit/'. $occasionDetail->id) }}">Edit</a> |
                                <a href="{{ url('/backend/occasionDetails/delete/'. $occasionDetail->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
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
