document.addEventListener('DOMContentLoaded', function saveName () {
    const drivSelectElement = document.getElementById('names');
    if (sessionStorage['names']) { // if job is set
        drivSelectElement.value = sessionStorage.setItem('names'); // set the value
    }
    drivSelectElement.onclick = function () {
         sessionStorage['names'] = this.value; // change sessionStorage on click 
     }
     const drivSelectNext = document.getElementById('drivNext');
     drivSelectNext.onclick = function(){
        window.location.href="../html/selectTrack.html";
     }
 });
