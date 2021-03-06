 <div class="main container">
	<h1 class= "mytitle">
        Name:  <?=$applicant->first_name?>   <?=$applicant->middle_name?> <?=$applicant->last_name?><?=@$verified ?>
	</h1>
	 <div>
	    <h2  class= "mytitle">Application Status <?=$admin ?></h2>
		 <div class="wrapper"> <input type="button" class="btn btn-lg btn-primary" onclick="window.location.href='../'"value="Return To List">
			 <input type="button" class="btn btn-info btn-lg" onclick="window.location.href='<? echo base_url() ?>admin/display/comment/<?=$applicant->applicant_id ?>'"value="Add a Comment"></div>
		 <h3 class="wrapper">Comment(s)</h3>
		 <?php foreach ($comments as $comment):?>
			 <div class="row">
					 <h4 class="col-md-1">Comment</h4>
					 <h4 class="item col-md-5"><?=$comment->comment?></h4>
					 <h4 class="col-md-1">Admin</h4>
					 <h4 class="item col-md-1"><?=$comment->admin?></h4>
					 <h4 class="col-md-1">Date</h4>
					 <h4 class="item col-md-2"><?=$comment->submission_date?></h4>
			 </div><!-- row -->
		 <?php endforeach;?>

			<div class="row">
				<div class="col-md-6">
					<h3 class="col-md-6">Start Date:</h3>
					<h3 class="item col-md-5"><?=date_format(date_create($applicant->application_date), 'F d Y') ?></h3>
				</div>
				<div class="col-md-6">
					<h3 class="col-md-6">Submit Date</h3>
					<h3 class="item col-md-5"><?=($applicant->submitted ? date_format(date_create($applicant->submit_date), 'F d Y')  : "Not Submitted")?></h3>
				</div>
			</div><!--row-->
		 <div class="row">
			 <div class="col-md-6">
				 <? if($applicant->complete):?>
					 <h3 class="col-md-11">Marked Complete by: <?=$applicant->complete_by ?></h3>
					 <h3 class="col-md-11">Complete Date:  <?=date_format(date_create($applicant->complete_date), 'F d Y') ?></h3>
				 <? else:?>
					 <div class="col-md-11"> <input type="button" class="btn btn-warning btn-lg"
													onclick="window.location.href='<? echo base_url() ?>admin/update/complete/<?=$applicant->applicant_id ?>'"
													value="Mark Complete"></div>
				 <? endif;?>
			 </div>

		 </div><!--row-->

		<div class="section-border">
			<h2  class= "mytitle">Personal Information</h2>
				 <div class="row">
					 <div class="col-md-6">
						 <h3 class="wrapper">Address</h3>
				 		<div class="row">
						<h4 class="col-md-2">Street</h4><h4 class="item col-md-9"><? echo ($applicant->street ? $applicant->street : "Not Provided" )?></h4>
						<h4 class="col-md-2">City</h4><h4 class="item col-md-2"><? echo ($applicant->city ? $applicant->city : "Not Provided" )?></h4>
					 	<h4 class="col-md-1">State</h4><h4 class="item col-md-1"><? echo ($applicant->state ? $applicant->state : "Not Provided" )?></h4>
						<h4 class="col-md-1">Zip</h4><h4 class="item col-md-1"><? echo ($applicant->zip ? $applicant->zip : "Not Provided" )?></h4>
					 </div>
			 		</div>
					 <div class="col-md-6">
						 <h3 class="wrapper">Other Information</h3>
						 <div class="row">
							 <h4 class="col-md-6">Birth Date</h4><h4 class="item col-md-5"><? echo ($applicant->birth_date ? date_format(date_create($applicant->birth_date), 'F d Y') : "Not Provided" )?></h4> <h4 class="col-md-6">GHC ID</h4><h4 class="item col-md-5"><?=$applicant->GHC_ID?></h4>
						 </div>
					 </div>
			 </div><!-- row -->
				 <div class="row">
					 <div class="col-md-6">
						 <h3 class="wrapper">Phone Numbers</h3>
						 <div class="row">
							 <h4 class="col-md-2">Preferred</h4><h4 class="item col-md-9"><? echo ($applicant->preferred_phone ? $applicant->preferred_phone : "Not Provided" )?></h4>
							 <h4 class="col-md-2">Backup</h4><h4 class="item col-md-9"><? echo ($applicant->backup_phone ? $applicant->backup_phone : "Not Provided" )?></h4>
						 </div>
					 </div>
					 <div class="col-md-6">
						 <h3 class="wrapper">Email Addresses</h3>
						 <div class="row">
							 <h4 class="col-md-2">Preferred</h4><h4 class="item col-md-9"><?=$applicant->preferred_email?></h4>
							 <h4 class="col-md-2">Backup</h4><h4 class="item col-md-9"><? echo ($applicant->backup_email ? $applicant->backup_email : "Not Provided" )?></h4>
						 </div>
					 </div>
				 </div><!-- row -->
		</div><!--section-border -->

		 <h2 class="wrapper">Emergency Contact</h2>
		 <div class="row">
			 <h4 class="col-md-1">Name</h4>
			 <h4 class="item col-md-2"><?=$applicant->e_last_name?>, <?=$applicant->e_first_name?></h4>
			 <h4 class="col-md-2">Relationship</h4>
			 <h4 class="item col-md-1"><?=$applicant->relationship?></h4>
			 <h4 class="col-md-1">Address</h4>
			 <h4 class="item col-md-4"><?=$applicant->e_street?>, <?=$applicant->e_city?> <?=$applicant->e_state?>, <?=$applicant->e_zip?></h4>
		 </div><!-- row  -->

			<h3 class="wrapper">Phone Numbers</h3>
			<div class="row">
				<h4 class="col-md-2">Preferred</h4>
				<h4 class="item col-md-3"><?=$applicant->e_preferred_phone?></h4>
				<h4 class="col-md-2">Backup</h4>
				<h4 class="item col-md-3"><?=($applicant->e_backup_phone ? $applicant->e_backup_phone : "None Provided")?></h4>
			</div><!-- row -->
		 </div><!--section-border -->

		 <div class="row">
			 <div class="col-md-6">
				<h3>Program Questions</h3>
				 <div class="row">
					 <h4 class="col-md-6">Semester applying for</h4>
					 <h4 class="item col-md-5"><?=$applicant->semester ?>, <?=$applicant->year ?></h4>
				 </div><!-- row -->
				 <div class="row">
					 <h4 class="col-md-3">Program</h4>
				 	<h4 class="item col-md-8"><? echo (! @$applicant->program ? 'Not Provided' : ($applicant->program== 1 ? "Logistics and Supply Chain Management" : "Healthcare Management")); ?></h4>
				 </div><!-- row -->
				<div class="row">
					<h4 class="col-md-6">How do you plan to attend?</h4>
					<h4 class="item col-md-5"><? echo ($applicant->student_type ? "Full Time" : "Part Time"); ?></h4>
				</div><!-- row -->
				 <div class="row">
					 <h4 class="col-md-6">Preference of Attendance</h4>
					 <h4 class="item col-md-5"><?=$applicant->attendance ?></h4>
				 </div><!-- row -->
			 </div>
			 <div class="col-md-6">
				 <h3>Demographics</h3>
				 <div class="row">
					 <h4 class="col-md-3">Race</h4>
					 <h4 class="item col-md-2"><? echo (@$race->race_text ? $race->race_text : 'Not Provided')?></h4>
					 <h4 class="col-md-3">Gender</h4>
					 <h4 class="item col-md-2"><? echo (! @$applicant->gender ? 'Not Provided' : ($applicant->gender== 1 ? "Male" : "Female")); ?></h4>
					 <h4 class="col-md-3">Latino</h4>
					 <h4 class="item col-md-2"><? echo (! @$applicant->latino ? 'Not Provided' : ($applicant->latino== 1 ? "Yes" : "No")); ?></h4>
					 <h4 class="col-md-3">Foreign</h4>
					 <h4 class="item col-md-2"><? echo (! @$applicant->foreign ? 'Not Provided' : ($applicant->foreign== 1 ? "Yes" : "No")); ?></h4>
				 </div><!-- row -->
			 </div>
		 </div>

	 </div>


 </div><!-- main container -->

