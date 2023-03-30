/*
PLEASE READ THIS:
Uncomment module.export lines at the very bottom of script.js file
*/
const myFunctions = require('./script');

// ********* findTeamID() JEST TESTS ************
test("getTeamID with flames only", async () => {
    const teamID = await myFunctions.findTeamID("Calgary Flames", "All Skaters", "statsSingleSeason" );
    expect(teamID).toEqual([20]);
})

// ********* getRoster() JEST TESTS ************

test("testing getRoster function with only 1 team being Calgary Flames ID", async () => {
    const players = await myFunctions.getRoster([20]);
    expect(players).toEqual([
        { id: 8474628, fullName: 'Michael Stone', position: 'D' },
        { id: 8473453, fullName: 'Trevor Lewis', position: 'C' },
        { id: 8473473, fullName: 'Milan Lucic', position: 'L' },
        { id: 8474150, fullName: 'Mikael Backlund', position: 'C' },
        { id: 8474593, fullName: 'Jacob Markstrom', position: 'G' },
        { id: 8475172, fullName: 'Nazem Kadri', position: 'C' },
        { id: 8475690, fullName: 'Chris Tanev', position: 'D' },
        { id: 8475726, fullName: 'Tyler Toffoli', position: 'R' },
        { id: 8476399, fullName: 'Blake Coleman', position: 'C' },
        { id: 8476456, fullName: 'Jonathan Huberdeau', position: 'C' },
        { id: 8477346, fullName: 'MacKenzie Weegar', position: 'D' },
        { id: 8477496, fullName: 'Elias Lindholm', position: 'C' },
        { id: 8477507, fullName: 'Nikita Zadorov', position: 'D' },
        { id: 8477941, fullName: 'Nick Ritchie', position: 'L' },
        { id: 8478233, fullName: 'Andrew Mangiapane', position: 'L' },
        { id: 8478396, fullName: 'Noah Hanifin', position: 'D' },
        { id: 8478397, fullName: 'Rasmus Andersson', position: 'D' },
        { id: 8478435, fullName: 'Dan Vladar', position: 'G' },
        { id: 8478502, fullName: 'Dennis Gilbert', position: 'D' },
        { id: 8479346, fullName: 'Dillon Dube', position: 'C' },
        { id: 8479442, fullName: 'Troy Stecher', position: 'D' },
        { id: 8480008, fullName: 'Adam Ruzicka', position: 'C' },
        { id: 8481592, fullName: 'Jakob Pelletier', position: 'L' },
        { id: 8482652, fullName: 'Walker Duehr', position: 'R' },
        { id: 8482679, fullName: 'Matt Coronato', position: 'R' }
      ]);
})