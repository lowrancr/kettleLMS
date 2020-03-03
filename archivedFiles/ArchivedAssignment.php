<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Archive Assignment</title>
    <!-- My Stylesheet -->
    <link rel="stylesheet" href="css/ArchivedAssignment.css" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
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

    <!-- 1st row after header to make space-->
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>

    </div>

    <!-- 2nd row for Dropdown -->
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-4"></div>

        <!-- Classes Dropdown -->
        <div class="col-md-4">

          <!-- Dropdown for course selection -->
          <input id="course-list-drowpdown" list="course-List" type="text" placeholder="Select Course">
          <!-- Data list of courses for Dropdown -->
          <datalist id="course-List">
            <option value="Course 1"></option>
            <option value="Course 2"></option>
            <option value="Course 3"></option>
            <option value="Course 4"></option>
          </datalist>

        </div>

        <!-- Buttons -->
        <div class="col-md-4">.col-md-4</div>

      </div>

      </div>

    </div>

    <!-- 3rd Row for the box -->
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">.col-md-2</div>
          <!-- Assingment List Box -->
          <div class="col-md-8 rounded"id="assignmentListArea">
            <div class="card-columns">
              <!-- 1st Card -->
              <div class="card bg-light">
                  <div class="card-body text-center">
                    <p class="card-text">1st Card</p>
                  </div>
              </div>
              <!-- 2nd Card -->
              <div class="card bg-light">
                  <div class="card-body text-center">
                    <p class="card-text">2nd Card</p>
                  </div>
              </div>
              <!-- 3rd Card -->
              <div class="card bg-light">
                  <div class="card-body text-center">
                    <p class="card-text">3rd Card</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">.col-md-2</div>
        </div>
    </div>
  </body>
</html>
