@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h1 style="margin-top:20px;margin-bottom:40px">
                Please enter product detail to start sell with us
            </h1>
            <form method="POST" action="">
                <div class="form-group">
                    <select name="region" id="region"  class="form-control" >
                        <option value="">Choose Product category..</option>

                    </select>
                </div>
                <div class="form-group">
                    <select name="region" id="region"  class="form-control" >
                        <option value="">Choose Product subcategory..</option>
                        <option value="Dar-es-salaam">Dar-es-salaam</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="" class="form-control"  aria-describedby="titleHelp" placeholder="Enter Product title">

                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>

                </div>
                <div class="form-row">
                    <div class="form-group col-lg-4 col-md-4 col-sm-4">
                        <input type="text" name="" class="form-control"  aria-describedby="titleHelp" placeholder="Price">

                    </div>

                    <div class="form-group col-lg-6 col-md-4 col-sm-6">
                        <select name="region" id="region"  class="form-control" >
                            <option value="">Choose location..</option>
                            <option value="Dar-es-salaam">Dar-es-salaam</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                        <input type="file"  accept="image/*" name="upload_file[]" id="file"  onchange="preview_image();" style="display: none;" multiple>
                        <label for="file" class="file-upload" style="cursor: pointer;"><i class="fas fa-images"></i>Upload Image</label>
                        <div id="output"></div>
                </div>


            </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            didiaadhjavaohlk
        </div>
    </div>

</div>

<script>
   function preview_image() {
    var total_file=document.getElementById("file").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#output').append("<img class='img-preview' src='"+URL.createObjectURL(event.target.files[i])+"'>");
 }
}
    </script>

@endsection
