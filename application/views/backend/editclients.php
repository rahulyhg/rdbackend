<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Edit clients</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editclientssubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="row">
<div class="input-field col s6">
<label for="name">name</label>
<input type="text" id="name" name="name" value='<?php echo set_value('name',$before->name);?>'>
</div>
</div>

<div class="row">
<div class="input-field col s6">
<label for="order">order</label>
<input type="text" id="order" name="order" value='<?php echo set_value('order',$before->order);?>'>
</div>
</div>
<!-- <div class="row">
<div class="col s12 m6">
<label>title</label>
<textarea name="title" placeholder="Enter text ..."><?php echo set_value( 'title',$before->title);?></textarea>
</div>
</div> -->

<div class="row">
   <div class="file-field input-field col m6 s12">
     <span class="img-center big">
                                   <?php if($before->logo == "") { } else {
                                   ?><img src="<?php echo base_url('uploads')."/".$before->logo; ?>">
                           <?php } ?>
                           </span>
     <div class="btn blue darken-4">
       <span>Logo</span>
       <input name="image" type="file" multiple>
     </div>
     <div class="file-path-wrapper">
       <input class="file-path validate" type="text" placeholder="Upload image" value="<?php echo set_value('image',$before->logo);?>">
     </div>
   </div>
   <span style=" display: block;
   ">150px X 120px</span>
 </div>
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewclients"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
