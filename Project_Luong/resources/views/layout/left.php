<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-8 px-sm-2 px-0 "style="background-color: #003366">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Trang chủ</span>
                            <?php
                                
                                //     $productModel = new ProductModel();  
                                //     $result = $productModel->getRecords("tblcategories_product");
                                //     echo  '<ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">';
                                //     while ($row = mysqli_fetch_assoc($result)){
                                //     $categoryName = $row['category_name'];
                                //     $categoryLink = $row['category_link'];
                                //     echo "<li><a href=\"$categoryLink\" class=\"nav-link px-0\"> 
                                //     <span class=\"d-none d-sm-inline\">$categoryName</span> </a> </li>";
                                // } 
                                
                            ?>   
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Quản lý nhân viên</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Danh sách nhân viên</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm nhân viên</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-cash-stack"></i> <span class="ms-1 d-none d-sm-inline">Quản lý bảng lương</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Danh sách bảng lương</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Thêm bảng lương</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-file-earmark-text"></i> <span class="ms-1 d-none d-sm-inline">Báo cáo</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Danh sách báo cáo</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Tạo báo cáo mới</span> </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Winner</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Dự án mới...</a></li>
                        <li><a class="dropdown-item" href="#">Cài đặt</a></li>
                        <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
