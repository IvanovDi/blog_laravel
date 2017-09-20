@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Edit Article</h1>
        <form action="{{route('blog.update', ['id' => $blog->id])}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="col-lg-offset-2 col-lg-8">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <textarea type="text" class="form-control" name="content" >{{$blog->content}}</textarea>
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <select class="form-control" name="format">
                        <option value="">Format</option>
                        <option @if ($blog->format == 1) selected @endif value="1">Article</option>
                        <option @if ($blog->format == 2) selected @endif value="2">News</option>
                        <option @if ($blog->format == 3) selected @endif value="3">Release</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <select class="form-control" name="status">
                        <option value="">Status</option>
                        <option @if ($blog->status == 1) selected @endif value="1">Draft</option>
                        <option @if ($blog->status == 2) selected @endif value="2">Checked</option>
                        <option @if ($blog->status == 3) selected @endif value="3">Publish</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8">
                <div class="input-group">
                    <button type="submit" class="btn btn-default">Edit</button>
                </div>
            </div>
        </form>

    </div>

@endsection