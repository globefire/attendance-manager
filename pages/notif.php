<?php 
            session_start();
            echo $_SESSION['id'] . " ". $_SESSION['username'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "attendance";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
                
        else{
            $output = '';
            $qur = 'SELECT * FROM timetable WHERE id= "'.$_SESSION["id"].'"';
            $result = mysqli_query($conn, $qur);
            //$tmp = mysqli_fetch_array($result);
            $i = 0;
            while($row = mysqli_fetch_array($result)) {
                # code...
                echo $row['montime'];
            $i += 1;
            }
        }
?>
<html>
    <body>
        <a href="#" id='perm'>req perm</a>
        <a href='#' id='trig'>trigg</a>

        <script>
            var perm = document.getElementById('perm');
            var trig = document.getElementById('trig');

            perm.addEventListener('click', function(e){
                e.preventDefault();

                if(!window.Notification){
                    alert('not supported');
                } else {
                    Notification.requestPermission(function(p){
                        if (p === 'denied') {
                            alert('u hav denied notifications');
                        } else if (p === 'granted') {
                            alert('granted');
                        }
                    });
                }
            });

            <?php $i = 'hello :) world'; $j = 0;?>

            trig.addEventListener('click', function(e){
                var notify;
                e.preventDefault();

                if (Notification.permission === 'default') {
                    alert('allow me')
                } else {
                    notify = new Notification("<?php echo $i; ?>");

                }
            });
            
            
            setInterval(() => {
                var d = new Date();
                if (d.getHours() == 16 && d.getMinutes() == 52) {
                    var notify;
                    //e.preventDefault();

                    if (Notification.permission === 'default') {
                        alert('allow me')
                    } else {
                        notify = new Notification("<?php echo $i; ?>");

                    }
                }
                    console.log("<?php echo $i . $j;?>");
                    <?php $j += 1; ?>
                }, 10000);

        </script>

    </body>
</html>