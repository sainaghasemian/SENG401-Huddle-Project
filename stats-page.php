<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    <link href="./stats-page.css" rel="stylesheet" />
    <span class="stats-page-text"><span>Stats</span></span>
    <!---GET STATS BUTTON--->
    <button class="stats-page-get-stats-button">
        <img
            alt="Rectangle126633"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/32875c77-5163-45b7-b5c6-8ec1403e308b?org_if_sml=11235"
            class="stats-page-rectangle12"
        />
        <span onclick="findTeamID()" class="stats-page-text19"><span>Get Stats</span></span>
    </button>
    
<!---CLEAR FILTERS BUTTON--->
    </button>
        <button class="stats-page-clear-filters-button" onclick="clearFilters()">
        <img alt="Rectangle12I744" src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/c39129d5-2966-43b5-9aeb-272375884d42?org_if_sml=11235" class="stats-page-rectangle121" />
        <span class="stats-page-text21"><span>Clear Filters</span></span>
    </button>
 
    <div class="stats-page-seasons-drop-down">
        <span class="stats-page-text25"><span>SEASON</span></span>
        <span class="stats-page-text27">
            
            <select id="season-select">
            <option value="">The Current Season</option>
            <option value="20222023">2022-23</option>
            </select>
        
        </span>
    </div>

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
    </div>

    <div class="stats-page-franchise-drop-down">
        <span class="stats-page-text35"><span>FRANCHISE</span></span>
        <span class="stats-page-text33">
            <select id="franchise-select">
            <option value="">All Franchises</option>  
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
        </span>
    </div>

    <div class="stats-page-position-drop-down">
        <span class="stats-page-text39"><span>POSITION</span></span>
        <span class="stats-page-text37">
            <select id="position-select">
            <option value="All Skaters">All Skaters</option>  
            <option value="C">Center</option>  
            <option value="L">Left Wing</option>  
            <option value="R">Right Wing</option>  
            <option value="D">Defense</option>  
            </select>
        </span>
    </div>

    <div class="stats-page-report-drop-down">
        <span class="stats-page-text43"><span>REPORT</span></span>
        <span class="stats-page-text41">
            <select id="position-select">
                <option value="">Summary</option>  
            </select>
        </span>
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

    
    <div id="playerStats"></div>

   
    


    <script>
        function clearFilters() {
        // Reset the values of the filters
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