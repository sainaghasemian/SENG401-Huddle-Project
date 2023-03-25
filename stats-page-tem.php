<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>

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
      <div>
        <div>
          
          <!---
      <div class="stats-page-container">
        <div class="stats-page-full-page-template">--->
          
          <span class="stats-page-text"><span>Stats</span></span>
          <!---
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
          --->
          
          <!---GET STATS BUTTON--->
          <button class="stats-page-get-stats-button">
            <img
              alt="Rectangle126633"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/dac7993b-0fcc-4108-a101-909773a42c84/32875c77-5163-45b7-b5c6-8ec1403e308b?org_if_sml=11235"
              class="stats-page-rectangle12"
            />
            <span onclick="findTeamID()" class="stats-page-text19"><span>Get Stats</span></span>
            <div id="playerStats"></div>
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
                <option value="20222023">2022-23</option>
                <option value="20212022">2021-22</option>
                <option value="2021">2021</option>
                <option value="20192020">2019-20</option>
                <option value="20182019">2018-19</option>
                <option value="20172018">2017-18</option>
                <option value="20162017">2016-17</option>
                <option value="20152016">2015-16</option>
                <option value="20142015">2014-15</option>
                <option value="20132014">2013-14</option>
                <option value="20122013">2012-13</option>
                <option value="20112012">2011-12</option>
                <option value="20102011">2010-11</option>
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
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
    <!---BUTTON SCRIPTS--->
    
    <!---API FUNCTIONALITY--->
    <script>
      // this is tommy's account please do not leak this info or it will charge my credit card if i go over the limit
      const op = {
          method: 'GET',
          headers: {
              'X-RapidAPI-Key': '96f2faa6a9mshc33e80e95c0a95fp1e26ebjsn2c028e1d7bef',
              'X-RapidAPI-Host': 'api-hockey.p.rapidapi.com'
          }
      };
      
      function getGame() {
          // alert(1);
          let homeTeam;  // home team name
          let homeLogo;   // url for home team logo
          let awayTeam; // away team name
          let awayLogo;   // url for away team logo
          let gameDate; // date of the game
          let homeScore; // score of home team
          let awayScore; // score of away team
          let gameStatus;   // status of the game (what period)
          let startGameTime;// start time of game (currently in MST)

          let userInput = document.querySelector("#userInput").value.toLowerCase();
          console.log(userInput);
          document.getElementById("div").innerHTML = userInput;
          if (userInput === "") {
              fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', op)
                  .then((data) => {
                      // console.log(data);   // this is json format

                      return data.json(); // convert to object 
                  })
                  .then((objectData) => {
                      // console.log(objectData);
                      // length of array that contains games 
                      let objectLength = objectData.response.length;
                      let output = "";

                      // getting current date
                      let today = new Date();
                      var dd = String(today.getDate()).padStart(2, '0');
                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                      var yyyy = today.getFullYear();
                      // printing out today's date in rapidApi format
                      let currDate = yyyy + "-" + mm + "-" + dd;
                      // output += `<p> ${currDate}</p>`



                      // loop that goes through response array and find games that are being played today

                      for (let i = 0; i < objectLength; i++) {
                          if (objectData.response[i].date.includes(currDate)) {
                              console.log(objectData.response[i]);
                              homeLogo = objectData.response[i].teams.home.logo;
                              awayLogo = objectData.response[i].teams.away.logo;

                              awayTeam = objectData.response[i].teams.away.name;  // away team name
                              homeTeam = objectData.response[i].teams.home.name;  // home team name
                              gameDate = objectData.response[i].date; // date of the game
                              homeScore = objectData.response[i].scores.home; // score of home team
                              awayScore = objectData.response[i].scores.away; // score of away team
                              gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                              startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                              if (homeTeam.toLowerCase().includes(userInput) || awayTeam.toLowerCase().includes(userInput)) {
                                  if (homeScore === null) {
                                      homeScore = 0;
                                      awayScore = 0;
                                      gameStatus = "Game has not started."
                                  }
                                  output += `<p> ${awayTeam} @ ${homeTeam} </p>`;
                                  output += `<ul>
                                              <img src=${homeLogo}>
                                              <img src=${awayLogo}>
                                              <li> Game Start Time: ${startGameTime} MST </li>
                                              <li> ${homeTeam} : ${homeScore} </li>
                                              <li> ${awayTeam} : ${awayScore} </li>
                                              <li> Game Status: ${gameStatus} </li>
                                          </ul>`;
                                  document.getElementById("div").innerHTML = output;
                              }

                          }
                      }

                  })
                  .catch(error => console.log(error));


          } else {

              fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', op)
                  .then((data) => {
                      // console.log(data);   // this is json format

                      return data.json(); // convert to object 
                  })
                  .then((objectData) => {
                      console.log(objectData);
                      // length of array that contains games 
                      let objectLength = objectData.response.length;
                      let output;

                      // getting current date
                      let today = new Date();
                      var dd = String(today.getDate()).padStart(2, '0');
                      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                      var yyyy = today.getFullYear();
                      // printing out today's date in rapidApi format
                      let currDate = yyyy + "-" + mm + "-" + dd;
                      // output += `<p> ${currDate}</p>`



                      // loop that goes through response array and find games that are being played today

                      for (let i = 0; i < objectLength; i++) {
                          if (objectData.response[i].date.includes(currDate)) {
                              homeLogo = objectData.response[i].teams.home.logo;
                              awayLogo = objectData.response[i].teams.away.logo;
                              awayTeam = objectData.response[i].teams.away.name;  // away team name
                              homeTeam = objectData.response[i].teams.home.name;  // home team name
                              gameDate = objectData.response[i].date; // date of the game
                              homeScore = objectData.response[i].scores.home; // score of home team
                              awayScore = objectData.response[i].scores.away; // score of away team
                              gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                              startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                              if (homeTeam.toLowerCase().includes(userInput) || awayTeam.toLowerCase().includes(userInput)) {
                                  if (homeScore === null) {
                                      homeScore = 0;
                                      awayScore = 0;
                                      gameStatus = "Game has not started."
                                  }
                                  output += `<p> ${awayTeam} @ ${homeTeam} </p>`;
                                  output += `<ul>
                                              <img src=${homeLogo}>
                                              <img src=${awayLogo}>
                                              <li> Game Start Time: ${startGameTime} MST </li>
                                              <li> ${homeTeam} : ${homeScore} </li>
                                              <li> ${awayTeam} : ${awayScore} </li>
                                              <li> Game Status: ${gameStatus} </li>
                                          </ul>`;
                                  document.getElementById("div").innerHTML = output;
                              }

                          }
                      }

                      if (output === "") {
                          output += `<p> That team does not play today</p>`
                          document.getElementById("div").innerHTML = output;
                      }
                  })
                  .catch(error => console.log(error));



          }






          // can add date to make it easier
          // 'https://api-hockey.p.rapidapi.com/games/?date=2023-02-27&league=57&season=2022&timezone=America%2FEdmonton'

      }

      function getStandings() {

          fetch('https://api-hockey.p.rapidapi.com/standings/?league=57&season=2022', op)
              .then((data) => {
                  // console.log(data);   // this is json format
                  return data.json(); // convert to object 
              })
              .then((objectData) => {
                  console.log(objectData);
                  // length of array that contains games 
                  let objectLength = objectData.response.length;
                  let output;

                  let teamName;
                  let gamesPlayed;
                  let numWins;
                  let numLosses;
                  let numOTLosses;
                  let points;
                  // loop that goes through response array and find games that are being played today
                  // western conference loop

                  for (let i = 0; i < 16; i++) {
                      teamName = objectData.response[0][i].team.name;
                      gamesPlayed = objectData.response[0][i].games.played;
                      numWins = objectData.response[0][i].games.win.total + objectData.response[0][i].games.win_overtime.total;
                      numLosses = objectData.response[0][i].games.lose.total;
                      numOTLosses = objectData.response[0][i].games.lose_overtime.total;
                      points = objectData.response[0][i].points;
                      output += `<p> ${teamName} </p>`;
                      output += `<ul>
                                              <li> Games Played: ${gamesPlayed} </li>
                                              <li> Wins: ${numWins} </li>
                                              <li> Losses: ${numLosses} </li>
                                              <li> OT Losses ${numOTLosses} </li>
                                              <li> Points ${points} </li>
                                          </ul>`;
                      document.getElementById("standings").innerHTML = output;
                  }
              })
              .catch(error => console.log(error));
          // output += '<p class="> Team Name  games played       wins          lossses `   
      }




      // finding the team ID using user input team name with stats API

      function findTeamID() {
          
          let userInput = document.querySelector("#franchise-select").value;
          console.log(userInput);
          if (userInput === "") {
              console.log("user input was empty");
              return -1;
          }
          fetch('https://statsapi.web.nhl.com/api/v1/teams')
              .then((data) => {
                  return data.json(); // convert to object 
              })
              .then((objectData) => {
                  console.log(objectData);
                  // console.log(objectData.teams[0].name);

                  let objectLength = objectData.teams.length;
                  // let playerIDs = [];
                  for (let i = 0; i < objectLength - 1; i++) {  // loop that runs through list of teams to find ID
                      if (objectData.teams[i].name.toLowerCase().includes(userInput)) {
                          console.log(`Full team name: ${objectData.teams[i].name}, ID: ${objectData.teams[i].id} `);
                          getRoster(objectData.teams[i].id);

                          break;

                      }
                  }

              })
              .catch(error => console.log(error));

      }

      function getRoster(teamID) {
          console.log(teamID);
          let players = [];
          fetch(`https://statsapi.web.nhl.com/api/v1/teams/${teamID}/roster`)
              .then((data) => {
                  return data.json(); // convert to object 
              })
              .then((objectData) => {
                  console.log("currently in getRoster()");
                  console.log(objectData);
                  let rosterLength = objectData.roster.length;
                  console.log(`roster length is ${rosterLength}`)

                  // let player = objectData.roster[0].person.id;
                  for (let i = 0; i < rosterLength; i++) {
                      players.push(
                          {
                              id: objectData.roster[i].person.id,
                              fullName: objectData.roster[i].person.fullName,
                              position: objectData.roster[i].position.code
                          }

                      )
                  }
                  // console.log(objectData.roster[i].person);
                  getPlayerStats(players);

              })
              .catch(error => console.log(error));
      }

      function getPlayerStats(players) {
          console.log("currently inside of getplayerstats");
          let seasonSelect = document.querySelector("#season-select").value;  // will change this to a user input after
          console.log(players);

          let output;

          let playerName;
          let position;
          let gamesPlayed;
          let goals;
          let assist;
          let points;
          let plusMinus;
          let penaltyMinutes;



          for (let i = 0; i < players.length; i++) {
              fetch(`https://statsapi.web.nhl.com/api/v1/people/${players[i].id}/stats?stats=statsSingleSeason&season=${seasonSelect}`)
                  .then((data) => {
                      return data.json(); // convert to object 
                  })
                  .then((objectData) => {
                      console.log(objectData);
                      playerName = players[i].fullName;
                      position = players[i].position;
                      gamesPlayed = objectData.stats[0].splits[0].stat.games;
                      if(position !== "G"){
                          goals = objectData.stats[0].splits[0].stat.goals;
                          assist = objectData.stats[0].splits[0].stat.assists;
                          points = objectData.stats[0].splits[0].stat.points;
                          plusMinus = objectData.stats[0].splits[0].stat.plusMinus;
                          penaltyMinutes = objectData.stats[0].splits[0].stat.pim;
                
                            output += `<table>
                                  <tr>
                                      <th>Player</th>
                                      <th>Season</th>
                                      <th>Team</th>
                                      <th>Position</th>
                                      <th>Games Played</th>
                                      <th>Goals</th>
                                      <th>Points</th>
                                      <th>+/-</th>
                                      <th>PIM</th>
                                  </tr>
                                  <tr>
                                      
                                      <td>${playerName}</td>
                                      
                                      <td>${position}</td>
                                      <td>${gamesPlayed}</td>
                                      <td>${goals}</td>
                                      <td>${points}</td>
                                      <td>${plusMinus}</td>
                                      <td>${penaltyMinutes}</td>
                                  </tr>
                              </table>`;


                      document.getElementById("root").innerHTML = output;  // return back to dom element in HTML
                      }

                      // going to need one for goalie

                  })
                  .catch(error => console.log(error));

          }
      }

      // this is the final version

      // league number is 57 for NHL
      // season is 2022 for 2022-2023 season



          // standing try to get division
          // games played
          // wins
          // loses

          // players
          // goals
          // assits
          //ppg
          // +/-
          // PIM
          //Pos
          // games played

    </script>
  
    

  </body>
 
</html>
