<script type="text/javascript">
	$(document).ready(function(){
		$('.date').datepicker();
	});
</script>
<div class="grid_12 no-m-b">
	<article class="single page">
		<div class="page-header">
			<h1 class="title">Registration Form</h1>
		</div>
		<div class="page-content singlepage">
			<div class="item-content">
				<?php echo validation_errors('<div class="error">','</div>'); ?>
				<?=form_open('registration/register')?>
					<div class="divLeft">
						<table border="0" cellspacing="0" cellpadding="5" class="tblEnglish">
							<tr>
								<td height="40px">
									Gender:
								</td>
							</tr>
							<tr>
								<td height="40px">
									Name:
								</td>
							</tr>
							<tr>
								<td height="40px">
									Age:
								</td>
							</tr>
							<tr>
								<td height="40px">
									Mobile Number:
								</td>
							</tr>
							<tr>
								<td height="40px">
									Email:
								</td>
							</tr>
							<tr>
								<td height="120px">
									Address:
								</td>
							</tr>
							<tr>
								<td height="120px">
									Athletic Background:
								</td>
							</tr>
						</table>
					</div>
					<div class="divCenter">
						<table border="0" cellspacing="5" cellpadding="5" class="tblControls">
							<tr>
								<td>
									<?php
									$options = array('1'=>'Male', '2'=>'Female');
									echo form_dropdown('genders', $options, isset($_POST['genders']) ? $_POST['genders'] : '1');
									?>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="name" size="25" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>"/>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="age" class="txtBox_age" value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>"/>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="mobileNumber" size="25" value="<?= isset($_POST['mobileNumber']) ? $_POST['mobileNumber'] : '' ?>"/>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="email" size="25" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"/>
								</td>
							</tr>
							<tr>
								<td>
									<textarea name="address" class="txtArea_address"><?= isset($_POST['address']) ? $_POST['address'] : '' ?></textarea>
								</td>
							</tr>
							<tr>
								<td>
									<textarea name="athBg" class="txtArea_athBg"><?= isset($_POST['athBg']) ? $_POST['athBg'] : '' ?></textarea>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<?php
									$data = array(
										'name'=>'disclaimer',
										'id'=>'disclaimer',
										'value'=>1,
										'checked'=>isset($_POST['disclaimer']) ? $_POST['disclaimer'] : 0,
										'style'=>'margin-bottom:5px;margin-right:5px;'
										);
									echo form_checkbox($data);
									?>
									I certify that I am physically fit to participate in all the activities of URBAN RACE EGYPT. I am not aware of any health problems and or symptoms that might suggest inability to participate in the activities and I bear all the responsibility to manage it when it comes to my knowledge
									<br/><br/>
									أقر أنا بأني مؤهل بدنيا للمشاركة في جميع أنشطة أوربان ريس مصر. وأني لا أعاني من أي أمراض أو مشاكل صحية تعيقني عن الإشتراك في الأنشطة وأني أتحمل المسئولية كاملة في حالة ظهور أي مرض أو مشكلة صحية
								</td>
							</tr>
							<tr>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<td>
									<?php
									echo form_submit('submit', 'Register');
									?>
								</td>
							</tr>
						</table>
					</div>
					<div class="divRight">
						<table border="0" cellpadding="5" cellspacing="0" class="tblArabic">
							<tr>
								<td height="40px">
									:النوع
								</td>
							</tr>
							<tr>
								<td height="40px">
									:الإسم
								</td>
							</tr>
							<tr>
								<td height="40px">
									:السن
								</td>
							</tr>
							<tr>
								<td height="40px">
									:رقم الموبايل
								</td>
							</tr>
							<tr>
								<td height="40px">
									:البريد الإلكتروني
								</td>
							</tr>
							<tr>
								<td height="120px">
									:العنوان
								</td>
							</tr>
							<tr>
								<td height="120px">
									:الخبرة الرياضية
								</td>
							</tr>
						</table>
					</div>
				<?=form_close()?>
			</div>
		</div>
	</article>
</div>