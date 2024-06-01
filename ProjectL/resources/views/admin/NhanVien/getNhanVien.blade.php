@extends('layout.master')
@section('Content')
<form method="get" action="{{route('admin.NhanVien.getNhanVien')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<h1>Nhập tên nhân viên cần tìm</h1> 
    <div class="mb-3">
        <input
            type="text"
            class="form-control"
            name="ten"
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
                <th class="text-center">Tên</th>
                <th class="text-center">Tuổi</th>
                <th class="text-center">Giới Tính</th>
                <th class="text-center">Địa Chỉ</th>
                <th class="text-center">Điện Thoại</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phòng Làm Việc</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nhanviens as $nhanvien)
            <tr>
                <td class="text-center">{{ $nhanvien->id }}</td>
                <td class="text-center">{{ $nhanvien->ten }}</td>
                <td class="text-center">{{ $nhanvien->tuoi }}</td>
                <td class="text-center">{{ $nhanvien->gioitinh }}</td>
                <td class="text-center">{{ $nhanvien->diachi }}</td>
                <td class="text-center">{{ $nhanvien->sodienthoai }}</td>
                <td class="text-center">{{ $nhanvien->email }}</td>
                <td class="text-center"> @if($nhanvien->belongsToPhongBanNV)
                    {{ $nhanvien->belongsToPhongBanNV->tenphong }}
                @else
                    Không Có Thông Tin Phòng Ban
                @endif</td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateNhanVien/{{$nhanvien->nid}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteNhanVien/{{$nhanvien->nid}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection