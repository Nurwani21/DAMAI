<?php include('db_connect.php'); ?>
<?php 
function ordinal_suffix1($num){
    $num = $num % 100; // protect against large numbers
    if($num < 11 || $num > 13){
         switch($num % 10){
            case 1: return $num.'st';
            case 2: return $num.'nd';
            case 3: return $num.'rd';
        }
    }
    return $num.'th';
}
$astat = array("Not Yet Started","On-going","Closed");
?>
<head>
    <title>Head Teacher Dashboard</title>
    <style>
        .timetable {
            width: 100%;
            border-collapse: collapse;
        }
        .timetable th, .timetable td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .timetable th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #f2f2f2;
            color: #333;
        }
        .timetable td.time {
            background-color: #f9f9f9;
            font-weight: bold;
        }
        .timetable .monday { background-color: #FFCDD2; }
        .timetable .tuesday { background-color: #F8BBD0; }
        .timetable .wednesday { background-color: #E1BEE7; }
        .timetable .thursday { background-color: #D1C4E9; }
        .timetable .friday { background-color: #C5CAE9; }
        .timetable .lunch { background-color: #FFECB3; font-weight: bold; }
    </style>
</head>

<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h1>Welcome <?php echo $_SESSION['login_name'] ?>!</h1>
        <br>
        
      </div>
    </div>
</div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM faculty_list ")->num_rows; ?></h3>
                <p>Total Student Evaluate</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-friends"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM student_list")->num_rows; ?></h3>
                <p>Total Students</p>
              </div>
              <div class="icon">
                <i class="fa ion-ios-people-outline"></i>
              </div>
            </div>
          </div>
           <!--<div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM users")->num_rows; ?></h3>
                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>-->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM class_list")->num_rows; ?></h3>
                <p>Total Classes</p>
              </div>
              <div class="icon">
                <i class="fa fa-list-alt"></i>
              </div>
            </div>
          </div>
      </div>

      <!-- Timetable Section -->
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Class Timetable</h3>
                </div>
                <div class="card-body">
                    <table class="timetable">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="time">08:00 - 09:00</td>
                                <td class="monday"> Arrival </td>
                                <td class="tuesday"> Arrival </td>
                                <td class="wednesday"> Arrival </td>
                                <td class="thursday"> Arrival </td>
                                <td class="friday"> Arrival </td>
                            </tr>
                            <tr>
                                <td class="time">09:00 - 10:00</td>
                                <td class="monday">Breakfast</td>
                                <td class="tuesday">Breakfast</td>
                                <td class="wednesday">Breakfast</td>
                                <td class="thursday">Breakfast</td>
                                <td class="friday">Breakfast</td>
                            </tr>
                            <tr>
                                <td class="time">10:00 - 11:00</td>
                                <td class="monday">Morning Activity</td>
                                <td class="tuesday">Morning Activity</td>
                                <td class="wednesday">Morning Activity</td>
                                <td class="thursday">Morning Activity</td>
                                <td class="friday">Morning Activity</td>
                            </tr>
                            <tr>
                                <td class="time">11:00 - 12:00</td>
                                <td class="monday">Math</td>
                                <td class="tuesday">Art</td>
                                <td class="wednesday">English</td>
                                <td class="thursday">Math</td>
                                <td class="friday">Science</td>
                            </tr>
                            <tr>
                                <td class="time lunch">12:00 - 01:00</td>
                                <td class="lunch" colspan="5">Lunch Break</td>
                            </tr>
                            <tr>
                                <td class="time">01:00 - 02:00</td>
                                <td class="monday">Art</td>
                                <td class="tuesday">BM</td>
                                <td class="wednesday">Physical Education</td>
                                <td class="thursday">English</td>
                                <td class="friday">Math</td>
                            </tr>
                            <tr>
                                <td class="time">02:00 - 03:00</td>
                                <td class="monday">Clean + Pack + Kids Home</td>
                                <td class="tuesday">Clean + Pack + Kids Home</td>
                                <td class="wednesday">Clean + Pack + Kids Home</td>
                                <td class="thursday">Clean + Pack + Kids Home</td>
                                <td class="friday">Clean + Pack + Kids Home</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
