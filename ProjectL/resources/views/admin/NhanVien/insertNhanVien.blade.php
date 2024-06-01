@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="insertNhanVien">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
        <label for="" class="form-label">Nhập ID</label>
        <input
            type="number"
            class="form-control"
            name="id"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập ID Nhân Viên</label>
        <input
            type="text"
            class="form-control"
            name="nid"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Tên Nhân Viên</label>
        <input
            type="name"
            class="form-control"
            name="ten"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Tuổi Nhân Viên</label>
        <input
            type="age"
            class="form-control"
            name="tuoi"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
                <label for="" class="form-label">Chọn Giới Tính Nhân Viên</label>
                <select
                
                    class="form-select form-select-lg"
                    name="gioitinh"
                    id=""
                >
                    <option selected>Chọn Một</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
            </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Địa Chỉ Nhân Viên</label>
        <input
            type="address"
            class="form-control"
            name="diachi"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Số Điện Thoại Nhân Viên</label>
        <input
            type="phone"
            class="form-control"
            name="sodienthoai"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Email Nhân Viên</label>
        <input
            type="email"
            class="form-control"
            name="email"
            id=""
            aria-describedby="helpId"
            placeholder=""
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
