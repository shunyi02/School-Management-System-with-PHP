<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
  <title>Student Academic Performance </title>


<body>

  &nbsp;

  <style>
    div.a {
      text-align: center;
    }
  
  </style>
  
  <button><a type="button" href="1.menu.php"> Menu</a></button>
  &nbsp;
  <button><a type="button" href="cgpacalculator.php"> GPA/CGPA Calculator</a></button>
  &nbsp;
  <button><a type="button" href="subjects.php"> Subjects</a></button>
  &nbsp;
  <pre></pre>
  <hr size="8" width="100%" color="grey" ;>


  <body
    background="https://th.bing.com/th/id/R.fd6fb4599bfa0da09f47605673aba735?rik=aQxd0NyonnaDZQ&riu=http%3a%2f%2flava360.com%2fwp-content%2fuploads%2f2014%2f01%2fClassic-Background-Images-For-Wordpress-Blogs-10.jpg&ehk=xMyrCR0lLxYQmNAPJbRToGxbvSvMmswVAsBJKFE3Bg8%3d&risl=&pid=ImgRaw&r=0">
  </body>

  <body><embed id="__IDM__" type="application/x-idm-downloader" width="1" height="1"
      style="visibility: hidden !important; display: block !important; width: 1px !important; height: 1px !important; border-style: none !important; position: absolute !important; top: 0px !important; left: 0px !important;">

    <font color="#000000"><em>
        <form class="formborder" name="gpa_info" action="calculator.html" method="post">


          <table class="tableborderzero">
            <tbody>
              <tr>
                <td class="tableborderzero">
                  <table class="tableborderzero">
                    <tbody>
                      <tr>
                        <td class="tableborderzero">Current CGPA: </td>
                        <td class="tableborderzero"><input size="5" name="gpa"> </td>
                      </tr>

                      <tr>
                        <td class="tableborderzero">Total credit hours : </td>
                        <td class="tableborderzero"><input size="5" name="doned"> </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td class="tableborderzero">
                </td>
              </tr>
            </tbody>
          </table>
        </form>

      </em>
      <form class="formborder" name="forrm" action="http://www.utar.edu.my/" method="post"><em>
          <table class="tableborderzero">
            <tbody>

              <tr>
                <td class="tableborderzero" width="90">No.&nbsp;&nbsp;Grade </td>
                <td class="tableborderzero">Point </td>
                <td class="tableborderzero">* </td>
                <td class="tableborderzero">Credit Hours </td>
                <td class="tableborderzero">= </td>
                <td class="tableborderzero">Grade Points </td>
                <td class="tableborderzero">Course</td>
               
              </tr>

              
              <tr>
                
                <td class="tableborderzero" width="90">1&nbsp;&nbsp;&nbsp; <select
                    onchange="update_gp(1, this.options[this.selectedIndex].value)" name="grade_1">
                    
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option value="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_1"> </td>
                <td class="tableborderzero">* </td>
                <td class="tableborderzero"><select onchange="update_hours(1, this.options[this.selectedIndex].value)"
                    name="points_1">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>
               

                 


                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_1"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">2&nbsp;&nbsp;&nbsp; <select
                    onchange="update_gp(2, this.options[this.selectedIndex].value)" name="grade_2">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option value="0">
                      F</option>
                  
                  




                <td class="tableborderzero"><input size="5" name="grade_gp_2"> </td>
                <td class="tableborderzero">* </td>
                <td class="tableborderzero"><select onchange="update_hours(2, this.options[this.selectedIndex].value)"
                    name="points_2">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_2"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">3&nbsp;&nbsp;&nbsp; <select
                    onchange="update_gp(3, this.options[this.selectedIndex].value)" name="grade_3">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_3"> </td>
                <td class="tableborderzero">* </td>
                <td class="tableborderzero"><select onchange="update_hours(3, this.options[this.selectedIndex].value)"
                    name="points_3">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_3"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">4&nbsp;&nbsp;&nbsp; <select
                    onchange="update_gp(4, this.options[this.selectedIndex].value)" name="grade_4">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select></td>

                <td class="tableborderzero"><input size="5" name="grade_gp_4"> </td>
                <td class="tableborderzero">* </td>
                <td class="tableborderzero"><select onchange="update_hours(4, this.options[this.selectedIndex].value)"
                    name="points_4">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_4"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">5&nbsp;&nbsp;&nbsp; <select
                    onchange="update_gp(5, this.options[this.selectedIndex].value)" name="grade_5">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_5"> </td>
                <td class="tableborderzero">* </td>
                <td class="tableborderzero"><select onchange="update_hours(5, this.options[this.selectedIndex].value)"
                    name="points_5">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_5"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">6&nbsp;&nbsp;&nbsp; <select
                    onchange="update_gp(6, this.options[this.selectedIndex].value)" name="grade_6">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_6"> </td>
                <td class="tableborderzero">* </td>
                <td class="tableborderzero"><select onchange="update_hours(6, this.options[this.selectedIndex].value)"
                    name="points_6">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_6"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">7&nbsp;&nbsp;&nbsp; <select
                    onchange="update_gp(7, this.options[this.selectedIndex].value)" name="grade_7">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_7"> </td>
                <td class="tableborderzero">* </td>
                <td class="tableborderzero"><select onchange="update_hours(7, this.options[this.selectedIndex].value)"
                    name="points_7">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_7"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">8&nbsp;&nbsp;&nbsp; <select
                    onchange="update_gp(8, this.options[this.selectedIndex].value)" name="grade_8">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_8"> </td>
                <td class="tableborderzero">* </td>
                <td class="tableborderzero"><select onchange="update_hours(8, this.options[this.selectedIndex].value)"
                    name="points_8">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_8"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">9&nbsp;&nbsp;&nbsp; <select
                    onchange="update_gp(9, this.options[this.selectedIndex].value)" name="grade_9">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_9"> </td>
                <td class="tableborderzero">* </td>
                <td class="tableborderzero"><select onchange="update_hours(9, this.options[this.selectedIndex].value)"
                    name="points_9">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_9"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">10&nbsp; <select
                    onchange="update_gp(10, this.options[this.selectedIndex].value)" name="grade_10">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_10"> </td>
                <td class="tableborderzero"> * </td>
                <td class="tableborderzero"><select onchange="update_hours(10, this.options[this.selectedIndex].value)"
                    name="points_10">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_10"> </td>
              </tr>

              <tr>
                <td class="tableborderzero" width="90">11&nbsp; <select
                    onchange="update_gp(11, this.options[this.selectedIndex].value)" name="grade_11">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_11"> </td>
                <td class="tableborderzero"> * </td>
                <td class="tableborderzero"><select onchange="update_hours(11, this.options[this.selectedIndex].value)"
                    name="points_11">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_11"> </td>
              </tr>

              <tr>
                <td class="tableborderzero" width="90">12&nbsp; <select
                    onchange="update_gp(12, this.options[this.selectedIndex].value)" name="grade_12">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_12"> </td>
                <td class="tableborderzero"> * </td>
                <td class="tableborderzero"><select onchange="update_hours(12, this.options[this.selectedIndex].value)"
                    name="points_12">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_12"> </td>
              </tr>

              <tr>
                <td class="tableborderzero" width="90">13&nbsp; <select
                    onchange="update_gp(13, this.options[this.selectedIndex].value)" name="grade_13">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_13"> </td>
                <td class="tableborderzero"> * </td>
                <td class="tableborderzero"><select onchange="update_hours(13, this.options[this.selectedIndex].value)"
                    name="points_13">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_13"> </td>
              </tr>

              <tr>
                <td class="tableborderzero" width="90">14&nbsp; <select
                    onchange="update_gp(14, this.options[this.selectedIndex].value)" name="grade_14">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_14"> </td>
                <td class="tableborderzero"> * </td>
                <td class="tableborderzero"><select onchange="update_hours(14, this.options[this.selectedIndex].value)"
                    name="points_14">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_14"> </td>
              </tr>

              <tr>
                <td class="tableborderzero" width="90">15&nbsp; <select
                    onchange="update_gp(15, this.options[this.selectedIndex].value)" name="grade_15">
                    <option value="" selected="">
                      Select</option>
                    <option value="4.00">A+</option>
                    <option value="4.00">A</option>
                    <option value="3.67">
                      A-</option>
                    <option value="3.33">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.67">
                      B-</option>
                    <option value="2.33">C+</option>
                    <option value="2.00">C</option>
                    <option vaue="0.00">
                      F</option>
                  </select> </td>

                <td class="tableborderzero"><input size="5" name="grade_gp_15"> </td>
                <td class="tableborderzero"> * </td>
                <td class="tableborderzero"><select onchange="update_hours(15, this.options[this.selectedIndex].value)"
                    name="points_15">
                    <option value="-0.5" selected="">
                      Select</option>
                    <option value="1.0">1</option>
                    <option value="2.0">2</option>
                    <option value="3.0">
                      3</option>
                    <option value="4.0">4</option>
                    <option value="5.0">5</option>
                  </select> </td>

                <td class="tableborderzero">= </td>
                <td class="tableborderzero"><input size="5" name="gp_15"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="tableborderzero" width="90">
                  <font color="#000000">
                    <input onclick="update_gpas()" type="button" value="Calculate" <="" font="">
                  </font>
                </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">Sum </td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"><input size="5" name="sum_credit_hours"> </td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"><input size="5" name="sum_grade_points"> </td>
              </tr>

              <tr>
                <td class="tableborderzero" width="90">GPA </td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"><input size="5" name="term_gpa"> </td>
              </tr>
              <tr>
                <td class="tableborderzero" width="90">CGPA </td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"></td>
                <td class="tableborderzero"><input size="5" name="cumulative_gpa"> </td>
              </tr>
            </tbody>
          </table>
        </em><em>
          <p></p>

          <script language="javascript">


            function update_gp(field, grade_point) {
              var textfield = "grade_gp_" + field;

              document.forms['forrm'].elements[textfield].value = grade_point;

              update_hours(field);
            }

            function update_hours(field) {
              var gradefield = "";
              var credit_hours = "";
              var grade = "";
              var gp = "";
              var hours = "";

              credit_hours = "points_" + field;
              gradefield = "gp_" + field;
              grade = "grade_gp_" + field;

              hours = document.forms['forrm'].elements[credit_hours].options[document.forms['forrm'].elements[credit_hours].selectedIndex].value;
              gp = document.forms['forrm'].elements[grade].value;

              if ((gp != "") && (hours != -0.5)) {
                document.forms['forrm'].elements[gradefield].value = Math.round(gp * hours * 100) / 100;
              } else {
                document.forms['forrm'].elements[gradefield].value = "";
              }
            }

            function update_gpas() {
              var gradefield = "";
              var credit_hours = "";
              var gp = 0.0;
              var hours = 0.0
              var total_hours = 0.0;
              var sum_grade_points = 0.0;
              var index = 0;
              var credits = 1.0 * document.forms['gpa_info'].elements['doned'].value;
              var gpa = 1.0 * document.forms['gpa_info'].elements['gpa'].value;
              var grade_name;

              index = 1;
              while (index <= 15) {

                grade_name = "grade_" + index;
                update_gp(index, document.forms['forrm'].elements[grade_name].options[document.forms['forrm'].elements[grade_name].selectedIndex].value);

                gradefield = "gp_" + index;
                credit_hours = "points_" + index;

                hours = document.forms['forrm'].elements[credit_hours].options[document.forms['forrm'].elements[credit_hours].selectedIndex].value;
                gp = document.forms['forrm'].elements[gradefield].value;

                if ((gp != "") && (hours != "")) {
                  total_hours += 1.0 * hours;
                }
                sum_grade_points += 1.0 * gp;

                index++;
              }

              document.forms['forrm'].elements['sum_credit_hours'].value = total_hours;
              document.forms['forrm'].elements['sum_grade_points'].value = sum_grade_points;

              if (total_hours > 0) {
                document.forms['forrm'].elements['term_gpa'].value = Math.round(sum_grade_points / total_hours * 10000) / 10000;
              } else {
                document.forms['forrm'].elements['term_gpa'].value = "";
              }

              document.forms['forrm'].elements['cumulative_gpa'].value = Math.round(10000 * (sum_grade_points + gpa * credits) / (credits + total_hours)) / 10000;
            }


          </script>

          <noscript>
            <div class="statcounter"><a title="free web stats" href="http://statcounter.com/free-web-stats/"
                target="_blank"><img class="statcounter" src="http://c.statcounter.com/7660008/0/93e4d14f/0/"
                  alt="free web stats"></a></div>
          </noscript>
          <!-- End of StatCounter Code for Default Guide -->


          </p>


          </h5>
        </em></form>
    </font><iframe src="./calc_files/userData.htm"
      style="position: absolute; top: -100px; left: -100px; z-index: -10; border: none; visibility: hidden; width: 1px; height: 1px;"></iframe><iframe
      src="./calc_files/register_server_layer.htm"
      style="position: absolute; width: 1px; height: 1px; left: -100px; top: -100px; visibility: hidden;"></iframe><iframe
      style="position: absolute; width: 1px; height: 1px; top: 0px; left: 0px; visibility: hidden;"></iframe>
    <sfmsg id="sfMsgId" data="{&quot;imageCount&quot;:0,&quot;ip&quot;:&quot;1.1.1.1&quot;}"></sfmsg>
    
   
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
      
      <h2>Grading Table</h2>
      
      <table>
        <tr>
          <th>Letters</th>
          <th>Marks</th>
          <th>Points</th>
        </tr>
        <tr>
          <td>A+</td>
          <td>90-100</td>
          <td>4</td>
        </tr>
      </tr><tr><td>A</td><td>80-89</td><td>4</td></tr><tr><td>A-</td><td>75-79</td><td>3.67</td></tr><tr><td>B+</td><td>70-74</td><td>3.33</td></tr><tr><td>B</td><td>65-69</td><td>3</td></tr><tr><td>B-</td><td>60-64</td><td>2.67</td></tr><tr><td>C+</td><td>55-59</td><td>2.33</td></tr><tr><td>C</td><td>50-54</td><td>2</td></tr><tr><td>F</td><td>0-49</td><td>0</td></tr>
      </table>
      
      </body>
      </html>
      
     
  </body>

</html>