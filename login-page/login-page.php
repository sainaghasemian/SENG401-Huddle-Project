<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="english">
  <head>
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
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./login-page.css" rel="stylesheet" />

      <div class="login-page-container">
        <div class="login-page-login-page">
          <img
            src="public/playground_assets/rectangle153-ckw-200h.png"
            alt="Rectangle153"
            class="login-page-rectangle1"
          />
          <img
            src="public/playground_assets/rectangle454-vkob-1000w.png"
            alt="Rectangle454"
            class="login-page-rectangle4"
          />
          
          <span class="login-page-text02"><span>Password</span></span>
          <span class="login-page-text04">
            <span class="login-page-text05">New to Huddle? Sign up</span>
            <span class="login-page-text06"></span>
            <th><a href="../register-page/register-page.php"><button>here</button></a></th>
          </span>
          <span class="login-page-text08"><span>Welcome!</span></span>
          <img
            src="public/playground_assets/rectangle759-i23n-200h.png"
            alt="Rectangle759"
            class="login-page-rectangle7"
          />
          <img
            src="public/playground_assets/rectangle8510-0k1-200h.png"
            alt="Rectangle8510"
            class="login-page-rectangle8"
          />
          <img
            src="public/playground_assets/rectangle9511-zr-200h.png"
            alt="Rectangle9511"
            class="login-page-rectangle9"
          />
          <img
            src="public/playground_assets/vector512-ucqe.svg"
            alt="Vector512"
            class="login-page-vector"
          />
          <img
            src="public/playground_assets/rectangle10513-8v3qh-200h.png"
            alt="Rectangle10513"
            class="login-page-rectangle10"
          />
          <span class="login-page-text"><input type="text" id="username" name="username" placeholder="Username or Email" style = "background-color: #BBCEFF; color: #000000;"></span>
          <img
            src="public/playground_assets/rectangle11514-1vfn-200h.png"
            alt="Rectangle11514"
            class="login-page-rectangle11"
          />
          <span class="login-page-text02"><input type="text" id="password" name="password" placeholder="Password" style = "background-color: #BBCEFF; color: #000000;"></span>
          <button class="login-page-log-in-button">
            <img
              src="public/playground_assets/rectangle12516-j59a-200h.png"
              alt="Rectangle12516"
              class="login-page-rectangle12"
            />
            <span class="login-page-text10"><span>Log In</span></span>
          </button>
          <span class="login-page-text12"><span>Huddle</span></span>
        </div>
      </div>
    </div>
  </body>
</html>
