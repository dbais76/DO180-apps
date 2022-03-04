<!DOCTYPE html>
<html>
<head>
    <title>Creating Links in HTML</title>
</head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
<body>
<h1>Welcome to Vectra OpenShift Webinar!</h1>

<?php

print " Presented on " . date("l jS \of F Y ") . "<br>" ;

print "<br>";
print "<br>";
print "<font color=blue size='4pt'>Demos running on <b>Red Hat OpenShift</b> PHP Builder Image with PHP version " . PHP_VERSION .  "\n"; 
print "<br>";
print "<br>";
print "<br>";
print "<br>";
?>

<p>Click the button to open a new tab </p>
  
    <button class="button" onclick="NewTab()">
      Red Hat OpenShift Learning path Brief
  </button>
  
    <script>
        function NewTab() {
            window.open(
              "https://www.redhat.com/en/resources/openshift-skill-paths-brief, "_blank");
        }
    </script>

</body>
</html>
