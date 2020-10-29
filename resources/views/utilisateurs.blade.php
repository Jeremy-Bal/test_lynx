<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/utilisateurs.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/utilisateurs.css') }}" rel="stylesheet">
    
    <title>Le Blog</title>
    
</head> 
<body>
@extends('layouts.app')

@section('content')

<form class="formulaire" action="/utilisateurs" method="POST">
    @csrf
    <div class="nom">
        <div class="form-group">
            <p>What do you want to write? <span style="font-weight: bold">{{ Auth::user()->name }}</span></p>
        </div>
    </div>
    <div class="form-group">
        <textarea type="text" class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Write a message"></textarea>
        @error('message')
        <div class="invalid-feedback">
            Message inccorect
            @enderror 
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>

    @foreach ($utilisateurs as $utilisateur)
        
    <div class="col-md-4" style="height: 410px">
            <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#FE3D5A"></rect><text class="titre" x="10%" y="50%" fill="#eceeef" dy=".3em">{{ $utilisateur->name }}</text></svg>
            <div class="card-body">
                <p class="card-text" id="view">{{ $utilisateur->message }}</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
            </div>
            </div>
        </div>
    @endforeach
    <div class="link">
        {{ $utilisateurs->links() }}
    </div>
    

@endsection
</body>
</html>