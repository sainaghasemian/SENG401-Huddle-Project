<?php
    include_once("databaseQueries.php");
    databaseQueries::sessionStart();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Stats Page - Huddle</title>
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
        margin: 0;
		    padding: 0;
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
    <link href="./stats-page.css" rel="stylesheet" />
    <span class="stats-page-text"><span>Player Stats</span></span>
    <!-- <img
        src="public/playground_assets/separator1354-6i6.svg"
        alt="Separator1354"
        class="stats-page-separator"
    /> -->
    <img
        alt="TopBar4512"
        src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/4d12000b-744e-4b7e-ac43-d7493314f2d9?org_if_sml=1887"
        class="stats-page-top-bar"
    />

    <select class="menu-drop-down" id="go-to-pg">
      <option value="">Menu</option>
      <option value="./index.php">Home Page</option>
      <option value="./schedule-page.php">Schedule Page</option>
      <option value="./stats-page.php">Stats Page</option>
      <option value="./new-team-page.php">Team Page</option>
    </select>

    <script> 
      const menuIcon = document.querySelector('.menu-drop-down');
      const selectElement = document.querySelector('#go-to-pg');

      menuIcon.addEventListener('change', () => {
        const selectedValue = selectElement.value;
        if (selectedValue !== '') {
          window.location.href = selectedValue;
        }
      });
    </script>

    <?php
             if (databaseQueries::checkAuthentication()){
              echo "<form action='post-page.php' method='get'>
                      <button class='stats-page-post-icon' type='submit'>
                        <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                          Post
                        </span>
                      </button>
                    </form>";
                    echo "<form action='login-page.php' method='get'>
                    <button class='stats-page-log-icon' type='submit'>
                    <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                      Log Out
                    </span>
                    </button>
                </form>";
            } else {
              echo "<form action='login-page.php' method='get'>
                <button class='stats-page-log-icon' type='submit'>
                <span style='font-family: Work Sans; font-style: ExtraBold; font-weight: 800; font-size: 21px; color: rgb(32,92,252);'>
                  Log In
                </span>
                </button>
              </form>";
            }
          ?>

    <span class="stats-page-huddle-top-logo"><span>Huddle</span></span>

    <!---GET STATS BUTTON--->
    <button class="stats-page-get-stats-button">
        <img
            alt="Rectangle126633"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/32875c77-5163-45b7-b5c6-8ec1403e308b?org_if_sml=11235"
            class="stats-page-rectangle12"
        />
        <span onclick="findTeamID(document.querySelector(`#franchise-select`).value, document.querySelector('#position-select').value, document.querySelector('#gametype-select').value)" class="stats-page-text19"><span>Get Stats</span></span>
    </button>
    
    <!---CLEAR FILTERS BUTTON--->
    </button>
        <button class="stats-page-clear-filters-button" onclick="clearFilters()">
        <img alt="Rectangle12I744" src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/c39129d5-2966-43b5-9aeb-272375884d42?org_if_sml=11235" class="stats-page-rectangle121" />
        <span class="stats-page-text21"><span>Clear Filters</span></span>
    </button>
 
    <span class="stats-page-text25"><span>SEASON</span></span>
    <select class = "stats-page-seasons-drop-down" id="season-select">
            <option value="">The Current Season</option>
            <option value="20222023">2022-23</option>
    </select>

    <span class="stats-page-text31"><span>GAME TYPE</span></span>
    <select class = "stats-page-game-type-drop-down" id="gametype-select">
        <option value="">Select a Game Type</option>  
        <option value="statsSingleSeason">Regular Season</option>
        <option value="statsSingleSeasonPlayoffs">Playoffs</option>
    </select>

    <span class="stats-page-text35"><span>FRANCHISE</span></span>
    <select class = "stats-page-franchise-drop-down" id="franchise-select">
        <option value="All">All Franchises</option>  
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
        <option value="Montréal Canadiens">Montréal Canadiens</option>
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

    <span class="stats-page-text39"><span>POSITION</span></span>
    <select class = "stats-page-position-drop-down" id="position-select">
        <option value="All Skaters">All Skaters</option>  
        <option value="C">Center</option>  
        <option value="L">Left Wing</option>  
        <option value="R">Right Wing</option>  
        <option value="D">Defense</option>  
    </select>

    <span class="stats-page-text43"><span>REPORT</span></span>
    <select class="stats-page-report-drop-down" id="report-select">
                <option value="">Summary</option>  
    </select>
    
    
    <div id="playerStats"></div>


    <script>
        // Reset the values of the filters
        function clearFilters() 
        {
        // Clear the season drop down
        document.getElementById("season-select").selectedIndex = 0;
        // Clear the franchise drop down
        document.getElementById("franchise-select").selectedIndex = 0;
        // Clear the year drop down
        document.getElementById("gametype-select").selectedIndex = 0;
        // Clear the position drop down
        document.getElementById("position-select").selectedIndex = 0;
        // Reset the report drop down to its original preset
        document.getElementById("report-select").selectedIndex = 0;
        // Refresh the page to apply the filter changes
        location.reload();
        }
    </script>

    <script src="script.js"></script>
</body>

</html>