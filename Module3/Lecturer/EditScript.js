var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == x.length - 1) {
    document.getElementById("nextBtn").innerHTML = "Save";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n);
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    window.open("StudentInformation.html", "_self")
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x,
    y,
    i,
    valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  
  // A loop that checks every input field in the current tab:
  // for (i = 0; i < y.length; i++) {
  //   // If a field is empty...
  //   if (y[i].value == "") {
  //     // add an "invalid" class to the field:
  //     y[i].className += " invalid";
  //      // and set the current valid status to false
  //      valid = false;
  //   }
  // }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i,
    x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

//Qualification
function edit_row(no) {
  document.getElementById("edit_button" + no).style.display = "none";
  document.getElementById("save_button" + no).style.display = "block";
 
  var education = document.getElementById("education_row" + no);
  var qualification = document.getElementById("qualification_row" + no);
  var cgpa = document.getElementById("cgpa_row" + no);
  var date = document.getElementById("date_row" + no);
 
  var education_data = education.innerHTML;
  var qualification_data = qualification.innerHTML;
  var cgpa_data = cgpa.innerHTML;
  var date_data = date.innerHTML;
 
  education.innerHTML =
   "<input type='text' id='education_text" + no + "' value='" + education_data + "'>";
  qualification.innerHTML =
   "<input type='text' id='qualification_text" +
   no +
   "' value='" +
   qualification_data +
   "'>";
  cgpa.innerHTML =
   "<input type='number' range min=0 max=4 step=0.0001 id='cgpa_text" + no + "' value='" + cgpa_data + "'>";
   date.innerHTML =
   "<input input  type='date' placeholder='dd-mm-yyyy' id='date_text" + no + "' value='" + date_data + "'>";
 }
 
 function save_row(no) {
  var education_val = document.getElementById("education_text" + no).value;
  var qualification_val = document.getElementById("qualification_text" + no).value;
  var cgpa_val = document.getElementById("cgpa_text" + no).value;
  var date_val = document.getElementById("date_text" + no).value;
 
  document.getElementById("education_row" + no).innerHTML = education_val;
  document.getElementById("qualification_row" + no).innerHTML = qualification_val;
  document.getElementById("cgpa_row" + no).innerHTML = cgpa_val;
  document.getElementById("date_row" + no).innerHTML = date_val;
 
  document.getElementById("edit_button" + no).style.display = "block";
  document.getElementById("save_button" + no).style.display = "none";
 }
 
 function delete_row(no) {
  document.getElementById("row" + no + "").outerHTML = "";
 }
 
 function add_row() {
  var new_education = document.getElementById("new_education").value;
  var new_qualification = document.getElementById("new_qualification").value;
  var new_cgpa = document.getElementById("new_cgpa").value;
  var new_date = document.getElementById("new_date").value;
 
  var table = document.getElementById("data_table");
  var table_len = table.rows.length - 1;
  var row = (table.insertRow(table_len).outerHTML =
   "<tr id='row" +
   table_len +
   "'><th>"+table_len+"</th><td id='education_row" +
   table_len +
   "'>" +
   new_education +
   "</td><td id='qualification_row" +
   table_len +
   "'>" +
   new_qualification +
   "</td><td id='cgpa_row" +
   table_len +
   "'>" +
   new_cgpa +
   "</td><td id='date_row" +
   table_len +
   "'>" +
   new_date +
   "</td><td><input type='button' id='edit_button" +
   table_len +
   "' value='Edit' class='edit bg-info mb-3' onclick='edit_row(" +
   table_len +
   ")'> <input type='button' id='save_button" +
   table_len +
   "' value='Save' class='save bg-primary mb-3' onclick='save_row(" +
   table_len +
   ")'> <input type='button' value='Delete' class='delete bg-danger mb-3' onclick='delete_row(" + table_len + ")'></td></tr>");
 
  document.getElementById("new_education").value = "";
  document.getElementById("new_qualification").value = "";
  document.getElementById("new_cgpa").value = "";
  document.getElementById("new_date").value = "";
 }



 //Curricular
 function edit_row1(no) {
  document.getElementById("edit_button" + no).style.display = "none";
  document.getElementById("save_button" + no).style.display = "block";
 
  var education = document.getElementById("education_row" + no);
  var society = document.getElementById("society_row" + no);
  var activity = document.getElementById("activity_row" + no);
  var position = document.getElementById("position_row" + no);
  var date = document.getElementById("date_row" + no);
 
  var education_data = education.innerHTML;
  var society_data = society.innerHTML;
  var activity_data = activity.innerHTML;
  var position_data = position.innerHTML;
  var date_data = date.innerHTML;
 
  education.innerHTML =
   "<input type='text' id='education_text" + no + "' value='" + education_data + "'>";
  society.innerHTML =
   "<input type='text' id='society_text" +
   no +
   "' value='" +
   society_data +
   "'>";
  activity.innerHTML =
   "<input type='text' id='activity_text" + no + "' value='" + activity_data + "'>";
   position.innerHTML =
   "<input type='text' id='position_text" + no + "' value='" + position_data + "'>";
   date.innerHTML =
   "<input input  type='date' placeholder='dd-mm-yyyy' id='date_text" + no + "' value='" + date_data + "'>";
 }
 
 function save_row1(no) {
  var education_val = document.getElementById("education_text" + no).value;
  var society_val = document.getElementById("society_text" + no).value;
  var activity_val = document.getElementById("activity_text" + no).value;
  var position_val = document.getElementById("position_text" + no).value;
  var date_val = document.getElementById("date_text" + no).value;
 
  document.getElementById("education_row" + no).innerHTML = education_val;
  document.getElementById("society_row" + no).innerHTML = society_val;
  document.getElementById("activity_row" + no).innerHTML = activity_val;
  document.getElementById("position_row" + no).innerHTML = position_val;
  document.getElementById("date_row" + no).innerHTML = date_val;
 
  document.getElementById("edit_button" + no).style.display = "block";
  document.getElementById("save_button" + no).style.display = "none";
 }
 
 function delete_row1(no) {
  document.getElementById("row1" + no + "").outerHTML = "";
 }
 
 function add_row1() {
  var new_education = document.getElementById("new_education").value;
  var new_society = document.getElementById("new_society").value;
  var new_activity = document.getElementById("new_activity").value;
  var new_position = document.getElementById("new_position").value;
  var new_date = document.getElementById("new_date").value;
 
  var table = document.getElementById("data_table1");
  var table_len = table.rows.length - 1;
  var row = (table.insertRow(table_len).outerHTML =
   "<tr id='row1" +
   table_len +
   "'><th>"+table_len+"</th><td id='education_row" +
   table_len +
   "'>" +
   new_education +
   "</td><td id='society_row" +
   table_len +
   "'>" +
   new_society +
   "</td><td id='activity_row" +
   table_len +
   "'>" +
   new_activity +
   "</td><td id='position_row" +
   table_len +
   "'>" +
   new_position +
   "</td><td id='date_row" +
   table_len +
   "'>" +
   new_date +
   "</td><td><input type='button' id='edit_button" +
   table_len +
   "' value='Edit' class='edit bg-info mb-3' onclick='edit_row1(" +
   table_len +
   ")'> <input type='button' id='save_button" +
   table_len +
   "' value='Save' class='save bg-primary mb-3' onclick='save_row1(" +
   table_len +
   ")'> <input type='button' value='Delete' class='delete bg-danger mb-3' onclick='delete_row1(" + table_len + ")'></td></tr>");
 
  document.getElementById("new_education").value = "";
  document.getElementById("new_society").value = "";
  document.getElementById("new_activity").value = "";
  document.getElementById("new_position").value = "";
  document.getElementById("new_date").value = "";
 }

 //SoftSkill
 function edit_row2(no) {
  document.getElementById("edit_button" + no).style.display = "none";
  document.getElementById("save_button" + no).style.display = "block";
 
  var softskill = document.getElementById("softskill_row" + no);
 
  var softskill_data = softskill.innerHTML;
 
  softskill.innerHTML =
   "<input type='text' id='softskill_text" + no + "' value='" + softskill_data + "'>";
 }
 
 function save_row2(no) {
  var softskill_val = document.getElementById("softskill_text" + no).value;
  document.getElementById("softskill_row" + no).innerHTML = softskill_val;
 
  document.getElementById("edit_button" + no).style.display = "block";
  document.getElementById("save_button" + no).style.display = "none";
 }
 
 function delete_row2(no) {
  document.getElementById("row" + no + "").outerHTML = "";
 }
 
 function add_row2() {
  var new_softskill = document.getElementById("new_softskill").value;
 
  var table = document.getElementById("data_table2");
  var table_len = table.rows.length - 1;
  var row = (table.insertRow(table_len).outerHTML =
   "<tr id='row" +
   table_len +
   "'><th>"+table_len+"</th><td id='softskill_row" +
   table_len +
   "'>" +
   new_softskill +
   "</td><td><input type='button' id='edit_button" +
   table_len +
   "' value='Edit' class='edit bg-info mb-3' onclick='edit_row2(" +
   table_len +
   ")'> <input type='button' id='save_button" +
   table_len +
   "' value='Save' class='save bg-primary mb-3' onclick='save_row2(" +
   table_len +
   ")'> <input type='button' value='Delete' class='delete bg-danger mb-3' onclick='delete_row2(" + table_len + ")'></td></tr>");
 
  document.getElementById("new_softskill").value = "";
 }
 

 