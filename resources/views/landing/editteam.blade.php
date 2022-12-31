@include('landing.headerdash')

@include('landing.navbardash')

@include('landing.sidebar')

<!-- @include('sweetalert::alert') -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h3 class="m-0">Edit Data Team</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="{{ route('updateteam.index') }}"><- Kembali</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /Akhir content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="card ">
              <div class="card-header">
                <h3 class="text-center">Edit Data Team</h3>
              </div>
              <!-- form start -->
              <form action="{{ url('/updateteam/update/'.$team->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                <input type="hidden" name="id" value="{{ $team->id }}">
                  <div class="form-group">
                    <label for="nama">image</label>
                    <input type="file" class="form-control" value="{{ $team->image}}"  name="image">
                    <p class="fst-italic text-secondary">size foto maksimal 2 mb dan extensi jpg, png, jpeg</p>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" value="{{ $team->name}}" name="name">
                  </div>
                  <div class="form-group">
                    <label for="tittle">Jobs</label>
                    <input type="text" class="form-control" value="{{ $team->title}}" name="title">
                  </div>
                  <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" value="{{ $team->facebook}}" name="facebook">
                  </div>
                  <div class="form-group">
                    <label for="Twitter">Twitter</label>
                    <input type="text" class="form-control" value="{{ $team->twitter}}" name="twitter">
                  </div>
                  <div class="form-group">
                    <label for="LinkedIn">LinkedIn</label>
                    <input type="text" class="form-control" value="{{ $team->linkedin}}" name="linkedin">
                  </div>
                  <div >
                    <button type="submit" class="btn btn-success" value="Simpan Data">Simpan</button>
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