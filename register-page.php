<?php
    session_start();

    echo $_SESSION["message"];
    $_SESSION["message"] = "";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RegisterPage - Huddle</title>
    <meta property="og:title" content="RegisterPage - Huddle" />
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
      <link href="./register-page.css" rel="stylesheet" />

      <div class="register-page-container">
        <div class="register-page-register-page">
          <img
            alt="MiddleBar6054"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/8c881379-6c3c-4487-8ab1-7013b26ddcc1?org_if_sml=16266"
            class="register-page-middle-bar"
          />
          <span class="register-page-text"><span>Join the Team!</span></span>
          <form action = "register-verification.php" method="post">
            <input
              type="password"
              placeholder="Confirm Password"
              class="register-page-confirm-password-input input"
              name="confirmed"
            />
            <input
              type="password"
              placeholder="Password"
              class="register-page-password-input input"
              name="password"
            />
            <input
              type="text"
              placeholder="Username"
              class="register-page-username-input input"
              name="username"
            />
            <button type="submit" class="register-page-sign-up-button">
              <img
                alt="SignUpButton6065"
                src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/14c8e075-cf54-4ffc-b115-8db824213d04?org_if_sml=11235"
                class="register-page-sign-up-button1"
              />
              <span class="register-page-text2"><span>Sign Up</span></span>
            </button>
          </form>
          <img
            alt="TopBar7466"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/f81d7405-e2c0-42f6-8c20-171da0b95b68?org_if_sml=1886"
            class="register-page-top-bar"
          />
          <select class="hamburger-drop-down" id="go-to-pg">
            <option value="">Menu</option>
            <option value="./index.php">Home Page</option>
            <option value="./schedule-page.php">Schedule Page</option>
            <option value="./stats-page.php">Stats Page</option>
            <option value="./new-team-page.php">Team Page</option>
          </select>

          <script> 
            const menuIcon = document.querySelector('.hamburger-drop-down');
            const selectElement = document.querySelector('#go-to-pg');

            menuIcon.addEventListener('change', () => {
              const selectedValue = selectElement.value;
              if (selectedValue !== '') {
                window.location.href = selectedValue;
              }
            });
          </script>
          <span class="register-page-text4"><span>Huddle</span></span>
        </div>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
