<?php 
$conn = mysql_connect('localhost', 'root', '', 'reservationtb');

if(!$conn){
    header("Location: maindashboard.php");
    exit();
}
$query = "select * from reservationtb";
$result = mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LodgeWithUs | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <nav class="topnav">
        <div class="logo">
            <a href="#" class="display-sm display-md" id="menu"><i class="fa fa-list-ul"></i></a>
            <a href="index.html" class="hidden-sm"><h1>LodgeWithUs</h1></a>
        </div>
        <div class="user-menu">
            <div>
                <a href="#"><i class="fa fa-user"></i> Admin</a>
                <a href="adminlog.html"><i class="fa fa-power-off"></i></a>
            </div>
        </div>
    </nav>
   
   <aside class="sidenav hidden-sm hidden-md" id="nav">
       <div class="list">
           <a href="trialdash.html" class="active"><i class="fa fa-home"></i> Home</a>
       </div>
   </aside>

   <main class="content">
      <div class="grid" style="text-align: center;">
          <div class="mini-reports bg-blue">
                <div class="l">
                    <span>10</span>
                    <span>Reservations</span>
                </div>
                <div class="r">
                    <i class="fa fa-book c-blue"></i>
                </div>
          </div><span class="spacing"></span>
          <div class="mini-reports bg-green">
                <div class="l">
                    <span>100</span>
                    <span>Rooms</span>
                </div>
                <div class="r">
                    <i class="fa fa-home c-green"></i>
                </div>
          </div><span class="spacing"></span>
          <div class="mini-reports bg-orange">
                <div class="l">
                    <span>50</span>
                    <span>Employees</span>
                </div>
                <div class="r">
                    <i class="fa fa-users c-orange"></i>
                </div>
          </div><span class="spacing"></span>
          <div class="mini-reports bg-red">
                <div class="l">
                    <span>0</span>
                    <span>Online</span>
                </div>
                <div class="r">
                    <i class="fa fa-user c-red"></i>
                </div>
          </div>
      </div>

      <div class="grid">
          <div class="painel">
              <div class="painel-header">
                  <h4 class="painel-title">Reservations</h4>
              </div>
              <div class="painel-body">
                <table class="zebra">
                    <tr>
                        <th>Name</th>
                        <th>Room Type</th>
                        <th>Arrival Date</th>
                        <th>Departure Date</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                    </tr>
                    <?php 
                        while($rows = mysql_fetch_assoc($result))
                        {
                    ?>   
                            <tr>
                                <td><?php echo $rows['name'] ?></td>
                                <td><?php echo $rows['rtype'] ?></td>
                                <td><?php echo $rows['arrival'] ?></td>
                                <td><?php echo $rows['departure'] ?></td>
                                <td><?php echo $rows['in'] ?></td>
                                <td><?php echo $rows['out'] ?></td>
                            </tr>     
                    <?php
                        }
                    ?>
                </table>
              </div>
          </div>          
        </div>
    </div>
    <div class="painel">
        <div class="painel-header">
            <h4 class="painel-title">Add Reservation</h4>
        </div>
        <div class="painel-body">
          <form action="dashboard.php" class="form" method="post">
              <div class="group">
                  <label for="#">Name</label>
                  <input type="text" name="name" id="" placeholder="Name">
              </div>
              <div class="group">
                  <label for="#">Email</label>
                  <input type="email" name="email" id="" placeholder="email">
              </div>
              <div class="group">
                <label for="#">Address</label>
                <input type="text" name="address" id="" placeholder="Address">
               </div>
                <div class="group">
                  <label for="#">City</label>
                  <input type="text" name="city" id="" placeholder="City">
              </div>
              <div class="group">
                  <label for="#">State</label>
                  <input type="text" name="state" id="" placeholder="State">
              </div>
              <div class="group">
                  <label for="#">ZIP</label>
                  <input type="text" name="zip" id="" placeholder="ZIP">
              </div>
              <div class="group">
                  <label for="#">Guests</label>
                  <input type="text" name="guest" id="" placeholder="Guests No.">
              </div>
              <div class="group">
                  <label for="#">Room Type</label>
                  <input type="text" name="rtype" id="" placeholder="Standard">
              </div>

              <div class="group">
                <label for="#">Arrival Date</label>
                <input type="date" name="arrdate">
            </div>

            <div class="group">
                <label for="#">Departure Date</label>
                <input type="date" name="dept">
            </div>

            <div class="group">
                <label for="#">Add-ons</label>
                <input type="text" name="addo" id="" placeholder="Wifi">
            </div>

            <div class="group">
                <label for="#">Check-in</label>
                <input type="time" name="in" id="" placeholder="12:00:00">
            </div>
            <div class="group">
                <label for="#">Check-out</label>
                <input type="time" name="out" id="" placeholder="12:00:00">
            </div>

              <div class="group">
                  <input type="submit" class="btn btn-green" style="width: 40%;" value="Create">
              </div>
         </form>
         <?php 
                        $fname = $_POST["name"];
                        $email = $_POST["email"];
                        $address = $_POST["address"];
                        $city = $_POST["city"];
                        $state = $_POST["state"];
                        $zip = $_POST["zip"];
                        $room = $_POST["rtype"];
                        $guest = $_POST["guest"];
                        $add = $_POST["addo"];
                        $arrdate = $_POST["arrdate"];
                        $deptdate = $_POST["dept"];
                        $in = $_POST["in"];
                        $out = $_POST["out"];

                            
                    ?>

                    <?php
                        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['zip']) && isset($_POST['guest']) && isset($_POST['rtype']) && isset($_POST['arrdate']) && isset($_POST['dept']) && isset($_POST['addo']) && isset($_POST['in']) && isset($_POST['out'])){
                            function validate($data){
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }
                        $fname = validate($_POST['name']);
                        $email = validate($_POST['email']);
                        $address = validate($_POST['address']);
                        $city = validate($_POST["city"]);
                        $state = validate($_POST["state"]);
                        $zip = validate($_POST["zip"]);
                        $room = validate($_POST['rtype']);
                        $guest = validate($_POST['guest']);
                        $add = validate($_POST['addo']);
                        $arrdate = validate($_POST['arrdate']);
                        $deptdate = validate($_POST['dept']);
                        $in = validate($_POST['in']);
                        $out = validate($_POST['out']);

                        if(empty($fname) || empty($email) || empty($email) || empty($room) || empty($guest) || empty($add) || empty($arrdate) || empty($deptdate) || empty($in) || empty($out)){
                            header("Location: maindashboard.php? message: Enter all fields");
                        }else {
                            $sql = "insert into reservationtb(FName, Email, Address, City, State, ZipCode, RoomType, GuestNo, AddOn, ArrivalDate, DepDate, CheckIn, CheckOut) values ('$fname', '$email', '$address', '$city', '$state', '$zip', '$room', '$guest', '$add', '$arrdate', '$deptdate', '$in', '$out')";
                            $res = mysqli_query($conn, $sql);
                        }

                        }else{
                            header("Location: maindashboard.php");
                        }
                    
                    ?>
        </div>
                      
    </div>
               </form>
              </div>
          </div>
      </div>
   </main>
   <script src="adash.js"></script>
</body>
</html>