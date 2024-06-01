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
                <th class="text-center">Lương Cơ Bản</th>
                <th class="text-center">Lương Ngày Công</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($luongs as $luong)
            <tr>
                <td class="text-center">{{ $luong->id }}</td>
                <td class="text-center">{{ $luong->luongcoban }}</td>
                <td class="text-center">{{ $luong->luongngaycong }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateLuong/{{$luong->id}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteLuong/{{$luong->id}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
