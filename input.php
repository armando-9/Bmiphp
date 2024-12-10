<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณค่าBMI</title>
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
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        h3 {
            color: #666;
            font-size: 18px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .reset-btn {
            margin-top: 10px;
            background-color: #f44336;
        }

        .reset-btn:hover {
            background-color: #e53935;
        }

        .note {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>โปรแกรมสำหรับคำนวณพื้นที่สามเหลี่ยม</h2>

    <h3>คำนวณพื้นที่รูปสามเหลี่ยม</h3>
    <form action="testbmi.php" method="post">
    <form action="bmi.php" method="post">
    <label>ชื่อ:</label>
    <input type="text" name="name" required><br>
    <label>น้ำหนัก (กิโลกรัม):</label>
    <input type="number" name="weight" step="0.1" required><br>
    <label>ส่วนสูง (เซนติเมตร):</label>
    <input type="number" name="height" step="0.01" required><br>
    <button type="submit">คำนวณ BMI</button>
</form>
    </form>
</div>

</body>
</html>