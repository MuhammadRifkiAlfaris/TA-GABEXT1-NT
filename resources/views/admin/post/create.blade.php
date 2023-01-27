<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formCreate" class="needs-validation" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }} {{ method_field('POST') }}
        <input type="hidden" id="id" name="id">

      <div class="modal-body">
        <div class="form-group">
                  <div class="from-row">
        <div class="col-md-20 mb-50">
          <div class="mb-3">
          <label for="category_id">Category</label>
          <select class="form-control" name="category_id" id="cat" required>
            @foreach($categories as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
          </select>
          <div class="valid-feedback" style="text-align:left; ">Post's category has been select</div>
          </div>
          <div class="invalid-feedback" style="text-align:left; ">Post's category hasn't been select.
          </div>
      </div>
      <div class="form-group">
        <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="ti" placeholder="Post's Title" required>
        <div class="valid-feedback" style="text-align: left;">Post's title has been filled.
        </div>
        <div class="invalid-feedback" style="text-align: left;">Post's title hasn't been filled.
        </div>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control " name="description" id="de" rows="3" placeholder="Post's description" required=></textarea>
        <div class="valid-feedback" style="text-align: left;">Post's title has been filled.
        </div>
        <div class="invalid-feedback" style="text-align: left;">Post's title hasn't been filled.
        </div>
      </div>

      <div class="form-group">
        <label for="image">Image</label>
        <div class="mb-3">
        <input type="file" class="form-control-file" name="image" id="img">
        <div class="valid-feedback" style="text-align: left;">Post's title has been filled.
        </div>
        <div class="invalid-feedback" style="text-align: left;">Post's title hasn't been filled.
        </div>
      </div>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
  </form>
    </div>
  </div>
</div>
</div></div></div></div></div></div>