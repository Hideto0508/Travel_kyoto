{{-- @extends('layouts.app')
@section('title')
編集
@endsection
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
     <section class="container m-5">
        <div class="row justify-content-center">
            <div class="col-8">
                {{-- @if($errors->any())
                   <ul>
                     @foreach($errors->all() as $message)
                         <li class="alert alert-danger">{{ $message }}</li>
                     @endforeach
                   </ul>
                @endif --}}
                <form action="{{ route('spots.update',['id' => $spot->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">観光地名</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="content">概要</label>
                        <textarea class="form-control" name="content" id="content">{{ old('content') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">写真</label>
                        <input type="text" class="form-control" name="img" id="img" value="{{ old('img') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="location">所在地</label>
                        <textarea class="form-control" name="location" id="location">{{ old('location') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="iflame_code">共有コード</label>
                        <textarea class="form-control" name="iflame_code" id="iflame_code">{{ old('iflame_code') }}</textarea>
                    </div>    
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">編集</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>
</html>

{{-- @endsection --}}