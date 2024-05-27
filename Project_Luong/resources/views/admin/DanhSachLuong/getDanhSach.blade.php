@extends('layout.master')

@section('Content')
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Lương cơ Bản</th>
                <th class="text-center">Lương Ngày Công</th>
                <th class="text-center">Phụ Cấp</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($danhsachs as $danhsach)
            <tr>
                <td class="text-center">{{ $danhsach->id }}</td>
                <td class="text-left">{{ $danhsach->luongcb }}</td>
                <td class="text-left">{{ $danhsach->luongngaycong }}</td>
                <td class="text-left">{{ $danhsach->phucap }}</td>
                <td class="text-center">
                    <a href="{{ url('admin/DanhSachLuong/updateDanhSach/' . $danhsach->nid) }}" class="btn btn-primary">
                        Edit
                    </a>
                </td>
                <td class="text-center">
                    <form action="{{ url('admin/DanhSachLuong/deleteDanhSach/' . $danhsach->nid) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
