<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>M4/1-TeacherBook</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style1.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 mt-4 mb-4">
				<h2 class="text-center">คู่มือครู M.4</h2>
				<p class="text-center">เราได้ทำการรวบรวมคู่มือครูให้แล้วเพื่อช่วยให้เพื่อนๆเรียนได้ง่ายขึ้นไม่ปวดหัว เลือกรายวิชาแล้วไปดูกันเลย!</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8299_field_24/m_thumbnail_------------------_------.---4_------65.jpg" class="img-fluid" alt="Math1">
					</div>
					<h4>คู่มือครูคณิตศาสตร์พื้นฐาน</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sKUeCG1unA3rgWocmFsxpdE8IBfZt9fQ/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8300_field_24/m_thumbnail_------------------_------.---4.1_------65.jpg" class="img-fluid" alt="Math2">
					</div>
					<h4>คู่มือครูคณิตศาสตร์เพิ่มเติมเล่ม1</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sMCQKWkSjPBgxDoRhj80N8AuulE_mJ9j/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_9119_field_24/m_thumbnail_------------------_------.---4.2_------65.jpg" class="img-fluid" alt="Math3">
					</div>
					<h4>คู่มือครูคณิตศาสตร์เพิ่มเติมเล่ม2</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sPiAsLnmaH7jPMnFwHhXNXFba_xsHLKP/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8110_field_69/l_8110new.jpg" class="img-fluid" alt="lifescience">
					</div>
					<h4>คู่มือครูวิทยาศาสตร์ชีวภาพ</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sRrrJtmBci9y5vnSCVj_0PC9ic_mOX5B/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8289_field_24/m_2018-05-17_01.27.34.png" class="img-fluid" alt="computationalscience">
					</div>
					<h4>คู่มือครูวิทยาการคำนวณ</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sQ_K9tnTvu_MSV9zzglHr21O_5TFdQX0/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8285_field_24/m_2018-05-16_09.34.59.png" class="img-fluid" alt="technologydesign">
					</div>
					<h4>คู่มือครูออกแบบเทคโนโลยี</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sQHRXpRuefxO2iD-gIX_F45yd8mURsqI/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8297_field_24/m_6_physics_teacherguide1.jpg" class="img-fluid" alt="physics">
					</div>
					<h4>คู่มือครูฟิสิกส์เล่ม1</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sX-VW3TQCr8rgVMe_VI9F-UMQ47nPoLF/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8298_field_24/m_7_physics_teacherguide2.jpg" class="img-fluid" alt="physics2">
					</div>
					<h4>คู่มือครูฟิสิกส์เล่ม2</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sYfkAFKLFesiD-Q8Tl9t7MrGtWWw-U6R/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8292_field_24/m_chem-teacher-guide1-1.jpg" class="img-fluid" alt="chemical">
					</div>
					<h4>คู่มือครูเคมีเล่ม1</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sa-tTplRwsVkNzewuWg5lzNB-ullhPFE/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8293_field_24/m_chem-teacher-guide2.jpg" class="img-fluid" alt="chemical2">
					</div>
					<h4>คู่มือครูเคมีเล่ม2</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1smbDTdk4Rl4squIz9R7kVuhd321wENcU/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8111_field_69/l_8111new.jpg" class="img-fluid" alt="biology">
					</div>
					<h4>คู่มือครูชีววิทยาเล่ม1</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1smwMBuMKxPSpV4Gf7VadP2-ErukVJHud/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8112_field_24/m_8112new.jpg" class="img-fluid" alt="biology2">
					</div>
					<h4>คู่มือครูชีววิทยาเล่ม2</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sy4jx6-t4Y0PLm2_9M3LLk3a2pYuK6Wh/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8290_field_24/m_cover300.jpg" class="img-fluid" alt="astronomy">
					</div>
					<h4>คู่มือครูดาราศาสตร์เล่ม1</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sTiDto6o-3GuNXbenike7PIziZ5YHjAy/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://www.scimath.org/images/stories/flexicontent/item_8291_field_24/m_cover302.jpg" class="img-fluid" alt="astronomy2">
					</div>
					<h4>คู่มือครูดาราศาสตร์เล่ม2</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1sW-JSH-YR_XoNdyb6JcaYmq5A_2yTqXM/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
					<div class="user-pic">
						<img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/280313414_542870660763811_7156942828724799215_n.png?stp=dst-png_p320x320&_nc_cat=109&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeEfMou-JJ6No7hY_yCQgk6fCx2aQxZ1iCoLHZpDFnWIKjmlvfw-giY1WHyQoPF7KG2c3TQhpQRWLTVaXaPodOAf&_nc_ohc=x1bYplRnU88AX9td3sH&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVJhQ7XkT7cayRrU4ZyyLto-o8Fy67FZGfXFLBszPxITMQ&oe=62AEB5D1" class="img-fluid" alt="history">
					</div>
					<h4>คู่มือครูประวัติศาสตร์</h4>
					<h6>ม.4</h6>
					<hr>
					<p>คำเตือน!!อย่าเผยแพร่ข้อมูลให้กับคนที่คุณไม่สนิทหรืออาจารย์ผู้สอนรู้เป็นอันขาด</p>
					<hr>
					<p><a href="https://drive.google.com/file/d/1t-Y7JHu9w2YSL8BzpVBzGgQ2ruT6NjSO/view?usp=drivesdk" class="btn btn-primary">คลิก</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="Logout"> <a href="logout.php">Logout</a></div>
	<div class="Logout"> <a href="home.php">Back</a></div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>