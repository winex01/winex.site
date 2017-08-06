
<div class="container">
	<div class="row">

		<div class="col-md-4"></div>
		<div class="col-md-4">

			<div class="sub-container bg-white">
			<h2>Contact Me</h2>
			<hr />
			
				<br />
				<?php echo form_open('Contact_me'); ?>
				 <div class="form-group">
				    <?= form_error('name'); ?>
				    <label for="name">Your Name:</label>
				    <input  value="<?= set_value('name');  ?>" type="text" class="form-control" name="name">
				  </div>
  
				  <div class="form-group">
				    <?= form_error('email'); ?>
				    <label for="email">Email address:</label>
				    <input value="<?= set_value('email');  ?>" type="text" class="form-control" name="email">
				  </div>
				 

				  <div class="form-group">
				    <?= form_error('message'); ?>
				    <label for="message">Message:</label>
				    <textarea value="<?= set_value('message');  ?>" class="form-control" rows="6" name="message"></textarea>
				  </div>

				  <button type="submit" class="btn btn-2">Submit</button>
				</form>

			</div>
		</div>
		<div class="col-md-4"></div>

	</div>
</div>