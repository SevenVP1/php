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
                <th class="text-center">ID Phòng Ban</th>
                <th class="text-center">Tên Nhân Viên</th>
                <th class="text-center">Tên Phòng</th>
                <th class="text-center">Email Phòng</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        @foreach($phongbannvs as $phongbannv)
            <tr>
                <td class="text-center">{{ $phongbannv->id }}</td>
                <td class="text-center">{{ $phongbannv->pid }}</td>
                <td class="text-center">
                @foreach($phongbannv->hasManyNhanVien as $nhanvien)
                    {{ $nhanvien->ten }}
                @endforeach</td></td>
                <td class="text-center">{{ $phongbannv->tenphong }}</td>
                <td class="text-center">{{ $phongbannv->email }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updatePhongBanNV/{{$phongbannv->pid}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deletePhongBanNV/{{$phongbannv->pid}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@if ($phongbannvs->lastPage() > 1)
    <ul class="pagination justify-content-center">
        <li class="page-item {{ ($phongbannvs->currentPage() == 1) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $phongbannvs->url(1) }}" tabindex="-1" aria-disabled="true">&laquo;</a>
        </li>
        @for ($i = 1; $i <= $phongbannvs->lastPage(); $i++)
            <li class="page-item {{ ($phongbannvs->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $phongbannvs->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ ($phongbannvs->currentPage() == $phongbannvs->lastPage()) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $phongbannvs->url($phongbannvs->currentPage() + 1) }}">&raquo;</a>
        </li>
    </ul>
@endif
@endsection
