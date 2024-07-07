<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Docker</title>
    <style>
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff); 
            color: #333; 
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background: linear-gradient(to right, #000000, #ffffff); 
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .container {
            padding: 20px;
        }
        .profile-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 30px;
        }
        .profile-pic {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .card {
            background: #ffffff; 
            color: #333; /* Warna teks di dalam kotak */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            margin-bottom: 20px;

        }
        h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .social-icons {
            margin-top: 20px;
        }
        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
        }
        .social-icons a:hover {
            color: #0072ff; /* Warna hover biru */
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Praktikum Docker</h1>
    </header>
    <div class="container">
            <div class="card">
                <?php
                echo "<h2>Made Hanura</h2>";
                echo "<p>haloo, saya baru belajar menggunakan Docker.</p>";
                ?>
            </div>
        </section>
</body>
</html>