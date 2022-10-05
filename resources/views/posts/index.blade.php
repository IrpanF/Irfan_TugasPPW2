@extends('layouts.master')

@section('konten')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        @if (\Session::has('success'))
      <div class="alert alert-success">
        {!! \Session::get('success')!!}
      </div>
      @endif
        <h1 style="text-align:center"><strong>Projects</strong></h1>
        <br>
        @if(count($posts)>0)
            @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">
                {{$post->title}}</a></h3>
                <small>Tanggal:
                {{$post->created_at}}</small>
            </div>
            @endforeach 
            Halaman : {{ $posts->currentPage() }} <br />
        Jumlah Data : {{ $posts->total() }} <br />
        Data Per Halaman : {{ $posts->perPage() }} <br />
        <div class="d-flex">
        {{ $posts->links() }}
        </div>

        @else
            <h3>Tidak ada data.</h3>
        @endif </br>
        <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-secondary"><a href="{{ route('posts.create') }}" style="color:white;">Create New Post</a></button>
        </div>
        </div>
    </div>
@endsection