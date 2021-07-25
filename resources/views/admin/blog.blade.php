<x-admin-layout>

  <div class="content-wrapper" style="min-height: 278px; padding: 30px 0;">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
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
                    <td>
                      <p>{{ substr(strip_tags($blog->blogdetails), 0, 10) }} ....
                        <!-- {{ strlen(strip_tags($blog->blogdetails)) > 20 ? "...ReadMore" : "" }}  -->
                      </p>
                    </td>
                    <td><span class="tag tag-success">
                        <p>{{ substr(strip_tags($blog->blogdetails), 0, 10) }} ....
                          <!-- {{ strlen(strip_tags($blog->blogdetails)) > 20 ? "...ReadMore" : "" }}  -->
                        </p>
                      </span></td>
                    <td><a>{{ substr(strip_tags($blog->bloglink), 0, 10) }} ....
                        <!-- {{ strlen(strip_tags($blog->blogdetails)) > 20 ? "...ReadMore" : "" }}  -->
                      </a></td>
                    <td> <img src="{{ URL::to($blog->image) }}" style="height: 30px;width:90;" alt=""></td>

                    <td>
                      <a href="{{ URL::to('/admin/editblog/'.$blog->id) }}" class="btn btn-info">Edit</a>
                      <a href="{{ URL::to('/admin/deleteblog/'.$blog->id) }}" class="btn	btn-danger	m-1">Delete</a>
                      <a href="{{ URL::to('/view/blog/'.$blog->id) }}" class="btn	btn-info	m-1">View</a>
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