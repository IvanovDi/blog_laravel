@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Add Article</h1>

        <form action="{{route('blog.store')}}" method="post">
            {{ csrf_field() }}
            <div class="col-lg-offset-2 col-lg-8">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <textarea type="text" class="form-control" name="content" placeholder="Article Content"></textarea>
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <select class="form-control" name="format">
                        <option value="">Format</option>
                        <option value="1">Article</option>
                        <option value="2">News</option>
                        <option value="3">Release</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <select class="form-control" name="status">
                        <option value="">Status</option>
                        <option value="1">Draft</option>
                        <option value="2">Checked</option>
                        <option value="3">Publish</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8">
                <div class="input-group">
                    <button type="submit" class="btn btn-default">Add</button>
                </div>
            </div>
        </form>

    </div>

@endsection