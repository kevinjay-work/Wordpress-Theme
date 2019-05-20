<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- Compressed CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css" integrity="sha256-xpOKVlYXzQ3P03j397+jWFZLMBXLES3IiryeClgU5og= sha384-gP4DhqyoT9b1vaikoHi9XQ8If7UNLO73JFOOlQV1RATrA7D0O7TjJZifac6NwPps sha512-AKwIib1E+xDeXe0tCgbc9uSvPwVYl6Awj7xl0FoaPFostZHOuDQ1abnDNCYtxL/HWEnVOMrFyf91TDgLPi9pNg==" crossorigin="anonymous">

<!-- Compressed JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js" integrity="sha256-/PFxCnsMh+nTuM0k3VJCRch1gwnCfKjaP8rJNq5SoBg= sha384-9ksAFjQjZnpqt6VtpjMjlp2S0qrGbcwF/rvrLUg2vciMhwc1UJJeAAOLuJ96w+Nj sha512-UMSn6RHqqJeJcIfV1eS2tPKCjzaHkU/KqgAnQ7Nzn0mLicFxaVhm9vq7zG5+0LALt15j1ljlg8Fp9PT1VGNmDw==" crossorigin="anonymous"></script>
<!-- foundation-float.min.css: Compressed CSS with legacy Float Grid -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation-float.min.css" integrity="sha256-sP0p6J7SbJGiJ2gkdY1nkVsLgdwiFN2kI370lU+zacQ= sha384-yZLxxcD8nfiSt1qfKJWwHwtkL58WZDTlkBnZN60qr3ZS35+LDsmUF2JHLxdyZ+KU sha512-Z3WbpfWFSsK2dBvoSYZnMvPmxSJUa5cxj3TYlmyj6cq8IXy7iB2nlUk+jjms8gnz4HmpQk/yhRSlRzW7keoSlg==" crossorigin="anonymous">

<!-- foundation-prototype.min.css: Compressed CSS with prototyping classes -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation-prototype.min.css" integrity="sha256-ksLmXa0k3ACbX6azB9g6l7XlmSKFBkuH0DXKNwULXtE= sha384-RGTvu65DAT+yLQsTj5tnITDrMfrS5mbajNAYILSg4hHr9vRr/3Y9q0WAdChqLKfx sha512-KMJ7XYrv5UcwEvJFaYnLSdN5O3fT7aQvjed//LQPB3AsN4VPA/wXG9j4x4vKZkjNmU/U8aZC9Ac3FYxs9lPXcw==" crossorigin="anonymous">

<!-- foundation-rtl.min.css: Compressed CSS with right-to-left reading direction -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation-rtl.min.css" integrity="sha256-jvk46bzgetf2fy3FF19toDOoy9CG3aFqZfd229doSyo= sha384-w6E9ynA6OV6MFswc7C8nr8QoBiRtqqOKF/5M9ZVyVDDyrUPLI75xizNuXgRZxWK5 sha512-7MZk47L+5Mj6Y0dP3NuB2aqlNdDgzTlCf8m50nvgnCHUbxZ9KabCy8VUzQAl/DqDKwR7E6JsCf1MUjkfCiVzJw==" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/src/css/header.css">    



</head>

<body <?php body_class(); ?>>



</body>

<header class="site-header" role="banner">
<div class="container">
<ul class="menu menu-hover-lines">
  <h5 style="color: 'blue'">site title</h5>
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">About Us</a></li>
  <li><a href="#">Blog</a></li>
  <li><a href="#">Services</a></li>
  <li><a href="#">Products</a></li>
  <li><a href="#">Contact</a></li>
  <li class="search"><input type="search" placeholder="Search"></li>
  <li><button type="button" class="button">Search</button></li>
</ul>
 
</div>
<br/>

</header>
