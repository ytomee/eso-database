<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>ESO Database</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="global-styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div id="body-wrapper" class="bg-img">
        <div class="box shadow">
            <div class="logo logo-load fade-in"></div>

            <form action="index.php" method="post">
                <div class="input-box input-load">
                    <div class="input-data shadow">
                        <i class='bx bxs-user'></i>
                        <input name="user" type="text" placeholder="Username" required>
                    </div>

                    <div class="input-data shadow">
                        <i class='bx bxs-key'></i>
                        <input name="pass" type="password" placeholder="Password" required>
                    </div>
                
                    <div class="submit-box">
                        <button type="submit" class="button shadow">
                            <span class="button-content">Login</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
    <script src="animations.js"></script>
</body>
</html>