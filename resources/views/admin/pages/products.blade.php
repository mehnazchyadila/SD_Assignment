@extends('admin.layouts.default')
@section('abc')
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                        <div class="table-responsive">
                        <table id="productstbl" class="table table-hover">
                            <thead>
                                <th>ID</th>
                                <th>TITLE</th>
                                <th>STATUS</th>
                                <th>CATEGORY</th>
                            </thead>
                            <tbody>
                                @foreach($products as $p)
                                <tr>
                                <th>{{ $p->id }}</th>
                                <th>{{ $p->title }}</th>
                                <th>{{ $p->status }}</th>
                                <th>{{ $p->category}}</th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </main>

@stop


@section('yourscripts')
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#productstbl').DataTable();
} );
</script>      
@stop