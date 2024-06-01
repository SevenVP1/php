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
@if ($phucaps->lastPage() > 1)
    <ul class="pagination justify-content-center">
        <li class="page-item {{ ($phucaps->currentPage() == 1) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $phucaps->url(1) }}" tabindex="-1" aria-disabled="true">&laquo;</a>
        </li>
        @for ($i = 1; $i <= $phucaps->lastPage(); $i++)
            <li class="page-item {{ ($phucaps->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $phucaps->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ ($phucaps->currentPage() == $phucaps->lastPage()) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $phucaps->url($phucaps->currentPage() + 1) }}">&raquo;</a>
        </li>
    </ul>
@endif
@endsection
