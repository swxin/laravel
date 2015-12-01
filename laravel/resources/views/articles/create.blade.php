@extends('app')
@section('content')
    <h1>create new articles</h1>
    <form action="store" >
        <div class="form-group">
        title <input type="text" name="title" class="form-control" />
        </div>
        <div class="form-group">
        content <textarea  name="content" class="form-control" style="height: 200px"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success form-control" value="publish"/>
        </div>
    </form>


@endsection