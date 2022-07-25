@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content p-4">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                <div class="top-title pb-4">
                    <h4> Add Prospecting  </h4>
                </div>
            </div>
          </div>
          <!--2-->
          <div class="row mb-4">          
            <div class="col-12">   
            <div class="card card-info"> 
              <div class="card-header">
                <h3 class="card-title">Add Prospecting Information</h3>
              </div>
              <div class="card-body p-0 table-responsive">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                         No
                      </th>
                      <th>
                         Name
                      </th>
                      <th>
                          Contact
                      </th>
                      <th>
                          Company
                      </th>
                      <th>
                          Progress
                      </th>
                    
                      <th class="text-center">
                          Status
                      </th>
                      <th>
                      </th>
                  </tr>
              </thead>
                @if(!empty($prospecting))
              <tbody>
                    @php $i = 1; @endphp
                      @foreach($prospecting as $key => $value)
                      <tr>
                          <td>
                              {{$i}}
                          </td>
                          <td>
                              <a>
                                  {{$value['full_name']}}
                                 
                              </a>
                          </td>
                          <td>
                              {{$value['mobile_phone']}}
                          </td>
                          <td>
                             {{$value['job_company_name']}}
                          </td>
                          <td class="project_progress">
                              <div class="progress progress-sm">
                                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                  </div>
                              </div>
                              <small>
                                  57% Complete
                              </small>
                          </td>
                          <td class="project-state">
                              @if($value['status'] == 1)
                              <span class="badge badge-success">Success</span>
                              @else
                              <span class="badge badge-warning">Pending</span>
                              @endif
                          </td>
                          <td class="project-actions text-right">
                              <!--<a class="btn btn-primary btn-sm" href="{{url('admin/prospecting/edit-prospecting',$value['id'])}}">-->
                              <!--    <i class="fas fa-folder">-->
                              <!--    </i>-->
                              <!--    View-->
                              <!--</a>-->
                              <a class="btn btn-info btn-sm" href="{{url('admin/prospecting/edit-prospecting',$value['id'])}}">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>
                              <a class="btn btn-danger btn-sm" href="{{url('admin/prospecting/delete-prospecting',$value['id'])}}">
                                  <i class="fas fa-trash">
                                  </i>
                                  Delete
                              </a>
                          </td>
                      </tr>
                       @php $i++; @endphp
                      @endforeach
 
              </tbody>
                  @endif
          </table>
        </div>
              
             
           
              <!-- /.card-body -->
            </div>
            
          </div>
               
          </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection