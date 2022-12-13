<section class="content">
    <div class="container-fluid">
      <div class="col-8">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create A New Posts</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="create_posts" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="Title">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter title" id="title" name="title">
                </div>
                <div class="form-group">
                  <label for="exampleInputSlug">Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug.." id="slug" name="slug">
                </div>
                <div class="form-group">
                  <label for="category"></label>
                  <select name="category" id="category" class="form-control">
                    <option value="Laravel">Laravel</option>
                    <option value="Codeigniter">Codeigniter</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <textarea class="form-control" name="body" id="body" cols="30" rows="10" placeholder="Enter body"></textarea>
                </div>
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
    </div>
</section>