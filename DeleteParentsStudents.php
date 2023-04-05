<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <style>
    body,
    html {
      background: url(images/sixth-form-students.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 100
    }
  </style>
</head>

<body>
  <header>
    <center style="font-size: 40px;">RHISTON ACADEMY PRIMARY SCHOOL</center>
  </header>
  <div>
    <ul class="nav  justify-content-center pt-5 pb-5">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Students</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="students.php">Students</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="ViewStudents.php">View Students </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateStudents.php"> Update Students</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteStudents.php">Delete Students</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Classes</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="classes.php">Classes</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="ViewClasses.php">View Classes</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateClasses.php">Update Classes</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteClasses.php">Delete Classes</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Parents</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="parents.php">Parents</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="ViewParents.php">View Parents</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateParents.php">Update Parents</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteParents.php">Delete Parents</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Teachers</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="teacher.php">Teachers</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="ViewTeachers.php">View Teachers</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateTeachers.php">Update Teachers</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteTeachers.php">Delete Teachers</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Parents&Students</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="ParentsStudents.php">Parents&Students</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="ViewParentsStudents.php">View Parents&Students</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateParentsStudents.php">Update Parents&Students</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteParentsStudents.php">Delete Parents&Students</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Teaching Assistant</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="TeachersAssistant.php">Teaching Assistants</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="ViewTeachersAssistant.php">View Teaching Assistants</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateTeachersAssistant.php">Update Teaching Assistants</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteTeachersAssistant.php">Delete Teaching Assitants</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Schedule</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="Schedule.php">Schedule</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="ViewSchedule.php">View Schedule</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateSchedule.php">Update Schedule</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteSchedule.php">Delete Schedule</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Dinner Money</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="DinnerMoney.php">Dinner Money</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateDinnerMoney.php">Update Dinner Money</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteDinnerMoney.php">Delete Dinner Money</a></li>
        </ul>
      </li>
  </div>
  
  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  
  $link = mysqli_connect("sdb-55.hosting.stackcp.net", "student6-353031317063", "ua92-studentAc", "student6-353031317063");
  // Check connection
  if($link === false){
      die("Connection failed: ");
  }
  ?>

<section class="container my-2 bg-dark w-50 text-light p-2 studentsform">
    <form class="row g-3 p-3" action="DeleteParentsStudents.php" method="POST">
      <div class="col-12">
        <label for="ParentsID" class="form-label">Parents ID</label>
        <select class="form-control" name="ParentsID">
        <?php
        $sql = mysqli_query($link, "SELECT ParentsID, parents_fname  FROM Parents");
        while ($row = $sql->fetch_assoc()){
         echo "<option value=".$row['ParentsID'].">".$row['parents_fname']."</option>";
         }
        ?>
        </select>
      </div>

      <div class="col-12">
        <label for="StudentsID" class="form-label">Students ID</label>
        <select class="form-control" name="StudentsID" required>
         <?php
         $sql = mysqli_query($link, "SELECT StudentsID, students_fname FROM Students");
         while ($row = $sql->fetch_assoc()){
          echo "<option value=".$row['StudentsID'].">".$row['students_fname']."</option>";
         }
         ?>
      </div>
      <br>
      <br>
        <input type="submit" class="btn btn-warning" name="submit">
    </form>
  </section>
  <?php
		
		if (isset($_POST['submit'])) {
		
			$ParentsID = $_POST['ParentsID'];
			$StudentsID = $_POST['StudentsID'];
			
			$sql = "DELETE FROM ChildrenHad WHERE ParentsID = '$ParentsID' AND StudentsID = '$StudentsID'";
			if (mysqli_query($link, $sql)) {
			  echo "New record created successfully";
			} else {
			  echo "Error adding record ";
			}
		
		}
		?>
	
		<hr>
		

	
	</body>

</html>

