<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>66010914004 จุฑาภรณ์ สมจันทร์(ฝน)</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="text-center">ฟอร์มรับข้อมูล 66010914004 จุฑาภรณ์ สมจันทร์(ฝน) - Chatgpt </h3>
        </div>

        <div class="card-body">

            <form method="post" action="">
                
                <div class="mb-3">
                    <label class="form-label">ชื่อ-สกุล</label>
                    <input type="text" name="fullname" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label">เบอร์โทร</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ส่วนสูง (ซม.)</label>
                    <input type="number" name="height" min="100" max="200" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ที่อยู่</label>
                    <textarea name="address" rows="4" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">วันเดือนปีเกิด</label>
                    <input type="date" name="birthday" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">สีที่ชอบ</label>
                    <input type="color" name="color" class="form-control form-control-color">
                </div>

                <div class="mb-3">
                    <label class="form-label">สาขาวิชา</label>
                    <select name="major" class="form-select">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" name="Submit" class="btn btn-success">สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-secondary">ยกเลิก</button>

                    <button type="button" class="btn btn-warning" onclick="window.location='https://www.msu.ac.th/';">
                        Go to MSU
                    </button>

                    <button type="button" class="btn btn-info" onmouseover="alert('จ๊ะโอ๋!');">
                        Hello
                    </button>

                    <button type="button" class="btn btn-dark" onclick="window.print();">
                        พิมพ์
                    </button>
                </div>

            </form>

        </div>
    </div>

    <hr class="my-4">

    <div class="card p-3 shadow-sm">
        <h4>ผลลัพธ์การกรอกข้อมูล</h4>
        <div class="mt-3">

        <?php
        if (isset($_POST['Submit'])) {
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $height = $_POST['height'];
            $address = $_POST['address'];
            $birthday = $_POST['birthday'];
            $color = $_POST['color'];
            $major = $_POST['major'];

            echo "<p><strong>ชื่อ-สกุล:</strong> $fullname</p>";
            echo "<p><strong>เบอร์โทร:</strong> $phone</p>";
            echo "<p><strong>ส่วนสูง:</strong> $height ซม.</p>";
            echo "<p><strong>ที่อยู่:</strong> $address</p>";
            echo "<p><strong>วันเดือนปีเกิด:</strong> $birthday</p>";
            echo "<p><strong>สีที่ชอบ:</strong> 
                    <div style='background-color:$color;width:150px;height:30px;border:1px solid #000;'></div>
                    $color
                  </p>";
            echo "<p><strong>สาขาวิชา:</strong> $major</p>";
        }
        ?>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
