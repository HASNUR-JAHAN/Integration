<x-admin-layout>
  <div class="content-wrapper" style="min-height: 278px; padding: 30px 0;">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Update Blog</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>

                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

        <br>
        <form action="{{ url('/admin/update/blog/'.$blog->id) }}" class="form-contact comment_form" method="POST" id="commentForm" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-12">

              <h4>Blog Category</h4>

              <div class="form-group">
                <input class="form-control" value="{{$blog->blogcategory}}" name="blogcategory" type="text" placeholder="Write Your Blog Category Here">

              </div>

              <!-- <div class="form-group">
                        <select name="blogcategory">
                            <option value="24" selected>Product 1</option>
                            <option value="32">Product 2</option>
                            <option value="54">Product 3</option>
                        </select> 
                        </div> -->


              <h4>Blog Name</h4>
              <div class="form-group">
                <input class="form-control" value="{{$blog->blogname}}" name="blogname" type="text" placeholder="Write Your Blog Name Hrere">
              </div>

              <h4>Blog Details</h4>
              <div class="form-group">
                <textarea class="form-control w-100" name="blogdetails" cols="30" rows="9" placeholder="Write Your Blog Details Here">{{$blog->blogdetails}}</textarea>
              </div>

              <h4>Share Link</h4>
              <div class="form-group">
                <input class="form-control" value="{{$blog->bloglink}}" name="bloglink" type="text" placeholder="Share Link Here">
              </div>

              <h4>Share Image</h4>
              <div class="form-group">
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" onchange="previewFile(this)">
                <img id="previewImg" src="{{ URL::to($blog->image) }}" alt="" style="max-width: 200px; margin-top: 20px;">
                <input type="hidden" name="old_image" value="{{ $blog->image }}" />
              </div>
            </div>

          </div>
          <div class="form-group">
            <button type="submit" class="button button-contactForm btn_1 boxed-btn">SUBMIT</button>
          </div>
        </form>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script>
    function previewFile(input) {
      let file = $("input[type=file]").get(0).files[0];
      if (file) {
        let reader = new FileReader();
        reader.onload = function() {
          $('#previewImg').attr("src", reader.result);
        }
        reader.readAsDataURL(file);
      }
    }
  </script>

</x-admin-layout>