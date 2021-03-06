
	<div class="container">
		<div class="row">
			<!-- Main column -->
			<div class="col-md-9">
				<section>
					<h2>List of subjects</h2>
					<br>
				</section>
				<section>
					<a href="/jmiams/index.php/admin/add_subject" class="btn btn-warning">Add Subject</a>
					<br><br>
				</section>
				<section>
					<h4>Select Semester</h4>
					<form class="form-inline" role="form" action="/jmiams/index.php/admin/subjects" method="post">
						<div class="form-group">
							<select class="form-control" name="semester">
								<?php 
									foreach($semesters->result() as $s) {
										echo '<option value="' . $s->semester . '">' . $s->semester . '</option>';
									}
								 ?>
							</select>&nbsp;&nbsp;
							<input type="submit" name="submit" value="Submit" class="btn btn-success" />&nbsp;&nbsp;
						</div>
					</form>
					<br>
				</section>
				<br><br>
				<section>
					<table class="table table-striped"> 	
						<thead><tr><th>Subject Code</th><th>Subject Name</th><th>Semester</th></tr></thead>
						<tbody>
						<?php
							foreach($rows as $r){
								echo '<tr><td>' . $r->subject_code . '</td><td>' . $r->subject_name . '</td><td>' . $r->semester.'</td></tr>';
							}
						?>
						</tbody>
					</table>
				</section>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/components/admin_footer'); ?>