<!DOCTYPE html>
<html>
 <head>
  
 <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sling Software || Admin</title>
  <!-- Favicons -->
  <link href="favicon/favicon.png?v1" rel="icon">
    <link href="favicon/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
  <style type="text/css">
    #image_table{
      border: 0px solid blue;
      padding: 10px;
    }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <div class="row">
     <div class="col-md-8">
       <h3 align="center">My Works</h3>
     </div>
     <div class="col-md-4">
       <a href="../../customer-enquiry.php" class="btn btn-success btn-block" style="margin-top: 10px;">
         <i class="glyphicon glyphicon-envelope"></i> View Customer Enquiries
       </a>
     </div>
   </div>
   <br />
   <div align="center">
    <input type="file" name="multiple_files" id="multiple_files" multiple />
    <!-- <span class="text-muted">Only .jpg, .jpeg, .png, .gif, .webp files allowed</span> -->
    <span id="error_multiple_files"></span>
   </div>
   <br />
   <div class="table-responsive" id="image_table">
    
   </div>
  </div>
 </body>
</html>
<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <form method="POST" id="edit_image_form" enctype="multipart/form-data">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Edit Project</h4>
    </div>
    <div class="modal-body">
     <div class="form-group">
      <label>Current Image</label><br>
      <img id="current_image_preview" src="" alt="Current Image" style="max-width: 200px; max-height: 150px;" class="img-thumbnail">
     </div>
     <div class="form-group">
      <label>Image Name</label>
      <input type="text" name="image_name" id="image_name" class="form-control" />
     </div>
     <div class="form-group">
      <label>Project Name</label>
      <input type="text" name="ProductName" id="ProductName" class="form-control" />
     </div>
     <div class="form-group">
      <label>Project link</label>
      <input type="text" name="price" id="price" class="form-control" />
     </div>
     <div class="form-group">
      <label>Project Description</label>
      <input type="text" name="image_description" id="image_description" class="form-control" />
     </div>
     <div class="form-group">
      <label>Replace Image (Optional)</label>
      <input type="file" name="replacement_image" id="replacement_image" class="form-control" accept=".jpg,.jpeg,.png,.gif,.webp" />
      <small class="text-muted">Leave blank to keep current image. Only .jpg, .jpeg, .png, .gif, .webp files allowed.</small>
      <div id="new_image_preview" style="margin-top: 10px; display: none;">
        <strong>New Image Preview:</strong><br>
        <img id="new_image_preview_img" src="" alt="New Image Preview" style="max-width: 200px; max-height: 150px;" class="img-thumbnail">
      </div>
     </div>
     

     
    </div>

    
    <div class="modal-footer">
     <input type="hidden" name="image_id" id="image_id" value="" />
     <input type="submit" name="submit" class="btn btn-info" value="save" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </form>
  </div>
 </div>
</div>
<script>
$(document).ready(function(){
 load_image_data();
 function load_image_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#image_table').html(data);
   }
  });
 } 
 $('#multiple_files').change(function(){
  var error_images = '';
  var form_data = new FormData();
  var files = $('#multiple_files')[0].files;
  if(files.length > 10)
  {
   error_images += 'You can not select more than 10 files';
  }
  else
  {
   for(var i=0; i<files.length; i++)
   {
    var name = document.getElementById("multiple_files").files[i].name;
    var ext = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(ext, ['gif','png','jpg','jpeg','webp']) == -1) 
    {
     error_images += '<p>Invalid '+i+' File</p>';
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("multiple_files").files[i]);
    var f = document.getElementById("multiple_files").files[i];
    var fsize = f.size||f.fileSize;
    if(fsize > 2000000)
    {
     error_images += '<p>' + i + ' File Size is very big</p>';
    }
    else
    {
     form_data.append("file[]", document.getElementById('multiple_files').files[i]);
    }
   }
  }
  if(error_images == '')
  {
   $.ajax({
    url:"upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#error_multiple_files').html('<br /><label class="text-primary">Uploading...</label>');
    },   
    success:function(data)
    {
     $('#error_multiple_files').html('<br /><label class="text-success">Uploaded</label>');
     load_image_data();
    }
   });
  }
  else
  {
   $('#multiple_files').val('');
   $('#error_multiple_files').html("<span class='text-danger'>"+error_images+"</span>");
   return false;
  }
 });  
 $(document).on('click', '.edit', function(){
  var image_id = $(this).attr("id");
  $.ajax({
   url:"edit.php",
   method:"post",
   data:{image_id:image_id},
   dataType:"json",
   success:function(data)
   {
    $('#imageModal').modal('show');
    $('#image_id').val(image_id);
    $('#image_name').val(data.image_name);
    $('#image_description').val(data.image_description);
    $('#price').val(data.price);
    $('#ProductName').val(data.ProductName);
    $('#current_image_preview').attr('src', 'files/' + data.full_image_name);
    // Clear replacement image input and preview
    $('#replacement_image').val('');
    $('#new_image_preview').hide();
    
   }
  });
 }); 
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var image_name = $(this).data("image_name");
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"delete.php",
    method:"POST",
    data:{image_id:image_id, image_name:image_name},
    success:function(data)
    {
     load_image_data();
     alert("Deleted Sucessfully");
    }
   });
  }
 }); 
 
 // Preview replacement image
 $(document).on('change', '#replacement_image', function(event){
  var file = event.target.files[0];
  if(file) {
   // Validate file type
   var fileName = file.name;
   var fileExt = fileName.split('.').pop().toLowerCase();
   if(['jpg', 'jpeg', 'png', 'gif', 'webp'].indexOf(fileExt) === -1) {
    alert('Invalid file type. Please select a JPG, JPEG, PNG, GIF, or WebP file.');
    $(this).val('');
    $('#new_image_preview').hide();
    return;
   }
   
   // Validate file size (2MB)
   if(file.size > 2000000) {
    alert('File size too large. Please select a file smaller than 2MB.');
    $(this).val('');
    $('#new_image_preview').hide();
    return;
   }
   
   var reader = new FileReader();
   reader.onload = function(e) {
    $('#new_image_preview_img').attr('src', e.target.result);
    $('#new_image_preview').show();
   }
   reader.readAsDataURL(file);
  } else {
   $('#new_image_preview').hide();
  }
 });
 
 $('#edit_image_form').on('submit', function(event){
  event.preventDefault();
  if($('#image_name').val() == '')
  {
   alert("Enter Image Name");
  }
  else
  {
   var formData = new FormData(this);
   
   $.ajax({
    url:"update.php",
    method:"POST",
    data: formData,
    contentType: false,
    cache: false,
    processData: false,
    success:function(data)
    {
     $('#imageModal').modal('hide');
     load_image_data();
     $('#replacement_image').val(''); // Clear file input
     $('#new_image_preview').hide(); // Hide preview
     alert('Project updated successfully');
    },
    error:function()
    {
     alert('Error updating project. Please try again.');
    }
   });
  }
 }); 
});
</script>