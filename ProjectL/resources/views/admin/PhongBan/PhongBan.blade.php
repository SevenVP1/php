@extends('layout.master')

@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Tên Phòng</th>
                <th class="text-center">Email</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($phongbans as $phongban)
            <tr>
                <td class="text-center">{{ $phongban->id }}</td>
                <td class="text-center">{{ $phongban->tenphong }}</td>
                <td class="text-center">{{ $phongban->email }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updatePhongBan/{{$phongban->id}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deletePhongBan/{{$phongban->id}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
