<div class="container">
	<div class="row">
		<!-- Main column -->
		<div class="col-md-9">
			<section>
				<h3><?php echo 'Teacher Id: ' . $teacher_id; ?></h3>
				<br>
				<?php 
						if(isset($confirmation)) {
							if($confirmation === 1) {
								echo '
									<table class="table">
										<tr class="success"><td>Success! New subject added</td></tr>
									</table>
									';
							} elseif($confirmation === 2) {
								echo '
									<table class="table">
										<tr class="danger"><td>Failure! Could not add new subject </td></tr>
									</table>
									';
							} elseif($confirmation === 3) {
								echo '
									<table class="table">
										<tr class="danger"><td>Failure! Something wrong with the input. Please enter valid subject </td></tr>
									</table>
									';
							}
						}
					?>
			</section>
		</div>
	</div>	
	<h4>Select Subject</h4>
		<form class="form-inline" role="form" action="/jmiams/index.php/admin/link_subject" method="post">
			<div class="form-group">
				<select class="form-control" name="subject_code">
					<?php 
						foreach($rows->result() as $s) {
							echo '<option value="' . $s->subject_code . '">' . $s->subject_code . '</option>';
						}
					 ?>
				</select>&nbsp;&nbsp;
				<input type="hidden" name="teacher_id" value="<?php echo $teacher_id; ?>">
				<input type="submit" name="submit" value="Submit" class="btn btn-success" />&nbsp;&nbsp;
			</div>
		</form>
	</div>
<?php $this->load->view('admin/components/admin_footer'); ?>