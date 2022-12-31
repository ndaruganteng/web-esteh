@include('landing.headerdash') @include('landing.navbardash')
@include('landing.sidebar') @include('sweetalert::alert')

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row m-3">
                            <div class="col-sm-6">
                                <h3 class="text-uppercase">Data Artikel</h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right">
                                    <a href="{{ route('tambahblog.index') }}">
                                        <button
                                            type="submit"
                                            class="btn btn-success flex"
                                            value="Submit"
                                        >
                                            Tambah Artikel
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </a>
                                    {{--
                                    <a href="{{ route('blog.index') }}">
                                        <button
                                            type="submit"
                                            class="btn btn-success flex"
                                            value="Submit"
                                        >
                                            View artikel
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </a>
                                    --}}
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center fs-6">
                                        <th>Image</th>
                                        <!-- <th>Date</th> -->
                                        <th>Jobs</th>
                                        <th>Title</th>
                                        <!-- <th>Description</th> -->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @foreach($blog as $p)
                                <tbody class="fs-6">
                                    <tr class="text-center text-break">
                                        <td>
                                            <img
                                                src="{{asset('storage/image/blog/'.$p->image)}}"
                                                alt=""
                                                style="width: 100px"
                                            />
                                        </td>
                                        <!-- <td>{{ $p->date }}</td> -->
                                        <td>{{ $p->jobs}}</td>
                                        <td>{{ $p->title}}</td>
                                        <!-- <td>{!! $p->except !!}</td> -->
                                        <td>
                                            <div class="btn flex">
                                                <a
                                                    href="/updateblog/edit/{{ $p->id }}"
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
                                                    href="/updateblog/hapus/{{ $p->id }}"
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
                                                <a
                                                    href="{{
                                                        route('blog.index')
                                                    }}"
                                                >
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary"
                                                        value="Submit"
                                                    >
                                                        <i
                                                            class="fa-solid fa-eye"
                                                        ></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            <div class="pt-3">
                                {{ $blog->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Akhir content wrapper -->

@include('landing.footerdash')
