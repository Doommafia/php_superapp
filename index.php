<?php echo '<h1>localhost:80</h1>'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <style>
        :root {
            text-align: center;
            background-color: #F8EDED;
            font-family: Arial;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .box {
            overflow: hidden;
            margin: 10px;
        }

        a {
            display: block;
            width: 300px;
            height: 300px;
            background-size: cover;
            background-position: center;
        }

        .X {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/5/5a/X_icon_2.svg');
        }

        .YT {
            background-image: url('https://i.pinimg.com/originals/e5/e8/f7/e5e8f7ade77c5e799576eaf154f0675b.jpg');
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="box">
            <a alt="X icon" href="https://x.com/home" class="X"></a>
        </div>
        <div class="box">
            <a alt="YT icon" href="https://youtube.com" class="YT"></a>
        </div>
    </div>
</body>
</html>
