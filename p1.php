<!DOCTYPE html>
<html lang="en">
<style>
  input {margin: 8px;}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table>
    <form method = "POST" onsubmit= "return Print_Info()">
      <tr>
        <td> <label for = "name"> Name : </label> </td>
        <td>
          <input type="text" name="UserName" id="UserName" placeholder="Enter Name" />
        </td>
      </tr>
      <tr>
        <td> <label for = "password"> Password : </label> </td>
        <td>
          <input type="text" name="UserPasswd" id="UserPasswd"/>
        </td>
      </tr>
      <tr>    
        <td> <label for = "Mobile Number"> Mobile Number : </label> </td>
        <td>
          <input type="Mobile Number" name="UserMobile" id="UserMobile" placeholder="Enter Your mobile number." />
        </td>
     </tr>
      <tr>
        <td><label for="Radio">Gender</label></td>
        <td>
          <input type="radio" value="Male" name="gender" id="gender1">
          Male
          <input type="radio" value="Female" name="gender" id="gender2">
          Female
        </td>
      </tr>

      <tr>
        <td><label for="Check">Favorite Games</label></td>
        <td>
          <input type="checkbox" value="Badminton" name="game[]" id="game1">
          Badminton
          <input type="checkbox" value="Tenis" name="game[]" id="game2">
          Tenis
          <input type="checkbox" value="Javelin" name="game[]" id="game3">
          Javelin
        </td>
      </tr>
      <tr>
      <td>
          <input type="submit" value="submit" id="submit" name="submit">
        </td>
     </tr>
    </form>
   </table>

   <div style="border-bottom:solid black 4px;margin: 30px 0 ;">
  </div>

  <table>
  <?php
 
    if(isset($_POST["submit"])!=null){
      echo "<tr>";
          echo "<td>My Name : </td><td>",$_POST["UserName"],"</td>";
      echo "</tr>";
      echo "<tr>";
          echo "<td>My Password : </td><td>",$_POST["UserPasswd"],"</td>";
      echo "</tr>";
      echo "<tr>";
          echo "<td>My Mobile : </td><td>",$_POST["UserMobile"],"</td>";
      echo "</tr>";
      echo "<tr>";
          echo "<td>My Gender : </td><td>",$_POST["gender"],"</td>";
      echo "</tr>";
      echo "</table>";
      echo "My Favourite are : ";
      if(isset($_POST["game"])!=null){
        foreach ($_POST["game"] as $value) {
          echo $value,",";
        }
      }
    }
  ?>
  </table>
</body>

<script>
  function Print_Info() {

    console.log("Hello",document.getElementById("UserName").value);

    var name = document.getElementById("UserName");
    var passwd = document.getElementById("UserPasswd");
    var mobile = document.getElementById("UserMobile");
    var gender1 = document.getElementById("gender1");
    var gender2 = document.getElementById("gender2");

    if (name.value == "") {
      alert("Enter Your Name");
      return false;
    }
    if (passwd.value == "") {
      alert("Enter your Password");
      return false;
    }
    if (mobile.value == "") {
      alert("Enter your Mobile Number");
      return false;
    } else {
      if ((parseInt(mobile.value).toString()).length != 10) {
        alert("Wrong Mobile Number")
      return false;
      }
      if(gender1.checked==false&&gender2.checked==false){
        alert("Select Gender")
        return false;
      }
      return true;
    }
  }
</script>

</html>