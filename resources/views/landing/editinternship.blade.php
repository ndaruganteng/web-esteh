@include('landing.headerdash')

@include('landing.navbardash')

@include('landing.sidebar')


<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Internship</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
				<a href="{{ route('internship.index') }}"><- Kembali</a>
			</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /Akhir content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h3 class="text-center">Edit Data Internship</h3>
              </div>
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">image</label>
                    <input type="file" class="form-control" id="file"  name="image">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="nama" class="form-control" id="nama" placeholder="ini jobs" name="Nama">
                  </div>
                  <div class="form-group">
                    <label for="tittle">Jobs</label>
                    <input type="tittle" class="form-control" id="tittle" placeholder="ini Jobs" name=" title">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-success btn-lg btn-block" value="Submit">Simpan</button>
                  </div>
                </div>
              </form>
              <!-- Akhir form -->
            </div>
        </div>
      </div>
    </section>
    <!-- /Akhir main content -->

</div>

@include('landing.footerdash')