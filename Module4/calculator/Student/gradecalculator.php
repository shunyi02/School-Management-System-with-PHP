<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">

<script async src="/lib/tagmng8.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/lib/rapid02.css">
<link rel="apple-touch-icon" sizes="180x180" href="/lib/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/lib/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/lib/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/lib/favicon/manifest.json">
<link rel="mask-icon" href="/lib/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/lib/favicon/favicon.ico">
<meta name="msapplication-config" content="/lib/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<meta name="format-detection" content="telephone=no">

<title>Student Academic Performance</title>
<meta content="Calculate weighted percentage and letter grades." name="description">
<link rel="canonical" href="https://www.rapidtables.com/calc/grade/grade-calculator.html">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<style>
   h1 { font-size:1.6rem; }
   h2 { font-size:1.4rem; }
   h4 { font-size:1.2rem; }
   #wrapper td { padding-left:3px; padding-right:3px; }
   #calcform2 { max-width:414px; padding:15px; background:#eee8d5; border:1px solid #e0e0e0; border-radius:7px; }
   .btn span { font-weight:bold; font-size:large; }
   #gradecircle { display:none; margin: 0 auto; float:none; }
   #tbl td { padding-bottom:3px; background:#eee8d5; }
   /*#tbl tr td:first-child { width:60px; }*/
   #tbl tr:first-child td { height:45px; }
   #tbl input[type=number], #tbl select { width:100px; }
   #sum { display:none; }
   #sum td:first-child { padding-left:0; }
   #tbl tr>td:nth-child(2) { display:none; }
@media all and (max-width: 600px) {
   .nav-tabs { display:none; }
   #tbl input[type=number], #tbl select { width:85px; }
}
</style>
&nbsp;
<button><a type="button" href="menu1.php"> Menu</a></button>
&nbsp;
<button><a type="button" href="gradecalculator.php"> Grade Calculator</a></button>
&nbsp;
<button><a type="button" href="subject.php"> Subjects</a></button>
&nbsp;
<pre></pre>
<hr size="8" width="90%" color="grey" ;>

<body
background="https://th.bing.com/th/id/R.fd6fb4599bfa0da09f47605673aba735?rik=aQxd0NyonnaDZQ&riu=http%3a%2f%2flava360.com%2fwp-content%2fuploads%2f2014%2f01%2fClassic-Background-Images-For-Wordpress-Blogs-10.jpg&ehk=xMyrCR0lLxYQmNAPJbRToGxbvSvMmswVAsBJKFE3Bg8%3d&risl=&pid=ImgRaw&r=0">
</body>

</head>
<body>
<div id="header">
<div>

<div class="gcse-search"></div>
<div id="tooldiv">
</div>
</div>
</div>
<div id="wrapper">
<div id="nav">


</div>

<div id='div-gpt-ad-1639638001114-0'>
</div>
<div id="lcol">
<div id="doc">

<h1>Grade Calculator</h1>

<br>
<p>Grade calculator with percentage grades, letter grades and points grade calculations:</p>
<form id="calcform" autocomplete="off">

<div class="form-group">
<table id="tbl">
<tbody>
<tr>
<td>Assignment<br>(optional)</td>
<td>Grade (letter)</td>
<td>Grade (%)</td>
<td>Weight (%)</td>
</tr>
<tr>
<td><input type='text' placeholder='e.g Assignment' class='form-control' autofocus></td>
<td><select name='lgrade[]' class='form-control'>
<option selected>--</option>
<option>A+</option>
<option>A</option>
<option>A-</option>
<option>B+</option>
<option>B</option>
<option>B-</option>
<option>C+</option>
<option>C</option>
<option>F</option>
</select></td>
<td><input type='number' name='grade[]' min='0' step='any' class='form-control'></td>
<td><input type='number' name='weight[]' min='0' step='any' class='form-control'></td>
</tr>
<tr>
<td><input type='text' placeholder='e.g Homework' class='form-control'></td>
<td><select name='lgrade[]' class='form-control'>
<option selected>--</option>
<option>A+</option>
<option>A</option>
<option>A-</option>
<option>B+</option>
<option>B</option>
<option>B-</option>
<option>C+</option>
<option>C</option>
<option>F</option>
</select></td>
<td><input type='number' name='grade[]' min='0' step='any' class='form-control'></td>
<td><input type='number' name='weight[]' min='0' step='any' class='form-control'></td>
</tr>
<tr>
<td><input type='text' placeholder='e.g Exam' class='form-control'></td>
<td><select name='lgrade[]' class='form-control'>
<option selected>--</option>
<option>A+</option>
<option>A</option>
<option>A-</option>
<option>B+</option>
<option>B</option>
<option>B-</option>
<option>C+</option>
<option>C</option>
<option>F</option>
</select></td>
<td><input type='number' name='grade[]' min='0' step='any' class='form-control'></td>
<td><input type='number' name='weight[]' min='0' step='any' class='form-control'></td>
</tr>
<tr>
<td><input type='text' placeholder='' class='form-control'></td>
<td><select name='lgrade[]' class='form-control'>
<option selected>--</option>
<option>A+</option>
<option>A</option>
<option>A-</option>
<option>B+</option>
<option>B</option>
<option>B-</option>
<option>C+</option>
<option>C</option>
<option>F</option>
</select></td>
<td><input type='number' name='grade[]' min='0' step='any' class='form-control'></td>
<td><input type='number' name='weight[]' min='0' step='any' class='form-control'></td>
</tr>
<tr>
<td><input type='text' placeholder="" class='form-control'></td>
<td><select name='lgrade[]' class='form-control'>
<option selected>--</option>
<option>A+</option>
<option>A</option>
<option>A-</option>
<option>B+</option>
<option>B</option>
<option>B-</option>
<option>C+</option>
<option>C</option>
<option>F</option>
</select></td>
<td><input type='number' name='grade[]' min='0' step='any' class='form-control'></td>
<td><input type='number' name='weight[]' min='0' step='any' class='form-control'></td>
</tr>
<tr>
<td><input type='text' placeholder="" class='form-control'></td>
<td><select name='lgrade[]' class='form-control'>
<option selected>--</option>
<option>A+</option>
<option>A</option>
<option>A-</option>
<option>B+</option>
<option>B</option>
<option>B-</option>
<option>C+</option>
<option>C</option>
<option>F</option>
</select></td>
<td><input type='number' name='grade[]' min='0' step='any' class='form-control'></td>
<td><input type='number' name='weight[]' min='0' step='any' class='form-control'></td>
</tr>
<tr>
<td><input type='text' placeholder="" class='form-control'></td>
<td><select name='lgrade[]' class='form-control'>
<option selected>--</option>
<option>A+</option>
<option>A</option>
<option>A-</option>
<option>B+</option>
<option>B</option>
<option>B-</option>
<option>C+</option>
<option>C</option>
<option>F</option>
</select></td>
<td><input type='number' name='grade[]' min='0' step='any' class='form-control'></td>
<td><input type='number' name='weight[]' min='0' step='any' class='form-control'></td>
</tr>
<tr>
<td><input type='text' placeholder="" class='form-control'></td>
<td><select name='lgrade[]' class='form-control'>
<option selected>--</option>
<option>A+</option>
<option>A</option>
<option>A-</option>
<option>B+</option>
<option>B</option>
<option>B-</option>
<option>C+</option>
<option>C</option>
<option>F</option>
</select></td>
<td><input type='number' name='grade[]' min='0' step='any' class='form-control'></td>
<td><input type='number' name='weight[]' min='0' step='any' class='form-control'></td>
</tr>
<tr id="sum">
<td>Total:</td>
<td>&nbsp;</td>
<td><input type="number" min="0" step="any" class="form-control" readonly></td>
<td><input type="number" min="0" step="any" class="form-control" placeholder="100"></td>
</tr>
</tbody>
</table>
</div>
<div class="form-group">
<button type="button" id="addrow" title="Add row" onclick="AddRow()" class="btn btn-light btn-sm btn-block"><span>+</span> Add row</button>
</div>
<div id="reqdiv" class="form-group form-inline">
<span class="mb-2">Find additional grade needed to get average grade of</span>
<div class="input-group mr-1 ml-1" style="width:30% !important">
<input type="number" min="0" step="any" id="rgrade" class="form-control" placeholder="80">
<div class="input-group-append">
<span class="input-group-text">%</span>
</div>
</div>

</div>

<div class="form-group">
<button type="button" id="calcbtn" title="Calculate" onclick="Calc()" class="btn btn-success"><span>=</span> Calculate</button>
<button type="reset" id="resetbtn" title="Reset" onclick="OnReset()" class="btn btn-secondary"><span>&times;</span> Reset</button>
</div>
<div class="form-group">
<label id="avglabel" for="avg">Average grade</label>
<div class="input-group">
<input type="text" id="avg" class="form-control form-control-lg mr-2" readonly>
<input type="text" id="avglet" class="form-control form-control-lg" readonly>
</div>
</div>
<div class="form-group">
<div id="gradecircle" class="red small mb-3"></div>
</div>
<div id="calcdiv" class="form-group">
<label for="area">Grade calculation</label>
<textarea id="area" class="form-control" readonly></textarea>
</div>
<div id="finaldiv" class="form-group">
<label for="fg">Additional grade needed</label>
<div class="input-group">
<input type="text" id="fg" class="form-control form-control-lg mr-2" readonly>
<input type="text" id="fglet" class="form-control form-control-lg" readonly>
</div>
</div>
</form>

<script>
   "use strict";
   var gradetype=document.getElementsByName("gradetype");
   var gradefmt=document.getElementsByName("gradefmt");
   var reqdiv=document.getElementById("reqdiv");
   var calcdiv=document.getElementById("calcdiv");
   var tblElem=document.getElementById("tbl");
   var finaldiv=document.getElementById("finaldiv");
   var sumElem=document.getElementById("sum");
   //var gradecircle=document.getElementById("gradecircle");
   var avglabelElem=document.getElementById("avglabel");
   var avgElem=document.getElementById("avg");
   var avgletElem=document.getElementById("avglet");
   var areaElem=document.getElementById("area");
   var fgElem=document.getElementById("fg");
   var fgletElem=document.getElementById("fglet");
   var gradetypeElem=document.getElementsByName("gradetype");

   var weight=[];
   var grade=[];
   var avg;
   var rows=8;
   var igradetype=0;
   window.onunload = function() {
      localSave();
   };
   //window.onload = function() {
   window.addEventListener("DOMContentLoaded",function() {
      document.getElementById("calcform2").onkeypress = function(e) { if( e.keyCode==13 ) Calc0(); };
      gradetype[0].addEventListener("click", function() { GradeType(0); });
      gradetype[1].addEventListener("click", function() { GradeType(1); });
      gradetype[2].addEventListener("click", function() { GradeType(2); });
      var params=GetURLParams();
      //if( Object.keys(params).length>0 ) {
      if( typeof params.grade1 != "undefined" ) {
         document.querySelector("#tbl>tbody>tr:nth-child(3)>td:nth-child(4)>input").value=params.weight1;
         document.querySelector("#tbl>tbody>tr:nth-child(3)>td:nth-child(3)>input").value=params.grade1;
         document.querySelector("#tbl>tbody>tr:nth-child(4)>td:nth-child(4)>input").value=100-params.weight1;
         document.querySelector("#tbl>tbody>tr:nth-child(4)>td:nth-child(3)>input").value=params.grade2;
      }
      localLoad();
   });
   function localLoad()
   {
		var params = localStorage.getObject("gradecalculator_params");
      if( params==null ) return;
      GradeType(params.igradetype);
      var drows=params.text.length-8;
      if( drows>0 ) {
         for(var i=0; i<drows; i++)
            AddRow();
      }
      for(var i=0; i<rows; i++) {
         var k=i+2;
         var row=document.querySelector("#tbl>tbody>tr:nth-child("+k+")");
         if( row==null ) return;
         row.querySelector("td:nth-child(1)>input").value=params.text[i];
         row.querySelector("td:nth-child(2)>select").selectedIndex=params.lgrade[i];
         row.querySelector("td:nth-child(3)>input").value=params.pgrade[i];
         row.querySelector("td:nth-child(4)>input").value=params.weight[i];
      }
   }
   function localSave()
   {
      var params={};
      params.igradetype = igradetype;
      params.text=[];
      params.lgrade=[];
      params.pgrade=[];
      params.weight=[];
      for(var i=0; i<rows; i++) {
         var k=i+2;
         var row=document.querySelector("#tbl>tbody>tr:nth-child("+k+")");
         if( row==null ) return;
         params.text[i] = row.querySelector("td:nth-child(1)>input").value;
         params.lgrade[i] = row.querySelector("td:nth-child(2)>select").selectedIndex;
         params.pgrade[i] = row.querySelector("td:nth-child(3)>input").value;
         params.weight[i] = row.querySelector("td:nth-child(4)>input").value;
      }
   	localStorage.setObject("gradecalculator_params",params);
   }
   function OnReset()
   {
      if( rows>8 ) {
         for(var i=8; i<rows; i++)
            tblElem.deleteRow(i);
         rows=8;
      }
   }
   function Calc0()
   {
      var avg=document.getElementById("avg0").value;
      var total=document.getElementById("total0").value;
      var weight=document.getElementById("weight0").value;
      var final=(total-avg*(100.0-weight)/100.0)/(weight/100.0);
      document.getElementById("final0").value=final.toFixed(2);
   }
   function GradeType(i)
   {
      igradetype=i;
      if( i==0 )
         GradePercent();
      else if( i==1 )
         GradeLetter();
      else
         GradePoints();
   }
   function GradePercent()
   {
      gradetype[0].setAttribute("checked",true);
      gradetype[1].setAttribute("checked",false);
      gradetype[2].setAttribute("checked",false);
      gradetype[0].parentElement.classList.add("active");
      gradetype[1].parentElement.classList.remove("active");
      gradetype[2].parentElement.classList.remove("active");
      document.querySelector("#tbl tr:nth-child(1)>td:nth-child(3)").innerHTML="Grade (%)";
      document.querySelector("#tbl tr:nth-child(1)>td:nth-child(4)").innerHTML="Weight";
      var el1=document.querySelectorAll("#tbl tr>td:nth-child(2)");
      var el2=document.querySelectorAll("#tbl tr>td:nth-child(3)");
      for(var i=0; i<el1.length; i++) {
         el1[i].style.display="none";
         el2[i].style.display="table-cell";
      }
      reqdiv.style.display="flex";
      calcdiv.style.display="block";
      finaldiv.style.display="block";
      sumElem.style.display="none";
      avglabelElem.innerHTML="Average grade";
      avgElem.value="";
      avgletElem.value="";
      areaElem.value="";
      fgElem.value="";
      fgletElem.value="";
      //document.querySelector("#tbl tr:nth-child(2)>td:nth-child(3)>input").focus();
   }
   function GradeLetter()
   {
      gradetype[0].setAttribute("checked",false);
      gradetype[1].setAttribute("checked",true);
      gradetype[2].setAttribute("checked",false);
      gradetype[0].parentElement.classList.remove("active");
      gradetype[1].parentElement.classList.add("active");
      gradetype[2].parentElement.classList.remove("active");
      document.querySelector("#tbl tr:nth-child(1)>td:nth-child(3)").innerHTML="Grade (%)";
      document.querySelector("#tbl tr:nth-child(1)>td:nth-child(4)").innerHTML="Weight";
      var el1=document.querySelectorAll("#tbl tr>td:nth-child(2)");
      var el2=document.querySelectorAll("#tbl tr>td:nth-child(3)");
      for(var i=0; i<el1.length; i++) {
         el1[i].style.display="table-cell";
         el2[i].style.display="none";
      }
      reqdiv.style.display="none";
      calcdiv.style.display="none";
      finaldiv.style.display="none";
      sumElem.style.display="none";
      avglabelElem.innerHTML="GPA";
      //SetFinalURL();
      avgElem.value="";
      avgletElem.value="";
      //document.querySelector("#tbl tr:nth-child(2)>td:nth-child(2)>select").focus();
   }
   function GradePoints()
   {
      gradetype[0].setAttribute("checked",false);
      gradetype[1].setAttribute("checked",false);
      gradetype[2].setAttribute("checked",true);
      gradetype[0].parentElement.classList.remove("active");
      gradetype[1].parentElement.classList.remove("active");
      gradetype[2].parentElement.classList.add("active");
      document.querySelector("#tbl tr:nth-child(1)>td:nth-child(3)").innerHTML="Grade<br>(points)";
      document.querySelector("#tbl tr:nth-child(1)>td:nth-child(4)").innerHTML="Max Grade<br>(optional)";
      var el1=document.querySelectorAll("#tbl tr>td:nth-child(2)");
      var el2=document.querySelectorAll("#tbl tr>td:nth-child(3)");
      for(var i=0; i<el1.length; i++) {
         el1[i].style.display="none";
         el2[i].style.display="table-cell";
      }
      reqdiv.style.display="none";
      calcdiv.style.display="none";
      finaldiv.style.display="none";
      sumElem.style.display="table-row";
      avglabelElem.innerHTML="Total grade";
      //SetFinalURL();
      avgElem.value="";
      avgletElem.value="";
      //document.querySelector("#tbl tr:nth-child(2)>td:nth-child(3)>input").focus();
   }
   function Calc()
   {
      var i,dp;
      //for(i=0; i<gradetype.length; i++)
      //   if( gradetype[i].checked ) break;
      i=igradetype;
      for(dp=0; dp<gradefmt.length; dp++)
         if( gradefmt[dp].checked ) break;
      if( i==0 )
         CalcPercent(dp);
      else if( i==1 )
         CalcLetter(dp);
      else if( i==2 )
         CalcPoints(dp);
   }
   function CalcPercent(dp)
   {
      avg=0;
      var sum=0;
      var txt="";
      var tavg="";
      var tsum="";
      for(var i=0; i<rows; i++)
      {
         var k=i+2;
         grade[i] = document.querySelector("#tbl>tbody>tr:nth-child("+k+")>td:nth-child(3)>input").value;
         weight[i] = document.querySelector("#tbl>tbody>tr:nth-child("+k+")>td:nth-child(4)>input").value;
         grade[i] = parseFloat(grade[i]);
         weight[i] = parseFloat(weight[i]);
         if( weight[i]>0 && grade[i]>=0 )
         {
            avg+=weight[i]*grade[i];
            sum+=weight[i];
            if( i>0 ) { tavg+="+"; tsum+="+"; }
            tavg+=weight[i]+"\u00D7"+grade[i];
            tsum+=weight[i];
         }
      }
      if( avg==0 || sum==0 )
      {
         alert("Please enter grades & weights");
         return;
      }
      var topsum=avg;
      avg/=sum;
      avg=avg.toFixed(dp);
      txt="("+tavg+") / ("+tsum+") = "+roundresult(topsum)+" / "+roundresult(sum)+" = "+avg;
      var avglet=GetLetterFromPercent(avg);
      var rgrade=document.getElementById("rgrade").value;
      if( rgrade=="" ) rgrade=80;
      var final = (100*rgrade-sum*avg)/(100-sum);
      final = final.toFixed(dp);
      var finallet = GetLetterFromPercent(final);
      avgElem.value=avg;
      avgletElem.value=avglet;
      areaElem.value=txt;
      fgElem.value=final;
      fgletElem.value=finallet;
      if( avg==Math.floor(avg) ) avg=Math.floor(avg);
      //var url="final-grade-calculator.html?grade="+avg+"&weight="+sum;
      //if( sum<=0 || sum>=100 ) url=undefined;
      //SetFinalURL(url);
      var percent=avg;
      if( percent>100 ) percent=100;
   }
   function CalcLetter(dp)
   {
      avg=0;
      var sum=0;
      var txt="";
      var tavg="";
      var tsum="";
      var glook=[-1,4,4,3.67,3.33,3,2.67,2.33,2,0];
      for(var i=0; i<rows; i++)
      {
         var k=i+2;
         var index = document.querySelector("#tbl>tbody>tr:nth-child("+k+")>td:nth-child(2)>select").selectedIndex;
         grade[i] = glook[index];
         weight[i] = document.querySelector("#tbl>tbody>tr:nth-child("+k+")>td:nth-child(4)>input").value;
         //grade[i] = parseFloat(grade[i]);
         weight[i] = parseFloat(weight[i]);
         if( weight[i]>0 && grade[i]>=0 )
         {
            avg+=weight[i]*grade[i];
            sum+=weight[i];
            if( i>0 ) { tavg+="+"; tsum+="+"; }
            tavg+=weight[i]+"\u00D7"+grade[i];
            tsum+=weight[i];
         }
      }
      if( avg==0 || sum==0 )
      {
         alert("Please enter grades & weights");
         return;
      }
      avg/=sum;
      avg=avg.toFixed(dp);
      //txt="("+tavg+") / ("+tsum+") = "+roundresult(topsum)+" / "+roundresult(sum)+" = "+avg;
      var avglet=GetLetterFromGPA(avg);
      avgElem.value=avg;
      avgletElem.value=avglet;
   }
   function CalcPoints(dp)
   {
      var pointsum, maxsum;
      [pointsum, maxsum] = CalcTotal();
      if( pointsum==0 || maxsum==0 )
      {
         alert("Please enter grade points");
         return;
      }
      avg=pointsum/maxsum*100;
      avg=avg.toFixed(dp);
      var avglet=GetLetterFromPercent(avg);
      avgElem.value=avg;
      avgletElem.value=avglet;
   }
   function GetLetterFromPercent(percent)
   {
      var letter="";
      var lettertbl=['A+','A','A-','B+','B','B-','C+','C','F'];
      var percenttbl=[90,80,75,70,65,60,55,50,0];
      for(var i=0; i<percenttbl.length; i++)
         if( percent>=percenttbl[i] )
         {
            letter = lettertbl[i];
            break;
         }
      return letter;
   }
   function GetLetterFromGPA(gpa)
   {
      var letter="F";
      var lettertbl=['A+','A','A-','B+','B','B-','C+','C','F'];
      var gpatbl=[4,4,3.67,3.33,3,2.67,2.33,2,0];
      for(var i=0; i<gpatbl.length; i++)
         if( gpa>=gpatbl[i] )
         {
            letter = lettertbl[i];
            break;
         }
      return letter;
   }
   function CalcTotal()
   {
      var pointsum=0;
      var maxsum=0;
      for(var i=0; i<rows; i++)
      {
         var k=i+2;
         grade[i] = document.querySelector("#tbl>tbody>tr:nth-child("+k+")>td:nth-child(3)>input").value;
         weight[i] = document.querySelector("#tbl>tbody>tr:nth-child("+k+")>td:nth-child(4)>input").value;
         grade[i] = parseFloat(grade[i]);
         weight[i] = parseFloat(weight[i]);
         if( grade[i]>=0 ) {
            pointsum+=grade[i];
            if( weight[i]>=0 )
               maxsum+=weight[i];
         }
      }
      document.querySelector("#sum td:nth-child(3) input").value=pointsum;
      if( maxsum>0 )
         document.querySelector("#sum td:nth-child(4) input").value=maxsum;
      else {
         maxsum=document.querySelector("#sum td:nth-child(4) input").value;
         if( maxsum=="" ) 
            maxsum=100;
         else
            maxsum=parseFloat(maxsum);
      }
      return([pointsum,maxsum]);
   }
   function SetFinalURL(url)
   {
      if( url===undefined ) url="final-grade-calculator.html";
      document.getElementById("final1").href=url;
      document.getElementById("final2").href=url;
   }
   function GetURLParams()
   {
      var url=window.location.href;
      var regex = /[?&]([^=#]+)=([^&#]*)/g,
            //url = "www.domain.com/?v=123&p=hello",
            params = {},
            match;
      while(match = regex.exec(url)) {
            params[match[1]] = match[2];
      }
      return params;
   }
   function AddRow()
   {
     var tableRef = document.getElementById('tbl').getElementsByTagName('tbody')[0];
     var newRow = tableRef.insertRow(++rows);
     newRow.innerHTML = "<tr>\
         <td><input type='text' class='form-control'></td>\
         <td><select name='lgrade[]' class='form-control'>\
            <option selected>--</option>\
            <option>A+</option>\
            <option>A</option>\
            <option>A-</option>\
            <option>B+</option>\
            <option>B</option>\
            <option>B-</option>\
            <option>C+</option>\
            <option>C</option>\
            <option>F</option>\
         </select></td>\
         <td><input type='number' name='grade[]' min='0' step='any' class='form-control'></td>\
         <td><input type='number' name='weight[]' min='0' step='any' class='form-control'></td>\
      </tr>";

      var k=rows+1;
      var i,dp;
      for(i=0; i<gradetype.length; i++) {
         //if( gradetype[i].checked ) break;
         console.log(gradetype[i].getAttribute("checked"));
         if( gradetype[i].getAttribute("checked")=="true" ) break;
      }
      if( i==1 ) {
         document.querySelector("#tbl tr:nth-child("+k+")>td:nth-child(3)").style.display="none";
         document.querySelector("#tbl tr:nth-child("+k+")>td:nth-child(2)").style.display="table-cell";
      } else {
         document.querySelector("#tbl tr:nth-child("+k+")>td:nth-child(2)").style.display="none";
         document.querySelector("#tbl tr:nth-child("+k+")>td:nth-child(3)").style.display="table-cell";
      }
   }
   function roundresult(x) {
      var y=parseFloat(x);
      y=roundnum(y,10);
      return y;
   }
   function roundnum(x,p) {
      var i;
      var n=parseFloat(x);
      var m=n.toPrecision(p+1);
      var y=String(m);
      i=y.indexOf('e');
      if( i==-1 )	i=y.length;
      var j=y.indexOf('.');
      if( i>j && j!=-1 ) 
      {
         while(i>0)
         {
            if(y.charAt(--i)=='0')
               y = removeAt(y,i);
            else
               break;
         }
         if(y.charAt(i)=='.')
            y = removeAt(y,i);
      }
      return y;
   }
   function removeAt(s,i) {
      s = s.substring(0,i)+s.substring(i+1,s.length);
      return s;
   }
   Storage.prototype.setObject = function(key, value) {
      this.setItem(key, JSON.stringify(value));
   }
   Storage.prototype.getObject = function(key) {
      var value = this.getItem(key);
      if( value==null || value=="undefined" ) return null;
      return value && JSON.parse(value);
   }
</script>


</body>

</html>
