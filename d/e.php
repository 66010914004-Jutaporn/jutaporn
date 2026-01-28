<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>ฟอร์มสมัครงาน - บริษัท ดรีมเทคโซลูชัน จำกัด</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        min-height: 100vh;
        padding: 40px 0;
        font-family: "Prompt", sans-serif;
    }
    .job-card {
        background: #ffffffcc;
        border-radius: 20px;
        backdrop-filter: blur(10px);
        padding: 30px;
    }
    .header-box {
        background: linear-gradient(135deg, #2575fc, #6a11cb);
        padding: 25px;
        border-radius: 15px;
        color: white;
        text-align: center;
        margin-bottom: 25px;
        box-shadow: 0 8px 20px #00000030;
    }
    .btn-gradient {
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        border: none;
        color: white;
        padding: 10px 25px;
        border-radius: 30px;
        transition: 0.3s;
    }
    .btn-gradient:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 15px #00000040;
    }
</style>

</head>

<body>

<div class="container">
    <div class="col-lg-7 mx-auto job-card shadow-lg">

        <div class="header-box">
            <h2>ใบสมัครงาน</h2>
            <h5>บริษัท ดรีมเทคโซลูชัน จำกัด</h5>
        </div>

        <form method="post" action="f.php">
            
            <!-- ตำแหน่งงาน -->
            <div class="mb-3">
                <label class="form-label">ตำแหน่งที่ต้องการสมัคร</label>
                <select name="position" class="form-select" required>
                    <option value="">— เลือกตำแหน่งงาน —</option>
                    <option value="เจ้าหน้าที่การตลาด Marketing Officer">เจ้าหน้าที่การตลาด (Marketing Officer)</option>
                    <option value="นักพัฒนาโปรแกรม Programmer">นักพัฒนาโปรแกรม (Programmer)</option>
                    <option value="นักออกแบบกราฟิก Graphic Designer">นักออกแบบกราฟิก (Graphic Designer)</option>
                    <option value="ฝ่ายบุคคล HR Officer">ฝ่ายบุคคล (HR Officer)</option>
                    <option value="เจ้าหน้าที่ดูแลเพจ Social Admin">เจ้าหน้าที่ดูแลเพจ (Social Admin)</option>
                </select>
            </div>

            <!-- คำนำหน้า -->
            <div class="mb-3">
                <label class="form-label">คำนำหน้า</label>
                <select name="title" class="form-select" required>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>

            <!-- ชื่อ -->
            <div class="mb-3">
                <label class="form-label">ชื่อ - สกุล</label>
                <input type="text" class="form-control" name="fullname" required>
            </div>

            <!-- วันเกิด -->
            <div class="mb-3">
                <label class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" name="birthday" required>
            </div>

            <!-- การศึกษา -->
            <div class="mb-3">
                <label class="form-label">ระดับการศึกษา</label>
                <select name="education" class="form-select" required>
                    <option value="ม.6">ม.6</option>
                    <option value="ปวช.">ปวช.</option>
                    <option value="ปวส.">ปวส.</option>
                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                    <option value="ปริญญาโท">ปริญญาโท</option>
                </select>
            </div>

            <!-- ความสามารถพิเศษ -->
            <div class="mb-3">
                <label class="form-label">ความสามารถพิเศษ</label>
                <textarea name="skill" rows="3" class="form-control" placeholder="ระบุความสามารถ เช่น Excel, Photoshop, สื่อสารภาษาอังกฤษ"></textarea>
            </div>

            <!-- ประสบการณ์ -->
            <div class="mb-3">
                <label class="form-label">ประสบการณ์ทำงาน</label>
                <textarea name="experience" rows="4" class="form-control" placeholder="ถ้าไม่มีให้ระบุว่า ไม่มี"></textarea>
            </div>

            <!-- ปุ่ม -->
            <div class="text-center mt-4">
                <button type="submit" name="Submit" class="btn-gradient mx-2">ส่งใบสมัคร</button>
                <button type="reset" class="btn btn-outline-dark mx-2">ล้างข้อมูล</button>
            </div>

        </form>

    </div>

    <!-- ผลลัพธ์ -->
    <div class="col-lg-7 mx-auto mt-4 p-4 bg-white shadow rounded">

        <h4 class="text-center mb-3">📌 ผลการส่งใบสมัคร</h4>

        <?php
        if (isset($_POST['Submit'])) {
            echo "<p><strong>ตำแหน่งที่สมัคร:</strong> " . $_POST['position'] . "</p>";
            echo "<p><strong>คำนำหน้า:</strong> " . $_POST['title'] . "</p>";
            echo "<p><strong>ชื่อ - สกุล:</strong> " . $_POST['fullname'] . "</p>";
            echo "<p><strong>วันเดือนปีเกิด:</strong> " . $_POST['birthday'] . "</p>";
            echo "<p><strong>ระดับการศึกษา:</strong> " . $_POST['education'] . "</p>";
            echo "<p><strong>ความสามารถพิเศษ:</strong><br>" . nl2br($_POST['skill']) . "</p>";
            echo "<p><strong>ประสบการณ์ทำงาน:</strong><br>" . nl2br($_POST['experience']) . "</p>";
        }
        ?>

    </div>
</div>

</body>
</html>
