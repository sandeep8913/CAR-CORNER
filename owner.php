<?php
$i=1;
$con=mysqli_connect("localhost","root","","ex1");
$sql="SELECT * FROM info";
$r=mysqli_query($con,$sql);
echo '<body style="background-image: linear-gradient(100deg,rgb(11, 79, 139),rgb(69, 103, 133),rgb(105, 115, 124));">
        <center><h1 style="background-color: aliceblue;">CUSTOMER  REQUESTS</h1></center>';
if(mysqli_num_rows($r)>0){
    while($row=mysqli_fetch_assoc($r)){
        echo '<center><h2 style="width:150px;background-color: aliceblue;">request : '.($i++).'</h2></center><div style="display:flex;flex-direction:column; background-image: linear-gradient(200deg,rgb(9, 107, 37),rgb(58, 147, 83),rgb(117, 167, 131));border-radius:40px">';
        echo '<div style="display:flex;flex-direction:column;align-items:center;">';
        echo '<div><b>'."username:".'</b>'.$row["username"].'</div>';
        echo '<div><b>'."email:".'</b>'.$row["email"].'</div>';
        echo '<div><b>'."mobile:".'</b>'.$row["mob"].'</div>';
        echo '<div><b>'."address:".'</b>'.$row["address"].'</div>';
        echo '<div><b>'."brand:".'</b>'.$row["brand"].'</div>';
        echo '<div><b>'."year:".'</b>'.$row["year"].'</div>';
        echo '<div><b>'."fuel:".'</b>'.$row["fuel"].'</div>';
        echo '<div><b>'."transition:".'</b>'.$row["transition"].'</div>';
        echo '<div><b>'."km driven:".'</b>'.$row["kmd"].'</div>';
        echo '<div><b>'."features:".'</b>'.$row["f"].'</div>';
        echo '<div><b>'."reason for selling:".'</b>'.$row["af"].'</div>';
        echo '<div><b>'."price:".'</b>'.$row["price"].'</div></div>';
        echo '<br><center><b>'."images:".'</b></center>';
        echo '<div style="display:flex;flex-direction:row;flex-wrap:wrap;justify-content: space-evenly;">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic1"]) . '" style="width: 300px; height: 250px;margin:10px;">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic2"]) . '" style="width: 300px; height: 250px;margin:10px;">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic3"]) . '" style="width: 300px; height: 250px;margin:10px;">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic4"]) . '" style="width: 300px; height: 250px;margin:10px;">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row["pic5"]) . '" style="width: 300px; height: 250px;margin:10px;">';
        echo '</div></div></body>';
    }
}

mysqli_close($con);
?>