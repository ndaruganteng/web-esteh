@include('landing.headerdash') @include('landing.navbardash')
@include('landing.sidebar') @include('sweetalert::alert')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card ">
                        <div class="row m-3 ">
                            <div class="col-sm-12 ">
                                <h3 class="text-uppercase text-center">Data USER</h3>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Email</th>
                                        <th>Username</th>                                
                                        <th>Role</th>                                
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>Ndaru@gmail.com</td>
                                        <td>Ndaru</td>
                                        <td>Admin</td>
                                        <td>xxxxxxxxxx</td>

                                        <td>
                                            <div class="btn flex">
                                                <a
                                                    href="#"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-warning text-white"
                                                    >
                                                        <i
                                                            class="fa-solid fa-pen-to-square"
                                                        ></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="#"
                                                >
                                                    <button
                                                        type="button"
                                                        class="btn btn-danger"
                                                    >
                                                        <i
                                                            class="fa-solid fa-trash-can"
                                                        ></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Akhir content wrapper -->

@include('landing.footerdash')
