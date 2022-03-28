<h5>Upload the File</h5>
<hr>
<form action="http://localhost/laravel-rest/public/uploadfile" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="Image" class="col-sm-2 col form-label" style="font-weight: bold;">Serial No</label>
        <div class="col-sm-4">
            <input type="file" class="form-control form-control-sm" name="image">
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
</form>
