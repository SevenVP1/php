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
                <td class="text-center">@foreach($chucvunv->hasManyNhanVien as $nhanvien) 
                    {{ $nhanvien-> ten}}
                @endforeach
                </td>
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
@if ($chucvunvs->lastPage() > 1)
    <ul class="pagination justify-content-center">
        <li class="page-item {{ ($chucvunvs->currentPage() == 1) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $chucvunvs->url(1) }}" tabindex="-1" aria-disabled="true">&laquo;</a>
        </li>
        @for ($i = 1; $i <= $chucvunvs->lastPage(); $i++)
            <li class="page-item {{ ($chucvunvs->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $chucvunvs->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ ($chucvunvs->currentPage() == $chucvunvs->lastPage()) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $chucvunvs->url($chucvunvs->currentPage() + 1) }}">&raquo;</a>
        </li>
    </ul>
@endif
@endsection
