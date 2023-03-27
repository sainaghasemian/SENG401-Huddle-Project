<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Team Page</title>

    <title>NewTeamPg - Huddle</title>
    <meta property="og:title" content="NewTeamPg - Huddle" />
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
      href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./new-team-page.css" rel="stylesheet" />

      <div class="new-team-page-container">
        <div class="new-team-page-full-page-template">
          <span class="new-team-page-teams-text"><span>Teams</span></span>
          <img
            src="public/playground_assets/separator1354-6i6.svg"
            class="new-team-page-separator"
          />
          <img
            alt="TopBar4512"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/4d12000b-744e-4b7e-ac43-d7493314f2d9?org_if_sml=1887"
            class="new-team-page-top-bar"
          />
          <select class="hamburger-drop-down" id="go-to-pg">
            <option value="">MENU</option>
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
              
              echo "<form action='post-page.php' method='get'>
                      <button class='new-team-page-post-icon' type='submit'>
                        <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                          Post
                        </span>
                      </button>
                    </form>";
              echo "<form action='login-page.php' method='get'>
              <button class='new-team-page-log-icon' type='submit'>
                <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                  Log Out
                </span>
              </button>
            </form>";
            } else {
              echo "<form action='login-page.php' method='get'>
              <button class='new-team-page-log-icon' type='submit'>
                <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                  Log In
                </span>
              </button>
            </form>";
            }
          ?>
          <span class="new-team-page-huddle-top-logo"><span>Huddle</span></span>
          <span class="new-team-page-teams-drop-down-title">TEAMS</span>
          <select class="new-team-page-teams-drop-down" id="team-select">
            <option value="">All Teams</option>
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
          <button class="new-team-pages-get-teams-button">
            <img
              alt="Rectangle126633"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/32875c77-5163-45b7-b5c6-8ec1403e308b?org_if_sml=11235"
              class="new-team-page-rectangle12"
            />
            <span onclick="getStandings()" class="new-team-pages-get-teams-buttontext"><span>Get Teams</span></span>
             
          </button>
        </div>
      </div>
    </div>

    <div id="standings"></div>    

    <script src="script.js"></script>

  </body>
</html>
