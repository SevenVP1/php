@extends('layout.master')

@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<form method="get" action="{{route('admin.ChucVuNV.getChucVuNV')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<h1>Nhập Chức Vụ Cần Tìm</h1> 
    <div class="mb-3">
        <input
            type="text"
            class="form-control"
            name="chucvu"
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
                <th class="text-center">ID Chức Vụ</th>
                <th class="text-center">Tên Nhân Viên</th>
                <th class="text-center">Tên Chức Vụ</th>
                <th class="text-center">Lương Chức Vụ</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chucvunvs as $chucvunv)
            <tr>
                <td class="text-center">{{ $chucvunv->id }}</td>
                <td class="text-center">{{ $chucvunv->cvid }}</td>
                <td class="text-center"> @foreach($chucvunv->hasManyNhanVien as $nhanvien) 
                    {{ $nhanvien-> ten}}
                @endforeach</td>
                <td class="text-center">{{ $chucvunv->chucvu }}</td>
                <td class="text-center">{{ $chucvunv->luongchucvu }}</td>             
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateChucVuNV/{{$chucvunv->cvid}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteChucVuNV/{{$chucvunv->cvid}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
