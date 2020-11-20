@extends('admin.layouts.default')
@section('abc')
<main>
                <div class="container-fluid">
                        <h1 class="mt-4">Image Upload</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Image Upload</li>
                        </ol>
                    <div>
                    @if(session('success'))
                        <div class="alert alert-success">
                        {{ session('success') }}
                        </div> 
                    @endif

                       <form method="post" action="{{ URL::to('upload') }}"  enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file" name="filename" id="">
                            <br>
                            <br>
                            <button type="submit" >Upload</button>
                        </form>
                    </div>
                </div>
                <div>
                @foreach($data as $im)
                <div style="padding:5px; float:left">
                <img width="300px" src="{{asset('uploads/original/'.$im->filename)}}" alt="">
                </div>
                @endforeach
                </div>

                </main>

@stop


@section('yourscripts')
    
@stop