<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="width: 130%">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste of messages</div>

                <div class="card-body">
                   <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Message</th>
                            <th scope="col" style="width: 200px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                        @foreach ($messages as $message)
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->message }}</td>
                            <td>
                                <a href="{{ route('messages.edit', $message->id) }}"><button class="btn btn-primary">Edit</button></a>
                                @if (Auth::user()->name == 'admin')
                                  <a href="{{ route('messages.destroy', $message->id) }}"><button class="btn btn-warning">Delete</button></a>
                                @endif
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
@endsection
