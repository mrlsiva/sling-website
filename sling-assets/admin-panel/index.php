<?php
require_once __DIR__ . '/auth.php';
require_admin_login();
?>
<!DOCTYPE html>
<html>
 <head>
  
 <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sling Software || Admin</title>
  
  <!-- Set base URL to prevent path issues -->
  <base href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/'; ?>">
  
  <!-- Favicons -->
  <link href="sling-assets/admin-panel/favicon/favicon.png?v1" rel="icon">
    <link href="sling-assets/admin-panel/favicon/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
  <style type="text/css">
    #image_table{
      border: 0px solid blue;
      padding: 10px;
    }
    .drag-handle{
      cursor: move;
    }
    #image_table tbody tr.ui-sortable-helper{
      background: #f5f5f5;
      box-shadow: 0 2px 6px rgba(0,0,0,0.3);
    }
    .header-row{
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .header-actions .btn{
      margin-left: 8px;
    }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <div class="header-row">
     <h3>My Works</h3>
     <div class="header-actions">
       <button type="button" class="btn btn-primary" id="add_btn" title="Add">
         <i class="glyphicon glyphicon-plus"></i>
       </button>
       <a href="../../customer-enquiry.php" class="btn btn-success" title="View Customer Enquiries">
         <i class="glyphicon glyphicon-envelope"></i>
       </a>
       <a href="logout.php" class="btn btn-default" title="Logout">
         <i class="glyphicon glyphicon-log-out"></i>
       </a>
     </div>
   </div>
   <br />
   <div class="table-responsive" id="image_table">
    
   </div>
  </div>
 </body>
</html>
<div id="addImageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <form method="POST" id="add_image_form" enctype="multipart/form-data">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add Project</h4>
    </div>
    <div class="modal-body">
     <div class="form-group">
      <label>Image</label>
      <input type="file" name="image" id="add_image" class="form-control" accept=".jpg,.jpeg,.png,.gif,.webp" required />
      <small class="text-muted">Only .jpg, .jpeg, .png, .gif, .webp files allowed, max 2MB.</small>
      <div id="add_image_preview" style="margin-top: 10px; display: none;">
       <img id="add_image_preview_img" src="" alt="Image Preview" style="max-width: 200px; max-height: 150px;" class="img-thumbnail">
      </div>
     </div>
     <div class="form-group">
      <label>Project Name</label>
      <input type="text" name="ProductName" id="add_ProductName" class="form-control" />
     </div>
     <div class="form-group">
      <label>Project link</label>
      <input type="text" name="price" id="add_price" class="form-control" />
     </div>
     <div class="form-group">
      <label>Project Description</label>
      <input type="text" name="image_description" id="add_image_description" class="form-control" />
     </div>
    </div>
    <div class="modal-footer">
     <input type="submit" name="submit" class="btn btn-info" value="Add" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </form>
  </div>
 </div>
</div>
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
var adminBase = "<?php echo rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/'); ?>/";
$(document).ready(function(){
 load_image_data();
 function load_image_data()
 {
  $.ajax({
   url:adminBase + "fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#image_table').html(data);
    $('#image_table tbody').sortable({
     handle: '.drag-handle',
     update: function(){
      var image_ids = $('#image_table tbody tr').map(function(){
       return $(this).data('image_id');
      }).get();
      $.ajax({
       url:adminBase + "reorder.php",
       method:"POST",
       data:{image_ids: image_ids},
       success:function(){
        $('#image_table tbody tr td.sr-no').each(function(i){
         $(this).text(i+1);
        });
       }
      });
     }
    });
   }
  });
 }
 $('#add_btn').on('click', function(){
  $('#add_image_form')[0].reset();
  $('#add_image_preview').hide();
  $('#addImageModal').modal('show');
 });
 $(document).on('change', '#add_image', function(event){
  var file = event.target.files[0];
  if(file) {
   var fileExt = file.name.split('.').pop().toLowerCase();
   if(['jpg', 'jpeg', 'png', 'gif', 'webp'].indexOf(fileExt) === -1) {
    alert('Invalid file type. Please select a JPG, JPEG, PNG, GIF, or WebP file.');
    $(this).val('');
    $('#add_image_preview').hide();
    return;
   }
   if(file.size > 2000000) {
    alert('File size too large. Please select a file smaller than 2MB.');
    $(this).val('');
    $('#add_image_preview').hide();
    return;
   }
   var reader = new FileReader();
   reader.onload = function(e) {
    $('#add_image_preview_img').attr('src', e.target.result);
    $('#add_image_preview').show();
   }
   reader.readAsDataURL(file);
  } else {
   $('#add_image_preview').hide();
  }
 });
 $('#add_image_form').on('submit', function(event){
  event.preventDefault();
  if(!$('#add_image')[0].files.length)
  {
   alert("Choose an image");
   return;
  }
  var formData = new FormData(this);
  $.ajax({
   url:adminBase + "create.php",
   method:"POST",
   data: formData,
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $('#addImageModal').modal('hide');
    load_image_data();
    alert('Project added successfully');
   },
   error:function()
   {
    alert('Error adding project. Please try again.');
   }
  });
 });
 $(document).on('click', '.edit', function(){
  var image_id = $(this).attr("id");
  $.ajax({
   url:adminBase + "edit.php",
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
    $('#current_image_preview').attr('src', adminBase + 'files/' + data.full_image_name);
    // Clear replacement image input and preview
    $('#replacement_image').val('');
    $('#new_image_preview').hide();
    
   }
  });
 }); 
 $(document).on('click', '.btn-toggle-status', function(){
  var image_id = $(this).attr("id");
  var $btn = $(this);
  $.ajax({
   url:adminBase + "toggle_status.php",
   method:"POST",
   data:{image_id:image_id},
   dataType:"json",
   success:function(data)
   {
    if(data.success)
    {
     if(data.status === 'enabled')
     {
      $btn.removeClass('btn-default').addClass('btn-success').text('Enabled');
     }
     else
     {
      $btn.removeClass('btn-success').addClass('btn-default').text('Disabled');
     }
    }
   }
  });
 });
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var image_name = $(this).data("image_name");
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:adminBase + "delete.php",
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
    url:adminBase + "update.php",
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