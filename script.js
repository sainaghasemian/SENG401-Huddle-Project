// this is tommy's account please do not leak this info or it will charge my credit card if i go over the limit
const options = {
    method: 'GET',
    headers: {
        'X-RapidAPI-Key': '96f2faa6a9mshc33e80e95c0a95fp1e26ebjsn2c028e1d7bef',
        'X-RapidAPI-Host': 'api-hockey.p.rapidapi.com'
    }
};

function getGame() {
    let homeTeam;  // home team name
    let homeLogo;   // url for home team logo
    let awayTeam; // away team name
    let awayLogo;   // url for away team logo
    let gameDate; // date of the game
    let homeScore; // score of home team
    let awayScore; // score of away team
    let gameStatus;   // status of the game (what period)
    let startGameTime;// start time of game (currently in MST)

    let userInput = document.querySelector("#franchise-select").value;
    let userDate = document.querySelector("#date-select").value;  // saina change it here

    if(userDate === "all-upcoming"){
        return allUpcomingGames();
        
    }

    // checking all franchises
    if (userInput === "All") {
        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
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
                    console.log(awayTeam);
                    console.log(homeTeam);
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

            })
            .catch(error => console.log(error));

        // checking for specific franchise
    } else {

        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
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
                        console.log(objectData.response[i]);
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
            })
            .catch(error => console.log(error));

    }

    // can add date to make it easier
    // 'https://api-hockey.p.rapidapi.com/games/?date=2023-02-27&league=57&season=2022&timezone=America%2FEdmonton'

}


function getStandings() {
    selectedTeam = document.querySelector("#team-select").value;
    fetch('https://api-hockey.p.rapidapi.com/standings/?league=57&season=2022', options)
        .then((data) => {
            // console.log(data);   // this is json format
            return data.json(); // convert to object 
        })
        .then((objectData) => {
            console.log(objectData);
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
            if(selectedTeam === ""){

                for (let i = 0; i < 32; i++) {
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
            } else{
                for (let i = 0; i < 32; i++) {
                    teamLogo = objectData.response[0][i].team.logo;
                    teamName = objectData.response[0][i].team.name;
                    if(selectedTeam === teamName){

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
                        break;
                    }
                }
            }
        })
        .catch(error => console.log(error));
    // output += '<p class="> Team Name  games played       wins          lossses `   
}




// finding the team ID using user input team name with stats API
function findTeamID() {
    let userInput = document.querySelector("#franchise-select").value;
    // let userInput = document.querySelector("#franchise-select").value;

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
            let objectLength = objectData.teams.length;
            let teamIDs = [];
            for (let i = 0; i < objectLength - 1; i++) {  // loop that runs through list of teams to find ID
                if(userInput === "All"){
                    teamIDs.push(objectData.teams[i].id);
                    
                }
                else if (objectData.teams[i].name === userInput) {
                    teamIDs.push(objectData.teams[i].id);

                }
            }


            getRoster(teamIDs);

        })
        .catch(error => console.log(error));
}

function getRoster(teamID) {
    let players = [];
    Promise.all(teamID.map(team=>{
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
    })).then(()=>{
        getPlayerStats(players);

    })
}


function getPlayerStats(players) {
    let season = 20222023;  // will change this to a user input after
    let positionSelect = document.querySelector("#position-select").value;
    let playoffSelect = document.querySelector("#gametype-select").value;
    // console.log(playoffSelect);

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
                    // console.log(output);
                    // going to need one for goalie

                })
                .catch(error => console.log(error));
        })).then(() => {
            if (counter === 0) {
                console.log(counter);
                output += `<div class="playoffs-error"> 
                        <p> Playoffs Have Not Begun. Please Clear Filters and Choose Regular Season Games!</p>
                        </div>`;
                
            }
            document.getElementById("playerStats").innerHTML = output;
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
                        console.log(objectData);
                        ++counter;

                        console.log(counter);
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
                    // console.log(output);


                    // going to need one for goalie

                })
                .catch(error => console.log(error));
        })).then(() => {
            if (counter === 0) {
                console.log(counter);
                output += "<p>Playoffs have not started yet. </p>";
                document.getElementById("playerStats").innerHTML = output;
            }
        })
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



function allUpcomingGames(){
    const userInput = document.querySelector("#franchise-select").value;
    // getting current date
    let today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    // printing out today's date in rapidApi format
    let currDate = yyyy + "-" + mm + "-" + dd;

    if (userInput === "All") {
        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
            .then((data) => {
                return data.json(); // convert to object 
            })
            .then((objectData) => {
                // length of array that contains games 
                console.log("I made it into all");
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
                    console.log(awayTeam);
                    console.log(homeTeam);
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

            })
            .catch(error => console.log(error));

        // checking for specific franchise
    } else {

        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
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
                        console.log(objectData.response[i]);
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
            })
            .catch(error => console.log(error));

    }

}

// This one for index
function homePageGameSchedule() {
    // let userInput = document.querySelector("#franchise-select").value;
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
        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
            .then((data) => {
                return data.json(); // convert to object 
            })
            .then((objectData) => {
                // length of array that contains games 
                console.log("I made it into all");
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
                    if(counter === 5){
                        break;
                    }
                    homeLogo = objectData.response[i].teams.home.logo;
                    awayLogo = objectData.response[i].teams.away.logo;

                    awayTeam = objectData.response[i].teams.away.name;  // away team name
                    homeTeam = objectData.response[i].teams.home.name;  // home team name
                    console.log(awayTeam);
                    console.log(homeTeam);
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

            })
            .catch(error => console.log(error));

        // checking for specific franchise
    } else {

        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
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
                    if(counter === 5){
                        break;
                    }
                    
                    awayTeam = objectData.response[i].teams.away.name;  // away team name
                    homeTeam = objectData.response[i].teams.home.name;
                    if (awayTeam === userInput || homeTeam === userInput) {
                        console.log(objectData.response[i]);
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
            })
            .catch(error => console.log(error));

    }


}

function homePageGameScheduleLoggedIn(teamArr){

    console.log(teamArr);
    // getting current date
    let today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    // printing out today's date in rapidApi format
    let currDate = yyyy + "-" + mm + "-" + dd;
    let counter = 0;

        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
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
                    if(counter === 5){
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
                    for(let i = 0; i < teamArr.length; i++){
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


            }})
            .catch(error => console.log(error));

        // checking for specific franchise 

}
