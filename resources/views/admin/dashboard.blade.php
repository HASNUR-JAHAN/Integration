<x-admin-layout>

<div class="content-wrapper" style="min-height: 278px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <!--
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
            </ol>
          </div>
         
          -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
  



          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Project</h3>

                
              </div>
              
              <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Project</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>project category</th>
                      <th>project name</th>
                      <th>project details</th>
                      <th>shared link</th>
                      <th>shared Documentation</th>
                      <th>share image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor </td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      
                      <td>
              <button type="button" class="btn btn-info">View</button>
					    <button type="button" class="btn btn-success">Accept</button>
					    <button type="button" class="btn btn-danger">Delete</button>
					            </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <br>



        <!-- Main row -->

        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blog</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                      <th>ID</th>
                   
                      <th>blog category</th>
                      <th>blog name</th>
                      <th>blog details</th>
                      <th>share link</th>
                      <th>share image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($blogs as $blog)
                  <tr>
                      <td>{{ $blog->id}}</td>
                      <td>{{ $blog->blogcategory }}</td>
                      <td><p>{{ substr(strip_tags($blog->blogdetails), 0, 10) }} ....
                                        <!-- {{ strlen(strip_tags($blog->blogdetails)) > 20 ? "...ReadMore" : "" }}  -->
                                    </p></td>
                      <td><span class="tag tag-success"><p>{{ substr(strip_tags($blog->blogdetails), 0, 10) }} ....
                                        <!-- {{ strlen(strip_tags($blog->blogdetails)) > 20 ? "...ReadMore" : "" }}  -->
                                    </p></span></td>
                      <td><a>{{ substr(strip_tags($blog->bloglink), 0, 10) }} ....
                                        <!-- {{ strlen(strip_tags($blog->blogdetails)) > 20 ? "...ReadMore" : "" }}  -->
                                    </a></td>
                      <td> <img src="{{ URL::to($blog->image) }}" style="height: 30px;width:90;" alt=""></td>
                      
                      
                      <td>
                        <a href="{{ URL::to('/admin/edit/'.$blog->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ URL::to('/admin/delete/'.$blog->id) }}" class="btn	btn-danger	m-1">Delete</a>
                        <a href="{{ URL::to('/view/blog/'.$blog->id) }}" class="btn	btn-info	m-1">View</a>
                        <button type="button" class="btn btn-success">Accept</button>
					            </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="{{url('/admin/blog')}}" class="boxed-btn4">View All</a>
                    </div>
                </div>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

<br>




          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Question</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Question category</th>
                      
                      <th>Question details</th>
                      <th>shared link</th>
                      
                      <th>share image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor </td>
                      
                      
                      <td>11-7-2014</td>
                      
                      <td>
              <button type="button" class="btn btn-info">View</button>
					    <button type="button" class="btn btn-success">Accept</button>
					    <button type="button" class="btn btn-danger">Delete</button>
					            </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

<br>

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Comment</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      
                      <th>comment details</th>
                      <th>share image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">image</span></td>
                     
                      
                      
                      <td>
              <button type="button" class="btn btn-info">View</button>
					    <button type="button" class="btn btn-success">Accept</button>
					    <button type="button" class="btn btn-danger">Delete</button>
					            </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
<br>



          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Circular</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Company name</th>
                      <th>Job responsibilities</th>
                      <th>Addittional Requirement</th>
                      <th>Job Location</th>
                      <th>Employement Status</th>
                      <th>Salary</th>
                      <th>Vacancy Number</th>
                      <th>Application Deadline</th>
                      <th>Compensation And Other Benefits</th>
                      <th>Contact Information</th>
                      <th>Link</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor </td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      <td>11-7-2014</td>
                      
                      <td>
              <button type="button" class="btn btn-info">View</button>
					    <button type="button" class="btn btn-success">Accept</button>
					    <button type="button" class="btn btn-danger">Delete</button>
					            </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
<br>


        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</x-admin-layout>
