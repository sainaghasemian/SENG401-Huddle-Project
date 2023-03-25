<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API testing</title>
    <script src="script.js"></script>

    <title>StatsPage - Huddle</title>
    <meta property="og:title" content="StatsPage - Huddle" />
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
            alt="Separator1354"
            class="new-team-page-separator"
          />
          <img
            alt="TopBar4512"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/4d12000b-744e-4b7e-ac43-d7493314f2d9?org_if_sml=1887"
            class="new-team-page-top-bar"
          />
          <img
            alt="SearchIcon1351"
            src="public/playground_assets/searchicon7464-hrlj.svg"
            class="new-team-page-search-icon"
          />
          <img
            alt="AccountIcon1351"
            src="public/playground_assets/accounticon7464-cogs.svg"
            class="new-team-page-account-icon"
          />
          <span class="new-team-page-huddle-top-logo"><span>Huddle</span></span>
          <img
            alt="MenuIcon1205"
            src="public/playground_assets/menuicon1205-aai.svg"
            class="new-team-page-menu-icon"
          />
          <span class="new-team-page-teams-drop-down-title">TEAMS</span>
          <select class="new-team-page-teams-drop-down">
            <option value="">All Teams</option>
            <option value="anaheim-ducks">Anaheim Ducks</option>
                <option value="arizona-coyotes">Arizona Coyotes</option>
                <option value="boston-bruins">Boston Bruins</option>
                <option value="buffalo-sabres">Buffalo Sabres</option>
                <option value="calgary-flames">Calgary Flames</option>
                <option value="carolina-hurricanes">Carolina Hurricanes</option>
                <option value="chicago-blackhawks">Chicago Blackhawks</option>
                <option value="colorado-avalanche">Colorado Avalanche</option>
                <option value="columbus-blue-jackets">Columbus Blue Jackets</option>
                <option value="dallas-stars">Dallas Stars</option>
                <option value="detroit-red-wings">Detroit Red Wings</option>
                <option value="edmonton-oilers">Edmonton Oilers</option>
                <option value="florida-panthers">Florida Panthers</option>
                <option value="los-angeles-kings">Los Angeles Kings</option>
                <option value="minnesota-wild">Minnesota Wild</option>
                <option value="montreal-canadiens">Montreal Canadiens</option>
                <option value="nashville-predators">Nashville Predators</option>
                <option value="new-jersey-devils">New Jersey Devils</option>
                <option value="new-york-islanders">New York Islanders</option>
                <option value="new-york-rangers">New York Rangers</option>
                <option value="ottawa-senators">Ottawa Senators</option>
                <option value="philadelphia-flyers">Philadelphia Flyers</option>
                <option value="pittsburgh-penguins">Pittsburgh Penguins</option>
                <option value="san-jose-sharks">San Jose Sharks</option>
                <option value="seattle-kraken">Seattle Kraken</option>
                <option value="st-louis-blues">St. Louis Blues</option>
                <option value="tampa-bay-lightning">Tampa Bay Lightning</option>
                <option value="toronto-maple-leafs">Toronto Maple Leafs</option>
                <option value="vancouver-canucks">Vancouver Canucks</option>
                <option value="vegas-golden-knights">Vegas Golden Knights</option>
                <option value="washington-capitals">Washington Capitals</option>
                <option value="winnipeg-jets">Winnipeg Jets</option>
          </select>
          <table class="new-team-page-table"></span>
            <thead></thead>
              <tr>
                <th>Team </th>
                <th></th>
                <th>Standing</th>
                <th>GP</th>
                <th>W</th>
                <th>L</th>
                <th>OT</th>
                <th>Pts</th>
                <th></th>
              </tr>
            <tbody>
              <tr>
                <td><img src="ProfilePic.png" height="50" width="50" class="center"></td>
                <td>Team Name</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>Post Button</td>
              </tr>
              <tr>
                <td><img src="ProfilePic.png" height="50" width="50" class="center"></td>
                <td>Team Name</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>Post Button</td>
              </tr>
              <tr>
                <td><img src="ProfilePic.png" height="50" width="50" class="center"></td>
                <td>Team Name</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>Post Button</td>
              </tr>
              <tr>
                <td><img src="ProfilePic.png" height="50" width="50" class="center"></td>
                <td>Team Name</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>Post Button</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- API SCRIPT -->

    <script>
      
    </script>



  </body>
</html>
