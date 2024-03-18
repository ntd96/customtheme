<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <!-- Tên page | tê trang web -->
    <title>  <?php wp_title('|', true, 'right'); bloginfo('name'); ?> </title>
    <!-- Tương thích các device -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- hiển thị mô tả trang web -->
    <meta content="" name="keywords"> 
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <?php
    wp_head(); // Kiểu như export
    tuongduy_nav_menu() // gọi từ function php tự custom
    ?>
</head>
<body>