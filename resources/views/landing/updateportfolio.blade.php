@include('landing.headerdash')

@include('landing.navbardash')

@include('landing.sidebar')

  <!-- Content Wrapper -->
  <div class="content-wrapper">

    <!-- Content Header -->
    <!-- <div class="content-header " >
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Portfololio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Portfololio</li>
            </ol>
          </div>
        </div>
      </div>
    </div>  -->
    <!-- / Akhir content-header -->
    
    <!-- Main content -->
    <section class="content mt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
            <div class="row m-3 items-center">
              <div class="col-sm-6 ">
                <h1 class="fs-6 text-uppercase">Data Portfolio</h1>
              </div>
              <div class="col-sm-6">
                <div class=" float-sm-right">
                  <a href="{{ route('tambahportfolio.index') }}"><button type="submit" class="btn btn-success   flex" value="Submit">Tambah Portfolio + </button></a>
                  <a href="{{ route('portofolio.index') }}"><button type="submit" class="btn btn-success   flex" value="Submit">View Portfolio</button></a>
                </div>
              </div>
              </div>            
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead class="table-dark">
                    <tr class="text-center" >
                      <th>Image</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-center">
                      <td>Ini Image</td>                                      
                      <td>Ini Category</td>                                                                                
                      <td>
                        <div class="items-center">
                          <a href="{{ route('editportfolio.index') }}"><button type="button" class="btn btn-warning text-white " >Edit</button></a>
                          
                          <a href=""><button type="button" class="btn btn-danger " value="Submit">Hapus</button></a>
                        </div>
                      </td>                       
                    </tr>
                  </tbody>
                </table>
                <!-- <div class="pt-3 flex ">
                  <a href="{{ route('tambahportfolio.index') }}"><button type="submit" class="btn btn-success   flex" value="Submit">Tambah Portfololio </button></a>
                  <a href="{{ route('portofolio.index') }}"><button type="submit" class="btn btn-success   flex" value="Submit">View Portfololio</button></a>
                </div> -->
              </div>
            </div>
        </div>
      </div>  
    </section>
    <!-- Akhir Main content -->

  </div>
  <!-- Akhir Content Wrapper -->


@include('landing.footerdash')