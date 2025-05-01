@extends('admin.layout.app')

@section('main')
    <div class="content">
        <div class="mb-9">
            <div class="row g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Category</h2>
                </div>
            </div>
            <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <span>All </span>
                        <span class="text-body-tertiary fw-semibold">(68817)</span>
                    </a>
                </li>
            </ul>
            <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
                <div class="mb-4">
                    <div class="d-flex flex-wrap gap-3">
                        <div class="search-box">
                            <form class="position-relative">
                                <input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                        <div class="ms-xxl-auto">
                            <button class="btn btn-link text-body me-4 px-0">
                                <span class="fa-solid fa-file-export fs-9 me-2"></span>Export
                            </button>
                            <a class="btn btn-primary" id="addBtn" href="{{ route('category.create') }}">
                                <span class="fas fa-plus me-2"></span>Add category
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                    <div class="table-responsive scrollbar mx-n1 px-1">
                        <table class="table fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap fs-9 align-middle ps-0" style="max-width:20px; width:18px;">NO</th>
                                    <th class="white-space-nowrap align-middle fs-10" scope="col" style="width:70px;"></th>
                                    <th class="white-space-nowrap align-middle ps-4" scope="col" style="width:350px;">PRODUCT NAME</th>
                                    <th class="white-space-nowrap align-middle ps-4" scope="col" style="width:50px;">CREATED AT</th>
                                    <th class="text-end align-middle pe-0 ps-4" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="products-table-body">
                                @foreach ($categories as $item)
                                <tr class="position-static">
                                    <td class="fs-9 align-middle">1</td>
                                    <td class="align-middle white-space-nowrap py-0"></td>
                                    <td class="product align-middle ps-4"></td>
                                    <td class="time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4">Nov 12, 10:45 PM</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                        <div class="btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs-10"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="#!">View</a>
                                                <a class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                        <div class="col-auto d-flex">
                            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p>
                            <a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            <a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                        </div>
                        <div class="col-auto d-flex">
                            <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                            <ul class="mb-0 pagination"></ul>
                            <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">v1.18.0</p>
                </div>
            </div>
        </footer>
    </div>
@endsection
