<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API testing</title>
    

</head>

<body>
    Pick a team
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

    
    <!-- <button onclick="getStandings()">Standings</button> -->
    <br>
    <button onclick="findTeamID()">Player Stats</button>
    <!-- <button onClick="getStandings()">Get Standings</button> -->
   
    <div id="playerStats"></div>

    <script src="script.js"></script>
</body>

</html>