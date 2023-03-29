<?php
    session_start();
      // Include the database connection file
    include_once("config.php");
    ?>
    <div class = "post-page-post-background-box">
    <span class="post-page-error"><span><?php echo $_SESSION["message"]?></span></span>
</div>
    <?php
    //echo $_SESSION["message"];
    $_SESSION["message"] = "";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PostPage - Huddle</title>
    <meta property="og:title" content="PostPage - Huddle" />
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
      <link href="./post-page.css" rel="stylesheet" />

      <div class="post-page-container">
        <div class="post-page-full-page-template">
          <img
            alt="PostBackgroundBox7446"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/25835f98-1bb5-4f25-9988-1b23b5f9c37d?org_if_sml=19917"
            class="post-page-post-background-box"
          />
          <img
            alt="PostBar7446"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/d01543fd-cbaa-4d88-8067-b10faf880eb1?org_if_sml=11943"
            class="post-page-post-bar"
          />
          <!-- <img
            alt="PostIcon7446"
            src="public/playground_assets/posticon7446-bmli.svg"
            class="post-page-post-icon" -->
          <!-- /> -->
          
          <form id = post action = "post-verification.php" method="post">
            <select class = "post-page-teams" name = "team">
              <option value="">Select Related Team</option>
              <option value="Anaheim Ducks">Anaheim Ducks</option>
              <option value="Arizona Coyotes">Arizona Coyotes</option>
              <option value="Boston Bruins">Boston Bruins</option>
              <option value="Buffalo Sabres">Buffalo Sabres</option>
              <option value="Calgary Flames">Calgary Flames</option>
              <option value="Carolina Hurricanes">Carolina Hurricanes</option>
              <option value="Chicago Blackhawks">Chicago Blackhawks</option>
              <option value="Colorado Avalanche">Colorado Avalanche</option>
              <option value="Columbus Blue Jackets">Columbus Blue Jackets</option>
              <option value="Dallas Stars">Dallas Stars</option>
              <option value="Detroit Red Wings">Detroit Red Wings</option>
              <option value="Edmonton Oilers">Edmonton Oilers</option>
              <option value="Florida Panthers">Florida Panthers</option>
              <option value="Los Angeles Kings">Los Angeles Kings</option>
              <option value="Minnesota Wild">Minnesota Wild</option>
              <option value="Montreal Canadiens">Montreal Canadiens</option>
              <option value="Nashville Predators">Nashville Predators</option>
              <option value="New Jersey Devils">New Jersey Devils</option>
              <option value="New York Islanders">New York Islanders</option>
              <option value="New York Rangers">New York Rangers</option>
              <option value="Ottawa Senators">Ottawa Senators</option>
              <option value="Philadelphia Flyers">Philadelphia Flyers</option>
              <option value="Pittsburgh Penguins">Pittsburgh Penguins</option>
              <option value="San Jose Sharks">San Jose Sharks</option>
              <option value="Seattle Kraken">Seattle Kraken</option>
              <option value="St. Louis Blues">St. Louis Blues</option>
              <option value="Tampa Bay Lightning">Tampa Bay Lightning</option>
              <option value="Toronto Maple Leafs">Toronto Maple Leafs</option>
              <option value="Vancouver Canucks">Vancouver Canucks</option>
              <option value="Vegas Golden Knights">Vegas Golden Knights</option>
              <option value="Washington Capitals">Washington Capitals</option>
              <option value="Winnipeg Jets">Winnipeg Jets</option>
            </select>
            <textarea type="text" cols = "40" rows = "10" class="post-page-body-post-input input" name="body" placeholder="Your text goes here..."></textarea>
            <input
              type="text"
              placeholder="Title / Subject"
              class="post-page-title-subject-input input"
              name="title"
            />
            <div class = "post-page-post-background-box">
              <a href="javascript: post.submit();" class="post-page-post-button">
                <img
                  alt="PostRec7449"
                  src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/b56aae9d-329c-4c8c-bea9-0aec0240743e?org_if_sml=11434"
                  class="post-page-post-rec"
                />
                <span class="post-page-text09"><span>POST</span></span>
              </a>
            </div>
          </form>
          <img
            alt="Line17447"
            src="public/playground_assets/line17447-sy7k.svg"
            class="post-page-line1"
          />
          <img
            alt="Rectangle147447"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/67e403a6-97df-4d1a-b32b-0897713429d7?org_if_sml=11125"
            class="post-page-rectangle14"
          />
            <img
              alt="LeftSeparator7449"
              src="public/playground_assets/leftseparator7449-7u6.svg"
              class="post-page-left-separator"
            />
            <img
              alt="RightSeparator7449"
              src="public/playground_assets/rightseparator7449-ff38.svg"
              class="post-page-right-separator"
            />
          </div>
          <img
            alt="TopBar7467"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/e446f15a-987e-4129-89ab-284a2ac1ea9d?org_if_sml=1886"
            class="post-page-top-bar"
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

          <?php
                  if (!$_SESSION["authenticated_username"] == ""){
                          echo "<form action='login-page.php' method='get'>
                          <button class='post-page-log-icon' type='submit'>
                          <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                            Log Out
                          </span>
                          </button>
                      </form>";
                  } else {
                    echo "<form action='login-page.php' method='get'>
                      <button class='post-page-log-icon' type='submit'>
                      <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                        Log In
                      </span>
                      </button>
                    </form>";
                  }
                ?>
          <span class="post-page-text11"><span>Huddle</span></span>
          <span class="post-page-text15"><span>Create Post</span></span>
          <img
            alt="MenuIcon1205"
            src="public/playground_assets/menuicon1205-ncz.svg"
            class="post-page-menu-icon"
          />
        </div>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
