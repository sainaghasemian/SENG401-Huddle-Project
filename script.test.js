
// Import the getGame function
const { getGame } = require('./script.js');

describe("getGame", () => {
    it("should call allUpcomingGames() if userDate === 'all-upcoming'", () => {
      // Arrange
      const allUpcomingGames = jest.fn();
      const userDate = "all-upcoming";
      const franchiseSelect = {
        value: "some-franchise",
      };
      const dateSelect = {
        value: userDate,
      };
      document.querySelector = jest.fn((selector) => {
        if (selector === "#franchise-select") {
          return franchiseSelect;
        } else if (selector === "#date-select") {
          return dateSelect;
        }
      });
  
      // Act
      getGame();
  
      // Assert
      expect(allUpcomingGames).toHaveBeenCalled();
    });
  
    it("should fetch data and display games for all franchises if userInput === 'All'", async () => {
      // Arrange
      const userDate = "2023-03-28";
      const franchiseSelect = {
        value: "All",
      };
      const dateSelect = {
        value: userDate,
      };
      document.querySelector = jest.fn((selector) => {
        if (selector === "#franchise-select") {
          return franchiseSelect;
        } else if (selector === "#date-select") {
          return dateSelect;
        }
      });
  
      const mockData = {
        response: [
          {
            teams: {
              home: {
                logo: "https://some-url.com/home-logo.png",
                name: "Home Team",
              },
              away: {
                logo: "https://some-url.com/away-logo.png",
                name: "Away Team",
              },
            },
            date: `${userDate}T23:00:00.000Z`,
            scores: {
              home: 2,
              away: 1,
            },
            status: {
              short: "Final",
            },
            time: "7:00 PM",
          },
        ],
      };
      const mockJsonPromise = Promise.resolve(mockData);
      const mockFetchPromise = Promise.resolve({
        json: () => mockJsonPromise,
      });
      global.fetch = jest.fn().mockImplementation(() => mockFetchPromise);
  
      // Act
      await getGame();
  
      // Assert
      expect(global.fetch).toHaveBeenCalledWith(
        "https://api-hockey.p.rapidapi.com/games/?league=57&season=2022&timezone=America%2FEdmonton",
        { method: "GET" }
      );
      expect(document.getElementById("div").innerHTML).toContain(
        "<p> Away Team @ Home Team </p>"
      );
    });
});