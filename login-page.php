<?php
    session_start();
      // Include the database connection file
    include_once("config.php");

    echo $_SESSION["message"];
    $_SESSION["message"] = "";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LoginPage - Huddle</title>
    <meta property="og:title" content="LoginPage - Huddle" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./login-page.css" rel="stylesheet" />

      <div class="login-page-container">
        <div class="login-page-login-page">
          <img
            alt="TopBar6030"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/e976054d-51a3-40db-9f8d-b4cf06b82f1d?org_if_sml=1887"
            class="login-page-top-bar"
          />
          <!--This is the search button-->
          <img
            alt="SearchIcon7466"
            src="public/playground_assets/searchicon7466-ox4mi.svg"
            class="login-page-search-icon"
          />
          <img
            alt="MenuIcon1203"
            src="public/playground_assets/menuicon1203-hkr.svg"
            class="login-page-menu-icon"
          />
          <img
            alt="AccountIcon7466"
            src="public/playground_assets/accounticon7466-s50p.svg"
            class="login-page-account-icon"
          />
          <img
            alt="MiddleBar6031"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/8e49ec87-996d-45d2-8ac2-e7e39504e23b?org_if_sml=16271"
            class="login-page-middle-bar"
          />
          <?php
            if ($_SESSION["authenticated_username"] == ""){
              ?>
                <span class='login-page-text'>New to Huddle? Sign up</span>
                <span class='login-page-text01'><span>Welcome!</span></span>

                <form id = login action='index.php' method='post'>
                  <input
                    type='text'
                    placeholder='Password'
                    class='login-page-password-input input'
                    name = 'password'
                  />
                  <input
                    type='text'
                    placeholder='Username'
                    class='login-page-username-input input'
                    name = 'username'
                  />
                  <a href='javascript: login.submit();' class='login-page-log-in-button'>
                    <img
                      alt='Rectangle126044'
                      src='https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/5d7f7bba-1649-4eda-b469-e6f9dec67ded?org_if_sml=11235'
                      class='login-page-rectangle12'
                    />
                    <span class='login-page-text07'><span>Log In</span></span>
                  </a>"
                </form>

            <?php
            }
            else{
            ?>
              <form action='post-page.php' method='get'>
                <button class='login-page-post-icon' type='submit'>
                  <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                    Post
                  </span>
                </button>
              </form>
              <span class="login-page-text10">Currently signed in as: <?php echo $_SESSION["authenticated_username"]?></span>
        
              <form action="logout.php" method="submit">
                <button type="submit" class="login-page-logout-button">
                  <img
                    alt="LogOutButton6065"
                    src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/14c8e075-cf54-4ffc-b115-8db824213d04?org_if_sml=11235"
                    class="login-page-logout-button1"
                  />
                  <span class="login-page-text11"><span>Logout</span></span>
                </button>;
              </form>
            <?php
            }
          ?>

          <span class="login-page-text09"><span>Huddle</span></span>

          <?php
            if ($_SESSION["authenticated_username"] == ""){
              echo "<a href='register-page.php' class='login-page-navlink button'>
                here
              </a>";
            }
          ?>

        </div>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
