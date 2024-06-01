@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<form method="get" action="{{route('admin.PhuCap.getPhuCap')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<h1>Nhập ID Phụ Cấp Cần Tìm</h1> 
    <div class="mb-3">
        <input
            type="text"
            class="form-control"
            name="pcid"
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
                <th class="text-center">ID Phụ Cấp</th>
                <th class="text-center">Tên Nhân Viên</th>
                <th class="text-center">Số Tiền</th>
                <th class="text-center">Ngày Áp Dụng</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        @foreach($phucaps as $phucap)
            <tr>
                <td class="text-center">{{ $phucap->id }}</td>
                <td class="text-center">{{ $phucap->pcid }}</td>
                <td class="text-center"> @if($phucap->belongsToNhanVien) 
                    {{ $phucap->belongsToNhanVien-> ten}}
                @else
                Không Tồn Tại Tên Nhân Viên
                @endif</td>
                <td class="text-center">{{ $phucap->sotien }}</td>
                <td class="text-center">{{ $phucap->ngayapdung }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updatePhuCap/{{$phucap->pcid}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deletePhuCap/{{$phucap->pcid}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
