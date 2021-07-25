<x-admin-layout>

  <div class="content-wrapper" style="min-height: 278px; padding: 30px 0;">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" style="text-align: left;">All Project</h3>
              <a href="/addproject" class="btn btn-success pull-right" style="margin-left: 800px;">Add New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Project link</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($projects as $project)
                  <tr>
                    <td>{{ $project->id}}</td>
                    <td>{{ $project->name}}</td>
                    <td>
                      <p>{{ $project->description }} </p>
                    </td>
                    <td><a>{{$project->projectlink}}</a></td>
                    <td> <img src="{{ URL::to($project->image) }}" style="height: 30px;width:90;" alt=""></td>
                    <td>
                      <a href="{{ URL::to('/admin/editproject/'.$project->id) }}" class="btn btn-info">Edit</a>
                      <a href="{{ URL::to('/admin/deleteproject/'.$project->id) }}" class="btn	btn-danger	m-1">Delete</a>
                      <a href="{{ URL::to('/view/project/'.$project->id) }}" class="btn	btn-info	m-1">View</a>
                      <button type="button" class="btn btn-success">Accept</button>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <br>
      </div>
    </section>
  </div>
</x-admin-layout>