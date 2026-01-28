<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>66010914004 จุฑาภรณ์ สมจันทร์(ฝน) - Bootstrap v5.3</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* เพิ่มระยะห่างระหว่างกลุ่มฟอร์ม */
    .form-group {
        margin-bottom: 1rem;
    }
</style>
</head>

<body>
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h1 class="card-title mb-0">ฟอร์มรับข้อมูล 66010914004 จุฑาภรณ์ สมจันทร์(ฝน) - Gimini</h1>
        </div>
        <div class="card-body">
            <form method="post" action="">
                
                <div class="form-group">
                    <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
                </div>

                <div class="form-group">
                    <label for="Phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="Phone" name="Phone" required>
                </div>

                <div class="form-group">
                    <label for="height" class="form-label">ส่วนสูง (ซม.) <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="height" name="height" min="100" max="200" required>
                    <div class="form-text">ใส่ค่าระหว่าง 100 ถึง 200 ซม.</div>
                </div>

                <div class="form-group">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <textarea class="form-control" id="address" name="address" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                </div>

                <div class="form-group">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" title="เลือกสีที่ชอบ">
                </div>

                <div class="form-group">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select class="form-select" id="major" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>
                
                <hr>

                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-primary" name="Submit">
                        <i class="bi bi-person-plus-fill"></i> สมัครสมาชิก
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        <i class="bi bi-x-circle-fill"></i> ยกเลิก
                    </button>
                    <button type="button" class="btn btn-info text-white" onClick="window.location='https://www.msu.ac.th/';">
                        <i class="bi bi-house-door-fill"></i> Go to MSU
                    </button>
                    <button type="button" class="btn btn-warning" onMouseOver="alert('จ๊ะโอ๋!');">
                        <i class="bi bi-hand-index-fill"></i> Hello
                    </button>
                    <button type="button" class="btn btn-dark" onClick="window.print();">
                        <i class="bi bi-printer-fill"></i> พิมพ์
                    </button>
                </div>

            </form>
        </div>
    </div>
    
    <hr class="my-5">

    <?php
    if (isset($_POST['Submit'])){
        // รับค่าจากฟอร์ม
        $fullname = $_POST['fullname'];
        $phone = $_POST['Phone']; // แก้เป็น 'Phone' ตาม name ในฟอร์ม
        $height = $_POST['height'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $color = $_POST['color'];
        $major = $_POST['major'];
        
        // แสดงผลลัพธ์ในรูปแบบ Card ของ Bootstrap
        echo '<div class="card border-success shadow-sm">';
        echo '<div class="card-header bg-success text-white"><h4>✅ ข้อมูลที่ได้รับ</h4></div>';
        echo '<ul class="list-group list-group-flush">';
        
        echo '<li class="list-group-item"><strong>ชื่อ-สกุล:</strong> ' . htmlspecialchars($fullname) . '</li>';
        echo '<li class="list-group-item"><strong>เบอร์โทร:</strong> ' . htmlspecialchars($phone) . '</li>';
        echo '<li class="list-group-item"><strong>ส่วนสูง:</strong> ' . htmlspecialchars($height) . ' ซม.</li>';
        echo '<li class="list-group-item"><strong>ที่อยู่:</strong> ' . nl2br(htmlspecialchars($address)) . '</li>'; // nl2br สำหรับแสดงผลขึ้นบรรทัดใหม่
        echo '<li class="list-group-item"><strong>วันเดือนปีเกิด:</strong> ' . htmlspecialchars($birthday) . '</li>';
        echo '<li class="list-group-item d-flex justify-content-between align-items-center"><strong>สีที่ชอบ:</strong> ';
        echo '<div style="background-color:' . htmlspecialchars($color) . '; width: 100px; height: 30px; border: 1px solid #ccc;" class="rounded shadow-sm"></div> <span class="badge bg-secondary">' . htmlspecialchars($color) . '</span></li>';
        echo '<li class="list-group-item"><strong>สาขาวิชา:</strong> ' . htmlspecialchars($major) . '</li>';
        
        echo '</ul>';
        echo '</div>';
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>
