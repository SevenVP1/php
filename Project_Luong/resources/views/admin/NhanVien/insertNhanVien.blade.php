@extends('layout.master')
@section('Content')
<!doctype html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $newAction ="";
}else{
    $newAction = "./insertNhanVien";
}
?>

<form method="post" action="<?php $newAction ?>">
<?php
if(isset($data["result"])){
    if($data["result"]){
        echo "Thêm mới thành công.";
    }
    else{
        echo "Thêm mới thất bại";
    }
} 
?>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header></header>
        <main>
            <div class="container mt-5">
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="id"
                        id="id"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="ten" class="form-label">Tên</label>
                    <input
                        type="text"
                        class="form-control"
                        name="ten"
                        id="ten"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="tuoi" class="form-label">Tuổi</label>
                    <input
                        type="text"
                        class="form-control"
                        name="tuoi"
                        id="tuoi"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="gioitinh" class="form-label">Giới Tính</label>
                    <select class="form-select" name="gioitinh" id="gioitinh">
                        <option selected>Chọn giới tính</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Khác">Khác</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="dienthoai" class="form-label">Điện Thoại</label>
                    <input
                        type="number"
                        class="form-control"
                        name="dienthoai"
                        id="dienthoai"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="diachi" class="form-label">Địa Chỉ</label>
                    <input
                        type="text"
                        class="form-control"
                        name="diachi"
                        id="diachi"
                        placeholder=""
                    />
                </div>
                <button type="submit" name="btnInsert" class="btn btn-primary">
                    Submit
                </button>
</form>
            </div>  
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQ+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        
    </body>
</html>
@endsection