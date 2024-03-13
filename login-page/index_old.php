<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESO Database</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="box">
        <div class="logo"></div>

        <form action="index.php" method="post">
            <div class="input-box">
                <div class="input-data">
                    <i class='bx bxs-user'></i>
                    <input name="user" type="text" placeholder="Username" required>
                </div>
            
                <div class="input-data">
                    <i class='bx bxs-key'></i>
                    <input name="pass" type="text" placeholder="Password" required>
                </div>
            
                <div class="submit-box">
                    <button type="submit" class="button">
                        <span class="button-content">Login</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>