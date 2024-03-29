// import options from './node_modules/options' 
// this is tommy's account please do not leak this info 


function getOptions(apiKey){
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': decrypt(apiKey, 5),
            'X-RapidAPI-Host': 'api-hockey.p.rapidapi.com'
        }
    };
    return options;
}

function encrypt(str, key) {
    let result = "";
    for (let i = 0; i < str.length; i++) {
      let c = str.charCodeAt(i);
      if (c >= 65 && c <= 90) {
        result += String.fromCharCode((c - 65 + key) % 26 + 65);
      } else if (c >= 97 && c <= 122) {
        result += String.fromCharCode((c - 97 + key) % 26 + 97);
      } else {
        result += str.charAt(i);
      }
    }
    return result;
  }

  function decrypt(str, key) {
    let result = "";
    for (let i = 0; i < str.length; i++) {
      let c = str.charCodeAt(i);
      if (c >= 65 && c <= 90) {
        result += String.fromCharCode((c - 65 - key + 26) % 26 + 65);
      } else if (c >= 97 && c <= 122) {
        result += String.fromCharCode((c - 97 - key + 26) % 26 + 97);
      } else {
        result += str.charAt(i);
      }
    }
    return result;
  }

async function getGame(franchise, date, apiKey) {
    let homeTeam;  // home team name
    let homeLogo;   // url for home team logo
    let awayTeam; // away team name
    let awayLogo;   // url for away team logo
    let gameDate; // date of the game
    let homeScore; // score of home team
    let awayScore; // score of away team
    let gameStatus;   // status of the game (what period)
    let startGameTime;// start time of game (currently in MST)

    userInput = franchise;
    userDate = date;

    if (userDate === "all-upcoming") {

        return allUpcomingGames(userInput, apiKey);

    }

    // checking all franchises
    if (userInput === "All") {
        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', getOptions(apiKey))
            .then((data) => {
                return data.json(); // convert to object 
            })
            .then((objectData) => {
                // length of array that contains games 
                let objectLength = objectData.response.length;
                let output = "";

                // "yyyy-mm-dd"
                // output += `<p> ${currDate}</p>`
                // findings starting point aka games from today
                let firstGameIndex = 0;
                for (let i = 0; i < objectLength; i++) {
                    if (objectData.response[i].date.includes(userDate)) {
                        firstGameIndex = i;
                        break;
                    }
                }



                // loop that goes through response array and find games that are being played today
                for (let i = firstGameIndex; i < objectLength; i++) {
                    homeLogo = objectData.response[i].teams.home.logo;
                    awayLogo = objectData.response[i].teams.away.logo;

                    awayTeam = objectData.response[i].teams.away.name;  // away team name
                    homeTeam = objectData.response[i].teams.home.name;  // home team name
                    gameDate = objectData.response[i].date.slice(0, 10); // date of the game
                    homeScore = objectData.response[i].scores.home; // score of home team
                    awayScore = objectData.response[i].scores.away; // score of away team
                    gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                    startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                    // if (homeTeam === userInput || awayTeam === userInput) {
                    if (homeScore === null) {
                        homeScore = 0;
                        awayScore = 0;
                        gameStatus = "Game has not started."
                    }
                    output += `<div class="blue-container">
                    <div class="team-names">
                        <p> ${awayTeam} @ ${homeTeam} </p>
                        <div class="logos">
                            <img src=${homeLogo}>
                            <img src=${awayLogo}>
                        </div>
                    </div>
                    <ul>
                        <li> Game Date: ${gameDate} </li>
                        <li> Game Start Time: ${startGameTime} MST </li>
                        <li> ${homeTeam} : ${homeScore} </li>
                        <li> ${awayTeam} : ${awayScore} </li>
                        <li> Game Status: ${gameStatus} </li>
                    </ul>
                </div>`;
                    document.getElementById("div").innerHTML = output;

                    // }
                }
                return output;

            })
            .catch(error => console.log(error));

        // checking for specific franchise
    } else {

        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', getOptions(apiKey))
            .then((data) => {

                return data.json(); // convert to object 
            })
            .then((objectData) => {
                // length of array that contains games 
                let objectLength = objectData.response.length;
                let output = "";

                // "yyyy-mm-dd"
                // output += `<p> ${currDate}</p>`
                // findings starting point aka games from today
                let firstGameIndex = 0;
                for (let i = 0; i < objectLength; i++) {
                    if (objectData.response[i].date.includes(userDate)) {
                        firstGameIndex = i;
                        break;
                    }
                }


                for (let i = firstGameIndex; i < objectLength; i++) {
                    awayTeam = objectData.response[i].teams.away.name;  // away team name
                    homeTeam = objectData.response[i].teams.home.name;
                    if (awayTeam === userInput || homeTeam === userInput) {
                        homeLogo = objectData.response[i].teams.home.logo;
                        awayLogo = objectData.response[i].teams.away.logo;
                        gameDate = objectData.response[i].date.slice(0, 10); // date of the game
                        homeScore = objectData.response[i].scores.home; // score of home team
                        awayScore = objectData.response[i].scores.away; // score of away team
                        gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                        startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                        if (homeTeam === userInput || awayTeam === userInput) {
                            if (homeScore === null) {
                                homeScore = 0;
                                awayScore = 0;
                                gameStatus = "Game has not started."
                            }
                            output += `<div class="blue-container">
                                <div class="team-names">
                                    <p> ${awayTeam} @ ${homeTeam} </p>
                                    <div class="logos">
                                        <img src=${homeLogo}>
                                        <img src=${awayLogo}>
                                    </div>
                                </div>
                                <ul>
                                    <li> Game Date: ${gameDate} </li>
                                    <li> Game Start Time: ${startGameTime} MST </li>
                                    <li> ${homeTeam} : ${homeScore} </li>
                                    <li> ${awayTeam} : ${awayScore} </li>
                                    <li> Game Status: ${gameStatus} </li>
                                </ul>
                            </div>`;
                            document.getElementById("div").innerHTML = output;
                        }
                    }
                }


                if (output === "") {
                    output += `<div class="team-not-playing"> 
                        <p> The Team You Selected Does Not Play Within the Time Frame Selected.</p>
                        </div>`;
                    document.getElementById("div").innerHTML = output;
                }
                return output;
            })
            .catch(error => console.log(error));

    }

    // can add date to make it easier
    // 'https://api-hockey.p.rapidapi.com/games/?date=2023-02-27&league=57&season=2022&timezone=America%2FEdmonton'

}


async function getStandings(userTeam, apiKey) {
    selectedTeam = userTeam;
    fetch('https://api-hockey.p.rapidapi.com/standings/?league=57&season=2022', getOptions(apiKey))
        .then((data) => {
            return data.json(); // convert to object 
        })
        .then((objectData) => {
            // length of array that contains games 
            let objectLength = objectData.response.length;
            let output = `<table class="new-team-page-table">
                            <thead>
                                <tr>
                                    <th>Team </th>
                                    <th></th>
                                    <th>GP</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th>OT</th>
                                    <th>Pts</th>
                                </tr>
                            </thead>
                            <tbody>`;
            let teamLogo;
            let teamName;
            let gamesPlayed;
            let numWins;
            let numLosses;
            let numOTLosses;
            let points;
            // loop that goes through response array and find games that are being played today
            // western conference loop
            if (selectedTeam === "") {

                for (let i = 32; i < 64; i++) {
                    teamLogo = objectData.response[0][i].team.logo;
                    teamName = objectData.response[0][i].team.name;
                    gamesPlayed = objectData.response[0][i].games.played;
                    numWins = objectData.response[0][i].games.win.total + objectData.response[0][i].games.win_overtime.total;
                    numLosses = objectData.response[0][i].games.lose.total;
                    numOTLosses = objectData.response[0][i].games.lose_overtime.total;
                    points = objectData.response[0][i].points;
                    output += `
                                <tr>
                                    <td><img src= ${teamLogo} height="50" width="50"></td>
                                    <td>${teamName}</td>
                                    <td>${gamesPlayed}</td>
                                    <td>${numWins}</td>
                                    <td>${numLosses}</td>
                                    <td>${numOTLosses}</td>
                                    <td>${points}</td>
                                <tr>`;
                    document.getElementById("standings").innerHTML = output;
                }
                output += `</tbody></table>`;
                return output;

            } else {
                for (let i = 0; i < 32; i++) {
                    teamLogo = objectData.response[0][i].team.logo;
                    teamName = objectData.response[0][i].team.name;
                    if (selectedTeam === teamName) {

                        gamesPlayed = objectData.response[0][i].games.played;
                        numWins = objectData.response[0][i].games.win.total + objectData.response[0][i].games.win_overtime.total;
                        numLosses = objectData.response[0][i].games.lose.total;
                        numOTLosses = objectData.response[0][i].games.lose_overtime.total;
                        points = objectData.response[0][i].points;
                        output += `
                                    <tr>
                                        <td><img src= ${teamLogo} height="50" width="50"></td>
                                        <td>${teamName}</td>
                                        <td>${gamesPlayed}</td>
                                        <td>${numWins}</td>
                                        <td>${numLosses}</td>
                                        <td>${numOTLosses}</td>
                                        <td>${points}</td>
                                    <tr>
                                </tbody>
                                </table>`;
                        document.getElementById("standings").innerHTML = output;
                        return output;

                    }
                }
            }
        })
        .catch(error => console.log(error));
    // output += '<p class="> Team Name  games played       wins          lossses `   
}




// finding the team ID using user input team name with stats API
async function findTeamID(userTeam, userPosition, userPlayoff) {
    let userInput = userTeam;
    // let userInput = document.querySelector("#franchise-select").value;

    if (userInput === "") {
        return -1;
    }
    fetch('https://statsapi.web.nhl.com/api/v1/teams')
        .then((data) => {
            return data.json(); // convert to object 
        })
        .then((objectData) => {
            let objectLength = objectData.teams.length;
            let teamIDs = [];
            for (let i = 0; i < objectLength - 1; i++) {  // loop that runs through list of teams to find ID
                if (userInput === "All") {
                    teamIDs.push(objectData.teams[i].id);

                }
                else if (objectData.teams[i].name === userInput) {
                    teamIDs.push(objectData.teams[i].id);

                }
            }


            getRoster(teamIDs, userPosition, userPlayoff);
            return teamIDs;
        })
        .catch(error => console.log(error));
}

async function getRoster(teamID, userPosition, userPlayoff) {
    let players = [];
    return Promise.all(teamID.map(team => {
        return fetch(`https://statsapi.web.nhl.com/api/v1/teams/${team}/roster`)
            .then((data) => {
                return data.json(); // convert to object 
            })
            .then((objectData) => {
                let rosterLength = objectData.roster.length;

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

            })
            .catch(error => console.log(error));
    })).then(() => {
        getPlayerStats(players, userPosition, userPlayoff);
        return players;
    })
}


async function getPlayerStats(players, userPosition, userPlayoff) {
    let season = 20222023;  // will change this to a user input after
    let positionSelect = userPosition;
    let playoffSelect = userPlayoff;

    let output = `<table class="table-chart">
                    <thead>
                        <tr>
                            <th>Player</th>
                            <th>Position</th>
                            <th>Games Played</th>
                            <th>Goals</th>
                            <th>Assists</th>
                            <th>Points</th>
                            <th>+/-</th>
                            <th>PIM</th>
                        </tr>
                </thead>
                </tbody>`;
    let counter = 0;

    if (positionSelect === "All Skaters") {
        Promise.all(players.map(player => {
            return fetch(`https://statsapi.web.nhl.com/api/v1/people/${player.id}/stats?stats=${playoffSelect}&season=${season}`)
                // fetch(`https://statsapi.web.nhl.com/api/v1/statTypes`)
                .then((data) => {
                    return data.json(); // convert to object 
                })
                .then((objectData) => {
                    const playerName = player.fullName;
                    const position = player.position;
                    if (position !== "G" && objectData.stats[0].splits.length > 0) {
                        ++counter;

                        const statObject = objectData.stats[0].splits[0].stat;
                        const gamesPlayed = statObject.games;
                        const goals = statObject.goals;
                        const assist = statObject.assists;
                        const points = statObject.points;
                        const plusMinus = statObject.plusMinus;
                        const penaltyMinutes = statObject.pim;

                        output += `
                                    <tr>
                                        <td>${playerName}</td>
                                        <td>${position}</td>
                                        <td>${gamesPlayed}</td>
                                        <td>${goals}</td> 
                                        <td>${assist}</td>
                                        <td>${points}</td>
                                        <td>${plusMinus}</td>
                                        <td>${penaltyMinutes}</td>
                    
                                    </tr> `;
                        // document.getElementById("playerStats").innerHTML = output;  // return back to dom element in HTML
                    }

                })
                .catch(error => console.log(error));
        })).then(() => {
            if (counter === 0) {
                output = `<div class="playoffs-error"> 
                        <p> Playoffs Have Not Begun. Please Clear Filters and Choose Regular Season Games!</p>
                        </div>`;

            }
            document.getElementById("playerStats").innerHTML = output;
            return output;
        })
    } else {

        Promise.all(players.map(player => {
            return fetch(`https://statsapi.web.nhl.com/api/v1/people/${player.id}/stats?stats=${playoffSelect}&season=${season}`)
                // fetch(`https://statsapi.web.nhl.com/api/v1/statTypes`)
                .then((data) => {
                    return data.json(); // convert to object 
                })
                .then((objectData) => {
                    const playerName = player.fullName;
                    const position = player.position;
                    if (position !== "G" && positionSelect === position && objectData.stats[0].splits.length > 0) {
                        ++counter;

                        const statObject = objectData.stats[0].splits[0].stat;
                        const gamesPlayed = statObject.games;
                        const goals = statObject.goals;
                        const assist = statObject.assists;
                        const points = statObject.points;
                        const plusMinus = statObject.plusMinus;
                        const penaltyMinutes = statObject.pim;

                        output += `
                                    <tr>
                                        <td>${playerName}</td>
                                        <td>${position}</td>
                                        <td>${gamesPlayed}</td>
                                        <td>${goals}</td> 
                                        <td>${assist}</td>
                                        <td>${points}</td>
                                        <td>${plusMinus}</td>
                                        <td>${penaltyMinutes}</td>
                    
                                    </tr> `;
                        document.getElementById("playerStats").innerHTML = output;  // return back to dom element in HTML
                    }


                    // going to need one for goalie

                })
                .catch(error => console.log(error));
        })).then(() => {
            if (counter === 0) {
                output = `<div class="playoffs-error"> 
                <p> Playoffs Have Not Begun. Please Clear Filters and Choose Regular Season Games!</p>
                </div>`;
                document.getElementById("playerStats").innerHTML = output;
            }
            return output;
        })
    }

}


// league number is 57 for NHL
// season is 2022 for 2022-2023 season





async function allUpcomingGames(franchise, apiKey) {
    const userInput = franchise;
    // getting current date
    let today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    // printing out today's date in rapidApi format
    let currDate = yyyy + "-" + mm + "-" + dd;

    if (userInput === "All") {
        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', getOptions(apiKey))
            .then((data) => {
                return data.json(); // convert to object 
            })
            .then((objectData) => {
                // length of array that contains games 
                let objectLength = objectData.response.length;
                let output = "";

                // "yyyy-mm-dd"
                // output += `<p> ${currDate}</p>`
                // findings starting point aka games from today
                let firstGameIndex = 0;
                for (let i = 0; i < objectLength; i++) {
                    if (objectData.response[i].date.includes(currDate)) {
                        firstGameIndex = i;
                        break;
                    }
                }

                // loop that goes through response array and find games that are being played today
                for (let i = firstGameIndex; i < objectLength; i++) {

                    homeLogo = objectData.response[i].teams.home.logo;
                    awayLogo = objectData.response[i].teams.away.logo;

                    awayTeam = objectData.response[i].teams.away.name;  // away team name
                    homeTeam = objectData.response[i].teams.home.name;  // home team name
                    gameDate = objectData.response[i].date.slice(0, 10); // date of the game
                    homeScore = objectData.response[i].scores.home; // score of home team
                    awayScore = objectData.response[i].scores.away; // score of away team
                    gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                    startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                    // if (homeTeam === userInput || awayTeam === userInput) {
                    if (homeScore === null) {
                        homeScore = 0;
                        awayScore = 0;
                        gameStatus = "Game has not started."
                    }
                    output += `<div class="blue-container">
                    <div class="team-names">
                        <p> ${awayTeam} @ ${homeTeam} </p>
                        <div class="logos">
                            <img src=${homeLogo}>
                            <img src=${awayLogo}>
                        </div>
                    </div>
                    <ul>
                        <li> Game Date: ${gameDate} </li>
                        <li> Game Start Time: ${startGameTime} MST </li>
                        <li> ${homeTeam} : ${homeScore} </li>
                        <li> ${awayTeam} : ${awayScore} </li>
                        <li> Game Status: ${gameStatus} </li>
                    </ul>
                </div>`;
                    document.getElementById("div").innerHTML = output;    // saina you can change this div
                    // }
                }
                return output;

            })
            .catch(error => console.log(error));

        // checking for specific franchise
    } else {

        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', getOptions(apiKey))
            .then((data) => {

                return data.json(); // convert to object 
            })
            .then((objectData) => {
                // length of array that contains games 
                let objectLength = objectData.response.length;
                let output = "";

                // "yyyy-mm-dd"
                // output += `<p> ${currDate}</p>`
                // findings starting point aka games from today
                let firstGameIndex = 0;
                for (let i = 0; i < objectLength; i++) {
                    if (objectData.response[i].date.includes(currDate)) {
                        firstGameIndex = i;
                        break;
                    }
                }


                for (let i = firstGameIndex; i < objectLength; i++) {


                    awayTeam = objectData.response[i].teams.away.name;  // away team name
                    homeTeam = objectData.response[i].teams.home.name;
                    if (awayTeam === userInput || homeTeam === userInput) {
                        homeLogo = objectData.response[i].teams.home.logo;
                        awayLogo = objectData.response[i].teams.away.logo;
                        gameDate = objectData.response[i].date.slice(0, 10); // date of the game
                        homeScore = objectData.response[i].scores.home; // score of home team
                        awayScore = objectData.response[i].scores.away; // score of away team
                        gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                        startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                        if (homeTeam === userInput || awayTeam === userInput) {
                            if (homeScore === null) {
                                homeScore = 0;
                                awayScore = 0;
                                gameStatus = "Game has not started."
                            }
                            output += `<div class="blue-container">
                                <div class="team-names">
                                    <p> ${awayTeam} @ ${homeTeam} </p>
                                    <div class="logos">
                                        <img src=${homeLogo}>
                                        <img src=${awayLogo}>
                                    </div>
                                </div>
                                <ul>
                                    <li> Game Date: ${gameDate} </li>
                                    <li> Game Start Time: ${startGameTime} MST </li>
                                    <li> ${homeTeam} : ${homeScore} </li>
                                    <li> ${awayTeam} : ${awayScore} </li>
                                    <li> Game Status: ${gameStatus} </li>
                                </ul>
                            </div>`;
                            document.getElementById("div").innerHTML = output;    // saina you can change this div



                        }
                    }
                }


                if (output === "") {
                    output += `<p> That team does not play within the time frame selected.</p>`
                    document.getElementById("div").innerHTML = output;
                }
                return output;

            })
            .catch(error => console.log(error));

    }

}

// This one for index
async function homePageGameSchedule(apiKey) {
    const userInput = "All";

    // getting current date
    let today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    // printing out today's date in rapidApi format
    let currDate = yyyy + "-" + mm + "-" + dd;
    let counter = 0;

    if (userInput === "All") {
        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', getOptions(apiKey))
            .then((data) => {
                return data.json(); // convert to object 
            })
            .then((objectData) => {
                
                // length of array that contains games 
                let objectLength = objectData.response.length;
                let output = "";

                // "yyyy-mm-dd"
                // output += `<p> ${currDate}</p>`
                // findings starting point aka games from today
                let firstGameIndex = 0;
                for (let i = 0; i < objectLength; i++) {
                    if (objectData.response[i].date.includes(currDate)) {
                        firstGameIndex = i;
                        break;
                    }
                }

                // loop that goes through response array and find games that are being played today
                for (let i = firstGameIndex; i < objectLength; i++) {
                    if (counter === 5) {
                        break;
                    }
                    homeLogo = objectData.response[i].teams.home.logo;
                    awayLogo = objectData.response[i].teams.away.logo;

                    awayTeam = objectData.response[i].teams.away.name;  // away team name
                    homeTeam = objectData.response[i].teams.home.name;  // home team name
                    gameDate = objectData.response[i].date.slice(0, 10); // date of the game
                    homeScore = objectData.response[i].scores.home; // score of home team
                    awayScore = objectData.response[i].scores.away; // score of away team
                    gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                    startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                    // if (homeTeam === userInput || awayTeam === userInput) {
                    if (homeScore === null) {
                        homeScore = 0;
                        awayScore = 0;
                        gameStatus = "Game has not started."
                    }
                    output += `<div class="scrollable-list-right">
                    <div class="team-names">
                        <p> ${awayTeam} @ ${homeTeam} </p>
                        <div class="logos">
                            <img src=${homeLogo}>
                            <img src=${awayLogo}>
                        </div>
                    </div>
                    <ul>
                        <li> Game Date: ${gameDate} </li>
                        <li> Game Start Time: ${startGameTime} MST </li>
                        <li> ${homeTeam} : ${homeScore} </li>
                        <li> ${awayTeam} : ${awayScore} </li>
                        <li> Game Status: ${gameStatus} </li>
                    </ul>
                </div>`;
                    document.getElementById("home-page-div").innerHTML = output;    // saina you can change this div
                    counter++;
                    // }
                }
                return output;


            })
            .catch(error => console.log(error));

        // checking for specific franchise
    } else {

        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', getOptions(apiKey))
            .then((data) => {

                return data.json(); // convert to object 
            })
            .then((objectData) => {
                // length of array that contains games 
                let objectLength = objectData.response.length;
                let output = "";

                // "yyyy-mm-dd"
                // output += `<p> ${currDate}</p>`
                // findings starting point aka games from today
                let firstGameIndex = 0;
                for (let i = 0; i < objectLength; i++) {
                    if (objectData.response[i].date.includes(currDate)) {
                        firstGameIndex = i;
                        break;
                    }
                }


                for (let i = firstGameIndex; i < objectLength; i++) {
                    if (counter === 5) {
                        break;
                    }

                    awayTeam = objectData.response[i].teams.away.name;  // away team name
                    homeTeam = objectData.response[i].teams.home.name;
                    if (awayTeam === userInput || homeTeam === userInput) {
                        homeLogo = objectData.response[i].teams.home.logo;
                        awayLogo = objectData.response[i].teams.away.logo;
                        gameDate = objectData.response[i].date.slice(0, 10); // date of the game
                        homeScore = objectData.response[i].scores.home; // score of home team
                        awayScore = objectData.response[i].scores.away; // score of away team
                        gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                        startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                        if (homeTeam === userInput || awayTeam === userInput) {
                            if (homeScore === null) {
                                homeScore = 0;
                                awayScore = 0;
                                gameStatus = "Game has not started."
                            }
                            output += `<div class="scrollable-list-right">
                                <div class="team-names">
                                    <p> ${awayTeam} @ ${homeTeam} </p>
                                    <div class="logos">
                                        <img src=${homeLogo}>
                                        <img src=${awayLogo}>
                                    </div>
                                </div>
                                <ul>
                                    <li> Game Date: ${gameDate} </li>
                                    <li> Game Start Time: ${startGameTime} MST </li>
                                    <li> ${homeTeam} : ${homeScore} </li>
                                    <li> ${awayTeam} : ${awayScore} </li>
                                    <li> Game Status: ${gameStatus} </li>
                                </ul>
                            </div>`;
                            document.getElementById("home-page-div").innerHTML = output;    // saina you can change this div
                            counter++;
                            // }


                        }
                    }
                }


                if (output === "") {
                    output += `<p> That team does not play within the time frame selected.</p>`
                    document.getElementById("home-page-div").innerHTML = output;
                }
                return output;

            })
            .catch(error => console.log(error));

    }


}

async function homePageGameScheduleLoggedIn(teamArr, apiKey) {

    // getting current date
    let today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    // printing out today's date in rapidApi format
    let currDate = yyyy + "-" + mm + "-" + dd;
    let counter = 0;

    fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', getOptions(apiKey))
        .then((data) => {
            return data.json(); // convert to object 
        })
        .then((objectData) => {
            // length of array that contains games 
            let objectLength = objectData.response.length;
            let output = "";

            // "yyyy-mm-dd"
            // output += `<p> ${currDate}</p>`
            // findings starting point aka games from today
            let firstGameIndex = 0;
            for (let i = 0; i < objectLength; i++) {
                if (objectData.response[i].date.includes(currDate)) {
                    firstGameIndex = i;
                    break;
                }
            }

            // loop that goes through response array and find games that are being played today
            for (let i = firstGameIndex; i < objectLength; i++) {
                if (counter === 5) {
                    break;
                }
                homeLogo = objectData.response[i].teams.home.logo;
                awayLogo = objectData.response[i].teams.away.logo;

                awayTeam = objectData.response[i].teams.away.name;  // away team name
                homeTeam = objectData.response[i].teams.home.name;  // home team name

                gameDate = objectData.response[i].date.slice(0, 10); // date of the game
                homeScore = objectData.response[i].scores.home; // score of home team
                awayScore = objectData.response[i].scores.away; // score of away team
                gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                for (let i = 0; i < teamArr.length; i++) {
                    if (homeTeam === teamArr[i] || awayTeam === teamArr[i]) {
                        if (homeScore === null) {
                            homeScore = 0;
                            awayScore = 0;
                            gameStatus = "Game has not started."
                        }
                        output += `<div class="scrollable-list-right">
                        <div class="team-names">
                            <p> ${awayTeam} @ ${homeTeam} </p>
                            <div class="logos">
                                <img src=${homeLogo}>
                                <img src=${awayLogo}>
                            </div>
                        </div>
                        <ul>
                            <li> Game Date: ${gameDate} </li>
                            <li> Game Start Time: ${startGameTime} MST </li>
                            <li> ${homeTeam} : ${homeScore} </li>
                            <li> ${awayTeam} : ${awayScore} </li>
                            <li> Game Status: ${gameStatus} </li>
                        </ul>
                    </div>`;
                        document.getElementById("home-page-div").innerHTML = output;    // saina you can change this div
                        counter++;
                        break;
                        // }
                    }
                }


            }
            return output;

        })
        .catch(error => console.log(error));

    // checking for specific franchise 


}

// module.exports.findTeamID = findTeamID;
// module.exports.getRoster = getRoster;
