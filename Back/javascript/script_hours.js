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
function go(){
var xhr = getXhr();
// When change
xhr.onreadystatechange = function(){
// If servor ok
if(xhr.readyState == 4 && xhr.status == 200){
leselect = xhr.responseText;
// Use innerHTML for add options into the list
document.getElementById('hours_choice').innerHTML = leselect;
}
}

// Send POST
xhr.open("POST","../../Back/javascript/ajaxHours.php",true);
// With Header
xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
// Argument
sel = document.getElementById('day_choice');
dayChoice = sel.options[sel.selectedIndex].value;
xhr.send("day="+dayChoice);
}