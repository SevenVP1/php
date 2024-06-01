@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="{{$nhanvien->nid}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
        <label for="" class="form-label">ID</label>
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
        <label for="" class="form-label">Tên</label>
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
        <label for="" class="form-label">Tuổi</label>
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
                <label for="" class="form-label">Giới Tính</label>
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
        <label for="" class="form-label">Địa Chỉ</label>
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
        <label for="" class="form-label">Điện Thoại</label>
        <input
            type="phone"
            class="form-control"
            name="dienthoai"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$nhanvien->dienthoai}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Năm Làm Việc</label>
        <input
            type="number"
            class="form-control"
            name="namlv"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$nhanvien->namlv}}"
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
