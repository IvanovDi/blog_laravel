@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="justify-content-between">Super Blog</div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>  
                    @endif

                    <ul class="nav nav-pills navbar-right">
                      <li class="nav-item">
                        <a class="nav-link active" href="{{route('blog.create')}}">Add Article</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Edit Article</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                      </li>
                    </ul>
                </div>
            </div>  
        </div>
    </div>
    {{--todo добавить вывод статуса и формата--}}
    @foreach($blog as $item)
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default text-center">
                <h2>{{$item->title}}</h2>
                <p>{{$item->content}}</p>
                <a href="{{route("blog.edit", ['id' => $item->id])}}">Edit Article</a>
                <a href="{{route("blog.destroy", ['id' => $item->id])}}" data-id="{{$item->id}}" data-title="{{$item->title}}" class="delete_submit">Delete Article</a>
                <form action="{{route("blog.destroy", ['id' => $item->id])}}" method="post" id="form-delete-{{$item->id}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </div>
        </div>
    @endforeach

</div>
<script>

    window.onload=function(){
        var elements = document.getElementsByClassName('delete_submit');
        for(var i = 0; i < elements.length; i++) {
            elements[i].addEventListener('click', deleteArticle);
        }
    };


        function deleteArticle() {
        event.preventDefault();
        var result = confirm('delete this article - ' + this.getAttribute('data-title'));
        if(result) {
            document.getElementById('form-delete-' + this.getAttribute('data-id')).submit();
        }
    }
</script>
@endsection
