<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update <strong> {{ $message->name }}</strong></div>
                <div class="card-body"><form class="form-horizontal" method="POST" action="{{ route('messages.update', $message->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    
                    @csrf
                        </div>
                        <div class="form-group">
                            <textarea style="height: auto" class="form-control" name="message" rows ="20" cols="30">{{ $message->message }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection