<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>ผลการสมัครงาน - บริษัท ดรีมเทคโซลูชัน จำกัด</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        font-family: "Prompt", sans-serif;
        min-height: 100vh;
        padding: 40px 0;
    }

    .result-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 25px;
        padding: 30px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        animation: fadeIn 1s ease-in-out;
    }

    .header-box {
        background: linear-gradient(135deg, #2575fc, #6a11cb);
        padding: 25px;
        border-radius: 15px;
        color: white;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    .result-item {
        background: #f5f5f5;
        border-radius: 15px;
        padding: 15px 20px;
        margin-bottom: 15px;
        transition: 0.3s;
    }

    .result-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
</head>
<body>

<div class="container">
    <div class="col-lg-8 mx-auto result-card">

        <div class="header-box">
            <h2>📌 ผลการส่งใบสมัครงาน</h2>
            <h5>บริษัท ดรีมเทคโซลูชัน จำกัด</h5>
        </div>

        <?php
        if (isset($_POST['Submit'])) {
            $position   = $_POST['position'];
            $title      = $_POST['title'];
            $fullname   = $_POST['fullname'];
            $birthday   = $_POST['birthday'];
            $education  = $_POST['education'];
            $skill      = nl2br($_POST['skill']);
            $experience = nl2br($_POST['experience']);
            
            echo "<div class='result-item'><strong>ตำแหน่งที่สมัคร:</strong> $position</div>";
            echo "<div class='result-item'><strong>คำนำหน้า:</strong> $title</div>";
            echo "<div class='result-item'><strong>ชื่อ - สกุล:</strong> $fullname</div>";
            echo "<div class='result-item'><strong>วันเดือนปีเกิด:</strong> $birthday</div>";
            echo "<div class='result-item'><strong>ระดับการศึกษา:</strong> $education</div>";
            echo "<div class='result-item'><strong>ความสามารถพิเศษ:</strong><br>$skill</div>";
            echo "<div class='result-item'><strong>ประสบการณ์ทำงาน:</strong><br>$experience</div>";
            
            echo "<div class='text-center mt-4'>";
            echo "<a href='javascript:history.back()' class='btn btn-gradient text-white px-4 py-2' style='background: linear-gradient(135deg, #6a11cb, #2575fc); border-radius: 25px; text-decoration:none;'>กลับไปแก้ไข</a>";
            echo "</div>";

        } else {
            echo "<p class='text-center text-danger'>ยังไม่มีการส่งข้อมูลจากฟอร์ม</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
