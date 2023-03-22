


// this is tommy's account please do not leak this info or it will charge my credit card if i go over the limit
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '96f2faa6a9mshc33e80e95c0a95fp1e26ebjsn2c028e1d7bef',
		'X-RapidAPI-Host': 'api-hockey.p.rapidapi.com'
	}
};

function getGame(){
    // alert(1);
    let userInput = document.querySelector("#userInput").value.toLowerCase();
    console.log(userInput);
    document.getElementById("div").innerHTML = userInput;
    if(userInput === ""){
        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
        .then((data)=>{
            // console.log(data);   // this is json format

            return data.json(); // convert to object 
        })
        .then((objectData)=>{
            console.log(objectData);
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
            
            let homeTeam = ""  // home team name
            let awayTeam = ""  // away team name
            let gameDate = "" // date of the game
            let homeScore = "" // score of home team
            let awayScore = "" // score of away team
            let gameStatus = ""   // status of the game (what period)
            let startGameTime = "" // start time of game (currently in MST)

            // loop that goes through response array and find games that are being played today

            for (let i = 0; i < objectLength; i++){
                if(objectData.response[i].date.includes(currDate)){
                
                     awayTeam = objectData.response[i].teams.away.name;  // away team name
                     homeTeam = objectData.response[i].teams.home.name;  // home team name
                     gameDate = objectData.response[i].date; // date of the game
                     homeScore = objectData.response[i].scores.home; // score of home team
                    awayScore = objectData.response[i].scores.away; // score of away team
                     gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                     startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                    if(homeTeam.toLowerCase().includes(userInput) || awayTeam.toLowerCase().includes(userInput)){
                        if(homeScore === null){
                            homeScore = 0;
                            awayScore = 0;
                            gameStatus = "Game has not started."
                        }
                        output +=`<p> ${awayTeam} @ ${homeTeam} </p>`;
                        output += `<ul>
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

        
    }else{
        
        fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
        .then((data)=>{
            // console.log(data);   // this is json format

            return data.json(); // convert to object 
        })
        .then((objectData)=>{
            console.log(objectData);
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
            
            let homeTeam = ""  // home team name
            let awayTeam = ""  // away team name
            let gameDate = "" // date of the game
            let homeScore = "" // score of home team
            let awayScore = "" // score of away team
            let gameStatus = ""   // status of the game (what period)
            let startGameTime = "" // start time of game (currently in MST)

            // loop that goes through response array and find games that are being played today

            for (let i = 0; i < objectLength; i++){
                if(objectData.response[i].date.includes(currDate)){
                
                     awayTeam = objectData.response[i].teams.away.name;  // away team name
                     homeTeam = objectData.response[i].teams.home.name;  // home team name
                     gameDate = objectData.response[i].date; // date of the game
                     homeScore = objectData.response[i].scores.home; // score of home team
                    awayScore = objectData.response[i].scores.away; // score of away team
                     gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                     startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                    if(homeTeam.toLowerCase().includes(userInput) || awayTeam.toLowerCase().includes(userInput)){
                        if(homeScore === null){
                            homeScore = 0;
                            awayScore = 0;
                            gameStatus = "Game has not started."
                        }
                        output +=`<p> ${awayTeam} @ ${homeTeam} </p>`;
                        output += `<ul>
                                        <li> Game Start Time: ${startGameTime} MST </li>
                                        <li> ${homeTeam} : ${homeScore} </li>
                                        <li> ${awayTeam} : ${awayScore} </li>
                                        <li> Game Status: ${gameStatus} </li>
                                    </ul>`;
                        document.getElementById("div").innerHTML = output;
                    }

                }
            }

            if(output === ""){
                output +=`<p> That team does not play today</p>`
                document.getElementById("div").innerHTML = output;
            }
        })
        .catch(error => console.log(error));



    }





    
    // can add date to make it easier
// 'https://api-hockey.p.rapidapi.com/games/?date=2023-02-27&league=57&season=2022&timezone=America%2FEdmonton'

}
/*
function getStandings(){

    // fetch('https://api-hockey.p.rapidapi.com/standings/?league=57&season=2022', options)
	// .then(response => response.json())
	// .then(response => console.log(response))
	// .catch(err => console.error(err));

    fetch('https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton', options)
        .then((data)=>{
            // console.log(data);   // this is json format

            return data.json(); // convert to object 
        })
        .then((objectData)=>{
            console.log(objectData);
            // length of array that contains games 
            let objectLength = objectData.response.length;
            let output = "";

            
            let teamName = "";
            let numWins = "";
            let numLosses = "";
            let numOTLosses = "";

            // loop that goes through response array and find games that are being played today

            // western conference loop
            for (let i = 0; i < 16; i++){
                if(objectData.response[i].date.includes(currDate)){

                    teamName = objectData.response[0].
                
                     awayTeam = objectData.response[i].teams.away.name;  // away team name
                     homeTeam = objectData.response[i].teams.home.name;  // home team name
                     gameDate = objectData.response[i].date; // date of the game
                     homeScore = objectData.response[i].scores.home; // score of home team
                    awayScore = objectData.response[i].scores.away; // score of away team
                     gameStatus = objectData.response[i].status.short;   // status of the game (what period)
                     startGameTime = objectData.response[i].time; // start time of game (currently in MST)
                    if(homeTeam.toLowerCase().includes(userInput) || awayTeam.toLowerCase().includes(userInput)){
                        if(homeScore === null){
                            homeScore = 0;
                            awayScore = 0;
                            gameStatus = "Game has not started."
                        }
                        output +=`<p> ${awayTeam} @ ${homeTeam} </p>`;
                        output += `<ul>
                                        <li> Game Start Time: ${startGameTime} MST </li>
                                        <li> ${homeTeam} : ${homeScore} </li>
                                        <li> ${awayTeam} : ${awayScore} </li>
                                        <li> Game Status: ${gameStatus} </li>
                                    </ul>`;
                        document.getElementById("div").innerHTML = output;
                    }

                }
            }

            if(output === ""){
                output +=`<p> That team does not play today</p>`
                document.getElementById("div").innerHTML = output;
            }
        })
        .catch(error => console.log(error));



    // output += '<p class="> Team Name  games played       wins          lossses `   
}

*/
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

