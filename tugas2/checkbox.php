<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fajar Ramadhan</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h4> Dago Elektronik & Aksesoris</h4>
    <hr>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="post">
        <table>
            <tr>
                <th> Nama Barang</th>
                <th> Bonus </th>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="laptop" name="harga[]" value="10000">
                    <label for="laptop">Laptop</label>
                </td>
                <td>
                    <label for="">Mouse</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="handphone" name="harga[]" value="handphone">
                    <label for="handphone">Handphone</label>
                </td>
                <td>
                    <label for="">Handfree</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="tv" name="harga[]" value="tv">
                    <label for="tv">LCD TV</label><br>
                </td>
                <td>
                    <label for="">Antenna</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="komputer" name="harga[]" value="komputer">
                    <label for="komputer">Komputer</label><br>
                </td>
                <td>
                    <label for="">Printer</label>
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="submit">
        <input type="submit" value="Reset">

    </form>
    <br>
    
    <?php if(isset($_POST["harga"])): ?>
        <table>
        <tr>
            <th>Nama Barang</th>
            <th>Bonus</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td>Laptop</td>
            <td>Mouse</td>
            <td><?= $_POST["harga"][0]?></td>
        </tr>
        <tr>
            <td>Handphone</td>
            <td>Handfree</td>
            <td>1200000</td>
        </tr>
        <tr>
            <td>LCD TV</td>
            <td>Antenna</td>
            <td><?= $_POST["harga"][1]?></td>
        </tr>
        <tr>
            <td>Komputer</td>
            <td>Printer</td>
            <td><?= $_POST["harga"][2]?></td>
        </tr>
        <tr>
            <th colspan="2">TOTAL</th>
            <th><?= $_POST["harga"][3]?></th>
        </tr>
    </table>
    <?php endif; ?>
    

   
</body>
</html>