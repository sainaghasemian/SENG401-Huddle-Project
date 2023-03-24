<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!---api--->
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
      <link href="./stats-page.css" rel="stylesheet" />

      <div class="stats-page-container">
        <div class="stats-page-full-page-template">
          <span class="stats-page-text"><span>Stats</span></span>
          <img
            alt="Separator6621"
            src="public/playground_assets/separator6621-2qg.svg"
            class="stats-page-separator"
          />
          <div class="stats-page-stats-table">
            <img
              alt="Rectangle116621"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/f72e1844-857c-4164-bfb0-f793a6624d58?org_if_sml=16034"
              class="stats-page-rectangle11"
            />
            <img
              alt="Rectangle106621"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/1ea7105d-cd1b-482d-ace4-6f5feb3c20f5?org_if_sml=11375"
              class="stats-page-rectangle10"
            />
            <img
              alt="Line197440"
              src="public/playground_assets/line197440-cfx.svg"
              class="stats-page-line19"
            />
            <img
              alt="Line46633"
              src="public/playground_assets/line46633-poyq.svg"
              class="stats-page-line4"
            />
            <img
              alt="Line136637"
              src="public/playground_assets/line136637-hwy.svg"
              class="stats-page-line13"
            />
            <span class="stats-page-text02"><span>Player</span></span>
            <span class="stats-page-text04"><span>Season</span></span>
            <img
              alt="Line146639"
              src="public/playground_assets/line146639-vplr.svg"
              class="stats-page-line14"
            />
            <img
              alt="Line167439"
              src="public/playground_assets/line167439-825q.svg"
              class="stats-page-line16"
            />
            <img
              alt="Line187440"
              src="public/playground_assets/line187440-vlwg.svg"
              class="stats-page-line18"
            />
            <img
              alt="Line207440"
              src="public/playground_assets/line207440-3du.svg"
              class="stats-page-line20"
            />
            <img
              alt="Line217440"
              src="public/playground_assets/line217440-s3nm.svg"
              class="stats-page-line21"
            />
            <img
              alt="Line237441"
              src="public/playground_assets/line237441-xusm.svg"
              class="stats-page-line23"
            />
            <span class="stats-page-text06"><span>Team</span></span>
            <span class="stats-page-text08"><span>Position</span></span>
            <span class="stats-page-text10"><span>PIM</span></span>
            <span class="stats-page-text12"><span>GP</span></span>
            <span class="stats-page-text14">G</span>
            <span class="stats-page-text15">A</span>
            <span class="stats-page-text16">P</span>
            <span class="stats-page-text17"><span>+/-</span></span>
          </div>
          <div class="stats-page-stats-rows">
            <img
              alt="Line26621"
              src="public/playground_assets/line26621-4ax.svg"
              class="stats-page-line2"
            />
            <img
              alt="Line36621"
              src="public/playground_assets/line36621-9pxqo.svg"
              class="stats-page-line3"
            />
            <img
              alt="Line56634"
              src="public/playground_assets/line56634-242w.svg"
              class="stats-page-line5"
            />
            <img
              alt="Line66634"
              src="public/playground_assets/line66634-u85.svg"
              class="stats-page-line6"
            />
            <img
              alt="Line76634"
              src="public/playground_assets/line76634-e5rr.svg"
              class="stats-page-line7"
            />
            <img
              alt="Line86634"
              src="public/playground_assets/line86634-4u3h.svg"
              class="stats-page-line8"
            />
            <img
              alt="Line96635"
              src="public/playground_assets/line96635-5lk.svg"
              class="stats-page-line9"
            />
            <img
              alt="Line106635"
              src="public/playground_assets/line106635-w7y6.svg"
              class="stats-page-line10"
            />
            <img
              alt="Line116635"
              src="public/playground_assets/line116635-a12.svg"
              class="stats-page-line11"
            />
            <img
              alt="Line126635"
              src="public/playground_assets/line126635-uy3m.svg"
              class="stats-page-line12"
            />
          </div>
          <button class="stats-page-get-stats-button">
            <img
              alt="Rectangle126633"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/32875c77-5163-45b7-b5c6-8ec1403e308b?org_if_sml=11235"
              class="stats-page-rectangle12"
            />
            <span class="stats-page-text19"><span>Get Stats</span></span>
          </button>
          <button class="stats-page-clear-filters-button">
            <img
              alt="Rectangle12I744"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/c39129d5-2966-43b5-9aeb-272375884d42?org_if_sml=11235"
              class="stats-page-rectangle121"
            />
            <span class="stats-page-text21"><span>Clear Filters</span></span>
          </button>
          <div class="stats-page-search-players-bar">
            <img
              alt="SearchPlayerIcon7445"
              src="public/playground_assets/searchplayericon7445-39gc.svg"
              class="stats-page-search-player-icon"
            />
            <span class="stats-page-text23"><span>Search Players</span></span>
          </div>
          
          <div class="stats-page-seasons-drop-down">
            <span class="stats-page-text25"><span>SEASONS</span></span>
            <span class="stats-page-text27">
             
              <select id="season-select">
                <option value="">Select a Year</option>  
              </select>

            </span>
            <!--- TAKING OUT THE BOX MADE THE DROP DOWN WORK
            <img
              alt="Rectangle137441"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/a0701e45-30f3-405c-9ab8-d0bcae53e432?org_if_sml=1123"
              class="stats-page-rectangle13"
            />
            
            <img
              alt="Polygon17445"
              src="public/playground_assets/polygon17445-nn6d.svg"
              class="stats-page-polygon1"
            />--->
          </div>
          <script>
            // Get the current year
            var currentYear = new Date().getFullYear();

            // Populate the dropdown with options for each year
            var select = document.getElementById("season-select");
            for (var i = currentYear; i >= 2000; i--) {
              var option = document.createElement("option");
              option.value = i + "-" + (i+1).toString().substring(2);
              option.text = i + "-" + (i+1).toString().substring(2);
              select.add(option);
            }

            // Add change event listener to the select element
            var dropdown = document.getElementById("season-select");
            dropdown.addEventListener("change", function() {
              var selectedValue = dropdown.value;
              console.log(`Selected year: ${selectedValue}`);
            });
          </script>
          
          <div class="stats-page-game-type-drop-down">
            <span class="stats-page-text31"><span>GAME TYPE</span></span>
            <span class="stats-page-text29">
              <select id="gametype-select">
                  <option value="">Select a Game Type</option>  
                  <option value="regular-season">Regular Season</option>
                  <option value="pre-season">Pre Season</option>
                  <option value="playoffs">Playoffs</option>
              </select>
            </span>
            
            <!--- TAKING OUT THE BOX MADE THE DROP DOWN WORK
            <img
              alt="Rectangle147441"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/6c92c04b-2e03-499a-ba6b-e6f1a29f3843?org_if_sml=1123"
              class="stats-page-rectangle14"
            />
            <img
              alt="Polygon27445"
              src="public/playground_assets/polygon27445-lncw.svg"
              class="stats-page-polygon2"
            />
            --->
          </div>
          <script>
            // Add change event listener to the select element
            const gameTypeSelect = document.getElementById("gametype-select");

            gameTypeSelect.addEventListener("change", function() {
              const selectedValue = gameTypeSelect.value;
              console.log(`Selected game type: ${selectedValue}`);
            });
          ></script>

          <div class="stats-page-franchise-drop-down">
            <span class="stats-page-text35"><span>FRANCHISE</span></span>
            <span class="stats-page-text33">
              <select id="franchise-select">
                <option value="">All Franchises</option>  
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
              
            </span>
            <!---
            <img
              alt="Rectangle157442"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/84eb97ec-399d-4297-a3ec-cc431647232f?org_if_sml=1123"
              class="stats-page-rectangle15"
            />
            <img
              alt="Polygon37445"
              src="public/playground_assets/polygon37445-xlnd.svg"
              class="stats-page-polygon3"
            />
            --->
          </div>
          <script>
            // Add change event listener to the select element
            const franchiseTypeSelect = document.getElementById("franchise-select");

            franchiseTypeSelect.addEventListener("change", function() {
              const selectedValue = franchiseTypeSelect.value;
              console.log(`Selected franchise type: ${selectedValue}`);
            });
            
          ></script>


          <div class="stats-page-position-drop-down">
            <span class="stats-page-text39"><span>POSITION</span></span>
            <span class="stats-page-text37">
              <select id="position-select">
                <option value="">All Skaters</option>  
                <option value="center-position">Center</option>  
                <option value="left-wing">Left Wing</option>  
                <option value="right-wing">Right Wing</option>  
                <option value="left-defense">Left Defense</option>  
                <option value="right-defense">Right Defense</option>  
                <option value="goaltenders-position">Goaltenders</option>  
                </select>
            </span>
            <!---
            <img
              alt="Rectangle167442"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/e03cc5ed-fcc3-4695-a931-37f268ea4073?org_if_sml=1123"
              class="stats-page-rectangle16"
            />
            <img
              alt="Polygon47445"
              src="public/playground_assets/polygon47445-8g1e.svg"
              class="stats-page-polygon4"
            />
            --->
          </div>
          <script>
            // Add change event listener to the select element
            const positionTypeSelect = document.getElementById("position-select");

            positionTypeSelect.addEventListener("change", function() {
              const selectedValue = positionTypeSelect.value;
              console.log(`Selected position type: ${selectedValue}`);
            });
          ></script>

          <div class="stats-page-report-drop-down">
            <span class="stats-page-text43"><span>REPORT</span></span>
            <span class="stats-page-text41">
              <select id="position-select">
                  <option value="">Summary</option>  
              </select>
            </span>
            <!---
            <img
              alt="Rectangle177443"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/4c8973ae-93e9-46ca-b685-4c376bcb4e29?org_if_sml=1123"
              class="stats-page-rectangle17"
            />
            <img
              alt="Polygon57445"
              src="public/playground_assets/polygon57445-wvuc.svg"
              class="stats-page-polygon5"
            />
            --->
          </div>
          <img
            alt="TopBar7469"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/5558e828-1413-409e-a900-f1b5f91841f1?org_if_sml=1886"
            class="stats-page-top-bar"
          />
          <img
            alt="SearchIcon7469"
            src="public/playground_assets/searchicon7469-94j5.svg"
            class="stats-page-search-icon"
          />
          <a href="home-account-page.php" class="stats-page-navlink">
            <img
              alt="AccountIcon7469"
              src="public/playground_assets/accounticon7469-slwj.svg"
              class="stats-page-account-icon"
            />
          </a>
          <span class="stats-page-text45"><span>Huddle</span></span>
          <img
            alt="MenuIcon1206"
            src="public/playground_assets/menuicon1206-xy5.svg"
            class="stats-page-menu-icon"
          />
        </div>
      </div>
    </div>
    <script>

      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
