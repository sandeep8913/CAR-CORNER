<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELL</title>
    <link rel="icon" href="logo.png">
    <style>
        form{
            width: 60%;
            margin-left: 19%;
            position: relative;
            margin-top: 100px;
            display: flex;
            border-radius: 10px;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            transition: all 0.3s ease-in-out;
        }
        body{
          background-image: url("https://media.istockphoto.com/id/504133748/photo/blurred-new-cars-dealership-place.jpg?s=170667a&w=0&k=20&c=zzdrZh5TBiwQTROdDZ6IZAvJpYNQRdQYpgbUQnXnrmo=");
          background-size: cover;
          background-attachment: fixed;
  }
        input,textarea{
            margin-top: 15px;
            text-align:center;
            vertical-align:bottom;
            font-size: 15px;
        }
        textarea{
            resize: vertical;
            min-width: 20px;
        }
        .sel{
            margin-top: 15px;
            display: flex;
        }
        .pics{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }
        #title{
            font-size: 50px;
            text-align: center;
            align-items: center;
            vertical-align: middle;
            margin-right: 100px;
            display: flex;
        }
        #title >img{
            width: 150px;
            height: 150px;
            margin: 10px;
            margin-left: 25px;
            border-radius: 50%;
        }
        .title{
            margin-left: 125px;
            width: 900px;
            font-size: 70PX;
            padding-top: 10px;
            word-spacing: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-image: linear-gradient(240deg,rgb(21, 129, 93),rgb(83, 168, 140),rgb(172, 228, 210));
        }
        #y{
            color: white;
            font-size: 20px;
            text-align: center;
        }
        @media (min-width: 1200px){
            form{
            width: 60%;
            margin-left: 19%;
            position: relative;
            margin-top: 100px;
            display: flex;
            justify-content: space-around;
            border-radius: 10px;
            flex-direction: column;
            align-items:center;
            padding: 20px;
        }
        input,textarea{
            margin-top: 35px;
            text-align:center;
            vertical-align:bottom;
            font-size: 25px;
            width: 300px;
        }
        textarea{
            width: 600px;
            resize: vertical;
        }
        .sel{
            font-size: 28px;
            margin-top: 35px;
        }
        #opt{
            font-size: 25px;
        }
        #sel{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #pics{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
        }
            header{
                background-color: rgb(22, 22, 22);
                position: fixed;
                top: 0px;
                left: 0px;
                width: 100%;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-evenly;
                padding: 10px;
            }
            .x {
    font-size: 65px;
    font-family:'Times New Roman', Times, serif;
    word-spacing: 30px;
    letter-spacing: 10px;
    color: aliceblue;
    text-align: center;
  }
  .y>img{
    width: 110px;
    height: 110px;
    border-radius: 50%;
  }
  .z{
    font-size: 30px;
    color: aliceblue;
    cursor: pointer;
  }
  #x{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  #sub{
    margin-top: 50px;
    width: 100px;
  }
  #up{
    font-size: 35px;
  }
        }
        @media (max-width: 1199.98px){
            form{
            width: 60%;
            margin-left: 19%;
            position: relative;
            margin-top: 80px;
            display: flex;
            justify-content: space-around;
            border-radius: 10px;
            flex-direction: column;
            align-items:center;
            padding: 20px;
        }
        input,textarea{
            margin-top: 25px;
            text-align:center;
            vertical-align:bottom;
            font-size: 20px;
            width: 200px;
        }
        textarea{
            width: 280px;
            resize: vertical;
        }
        .sel{
            font-size: 25px;
            margin-top: 19px;
        }
        #opt{
            font-size: 20px;
        }
        #sel{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #pics{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
        }
        header{
                background-color: rgb(22, 22, 22);
                position: fixed;
                top: 0px;
                left: 0px;
                width: 100%;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-evenly;
                padding: 10px;
            }
            .x {
    font-size: 35px;
    font-family:'Times New Roman', Times, serif;
    letter-spacing: 5px;
    color: aliceblue;
    text-align: center;
  }
  .y>img{
    width: 70px;
    height: 70px;
    border-radius: 50%;
  }
  .z{
    font-size: 20px;
    color: aliceblue;
    cursor: pointer;
  }
  #x{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  #sub{
    margin-top: 50px;
    width: 100px;
  }
  #up{
    font-size: 25px;
  }
        }
    </style>
</head>
<body >
    <form action="sell.php" method="post" enctype="multipart/form-data" name="f1" onsubmit="return validateForm()">
        <input type="text" placeholder="enter username" id="username" name="username" required>
        <input type="email" placeholder="enter email" id="email"name="email" required>
        <input type="number" placeholder="enter mobile number" id="mob"name="mob" required>
        <textarea rows="5" cols="50" placeholder="enter your address" id="address"name="address" required></textarea>
        <input type="text" placeholder="enter brand" id="brand"name="brand" required>
        <input type="number" placeholder="enter year" id="year"name="year" required>
        <div id="sel">
        <div id="fuel" class="sel">fuel:
            <select required id="opt" name="fuel">
                <option selected>none</option>
                <option>diesel</option>
                <option>petrol</option>
                <option>electric</option>
                <option>cng</option>
                <option>hybrid</option>
            </select>
        </div>
        <div id="transition" class="sel">transition:<select id="opt" name="transition" required>
            <option selected>none</option>
            <option>automatic</option>
            <option>manual</option>
        </select></div></div>
        <input type="number" placeholder="KM driven" id="kmd"name="kmd" required>
        <textarea rows="5" cols="50" placeholder="mention additional features of the car(eg:model,color,bluetooth connectivity and interior)" id="f"name="f" required></textarea>
    <textarea rows="5" cols="50" placeholder="reason for selling" id="af"name="af" required></textarea>
    <input type="number" placeholder="set a price" id="price"name="price" required>
    <div id="x">
    <div id="up"><br>upload upto 5 pictures:<br></div>
    <div id="pics">
        <input type="file" placeholder="choose file" required id="pic1" name="pic1">
        <input type="file" placeholder="choose file" required id="pic2"name="pic2">
        <input type="file" placeholder="choose file" required id="pic3"name="pic3">
        <input type="file" placeholder="choose file" required id="pic4"name="pic4">
        <input type="file" placeholder="choose file" required id="pic5"name="pic5">
    </div></div>
    <input type="submit" value="submit" name="submit" id="sub" style="cursor: pointer;">
    </form>
    <header>
        <div class="y"><img src="logo.png"></div>
        <div class="x">SELL</div>
        <div class="z" onclick="window.location.href='home2.html'">home</div>
      </header>
      <script>
        function validateForm() {
            var mob = document.getElementById('mob').value;
            var email = document.getElementById('email').value;
            var li = ["gmail.com", "yahoo.com", "hotmail.com", "icloud.com", "mail.com"];
            var ma = email.split("@");

            if (mob.length !== 10) {
                alert("Mobile Number must be 10 digits");
                return false;
            }
            
            if (!li.includes(ma[1])) {
                alert("invalid mail");
                return false;
            }
            alert("data sent succesfully !");
            return true; 
        }
    </script>
</body>
</html>
<?php
if(isset($_POST["submit"])){
$a=$_POST["username"];
$b=$_POST["email"];
$c=$_POST["mob"];
$d=$_POST["address"];
$e=$_POST["brand"];
$f=$_POST["year"];
$g=$_POST["fuel"];
$h=$_POST["transition"];
$i=$_POST["kmd"];
$j=$_POST["f"];
$k=$_POST["af"];
$l=$_POST["price"];
$m=addslashes(file_get_contents($_FILES["pic1"]["tmp_name"]));
$n=addslashes(file_get_contents($_FILES["pic2"]["tmp_name"]));
$o=addslashes(file_get_contents($_FILES["pic3"]["tmp_name"]));
$p=addslashes(file_get_contents($_FILES["pic4"]["tmp_name"]));
$q=addslashes(file_get_contents($_FILES["pic5"]["tmp_name"]));
    $con=mysqli_connect("localhost","root","","ex1");
    $sql="INSERT INTO info values('{$a}','{$b}','{$c}','{$d}','{$e}','{$f}','{$g}','{$h}','{$i}','{$j}','{$k}','{$l}','{$m}','{$n}','{$o}','{$p}','{$q}')";
mysqli_query($con,$sql);
mysqli_close($con);
}
?>