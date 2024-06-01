@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<form method="get" action="{{route('admin.LuongNV.getLuongNV')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<h1>Nhập ID Lương Cần Tìm</h1> 
    <div class="mb-3">
        <input
            type="text"
            class="form-control"
            name="lid"
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
                <th class="text-center">ID Lương</th>
                <th class="text-center">Tên Nhân Viên</th>
                <th class="text-center">Lương Cơ Bản</th>
                <th class="text-center">Lương Ngày Công</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        @foreach($luongnvs as $luongnv)
            <tr>
                <td class="text-center">{{ $luongnv->id }}</td>
                <td class="text-center">{{ $luongnv->lid }}</td>
                <td class="text-center"> @if($luongnv->belongsToNhanVien) 
                    {{ $luongnv->belongsToNhanVien-> ten}}
                @else
                Không Tồn Tại Tên Nhân Viên
                @endif</td>
                <td class="text-center">Bậc {{ $luongnv->luongcoban }}</td>
                <td class="text-center">{{ $luongnv->luongngaycong }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateLuongNV/{{$luongnv->lid}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteLuongNV/{{$luongnv->lid}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
