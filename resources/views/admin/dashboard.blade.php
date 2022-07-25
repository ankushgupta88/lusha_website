@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content p-4">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="top-title pb-4">
                    <h4> Welcome back, {{ Auth::user()->name }}</h4>
                </div>
            </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            @foreach($plans as $plan)
            <div class="small-box">
              <div class="inner">
                <h3 class="text-primary">{{$plan}}</h3>

                <p>Plan</p>
              </div>
              <div class="icon">
                <i class="fa fa-cog"></i>
              </div>
             
            </div>
          @endforeach
          </div>
           <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            @foreach($users as $user)
            <div class="small-box">
              <div class="inner">
                <h3 class="text-success">{{$user}}</h3>

                <p>Team Members</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             
            </div>
            @endforeach
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
          @foreach($contact as $contacts)
            <div class="small-box">
              <div class="inner">
                <h3 class="text-danger">{{$contacts}}</h3>

                <p>Inbox</p>
              </div>
              <div class="icon">
                <i class="fa fa-thumbs-up"></i>
              </div>
              
            </div>
          @endforeach
          </div>
         
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            @foreach($apply_job as $apply_jobs)
            <div class="small-box">
              <div class="inner">
                <h3 class="text-warning">{{$apply_jobs}}</h3>

                <p>Apply For Career</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              
            </div>
          @endforeach
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        
        <!--3-->
        <!--<div class="row mb-3">-->
        <!--  <div class="col-md-3 col-sm-6 col-12">-->
        <!--    <div class="info-box">-->
        <!--      <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>-->

        <!--      <div class="info-box-content">-->
        <!--        <span class="info-box-text">Messages</span>-->
        <!--        <span class="info-box-number">1,410</span>-->
        <!--      </div>-->
              <!-- /.info-box-content -->
        <!--    </div>-->
            <!-- /.info-box -->
        <!--  </div>-->
          <!-- /.col -->
        <!--  <div class="col-md-3 col-sm-6 col-12">-->
        <!--    <div class="info-box">-->
        <!--      <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>-->

        <!--      <div class="info-box-content">-->
        <!--        <span class="info-box-text">Bookmarks</span>-->
        <!--        <span class="info-box-number">410</span>-->
        <!--      </div>-->
              <!-- /.info-box-content -->
        <!--    </div>-->
            <!-- /.info-box -->
        <!--  </div>-->
          <!-- /.col -->
        <!--  <div class="col-md-3 col-sm-6 col-12">-->
        <!--    <div class="info-box">-->
        <!--      <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>-->

        <!--      <div class="info-box-content">-->
        <!--        <span class="info-box-text">Uploads</span>-->
        <!--        <span class="info-box-number">13,648</span>-->
        <!--      </div>-->
              <!-- /.info-box-content -->
        <!--    </div>-->
            <!-- /.info-box -->
        <!--  </div>-->
          <!-- /.col -->
        <!--  <div class="col-md-3 col-sm-6 col-12">-->
        <!--    <div class="info-box">-->
        <!--      <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>-->

        <!--      <div class="info-box-content">-->
        <!--        <span class="info-box-text">Likes</span>-->
        <!--        <span class="info-box-number">93,139</span>-->
        <!--      </div>-->
              <!-- /.info-box-content -->
        <!--    </div>-->
            <!-- /.info-box -->
        <!--  </div>-->
          <!-- /.col -->
        <!--</div>-->
        
        <!--4-->
        <div class="row mb-3">
            <div class="col-md-12">
               <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Username</th>
                      <th>Plan Name</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(!empty($orderlist))
                        @foreach($orderlist as $key => $value)
                    <tr>
                      <td><a href="{{url('admin/invoice-receipt',$value['id'])}}">OR{{$value['id']}}</a></td>
                      <td>{{$value['order_user_list']['name']}}</td>
                      <td>{{$value['order_user_plan_list']['plan_name']}}</td>
                      <?php
                        	$updated_at = $value['updated_at'];
                        	$date = date('F d,Y',strtotime($updated_at));
                         ?>
                        <td>{{ $date }}</td>
                    </tr>
                    @endforeach
                @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!--<a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>-->
                <a href="{{url('/admin/order/all-order')}}" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </div>
        </div>
        
        <!--5-->
        <!--<div class="row mb-3">-->
        <!--    <div class="col-md-6">-->
        <!--      <div class="card">-->
        <!--      <div class="card-header border-0">-->
        <!--        <h3 class="card-title">Products</h3>-->
        <!--        <div class="card-tools">-->
        <!--          <a href="#" class="btn btn-tool btn-sm">-->
        <!--            <i class="fas fa-download"></i>-->
        <!--          </a>-->
        <!--          <a href="#" class="btn btn-tool btn-sm">-->
        <!--            <i class="fas fa-bars"></i>-->
        <!--          </a>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="card-body table-responsive p-0">-->
        <!--        <table class="table table-striped table-valign-middle">-->
        <!--          <thead>-->
        <!--          <tr>-->
        <!--            <th>Product</th>-->
        <!--            <th>Price</th>-->
        <!--            <th>Sales</th>-->
        <!--            <th>More</th>-->
        <!--          </tr>-->
        <!--          </thead>-->
        <!--          <tbody>-->
        <!--          <tr>-->
        <!--            <td>-->
        <!--              <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">-->
        <!--              Some Product-->
        <!--            </td>-->
        <!--            <td>$13 USD</td>-->
        <!--            <td>-->
        <!--              <small class="text-success mr-1">-->
        <!--                <i class="fas fa-arrow-up"></i>-->
        <!--                12%-->
        <!--              </small>-->
        <!--              12,000 Sold-->
        <!--            </td>-->
        <!--            <td>-->
        <!--              <a href="#" class="text-muted">-->
        <!--                <i class="fas fa-search"></i>-->
        <!--              </a>-->
        <!--            </td>-->
        <!--          </tr>-->
        <!--          <tr>-->
        <!--            <td>-->
        <!--              <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">-->
        <!--              Another Product-->
        <!--            </td>-->
        <!--            <td>$29 USD</td>-->
        <!--            <td>-->
        <!--              <small class="text-warning mr-1">-->
        <!--                <i class="fas fa-arrow-down"></i>-->
        <!--                0.5%-->
        <!--              </small>-->
        <!--              123,234 Sold-->
        <!--            </td>-->
        <!--            <td>-->
        <!--              <a href="#" class="text-muted">-->
        <!--                <i class="fas fa-search"></i>-->
        <!--              </a>-->
        <!--            </td>-->
        <!--          </tr>-->
        <!--          <tr>-->
        <!--            <td>-->
        <!--              <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">-->
        <!--              Amazing Product-->
        <!--            </td>-->
        <!--            <td>$1,230 USD</td>-->
        <!--            <td>-->
        <!--              <small class="text-danger mr-1">-->
        <!--                <i class="fas fa-arrow-down"></i>-->
        <!--                3%-->
        <!--              </small>-->
        <!--              198 Sold-->
        <!--            </td>-->
        <!--            <td>-->
        <!--              <a href="#" class="text-muted">-->
        <!--                <i class="fas fa-search"></i>-->
        <!--              </a>-->
        <!--            </td>-->
        <!--          </tr>-->
        <!--          <tr>-->
        <!--            <td>-->
        <!--              <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">-->
        <!--              Perfect Item-->
        <!--              <span class="badge bg-danger">NEW</span>-->
        <!--            </td>-->
        <!--            <td>$199 USD</td>-->
        <!--            <td>-->
        <!--              <small class="text-success mr-1">-->
        <!--                <i class="fas fa-arrow-up"></i>-->
        <!--                63%-->
        <!--              </small>-->
        <!--              87 Sold-->
        <!--            </td>-->
        <!--            <td>-->
        <!--              <a href="#" class="text-muted">-->
        <!--                <i class="fas fa-search"></i>-->
        <!--              </a>-->
        <!--            </td>-->
        <!--          </tr>-->
        <!--          </tbody>-->
        <!--        </table>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--    </div>-->
        <!--    <div class="col-md-6">-->
                
        <!--        <div class="card bg-gradient-info">-->
        <!--      <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">-->
        <!--        <h3 class="card-title">-->
        <!--          <i class="fas fa-th mr-1"></i>-->
        <!--          Graph-->
        <!--        </h3>-->

        <!--        <div class="card-tools">-->
        <!--          <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">-->
        <!--            <i class="fas fa-minus"></i>-->
        <!--          </button>-->
        <!--          <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">-->
        <!--            <i class="fas fa-times"></i>-->
        <!--          </button>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>-->
        <!--        <canvas class="chart chartjs-render-monitor" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 400px;" width="400" height="250"></canvas>-->
        <!--      </div>-->
              <!-- /.card-body -->
        <!--      <div class="card-footer bg-transparent">-->
        <!--        <div class="row">-->
        <!--          <div class="col-4 text-center">-->
        <!--            <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>-->

        <!--            <div class="text-white">Mail-Orders</div>-->
        <!--          </div>-->
                  <!-- ./col -->
        <!--          <div class="col-4 text-center">-->
        <!--            <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>-->

        <!--            <div class="text-white">Online</div>-->
        <!--          </div>-->
                  <!-- ./col -->
        <!--          <div class="col-4 text-center">-->
        <!--            <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>-->

        <!--            <div class="text-white">In-Store</div>-->
        <!--          </div>-->
                  <!-- ./col -->
        <!--        </div>-->
                <!-- /.row -->
        <!--      </div>-->
              <!-- /.card-footer -->
        <!--    </div>-->
        <!--    </div>-->
            
            
            
            
        <!--</div>-->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
@endsection