
<div class="container-fluid">

    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $all['positif'] }}</h3>

            <p>Positif</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $all['dirawat'] }}</h3>

            <p>Dirawat</p>
          </div>
          <div class="icon">
            <i class="ion ion-medkit"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $all['sembuh'] }}</h3>

            <p>Sembuh</p>
          </div>
          <div class="icon">
            <i class="ion ion-happy-outline"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $all['meninggal'] }}</h3>

            <p>Meninggal</p>
          </div>
          <div class="icon">
            <i class="ion ion-sad-outline"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <h6>Last Update: {{ $all['lastUpdate'] }}</h6>
    
  {{-- PENAMBAHAN --}}
    

   

    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h3>Penambahan</h3>
                <div class="row">
                  <div class="col-lg-6 col-6">
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>{{ $pen['penambahan']['positif'] }}</h3>
            
                        <p>Positif</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-6">
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>{{ $pen['penambahan']['dirawat'] }}</h3>
            
                        <p>Dirawat</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-medkit"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-6">
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>{{ $pen['penambahan']['sembuh'] }}</h3>
            
                        <p>Sembuh</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-happy-outline"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-6">
                    <div class="small-box bg-danger">
                      <div class="inner">
                        <h3>{{ $pen['penambahan']['meninggal'] }}</h3>
            
                        <p>Meninggal</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-sad-outline"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <h6>Last Update: {{ $pen['penambahan']['tanggal'] }}</h6> 
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div id="penambahan"></div>
          </div>
        </div>
      </div>
      
    </div> 

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Setiap Propinsi</div>
                <div class="card-body">
                    <div id="propinsi"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Penjualan</div>
                <div class="card-body">
                    <div id="grafik"></div>
                </div>
            </div>
        </div>
    </div>
     
</div>
