<?= $this->extend('layouts/main')?>

<?= $this->section('content')?>

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-12 mb-3">
        <a href="#" type="button" class="btn btn-primary">
            <span class="tf-icons bx bx-plus-circle me-1"></span>Create New
        </a>
    </div>
    
    <div class="card">
        <h5 class="card-header">All Products</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
            <thead>
                <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Images</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>
                        <i class="bx bxl-angular bx-sm text-danger me-3"></i>
                        <span class="fw-medium">Angular Project</span>
                    </td>
                    <td>
                        <i class="bx bxl-angular bx-sm text-danger me-3"></i>
                        <span class="fw-medium">Angular Project</span>
                    </td>
                    <td>
                        <i class="bx bxl-angular bx-sm text-danger me-3"></i>
                        <span class="fw-medium">Angular Project</span>
                    </td>
                    <td>Albert Cook</td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Lilian Fuller">
                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Sophia Wilkerson">
                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Christina Parker">
                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                        </li>
                        </ul>
                    </td>
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>
                        <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="javascript:void(0);"
                            ><i class="bx bx-trash me-1"></i> Delete</a
                            >
                        </div>
                        </div>
                    </td>
                </tr>
                
            </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- /content -->

<?= $this->endSection()?>
