<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

<form action= "Insert_to_table.php" method = "post">
    <h2>Student Form</h2>

    <label > Id </label>
    <input type="number" name ="fid" required>

    <label >Name</label>
    <input type="text" name="fname" required>

    <label >Semester</label>
    <input type="text" name="fsemester" required>

    <label >Section</label>
    <input type="text" name="fsection" required>

    <label > Phone </label>
    <input type="number" name="fphone" required>

    <label > Email </label>
    <input type="text" name="femail" required>

    <input type ="submit" name = "submit" />

    </body>
    </html>