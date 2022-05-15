<div class="col-md-15">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Picture</h3>
            </div>
            <div class="panel-body">
              <p>Recommended size is 400x400.<br /> Limit file size, try to upload file larger than 2 MB </p>
              <input name="image" id="dropify-event" type="file" class="dropify" data-max-file-size="2M" data-default-file="{{ isset($info) && $info->image ? asset('img/users/avatars/'.$info->image) : ''  }}">

            </div>
          </div>
        </div>