<td class = "feedContent">
  <h2>Create a post</h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open('create') ?>

		<label for="title">Title</label> 
		<input type="input" name="title" /><br />

		<label for="subject">Subject</label>
		<textarea name="subject"></textarea><br />
	
		<input type="submit" name="submit" value="Post Topic" /> 

	</form>
</td>
