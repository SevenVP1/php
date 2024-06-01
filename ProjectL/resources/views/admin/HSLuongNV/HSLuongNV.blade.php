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
                <th class="text-center">ID Hệ Số Lương</th>
                <th class="text-center">Tên Nhân Viên</th>
                <th class="text-center">Tên Bậc Lương</th>
                <th class="text-center">Hệ Số Lương</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        @foreach($hsluongnvs as $hsluongnv)
            <tr>
                <td class="text-center">{{ $hsluongnv->id }}</td>
                <td class="text-center">{{ $hsluongnv->hsid }}</td>
                <td class="text-center"> @foreach($hsluongnv->hasManyNhanVien as $nhanvien)
                    {{ $nhanvien->ten }}
                @endforeach</td>
                <td class="text-center">Bậc {{ $hsluongnv->bacluong }}</td>
                <td class="text-center">{{ $hsluongnv->hesoluong }}</td>            
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="updateHSLuongNV/{{$hsluongnv->hsid}}">Edit</a></td>
                <td class="center"><i class= "fa fa-trash-o fa-fw"></i>
                <a href="deleteHSLuongNV/{{$hsluongnv->hsid}}">Delete</a></td>
                
        
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@if ($hsluongnvs->lastPage() > 1)
    <ul class="pagination justify-content-center">
        <li class="page-item {{ ($hsluongnvs->currentPage() == 1) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $hsluongnvs->url(1) }}" tabindex="-1" aria-disabled="true">&laquo;</a>
        </li>
        @for ($i = 1; $i <= $hsluongnvs->lastPage(); $i++)
            <li class="page-item {{ ($hsluongnvs->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $hsluongnvs->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ ($hsluongnvs->currentPage() == $hsluongnvs->lastPage()) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $hsluongnvs->url($hsluongnvs->currentPage() + 1) }}">&raquo;</a>
        </li>
    </ul>
@endif
@endsection
