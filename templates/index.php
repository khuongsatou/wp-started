<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            margin: auto;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #555;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        section {
            padding: 20px;
            background-color: #fff;
            margin-top: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Trang Chủ</h1>
            <?php do_action('theme_header')  ?>
        </header>
        <nav>
            <a href="#">Trang Chủ</a>
            <a href="#">Bài Viết</a>
            <a href="#">Liên Hệ</a>
        </nav>
        <section>
            <h2>Giới Thiệu</h2>
            <h3><?php echo the_title(); ?></h3>
            <p>Xin chào! Đây là trang web của chúng tôi.</p>
            <p>Chúng tôi chuyên cung cấp các dịch vụ về PHP.</p>
            <div class="center">
            <?php echo "<img src='" . esc_url( get_parent_theme_file_uri( 'assets/img/webp-example.webp' ) ) . "' alt='' />"; ?>


            </div>
        </section>
    </div>
    <footer>
        <p>Bản quyền &copy; 2024. Đã đăng ký.</p>
        <?php do_action('theme_footer')  ?>
    </footer>
</body>
</html>
