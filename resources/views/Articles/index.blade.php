@extends('layouts.app') 
@section('content') 
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{ route('cetak_pdf') }}"> Cetak PDF</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif 
        <table class="table table-bordered" style="width:95%;margin: 0 auto;"> 
    <tr> 
        <th>Judul</th> 
        <th>Konten</th>
        <th>Gambar</th> 
    </tr> 
    @foreach ($articles as $article) 
    <tr> 
    <td>{{ $article->title }}</td> 
        <!-- <td><a href="{{ route('articles.edit',['article'=>$article->id]) }}">{{ $article->title }}</a></td> -->
        <td>{{ $article->content }}</td> 
        <td><img width="150px" 
        src="{{asset('storage/'.$article->featured_image)}}">
    </td>
    </tr> 
 @endforeach 
</table> 
</div>
</body>
</html>
@endsection