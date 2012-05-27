<div id="member" class="detail">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกอาสา</li>
		</div>
		<ul>
			<li>Welcome <span id="member_name"><?= $user->nickname ?>, <?= $user->first_name ?> <?= $user->last_name ?></span></li>
			<li>ข้อความเตือน (5)</li>
			<li>ตั้งค่าบัญชีผู้ใช้</li>
			<li>ออกจากระบบ</li>
		</ul>

		<div style="clear:both"></div>
		<div id="menu_left">
			<ul>
				<li class="current">หน้าหลัก</li>
				<li><?= HTML::anchor('user/profile', 'โปร์ไฟล์'); ?></li>
				<li>ฝากเวลาของฉัน</li>
				<li>งานอาสาของฉัน</li>
				<li>ค้นหางานอาสา</li>
				<li>งานฝึกอบรมของฉัน</li>
				<li>การแจ้งเตือน</li>
			</ul>
		</div>
		
		
		<div id="main_right">
			<div id="summary">
				<div id="photo" style="float:left;">
					<img src="<?= url::base(); ?>media/img/mem_sample_profile.png">
					<div style="clear:both"></div>
					<a>เปลี่ยนรูปภาพ</a>
				</div>
				<div class="sum"><div class="sum_hours">36 ชั่วโมง</div>
				<div class="sub_title">เวลาตั้งใจอาสา</div></div>
				<div></div>
				<div class="sum"><div class="sum_hours">16 ชั่วโมง</div>
				<div class="sub_title">เวลาทำอาสา</div></div>
			</div>
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">งานอาสาที่เหมาะกับโปร์ไพล์คุณ</div>
			<div class="title right"></div>
			<div class="line" style="width:374px;"></div>
			<a class="more">Load more</a>
			<div style="clear:both"></div>
			<ul class="list">
				<li><img src="<?= url::base(); ?>media/img/mem_sample_list.png"><div class="description">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab.</div><div class="hours">50 ชม.</div></li>
				<li><img src="<?= url::base(); ?>media/img/mem_sample_list.png"><div class="description">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab.</div><div class="hours">50 ชม.</div></li>
				<li><img src="<?= url::base(); ?>media/img/mem_sample_list.png"><div class="description">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab.</div><div class="hours">50 ชม.</div></li>
			</ul>
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">งานอาสาที่มีอาสาสมัครสนใจมากที่สุด</div>
			<div class="title right"></div>
			<div class="line"></div>
			<a class="more">Load more</a>
			<div style="clear:both"></div>
			<ul class="list">
				<li><img src="<?= url::base(); ?>media/img/mem_sample_list.png"><div class="description">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab.</div><div class="hours">50 ชม.</div></li>
				<li><img src="<?= url::base(); ?>media/img/mem_sample_list.png"><div class="description">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab.</div><div class="hours">50 ชม.</div></li>
				<li><img src="<?= url::base(); ?>media/img/mem_sample_list.png"><div class="description">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab.</div><div class="hours">50 ชม.</div></li>
			</ul>
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">งานอาสาที่ทางเวบไซต์อยากแนะนำ</div>
			<div class="title right"></div>
			<div class="line"></div>
			<a class="more">Load more</a>
			<div style="clear:both"></div>
			<ul class="list">
				<li><img src="<?= url::base(); ?>media/img/mem_sample_list.png"><div class="description">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab.</div><div class="hours">50 ชม.</div></li>
				<li><img src="<?= url::base(); ?>media/img/mem_sample_list.png"><div class="description">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab.</div><div class="hours">50 ชม.</div></li>
				<li><img src="<?= url::base(); ?>media/img/mem_sample_list.png"><div class="description">Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab.</div><div class="hours">50 ชม.</div></li>
			</ul>
			
		</div>
	</div>
</div>