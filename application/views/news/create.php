<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
  selector: '#editor',
  plugins: 'image code',
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | undo redo | link image | code',
  // enable title field in the Image dialog
  image_title: true, 
  // enable automatic uploads of images represented by blob or data URIs
  automatic_uploads: true,
  // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
  images_upload_url: 'http://localhost/product-videos/assets/postAcceptor.php',
  // here we add custom filepicker only to Image dialog
  file_picker_types: 'image', 
  // and here's our custom image picker
  file_picker_callback: function(cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    // Note: In modern browsers input[type="file"] is functional without 
    // even adding it to the DOM, but that might not be the case in some older
    // or quirky browsers like IE, so you might want to add it to the DOM
    // just in case, and visually hide it. And do not forget do remove it
    // once you do not need it anymore.
    input.onchange = function() {
      var file = this.files[0];
      var reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = function () {
        // Note: Now we need to register the blob in TinyMCEs image blob
        // registry. In the next release this part hopefully won't be
        // necessary, as we are looking to handle it internally.
        var id = 'blobid' + (new Date()).getTime();																
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);
        // call the callback and populate the Title field with the file name
        cb(blobInfo.blobUri(), { title: file.name });
      };
    };
    input.click();
  }
});
</script>
<style>
.hidden{display:none;}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2><?php echo $title; ?></h2>
			<?php echo validation_errors(); ?>
			<?php echo form_open_multipart('news/create'); ?>
				<table>        
					<tr>
						<td><label for="title">Title</label></td>
						<td><input type="input" name="title" size="50" /></td>
						<td><input name="image" type="file" id="upload" class="hidden" onchange=""></td>
					</tr>
					<tr>
						<td></td>
						<td><textarea name="text" id="editor" rows="10" cols="40"></textarea></td>
					</tr>        
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Create news item" /></td>
					</tr>
				</table>
				<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />    
			</form>
		</div>
	</div>
</div>