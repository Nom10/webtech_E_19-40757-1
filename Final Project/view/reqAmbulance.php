<!DOCTYPE html>
<html>
<style>
th,td {
  padding: 5px;
}
</style>
<body>

<h2>Request For Ambulance Details</h2>

<form action=""> 
  <select name="amb" onchange="showAmbulance(this.value)">
    <option value="">Select a provider:</option>
    <option value="DM">Dhaka Medical</option>
    <option value="PH ">Popular Hospital</option>
    
  </select>
</form>
<br>
<div id="txtHint">Ambulance info will be listed here...</div>

<script>
function showAmbulance(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "getAmbulance.php?q="+str);
  xhttp.send();
}
</script>
</body>
</html>