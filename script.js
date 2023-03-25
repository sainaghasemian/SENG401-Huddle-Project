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

    let userInput = document.querySelector("#userInput").value.toLowerCase();
    console.log(userInput);
    document.getElementById("div").innerHTML = userInput;
    if (userInput === "") {
        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
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

        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
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

    fetch('https://api-hockey.p.rapidapi.com/standings/?league=57&season=2022', options)
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
                if (objectData.teams[i].name === userInput) {
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
    // let season = 20222023;  // will change this to a user input after
    let season = document.querySelector("#season-select").value;  // will change this to a user input after
    let positionSelect = document.querySelector("#position-select").value;
    console.log(players);

    let output = `<table class="table-chart">
                    <thread>
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
                    </thread>
                </table>`;

    let playerName;
    let position;
    let gamesPlayed;
    let goals;
    let assist;
    let points;
    let plusMinus;
    let penaltyMinutes;

    if(positionSelect === "All Skaters"){
        for (let i = 0; i < players.length; i++) {
            fetch(`https://statsapi.web.nhl.com/api/v1/people/${players[i].id}/stats?stats=statsSingleSeason&season=${season}`)
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
                        
                        output += `<tbody>
                                    <ul class="list">
                                        <li>${playerName} ${position} ${gamesPlayed} ${goals} ${assist} ${points} ${plusMinus} ${penaltyMinutes}</li>
                    
                                    </ul>
                                </tbody>`;
    
    
                        document.getElementById("playerStats").innerHTML = output;  // return back to dom element in HTML
                    }
    
                    // going to need one for goalie
    
                })
                .catch(error => console.log(error));
    
        }

    }else{
        for (let i = 0; i < players.length; i++) {
            fetch(`https://statsapi.web.nhl.com/api/v1/people/${players[i].id}/stats?stats=statsSingleSeason&season=${season}`)
                .then((data) => {
                    return data.json(); // convert to object 
                })
                .then((objectData) => {
                    console.log(objectData);
                    playerName = players[i].fullName;
                    position = players[i].position;
                    gamesPlayed = objectData.stats[0].splits[0].stat.games;
                    if(position !== "G" && positionSelect === position){
                        goals = objectData.stats[0].splits[0].stat.goals;
                        assist = objectData.stats[0].splits[0].stat.assists;
                        points = objectData.stats[0].splits[0].stat.points;
                        plusMinus = objectData.stats[0].splits[0].stat.plusMinus;
                        penaltyMinutes = objectData.stats[0].splits[0].stat.pim;
                        
                        output += `<tbody>
                                    <ul class="list">
                                    <li>${playerName} ${position} ${gamesPlayed} ${goals} ${assist} ${points} ${plusMinus} ${penaltyMinutes}</li>
                                    </ul>
                                </tbody>`;
    
    
                        document.getElementById("playerStats").innerHTML = output;  // return back to dom element in HTML
                    }
    
                    // going to need one for goalie
    
                })
                .catch(error => console.log(error));
    
        }
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