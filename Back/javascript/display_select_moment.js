function getXhr(){
    var xhr = null; 
if(window.XMLHttpRequest) // Firefox and others
xhr = new XMLHttpRequest(); 
else if(window.ActiveXObject){ // Internet Explorer 
try {
xhr = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
xhr = new ActiveXObject("Microsoft.XMLHTTP");
}
}
else { // XMLHttpRequest non supporté par le navigateur 
alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
xhr = false; 
} 
    return xhr;
}

// When clic by button
function displaySelectMoment(){
var xhr = getXhr();
// When change
xhr.onreadystatechange = function(){
// If servor ok
if(xhr.readyState == 4 && xhr.status == 200){
leselect = xhr.responseText;
// Use innerHTML for add options into the list
document.getElementById('display_select_moment').innerHTML = leselect;
}
}

// Send POST
xhr.open("POST","../Back/javascript/ajax_display_select_moment.php",true);
// With Header
xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
// Argument
dateSelect = new Date(document.getElementById('date_select').value);

// Atomic date for create a new ordonate date
var day_date = dateSelect.getUTCDate();
var month_date = dateSelect.getUTCMonth() + 1;
// add a '0' for month if < 10
if(month_date < 10) {
    month_date = month_date.toString().padStart(2, '0');
};
var year_date = dateSelect.getUTCFullYear();

dateSelectFinal = year_date + "-" + month_date + "-" + day_date;

xhr.send("date="+dateSelectFinal);
}