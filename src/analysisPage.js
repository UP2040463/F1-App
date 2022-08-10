let analysisNames = sessionStorage.getItem('names');
let analysisTracks = sessionStorage.getItem('tracks');
let analysisTimes = sessionStorage.getItem('times');
console.log(analysisNames);
console.log(analysisTimes);
console.log(analysisTracks);
let analysisURL = 'http://ergast.com/api/f1/drivers/'+ analysisNames +'/circuits/'+analysisTracks+'/results';
console.log(analysisURL);
document.getElementById('analysis').src=analysisURL;
