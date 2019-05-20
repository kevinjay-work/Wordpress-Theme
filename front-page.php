

<?php
/**
 * Template name: Front Page
 *
 */

get_header(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css" integrity="sha256-xpOKVlYXzQ3P03j397+jWFZLMBXLES3IiryeClgU5og= sha384-gP4DhqyoT9b1vaikoHi9XQ8If7UNLO73JFOOlQV1RATrA7D0O7TjJZifac6NwPps sha512-AKwIib1E+xDeXe0tCgbc9uSvPwVYl6Awj7xl0FoaPFostZHOuDQ1abnDNCYtxL/HWEnVOMrFyf91TDgLPi9pNg==" crossorigin="anonymous">

<!-- Compressed JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js" integrity="sha256-/PFxCnsMh+nTuM0k3VJCRch1gwnCfKjaP8rJNq5SoBg= sha384-9ksAFjQjZnpqt6VtpjMjlp2S0qrGbcwF/rvrLUg2vciMhwc1UJJeAAOLuJ96w+Nj sha512-UMSn6RHqqJeJcIfV1eS2tPKCjzaHkU/KqgAnQ7Nzn0mLicFxaVhm9vq7zG5+0LALt15j1ljlg8Fp9PT1VGNmDw==" crossorigin="anonymous"></script>
<!-- foundation-float.min.css: Compressed CSS with legacy Float Grid -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation-float.min.css" integrity="sha256-sP0p6J7SbJGiJ2gkdY1nkVsLgdwiFN2kI370lU+zacQ= sha384-yZLxxcD8nfiSt1qfKJWwHwtkL58WZDTlkBnZN60qr3ZS35+LDsmUF2JHLxdyZ+KU sha512-Z3WbpfWFSsK2dBvoSYZnMvPmxSJUa5cxj3TYlmyj6cq8IXy7iB2nlUk+jjms8gnz4HmpQk/yhRSlRzW7keoSlg==" crossorigin="anonymous">

<!-- foundation-prototype.min.css: Compressed CSS with prototyping classes -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation-prototype.min.css" integrity="sha256-ksLmXa0k3ACbX6azB9g6l7XlmSKFBkuH0DXKNwULXtE= sha384-RGTvu65DAT+yLQsTj5tnITDrMfrS5mbajNAYILSg4hHr9vRr/3Y9q0WAdChqLKfx sha512-KMJ7XYrv5UcwEvJFaYnLSdN5O3fT7aQvjed//LQPB3AsN4VPA/wXG9j4x4vKZkjNmU/U8aZC9Ac3FYxs9lPXcw==" crossorigin="anonymous">

<!-- foundation-rtl.min.css: Compressed CSS with right-to-left reading direction -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation-rtl.min.css" integrity="sha256-jvk46bzgetf2fy3FF19toDOoy9CG3aFqZfd229doSyo= sha384-w6E9ynA6OV6MFswc7C8nr8QoBiRtqqOKF/5M9ZVyVDDyrUPLI75xizNuXgRZxWK5 sha512-7MZk47L+5Mj6Y0dP3NuB2aqlNdDgzTlCf8m50nvgnCHUbxZ9KabCy8VUzQAl/DqDKwR7E6JsCf1MUjkfCiVzJw==" crossorigin="anonymous">

<link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/src/css/frontpage.css">
<link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>


<div class="full-width-testimonial">
  <div class="full-width-testimonial-section">
    <div class="full-width-testimonial-icon text-center">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="41px" height="34px" viewBox="-235 240 41 34" style="enable-background:new -235 240 41 34;" xml:space="preserve">
          <path class="quote-path" d="M-231.3,260.4c0-5,1.3-8.8,3.7-11.7c2.4-2.8,6-4.6,10.5-5.5v5c-3.5,1-6,2.8-7.1,5.5c-0.7,1.4-0.9,2.8-0.8,4
            h8.1v12.8h-14.4V260.4z"/>
          <path class="quote-path" d="M-212,260.4c0-5,1.3-8.8,3.7-11.7c2.4-2.8,6-4.6,10.5-5.5v5c-3.5,1-6,2.8-7.1,5.5c-0.7,1.4-0.9,2.8-0.8,4h8.1
            v12.8H-212V260.4z"/>
      </svg>
    </div>
    <div class="full-width-testimonial-content">
      <h5 class="full-width-testimonial-text">Lake Tahoe is the most beautiful place I have ever been to. I have traveled several places in the world, and there might be more beautiful places out there, but none that I have seen. I loved it!
      </h5>
      <p class="full-width-testimonial-source">Gavin Newman</p>
      <span class="full-width-testimonial-source-context">Traveled from San Francisco to Lake Tahoe</span>
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="posts-panel">

  <!-- Panel's header -->
  <header class="panel-header">
    <h1 class="panel-title">Featured Posts (List)</h1>
  </header>

  <!-- Panel's content -->
  <div class="panel-content">

    <!-- Pinned post section -->
    <section class="pinned-post">
      <!-- Post item -->

      <div class="post-item">

        <!-- Post's thumbnail -->
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/24587/pexels-photo-24587.jpg" alt="">
        </a>

        <!-- Post's text -->
        <div class="post-text">

          <!-- Post's title -->
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>

          <!-- Post's summary -->
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Posts list -->
    <section class="posts-list">
      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/66274/sunset-poppy-backlight-66274.jpeg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>

      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/33109/fall-autumn-red-season.jpg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>

      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/12567/photo-1444703686981-a3abbc4d4fe3.jpeg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>

      <div class="post-item">
        <a href="#" class="post-thumbnail">
          <img src="https://static.pexels.com/photos/370018/pexels-photo-370018.jpeg" alt="">
        </a>
        <div class="post-text">
          <a href="#">
            <h3 class="post-title">Post title place-holder</h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text">Steve Jobs</a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text">22/06/2030</span></span>
          </div>
          <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it....
              <a href="#" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
        </div>
        <div class="col-sm-4">
        <div class="card-user-profile">
  <img class="card-user-profile-img" src="https://images.pexels.com/photos/5439/earth-space.jpg?h=350&auto=compress&cs=tinysrgb" alt="picture of space" />
  <div class="card-user-profile-content card-section">
    <div class="card-user-profile-avatar">
      <img src="https://pbs.twimg.com/profile_images/422887689612820482/sZtHMJu5.png" alt="picture of yeti" />
    </div>
    <p class="card-user-profile-name">Abominable Snowman</p>
    <p class="card-user-profile-status">Yeti Web Designer</p>
    <p class="card-user-profile-info">The Yeti, once better known as the Abominable Snowman, is a mysterious bipedal creature said to live in the mountains of Asia. It sometimes leaves tracks in snow, but is also said to dwell below the Himalayan snow line.</p>
  </div>

  <div class="card-user-profile-actions">
    <a href="#" class="card-user-profile-button button hollow">Follow</a>
    <a href="#" class="card-user-profile-button button hollow secondary">More Info</a>
  </div>
</div>
<br/>

<br/>

<div class="form-registration">

  <figure class="form-registration-img">
    <img src="https://images.pexels.com/photos/221205/pexels-photo-221205.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" />
    <figcaption class="form-registration-img-caption">Experience everything Yeti+ has to offer through Yeti e-shoppe and our related apps.</figcaption>
  </figure>

  <form class="form-registration-group" action="">
    <input class="form-registration-input"  type="email" placeholder="Your email">
    <input class="form-registration-submit-button" type="submit" value="Continue">
    <p class="or-divider"><span>or</span></p>
    <a class="form-registration-social-button" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Sign Up With facebook</a>
    <p class="form-registration-member-signin">Already a member? <a href="#">Sign in</a></p>
    <p class="form-registration-terms"><a href="#">Terms &amp; Conditions</a>|<a href="#">Privacy</a></p>
  </form>

</div>


        </div>
    </div>

</div>

<div class="container-fluid">
    <div class="row">
    <section class="four-up-feature">
  <div class="row four-up-feature-header align-center">
    <div class="medium-8 columns">
      <h4>This is the Sizzling Title Area</h4>
      <h5> Picanha flank cupim short loin, swine biltong kevin meatloaf filet mignon bresaola shankle venison. Leberkas jerky kevin doner pork loin ground round.</h5>
    </div>
  </div>
  <div class="row align-spaced">
    <div class="small-10 medium-3 columns">
      <img class="four-up-feature-image" src="<?php echo get_template_directory_uri() ?>/assets/images/img2.jpg" alt="icon">
      <h4>Item One</h4>
      <p class="four-up-feature-text">Bacon ipsum dolor amet biltong short ribs cupim brisket, prosciutto flank t-bone ball tip porchetta sirloin.</p>
    </div>
    <div class="small-10 medium-3 columns">
      <img class="four-up-feature-image" src="<?php echo get_template_directory_uri() ?>/assets/images/img2.jpg" alt="icon">
      <h4>Item Two</h4>
      <p class="four-up-feature-text"> Leberkas jerky kevin doner pork loin ground round landjaeger chicken ham hock brisket bresaola shankle. </p>
    </div>
    <div class="small-10 medium-3 columns">
      <img class="four-up-feature-image" src="<?php echo get_template_directory_uri() ?>/assets/images/img2.jpg" alt="icon">
      <h4>Item Three</h4>
      <p class="four-up-feature-text">Alcatra doner pastrami salami. Does your lorem ipsum text long for something a little meatier?</p>
    </div>
    <div class="small-10 medium-3 columns">
      <img class="four-up-feature-image" src="<?php echo get_template_directory_uri() ?>/assets/images/img2.jpg" alt="icon">
      <h4>Item Four</h4>
      <p class="four-up-feature-text">Alcatra doner pastrami salami. Does your lorem ipsum text long for something a little meatier?</p>
    </div>
  </div>
</section>
</div>
</div>
</body>
</html>






<?php // get_sidebar(); ?>

<?php get_footer(); ?>
