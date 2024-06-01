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
@if ($chamcongs->lastPage() > 1)
    <ul class="pagination justify-content-center">
        <li class="page-item {{ ($chamcongs->currentPage() == 1) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $chamcongs->url(1) }}" tabindex="-1" aria-disabled="true">&laquo;</a>
        </li>
        @for ($i = 1; $i <= $chamcongs->lastPage(); $i++)
            <li class="page-item {{ ($chamcongs->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $chamcongs->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ ($chamcongs->currentPage() == $chamcongs->lastPage()) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $chamcongs->url($chamcongs->currentPage() + 1) }}">&raquo;</a>
        </li>
    </ul>
@endif
@endsection
