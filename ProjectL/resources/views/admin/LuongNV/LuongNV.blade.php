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
                <td class="text-center">{{ $luongnv->luongcoban }}</td>
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
@if ($luongnvs->lastPage() > 1)
    <ul class="pagination justify-content-center">
        <li class="page-item {{ ($luongnvs->currentPage() == 1) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $luongnvs->url(1) }}" tabindex="-1" aria-disabled="true">&laquo;</a>
        </li>
        @for ($i = 1; $i <= $luongnvs->lastPage(); $i++)
            <li class="page-item {{ ($luongnvs->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $luongnvs->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ ($luongnvs->currentPage() == $luongnvs->lastPage()) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $luongnvs->url($luongnvs->currentPage() + 1) }}">&raquo;</a>
        </li>
    </ul>
@endif
@endsection
