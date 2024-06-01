@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="{{$nhanvien->nid}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
        <label for="" class="form-label">Nhập ID Mới</label>
        <input
            type="number"
            class="form-control"
            name="id"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$nhanvien->id}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Tên Mới Của Nhân Viên</label>
        <input
            type="name"
            class="form-control"
            name="ten"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$nhanvien->ten}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Tuổi Mới Của Nhân Viên</label>
        <input
            type="age"
            class="form-control"
            name="tuoi"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$nhanvien->tuoi}}"
        />
    </div>
    <div class="mb-3">
                <label for="" class="form-label">Chọn Giới Tính Mới Của Nhân Viên</label>
                <select
                
                    class="form-select form-select-lg"
                    name="gioitinh"
                    id=""
                >
                    <option selected>{{$nhanvien->gioitinh}}</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
            </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Địa Chỉ Mới Của Nhân Viên</label>
        <input
            type="address"
            class="form-control"
            name="diachi"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$nhanvien->diachi}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Số Điện Thoại Mới Của Nhân Viên</label>
        <input
            type="phone"
            class="form-control"
            name="sodienthoai"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$nhanvien->sodienthoai}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Email Mới Của Nhân Viên</label>
        <input
            type="email"
            class="form-control"
            name="email"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$nhanvien->email}}"
        />
    </div>
<button
    type="submit"
    name="btnInsert"
    class="btn btn-primary"
>
    Submit
</button>
</form>

@endsection
