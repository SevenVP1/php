@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<form method="get" action="{{route('admin.HSLuongNV.getHSLuongNV')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<h1>Nhập Bậc Lương Cần Tìm</h1> 
    <div class="mb-3">
        <input
            type="number"
            class="form-control"
            name="bacluong"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
        <button
            type="submit"
            class="btn btn-primary"
            name ="btSearch"
        >
            Submit
        </button>
</form>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">ID Hệ Số Lương</th>
                <th class="text-center">Tên Nhân Viên</th>
                <th class="text-center">Tên Bậc Lương</th>
                <th class="text-center">Hệ Số Lương</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        @foreach($hsluongnvs as $hsluongnv)
            <tr>
                <td class="text-center">{{ $hsluongnv->id }}</td>
                <td class="text-center">{{ $hsluongnv->hsid }}</td>
                <td class="text-center"> @foreach($hsluongnv->hasManyNhanVien as $nhanvien) 
                    {{ $nhanvien-> ten}}
                @endforeach</td>
                <td class="text-center">Bậc {{ $hsluongnv->bacluong }}</td>
                <td class="text-center">{{ $hsluongnv->hesoluong }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateHSLuongNV/{{$hsluongnv->hsid}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteHSLuongNV/{{$hsluongnv->hsid}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
