<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณ BMI</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(to bottom right, #483D8B,#6A5ACD );
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            background-color: #E6E6FA;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            text-align: center;
        }

        h2 {
            color: #4caf50;
            font-size: 28px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        h3 {
            color: #4caf50;
            font-size: 20px;
            margin: 15px 0;
        }

        .bmi-status {
            font-size: 22px;
            font-weight: bold;
            color: #ff5722;
        }

        .advice {
            font-size: 18px;
            margin-top: 20px;
            color: #3f51b5;
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>ผลการคำนวณ BMI</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // รับค่า
        $name = isset($_POST['name']) ? trim($_POST['name']) : null;
        $weight = isset($_POST['weight']) ? (float)$_POST['weight'] : null;
        $height = isset($_POST['height']) ? (float)$_POST['height'] : null;

        // ตรวจสอบว่าข้อมูลถูกต้อง
        if ($weight > 0 && $height > 0) {
            // แปลงส่วนสูง
            $height = $height / 100;            
            
            // คำนวณ BMI
            $bmi = $weight / ($height * $height);

            
            if ($bmi < 18.5) {
                $status = "น้ำหนักน้อยกว่ามาตรฐาน";
                $advice = "ควรรับประทานอาหารที่มีประโยชน์และเพิ่มปริมาณอาหาร";
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                $status = "น้ำหนักอยู่ในเกณฑ์ปกติ";
                $advice = "ควรรักษาน้ำหนักให้อยู่ในเกณฑ์นี้";
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                $status = "น้ำหนักเกินมาตรฐาน";
                $advice = "ควรเริ่มควบคุมอาหารและออกกำลังกาย";
            } else {
                $status = "โรคอ้วน";
                $advice = "ควรปรึกษาแพทย์และดำเนินการลดน้ำหนัก";
            }
        } else {
            
            $bmi = null;
            $status = "ไม่สามารถคำนวณได้";
            $advice = "โปรดกรอกข้อมูลน้ำหนักและส่วนสูงที่ถูกต้อง";
        }
    } else {
        
        echo "<h3 style='color: red;'>ไม่มีข้อมูลที่ส่งมา</h3>";
        exit;
    }
    ?>

    <?php if ($bmi !== null): ?>
        <h3>ชื่อ: <span style="color: black;"><?php echo htmlspecialchars($name); ?></span></h3>
        <h3>น้ำหนัก: <span style="color: black;"><?php echo number_format($weight, 1); ?> กิโลกรัม</span></h3>
        <h3>ส่วนสูง: <span style="color: black;"><?php echo number_format($height, 2); ?> เมตร</span></h3>
        <h3>BMI: <span style="color: blue;"><?php echo number_format($bmi, 2); ?></span></h3>
        <h3>สถานะสุขภาพ: <span style="color: green;"><?php echo $status; ?></span></h3>
        <p class="advice">คำแนะนำ: <?php echo $advice; ?></p>
    <?php else: ?>
        <h3 style="color: red;">ไม่สามารถคำนวณค่า BMI ได้</h3>
        <p><?php echo $advice; ?></p>
    <?php endif; ?>

    <a href="input.php" class="back-link">กลับไปคำนวณใหม่</a>
</div>

</div>

</body>
</html>
