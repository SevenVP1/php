@extends('layout.master')

@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<form method="get" action="{{route('admin.ChamCong.getChamCong')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
<h1>Nhập Chấm Công ID Cần Tìm</h1> 
    <div class="mb-3">
        <input
            type="text"
            class="form-control"
            name="cid"
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
                <th class="text-center">Chấm Công ID</th>
                <th class="text-center">Tên Nhân Viên</th>
                <th class="text-center">Ngày Làm</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chamcongs as $chamcong)
            <tr>
                <td class="text-center">{{ $chamcong->id }}</td>
                <td class="text-center">{{ $chamcong->cid }}</td>
                <td class="text-center"> @if($chamcong->belongsToNhanVien)
                    {{ $chamcong->belongsToNhanVien->ten }}
                @else
                    Không Có Thông Tin Nhân Viên
                @endif</td>
                <td class="text-center">{{ $chamcong->ngaylam }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateChamCong/{{$chamcong->cid}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteChamCong/{{$chamcong->cid}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
