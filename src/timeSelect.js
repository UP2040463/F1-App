window.onload = function () {
    //Reference the DropDownList.
    let ddlYears = document.getElementById("times");

    //Determine the Current Year.
    let currentYear = (new Date()).getFullYear();
    
    //Loop and add the Year values to DropDownList.
    for (let i = 2001; i <= currentYear; i++) {
        let option = document.createElement("OPTION");
        option.innerHTML = i;
        option.value = i;
        ddlYears.appendChild(option);
    }
};

document.addEventListener('DOMContentLoaded', function saveTime () {
    const timeSelectElement = document.getElementById('times');
    if (sessionStorage['times']) { // if job is set
        timeSelectElement.value = sessionStorage.setItem('times'); // set the value
    }
    timeSelectElement.onclick = function () {
         sessionStorage['times'] = this.value; // change sessionStorage on click
     }
     const timeSelectNext = document.getElementById('timeNext');
     timeSelectNext.onclick = function(){
        window.location.href="../html/analysisPage.html";
     }
 });

document.addEventListener('DOMContentLoaded', function backTime() {
    const timeSelectBack = document.getElementById('timeBack');
    timeSelectBack.onclick = function(){
       window.location.href="../html/selectTrack.html";
    }
});