fetch("http://site.api.espn.com/apis/site/v2/sports/hockey/nhl/scoreboard")
    .then((data)=>{
        // console.log(data);   // this is json format

        return data.json(); // convert to object 
    })
    .then((objectData)=>{
        console.log(objectData); 
        console.log(objectData.events[0].competitions[0].competitors[0].score); // score of the home team
        console.log(objectData.events[0].competitions[0].competitors[1].score); // score of the away team
        console.log(objectData.events[0].competitions[0].competitors[0].team.displayName); // display name of home team


        console.log(objectData.events[0].name); // name of the event

        let gameData = "";
        var EVENT_NUM = objectData.events.length;   // how many games there were today
        var list = "";
        for(let i = 0; i < EVENT_NUM; i++ ){
            var eventName = objectData.events[i].name;
            
            list += "<li>"+eventName+
                "<ul>Home team score: " + objectData.events[i].competitions[0].competitors[0].score + "</ul>" +
                "<ul>Away team score: " + objectData.events[i].competitions[0].competitors[1].score + "</ul>" +
                "<ul>Time of Game: " + objectData.events[i].status.type.shortDetail + "</ul>" +
            
            "</li>";
            document.getElementById("list").innerHTML = list;


        }

        // const gameData = '<div>${objectData.events[0].name}</div>'


    })
    .catch(error => console.log(error));