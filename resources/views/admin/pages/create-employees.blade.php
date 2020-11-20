@extends('admin.layouts.default')
@section('abc')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Create Employee</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Employee</li>
                        </ol>
                        <style>
                        .err{
                            color:red;
                            }
                        </style>
                        @if(session('success'))
                        <div class="alert alert-success">
                        {{ session('success') }}
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif

                       <div class="col-md-8">
                       <form action="{{ URL::to('store-employee') }}" method="post" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="Name"></label>
                                <input class="form-control" type="text"  value="{{ old('name') }}" name="name" id="">
                                <span class="err">{{ $errors->first('name') }}</span>        
                            </div>

                            <div class="form-group">
                            <label for="Email"></label>
                                <input class="form-control" type="text" value="{{ old('email') }}" name="email" id="">
                                <span class="err">{{ $errors->first('email') }}</span>       
                            </div>

                            <!-- <div class="form-group">
                            <label for="Salary"></label>
                                <input class="form-control" type="text" value="{{ old('salary') }}"  name="salary" id="">
                                <span class="err">{{ $errors->first('salary') }}</span>        
                            </div> -->

                            <div class="form-group">
                            <label for="DOB"></label>
                                <input class="form-control" type="date" value="{{ old('dob') }}"  name="dob" id="">
                                <span class="err">{{ $errors->first('dob') }}</span>        
                            </div>

                            <div class="form-group">
                                <input type="submit"class="btn btn-primary" value="Create">
                            </div>
                            
                            
                       </div>
                       </form>
                       </div>
                </main>

@stop


@section('yourscripts')
    
@stop