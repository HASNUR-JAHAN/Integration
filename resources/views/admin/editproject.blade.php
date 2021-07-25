<x-admin-layout>
    <div class="content-wrapper" style="min-height: 278px; padding: 30px 0;">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Main row -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Update Project</h3>

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
                @if(Session::has('project_updated'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('project_updated') }}
                </div>
                @endif
                <form action="{{ url('/admin/update/project/'.$Project->id) }}" class="form-contact comment_form" method="POST" id="commentForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">

                            <h4>Project Category</h4>

                            <div class="form-group">
                                <select class="form-control" name="category_id">
                                    <option value="">Select project Category</option>
                                    @foreach( $project_categories as $project_category)
                                    <option value="{{$project_category->id}}">{{$project_category->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <!-- <div class="form-group">
                        <select name="blogcategory">
                            <option value="24" selected>Product 1</option>
                            <option value="32">Product 2</option>
                            <option value="54">Product 3</option>
                        </select> 
                        </div> -->


                            <h4>Project Title</h4>
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Write Your Project Title Here">
                            </div>

                            <h4>Project Description</h4>
                            <div class="form-group">
                                <textarea class="form-control w-100" name="description" cols="30" rows="9" placeholder="Write Your Project Description Here"></textarea>
                            </div>

                            <h4>Project live/Github link</h4>
                            <div class="form-group">
                                <input class="form-control" name="projectlink" type="text" placeholder="Share your Project live/Github link">
                            </div>

                            <h4>Share Image</h4>
                            <div class="form-group">
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" onchange="previewFile(this)">
                                <img id="previewImg" src="{{ URL::to($Project->image) }}" alt="" style="max-width: 200px; margin-top: 20px;">
                                <input type="hidden" name="image" value="{{ $Project->image }}" />
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