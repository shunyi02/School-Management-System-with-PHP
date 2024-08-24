<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    
    <button><a type="button" href="menu.php"> Menu</a></button>
    &nbsp;
    <button><a type="button" href="gradecalculator.php"> Grade Calculator</a></button>
    &nbsp;
    <button><a type="button" href="subject.php"> Subject</a></button>
    &nbsp;


   <h2 align="center"> Course Taken:</h2>    

<table>
  <tr>

    <th>Courses</th>
    <th>Credits</th>
    <th>GPA</th>
  </tr>
  <tr>
    <td><select id="COURSE">
  
  <option value="1"> UCCA 2513 MINI PROJECT </option>
  <option value="2"> UCCD 2502 INTRODUCTION TO INVENTIVE PROPOSAL WRITING </option>
  <option value="3"> UCCN 1223 CYBERSECURITY </option>
  <option value="4"> MPU 34032 COMMUNITY PROJECT </option>
  
</select></td>
    <td>
  
  <input type="number" id="quantity" name="quantity" value="3"
</form>
  
</select></td>
    <td> <input type="text" id="fname" name="fname" value="3"><br></td>
  </tr>
  <tr>
    <td>
      <tr>
    <td><select id="COURSE">

  
  <option value="2"> UCCD 2502 INTRODUCTION TO INVENTIVE PROPOSAL WRITING </option>
  <option value="3"> UCCN 1223 CYBERSECURITY </option>
  <option value="4"> MPU 34032 COMMUNITY PROJECT </option>
  
</select></td>
    <td>
  
  <input type="number" id="quantity" name="quantity" value="2"
</form>
  
</select></td>
    <td> <input type="text" id="fname" name="fname" value="2.667"><br></td>
  </tr></td>
    <td><tr>
    <td><select id="COURSE">
 

  <option value="3"> UCCN 1223 CYBERSECURITY </option>
  <option value="4"> MPU 34032 COMMUNITY PROJECT </option>
  
</select></td>
    <td>
  
  <input type="number" id="quantity" name="quantity" value="4"
</form>
  
</select></td>
    <td> <input type="text" id="fname" name="fname" value="2.43"><br></td>
  </tr></td>
    <td><tr>
    <td><select id="COURSE">
 
  
  <option value="4"> MPU 34032 COMMUNITY PROJECT </option>
  
</select></td>
    <td>
  
  <input type="number" id="quantity" name="quantity" value="2"
</form>
  
</select></td>
    <td> <input type="text" id="fname" name="fname" value="3.5"><br></td>
  </tr></td>
  </tr>
 
</select></td>
    
</table>
<h2 align="center"> Course Remaining:</h2> 
<table>
    <tr>
        <th>Courses</th>
        </tr>
    
      
   <td><select id="COURSE">
    
    <option value="1"> UCCD 2303 DATABASE TECHNOLOGY </option>
    <option value="2"> UCCD 2323 FRONT-END WEB NETWORK </option>
    <option value="3"> UCCM 2233 STATISTICS </option>
   

<td><select id="COURSE">


<option value="2"> UCCD 2323 FRONT-END WEB NETWORK </option>
<option value="3"> UCCM 2233 STATISTICS </option>
</td>

    

<body
background="https://th.bing.com/th/id/R.fd6fb4599bfa0da09f47605673aba735?rik=aQxd0NyonnaDZQ&riu=http%3a%2f%2flava360.com%2fwp-content%2fuploads%2f2014%2f01%2fClassic-Background-Images-For-Wordpress-Blogs-10.jpg&ehk=xMyrCR0lLxYQmNAPJbRToGxbvSvMmswVAsBJKFE3Bg8%3d&risl=&pid=ImgRaw&r=0">
</body>


</select>
</td>
</table>
<p>
<form method="POST" action="subject.php">
    <input type="submit" value="Upload"/>
  </form>
</p>
<p></p>
<center>
  <!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Course', 'Mhl'],
  ['UCCA 2513 MINI PROJECT',3],
  ['UCCD 2502 INTRODUCTION TO INVENTIVE PROPOSAL WRITING',2.667],
  ['UCCN 1223 CYBERSECURITY',2.43],
  ['MPU 34032 COMMUNITY PROJECT',3.5],

]);

var options = {
  title:'World Wide Wine Production'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
</center>

</body>
</html>



</body>
</html>

  

    


