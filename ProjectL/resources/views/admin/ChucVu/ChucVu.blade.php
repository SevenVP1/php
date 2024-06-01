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
                <th class="text-center">Tên Chức Vụ</th>
                <th class="text-center">Lương Chức Vụ</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chucvus as $chucvu)
            <tr>
                <td class="text-center">{{ $chucvu->id }}</td>
                <td class="text-center">{{ $chucvu->chucvu }}</td>
                <td class="text-center">{{ $chucvu->luongchucvu }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateChucVu/{{$chucvu->id}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteChucVu/{{$chucvu->id}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
