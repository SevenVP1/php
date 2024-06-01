@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<form method="get" action="{{route('admin.PhongBanNV.getPhongBanNV')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<h1>Nhập Tên Phòng Cần Tìm</h1> 
    <div class="mb-3">
        <input
            type="text"
            class="form-control"
            name="tenphong"
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
                <th class="text-center">ID Phòng Ban</th>
                <th class="text-center">Tên Nhân Viên</th>
                <th class="text-center">Tên Phòng</th>
                <th class="text-center">Email Phòng</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        @foreach($phongbannvs as $phongbannv)
            <tr>
                <td class="text-center">{{ $phongbannv->id }}</td>
                <td class="text-center">{{ $phongbannv->pid }}</td>
                <td class="text-center">
                @foreach($phongbannv->hasManyNhanVien as $nhanvien)
                    {{ $nhanvien->ten }}
                @endforeach</td></td>
                <td class="text-center">{{ $phongbannv->tenphong }}</td>
                <td class="text-center">{{ $phongbannv->email }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updatePhongBanNV/{{$phongbannv->pid}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deletePhongBanNV/{{$phongbannv->pid}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
