<div id="data" class="popup">
  <div id="main" role="main">

		
		<div id="content">
			<h2>สมัครเป็นสมาชิกธนาคารจิตอาสาได้ที่นี่เลยครับ ( Sign Up )</h2>

				<h3>กรุณาเลือกประเภทสมาชิก<br><br>
				<?= HTML::anchor('user/create?back_url='.urlencode(Arr::get($_GET, 'back_url')), 'สมัครสมาชิกอาสา', array('class'=>'button long170')); ?> <span style="color:#0099cc">หรือ</span>
                <?= HTML::anchor('organization/create', 'สมัครสมาชิกองค์กร', array('class'=>'button long170')); ?></h3>

		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
		
  </div>
 </div>
 