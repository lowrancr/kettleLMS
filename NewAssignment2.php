<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>NewAssignment2</title>
  <link rel="stylesheet" href="css/NewAssignment2.css" type="text/css">
  </head>
  <!-- Nav Bar -->
  <header>
    <nav>
      <div class="topNav">
        <a href="#home">Home</a>
        <a href="NewAssignment1.php">Assignments</a>
        <a href="#grid">Grid</a>
        <a href="#seating">Seating</a>
        <a href="#reports">Reports</a>
        <a href="#setting">Settings</a>
        <a href="#account" style="float:right">Account</a>
      </div>
    </nav>
  </header>
  <body>
    <!-- Possibly add a big "New Assignment" at the top inbetween info and nav bar -->
    <!-- Course information section -->
    <div class="courseInfo">
      <div id="firstLabelGroup"class="labelGroup">
        <label for="courseID">Course ID</label><br>
        <input type="text" name="courseID" id="courseID" value="" size="12">
      </div>
      <div id="secondLabelGroup"class="labelGroup">
        <label for="courseDept">Course Name</label><br>
        <input type="text" name="courseDept" id="courseDept" value="" size="12">
        <input type="text" name="courseNumber" id="courseValue" value="" size="12">
        <input type="text" name="courseSection" id="courseSection" value="" size="12">
      </div>
      <div id="thirdLabelGroup"class="labelGroup">
        <label for="courseDays">Course Days</label><br>
        <input type="text" name="courseDays" id="courseDays" value="" size="12">
        <input type="text" name="courseTime" id="courseTime" value="" size="12">
        <input type="text" name="courseTerm" id="courseTerm" value="" size="12">
      </div>
    </div>

    <!-- Assignment data form -->
    <div class="assignmentForm">
      <form class="assignmentData" action="" method="">

        <div class="topSide">
          <div class="assignmentDataDivFormatting">
            <label for="assignmentName" class="labelLeft" id="assignmentNameLabel">Assignment Name:</label>
            <input type="text" name="assignmentName" id="assignmentName" value="">
          </div>
        </div>

        <div class="leftSide column">
          <div class="assignmentDataDivFormatting">
            <label for="dateAssigned" class="labelLeft">Date Assigned:</label>
            <input type="date" name="dateAssigned" id="dateAssigned" value=""size="12">
          </div>

          <div class="assignmentDataDivFormatting">
            <label for="pointValue" class="labelLeft">Point Value:</label>
            <input type="text" name="pointValue" id="pointValue" value=""size="12">
          </div>

          <div class="assignmentDataDivFormatting">
            <label for="assignmentWeight" class="labelLeft">Assignment Weight:</label>
            <input type="text" name="assignmentWeight" id="assignmentWeight" value=""size="12">
          </div>

          <div class="assignmentDataDivFormatting">
            <label for="isExtraCredit">Extra Credit:</label>
            <input type="checkbox" name="isExtraCredit" id="isExtraCredit" value=""size="12">
          </div>

          <div class="assignmentDataDivFormatting">
            <label for="isPrivateAssignment">Private Assignment:</label>
            <input type="checkbox" name="isPrivateAssignment" id="isPrivateAssignment" value=""size="12">
          </div>
        </div>

        <div class="rightSide column">
          <div class="assignmentDataDivFormatting collapseDiv">
            <label for="dateDue" class="labelLeftRight">Date Due:</label>
            <input type="date" name="dateDue" id="dateDue" value="" size="12">
          </div>
          <div class="assignmentDataDivFormatting collapseDiv">
            <label for="gradeScale" class="labelLeftRight">Grading Scale:</label>
            <input type="text" name="gradeScale" id="gradeScale" value=""size="12">
          </div>
        </div>

        <div class="buttonsArea">
            <input class="ButtonDesign" type="button" value="Save"></input>
            <input class="ButtonDesign" type="button" value="Save & New"></input>
            <input class="ButtonDesign" type="button" value="Close"onclick="location.href='file:///C:/Users/samlo/OneDrive/Desktop/Project%20Kettle/Web/Forms/New_Assignment_1/NewAssignment1.html'"></input>
        </div>

      </form>
    </div>
    <!-- Buttons section -->

  </body>
</html>
