<?php
session_start();
$name = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : "Student";
$initial = strtoupper(substr($name, 0, 1));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #081b29;
            color: white;
            padding: 15px;
        }

        .profile-card, .info-box {
            border: 1px solid rgba(14, 239, 255, 0.4);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            background: linear-gradient(145deg, rgba(14, 239, 255, 0.05), transparent);
        }

        .profile-letter {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid #0ef;
            color: #0ef;
            font-size: 35px;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            box-shadow: 0 0 15px rgba(14, 239, 255, 0.3);
        }

        .name { font-size: 18px; font-weight: 700; text-align: center; }
        .role { font-size: 12px; color: #0ef; text-align: center; margin-bottom: 20px; text-transform: uppercase; }

        .btn-outline {
            width: 100%;
            padding: 8px;
            background: transparent;
            color: #0ef;
            border: 1px solid #0ef;
            border-radius: 20px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        .btn-outline:hover { background: #0ef; color: #081b29; }

        .info-title { color: #0ef; font-weight: 700; font-size: 14px; margin-bottom: 15px; border-bottom: 1px solid rgba(14, 239, 255, 0.2); padding-bottom: 5px; }
        
        ul { list-style: none; padding: 0; }
        li { font-size: 13px; margin-bottom: 12px; display: flex; align-items: center; }
        li::before { content: "›"; color: #0ef; font-weight: bold; margin-right: 8px; }
        
        a { color: #0ef; text-decoration: none; font-weight: 600; }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="profile-letter"><?php echo $initial; ?></div>
        <div class="name"><?php echo htmlspecialchars($name); ?></div>
        <div class="role">Computer Science Student</div>
        <button class="btn-outline">View Profile</button>
    </div>

    <div class="info-box">
        <div class="info-title">Upcoming Tasks</div>
        <ul>
            <li>Complete Resume Verif.</li>
            <li>Upload Certificates</li>
            <li>Interview: TechNova</li>
        </ul>
    </div>

    <div class="info-box">
        <div class="info-title">Quick Links</div>
        <ul>
            <li><a href="#">Help Center</a></li>
            <li><a href="logout.php" target="_top" style="color: #ff4d4d;">Secure Logout</a></li>
        </ul>
    </div>
</body>
</html>