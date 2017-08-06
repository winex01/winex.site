<?php 
	// dd($skills);
	// dd($skillTypes);
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-1 col-xs-1"></div>
		<div class="col-md-10 col-xs-10 text-black bg-white">
		
			<hr />
				<div class="about-head">
					<strong class="main-title"><?= $name ?></strong>
					<p class="sub-title"><?= $occupation ?></p>
				</div>
			<hr />

			<div class="row">
				<!-- info -->
				<div class="col-md-3">
					<center>
						<img src="<?php echo base_url('public/image/me.jpg'); ?>" class="img-responsive img-thumbnail" alt="Image">
						<div class="about-buttons">
							<a href="/contact" class="btn btn-default btn-2">Contact</a>
							<a href="<?= site_url('public/resume/winniedamayo.zip'); ?>" class="btn btn-default btn-1">Resume</a>
						</div>
						<hr>
						<div class="row" align="left" style="margin-left: 10px;">
							<i class="fa fa-location-arrow"></i> 
								<a href="#">Cebu City</a>
							<br />

							<i class="fa fa-phone"></i> 
								<a href="#">09208783268</a>
							<br />

							<i class="fa fa-facebook-official"></i> 
								<a href="https://www.facebook.com/winex01">Facebook/winex01</a>
							<br />

							<i class="fa fa-envelope-o"></i> 
								<a data-toggle="modal" href='#modal-email'>E-mail</a>
							<br />
						</div>
					</center>
					<hr>
				</div><!-- end info -->
				
				<!-- main content -->
				<div class="col-md-7">
					<div class="row" style="margin-right: 10px;">
							<h1 class="page-title">About Me</h1>
							<p style="text-align: justify; text-indent: 20px;"><?= $description ?></p>
					</div>
					<hr />


					<!-- achievements -->
					<?php $i = 0; ?>
					<?php foreach($achievementTypes as $type): ?>
						<h3 class="main-title">
							<?= $type->achi_type ?>
						</h3>
						<?php foreach($achievements as $achieve): ?>
							<?php if($type->achi_type_id === $achieve->achi_type_id): ?>
							<div class="sub-container" style="margin-right: 10px;">
								<ul>
									<li class="section">
										<div class="row">
											<div class="col-md-6">
												<strong class="award"><?= $achieve->achi_title ?></strong> <br />
												<p class="place"><?= $achieve->achi_place ?></p>
											</div>
											<div class="col-md-6 align-right">
												<p class="date-r"><?= $achieve->achi_date ?></p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<hr />
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endforeach;  ?><!-- /achievements --> 





				</div><!-- end main cont -->
				
				<!-- skill -->
				<div class="col-md-2">

					<!-- sub container -->
					<div class="row sub-container">
					
					<!-- begin section -->
						<?php foreach($skillTypes as $skillType):  ?>
							<strong class="right-title"><?= $skillType->skills_type  ?></strong>
							<ul>
								<hr / class="right-section"> 
								<?php foreach($skills as $skill): ?>
									<?php if($skill->skills_type_id == $skillType->skills_type_id): ?>
										<li><strong><?= $skill->skills_description  ?></strong>
											<div class="progress">
												  <div class="progress-bar progress-bar-danger progress-bar-striped active" 
												  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $skill->skills_percent ?>%">
												  	<?= $skill->skills_percent ?>%
												  </div>
											</div>
										</li>
										<hr / class="right-section">
									<?php endif; ?>
								<?php endforeach; ?>
							</ul><!-- end section -->

						<?php endforeach; ?>					
					</div><!-- end sub container -->
			
				</div><!-- end col-md-2 -->
			</div>
		</div>
		<div class="col-md-1 col-xs-1"></div>
	</div>
</div>

	<!-- modal email-->
	<div class="modal fade" id="modal-email">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><strong>E-mail</strong></h4>
				</div>
				<div class="modal-body">
					<strong>Gmail:</strong> winnie131212592@gmail.com 
					<br />
					<strong>Yahoo:</strong> vinniedamz@yahoo.com
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
<!-- end modal email -->