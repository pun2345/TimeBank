<div id="tb_browse_new">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>สร้างงานอาสาใหม่</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<h2>แก้ไขงานอาสา</h2>
		<?= Form::open('event/edit/'.$event->id, array('enctype' => 'multipart/form-data')); ?>
			<?php include Kohana::find_file('views', 'event/form') ?>
			<input type="submit" value="บันทึกข้อมูล" 
            onclick="alert('อาสาที่สมัครร่วมกิจกรรมอาจจะไม่รับทราบการเปลี่ยนแปลง กรุณาแจ้งให้อาสาของท่านทราบด้วยตนเอง หากการเปลี่ยนแปลงนั้นสำคัญ เช่น วัน-เวลาจัดกิจกรรม, สถานที่ ฯลฯ')">
			</div>
		<?= Form::close(); ?>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>