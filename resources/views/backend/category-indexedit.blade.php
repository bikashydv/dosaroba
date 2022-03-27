@extends('backend.layouts.master')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--        {{ dd($settings) }}--}}
    <form method="post" enctype="multipart/form-data"">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="name" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="text" class="form-control"  name="description" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">status</label>
            <select name="status"  class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive </option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">icon</label>
            <input type="text" class="form-control"  name="icon" value="">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

