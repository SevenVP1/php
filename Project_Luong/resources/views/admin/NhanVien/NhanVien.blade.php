@extends('layout.master')

@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
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
                <th class="text-center">Năm Làm Việc</th>
                <th class="text-center">Ngày Làm</th>
                <th class="Text-center">Tính Thử Cho Biết</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nhanviens as $nhanvien)
            <tr>
                <td class="text-center">{{ $nhanvien->id }}</td>
                <td class="text-left">{{ $nhanvien->ten }}</td>
                <td class="text-center">{{ $nhanvien->tuoi }}</td>
                <td class="text-left">{{ $nhanvien->gioitinh }}</td>
                <td class="text-left">{{ $nhanvien->diachi }}</td>
                <td class="text-center">{{ $nhanvien->dienthoai }}</td>
                <td class="text-center">BẬC {{ $nhanvien->namlv }}</td>
                <td class="text-center"> @if($nhanvien->belongtoChamCong)
                    {{ $nhanvien->belongtoChamCong->ngaylam }}
                    <td>{{$nhanvien->namlv *$nhanvien->belongtoChamCong->ngaylam }}</td>
                @else
                    Không Có Thông Tin Chấm Công
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
@if ($nhanviens->lastPage() > 1)
    <ul class="pagination justify-content-center">
        <li class="page-item {{ ($nhanviens->currentPage() == 1) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $nhanviens->url(1) }}" tabindex="-1" aria-disabled="true">&laquo;</a>
        </li>
        @for ($i = 1; $i <= $nhanviens->lastPage(); $i++)
            <li class="page-item {{ ($nhanviens->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $nhanviens->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ ($nhanviens->currentPage() == $nhanviens->lastPage()) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $nhanviens->url($nhanviens->currentPage() + 1) }}">&raquo;</a>
        </li>
    </ul>
@endif
@endsection
