<?php
include('db_connect.php');
function ordinal_suffix1($num) {
    $num = $num % 100; // protect against large numbers
    if ($num < 11 || $num > 13) {
        switch ($num % 10) {
            case 1: return $num.'st';
            case 2: return $num.'nd';
            case 3: return $num.'rd';
        }
    }
    return $num.'th';
}
$astat = array("Not Yet Started", "On-going", "Closed");
?>

<head>
    <title>Student Dashboard</title>
    <style>
        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .row {
            display: flex;
            justify-content: center;
            width: 100%;
            height: 500%;
        }
        .col-md-6 {
            display: flex;
            justify-content: center;
        }
        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            justify-content: flex-start;
            width: 100%;
        }
        .profile img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }
        .profile-details {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <h2>Welcome !</h2>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="profile">
                    <img src="assets/uploads/<?php echo $_SESSION['login_avatar']; ?>" alt="Profile Image">
                    <div class="profile-details">
                        <h3><?php echo $_SESSION['login_name']; ?></h3>
                        <p><?php echo $_SESSION['login_email']; ?></p>
                    </div>
                </div>
                
                <br>
                <div class="col-md-5">
                    <div class="callout callout-info">
                        <h5><b>Academic Evaluation <!--<?php echo $_SESSION['academic']['year'].' '.(ordinal_suffix1($_SESSION['academic']['semester'])) ?> Semester--></b></h5>
                        <h6><b>Evaluation Status: <?php echo $astat[$_SESSION['academic']['status']] ?></b></h6>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
