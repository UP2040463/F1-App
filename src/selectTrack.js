document.addEventListener('DOMContentLoaded', function saveTrack () {
    const trackSelectElement = document.getElementById('tracks');
    if (sessionStorage['tracks']) { // if job is set
        trackSelectElement.value = sessionStorage.setItem('tracks'); // set the value
    }
    trackSelectElement.onclick = function () {
         sessionStorage['tracks'] = this.value; // change sessionStorage on click
     }
     const trackSelectNext = document.getElementById('trackNext');
     trackSelectNext.onclick = function(){
        window.location.href="../html/timeSelect.html";
     }
 });

document.addEventListener('DOMContentLoaded', function backTrack() {
    const trackSelectBack = document.getElementById('trackBack');
    trackSelectBack.onclick = function(){
       window.location.href="../html/driverTeamSelect.html";
    }
});