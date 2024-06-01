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
                <th class="text-center">Tên Bậc Lương</th>
                <th class="text-center">Hệ Số Lương</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hsluongs as $hsluong)
            <tr>
                <td class="text-center">{{ $hsluong->id }}</td>
                <td class="text-center">Bậc {{ $hsluong->bacluong }}</td>
                <td class="text-center">{{ $hsluong->hesoluong }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateHSLuong/{{$hsluong->id}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteHSLuong/{{$hsluong->id}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
