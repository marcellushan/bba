 <div class="main container">
	<h1 class= "mytitle">BBA PROGRAM QUESTIONS</h1>
     <? (@$edit ? $destination="edit" : $destination = "demo") ?>
	<form action='<?=base_url("applicant/put/" . $destination)?>' id="program" method="post">
		<div class="row">
			<h3 class="col-md-3">Semester applying for </h3>
			<div class="col-md-5">
				<h3><input type="radio" name="semester" value="Fall" required <? echo (@$applicant->semester=='Fall' ? "checked" : "") ?> > Fall
					<input type="radio" name="semester" value="Spring" required <? echo (@$applicant->semester=='Spring' ? "checked" : "") ?> > Spring
					<input type="radio" name="semester" value="Summer" <? echo (@$applicant->semester=='Summer' ? 'checked' : '') ?>> Summer</h3>
			</div><!-- col-md-5 -->
		</div><!-- row -->
		<div class="row">
		<h3 class="col-md-3">Year</h3>
		<div class="col-md-5">
			<h3><input type="radio" name="year" value="2017" required <? echo (@$applicant->year==2017 ? "checked" : "") ?> > 2017
				<input type="radio" name="year" value="2018" required <? echo (@$applicant->year==2018 ? "checked" : "") ?> > 2018
				<input type="radio" name="year" value="2019" <? echo (@$applicant->year==2019 ? 'checked' : '') ?>> 2019</h3>
		</div><!-- col-md-5 -->
 </div><!-- row -->
		<div class="row">
			<h3 class="col-md-6">Have you previously applied for this BBA program?</h3>
			<div class="col-md-5">
				<h3><input type="radio" name="applied_previous" value="2" required <? echo (@$applicant->applied_previous==2 ? "checked" : "") ?> > Yes
				<input type="radio" name="applied_previous" value="1" <? echo (@$applicant->applied_previous==1 ? 'checked' : '') ?>> No</h3>
			</div><!-- col-md-5 -->
		</div><!-- row -->
		<div class="row">
			<h3 class="col-md-6">Which program are you applying to?</h3>
			<div class="col-md-6">
				<h3><input type="radio" name="program" value="2" required <? echo (@$applicant->program==2 ? "checked" : "") ?> > Healthcare Management</h3>
					<h3><input type="radio" name="program" value="1" <? echo (@$applicant->program==1 ? 'checked' : '') ?>> Logistics and Supply Chain Management</h3>
			</div><!-- col-md-5 -->
		</div><!-- row -->
		<div class="row">
				<h3 class="col-md-6">How do you plan to attend the program?</h3>
			<div class="col-md-5">
				<h3><input type="radio" name="student_type" value="2" required <? echo (@$applicant->student_type==2 ? "checked" : "") ?> > Fulltime
				<input type="radio" name="student_type" value="1" <? echo (@$applicant->student_type==1 ? 'checked' : '') ?>> Part-time</h3>
			</div><!-- col-md-5 -->
		</div><!-- row -->
		<div class="row">
			<h3 class="col-md-6">Attendance Preference</h3>
			<div class="col-md-5">
				<h3><input type="radio" name="attendance" value="Mornings" required <? echo (@$applicant->attendance=='Mornings' ? "checked" : "") ?> > Mornings</h3>
				<h3><input type="radio" name="attendance" value="Afternoons" <? echo (@$applicant->attendance=='Afternoons' ? 'checked' : '') ?>> Afternoons</h3>
				<h3><input type="radio" name="attendance" value="Evenings" <? echo (@$applicant->attendance=='Evenings' ? 'checked' : '') ?>> Evenings</h3>
				<h3><input type="radio" name="attendance" value="None" <? echo (@$applicant->attendance=='None' ? 'checked' : '') ?>> No Preference</h3>
			</div><!-- col-md-5 -->
		</div><!-- row -->

			<div class="wrapper">			
        <button type="submit" class="btn-lg btn-primary">Next</button>
        	    </div>
	</form>
<p></p>

</div><!-- container -->
              