<!DOCTYPE html>
<html>
 <head>
  <title> Penggunaan Input Type Checkbox di HTML dan PHP</title>
  <style>
   
  </style>
 </head>
 <body>
   <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <table>
     <tr>
        <th> Nama Barang</th>
         <th>Bonus</th>
      </tr>
      <tr>
        <td><input type="checkbox" name="barang[]" value="1">Laptop </td>
        <td><label for="">Mouse</label></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="barang[]" value="2">Handphone</td>
        <td><label for="">Handfree</label></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="barang[]" value="3">LCD TV</td>
        <td><label for="">Antenna</label></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="barang[]" value="4">Komputer</td>
        <td><label for="">Printer</label></td>
      </tr>
    </table>
    <br>
    <input type="submit" value="Submit">
    <input type="submit" value="Reset">
  </form>
  <br>
  <br>
 
  <?php if(isset($_POST['barang'])):?>

        <?php $barang=$_POST['barang'] ?>
       
             <table>
              <tr>
                <th> Nama Barang </th>
                <th> Bonus </th>
                <th> Harga </th>
              </tr>
              
              <tr>
                <td> Laptop </td>
                <td> Mouse </td>
                <td> <?php echo $barang[0]."<br>"; ?> </td>
              </tr>
             
              <tr>
                <td> Handphone </td>
                <td> Handfree </td>
                <td> <?php echo $barang[1]."<br>"; ?> </td>
              </tr>
              <tr>
                <td> LCD TV </td>
                <td> Antenna </td>
                <td> <?php echo $barang[2]."<br>"; ?> </td>
              </tr>
              <tr>
                <td> Komputer </td>
                <td> Printer </td>
                <td> <?php echo $barang[3]."<br>"; ?> </td>
              </tr>
              
               
            </table>
            <?php endif;?>

 </body>
</html>