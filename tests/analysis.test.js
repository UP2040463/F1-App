/** @jest-environment jsdom */

require('../src/driverTeamSelect');
require('../src/selectTrack');
require('../src/timeSelect');

describe("Analysis Tests", ()=> {
    test('selected options should not be null',()=>{
        var testTeam = sessionStorage['names'];

        //assert
        expect(testTeam).not.toBeNull;
    });
})

describe("Analysis Tests", ()=> {
    test('selected options should not be null',()=>{
        var testTrack = sessionStorage['tracks'];

        //assert
        expect(testTrack).not.toBeNull;
    });
})

describe("Analysis Tests", ()=> {
    test('selected options should not be null',()=>{
        var testTime = sessionStorage['times'];

        //assert
        expect(testTime).not.toBeNull;
    });
})
