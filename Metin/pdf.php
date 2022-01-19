<html>
<?php
include'temel.php';
include'connect.php';
?>
<style>
table {
  border: 1px solid black;
}
</style>
<title>
   PDF
</title>
<body style="background-color: #ffe5b4 ; font-family:verdana;font-size:20px;">
<?PHP
/* Form numarası*/
$sql="SELECT * FROM Dis_Servis_Formu where id='105'";
$result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)){
?>
<table>
<tr>
    <td> Müracat Eden Kişi:</td><td><?PHP echo $row[0]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> Firma:</td><td><?PHP echo $row[1]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> Müracaat Eden Kişi Görevi:</td><td><?PHP echo $row[3]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> Tel No:</td><td><?PHP echo $row[4]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
<tr>
    <td> Müracat Eden Kişi:</td><td><?PHP echo $row[0]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
</tr>
</tr>
</table>
<table>
<tr>
    <td> Makinenin :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td><th>  </th><th>  </th><th>    </th><th>  </th><td>Müşteri Fatura Adresi:</td><td><?PHP echo $row[0]; ?></td>
</tr>
<tr>
    <td> Tipi:</td><td><?PHP echo $row[0]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> Seri No:</td><td><?PHP echo $row[1]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td width="100px"> </td>
    <td> Tel:</td><td><?PHP echo $row[0]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> E-Posta:</td><td><?PHP echo $row[1]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
</tr>
<tr>
    <td> Toplam Çalışma Saati:</td><td><?PHP echo $row[0]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> Toplam Yükte Çalışma Saati:</td><td><?PHP echo $row[1]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td width="100px"> </td>
    <td> Vergi Dairesi:</td><td><?PHP echo $row[0]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> Vergi Numarası:</td><td><?PHP echo $row[1]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
<tr>
<table>
<tr>
    <td> Makinenin :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td><th>  </th><th>  </th><th>    </th><th>  </th><td>Müşteri Fatura Adresi:</td><td><?PHP echo $row[0]; ?></td>
</tr>
<tr>
    <td> Tipi:</td><td><?PHP echo $row[0]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> Seri No:</td><td><?PHP echo $row[1]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td width="100px"> </td>
    <td> Tel:</td><td><?PHP echo $row[0]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> E-Posta:</td><td><?PHP echo $row[1]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
</tr>
<tr>
    <td> Toplam Çalışma Saati:</td><td><?PHP echo $row[0]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> Toplam Yükte Çalışma Saati:</td><td><?PHP echo $row[1]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td width="100px"> </td>
    <td> Vergi Dairesi:</td><td><?PHP echo $row[0]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
    <td> Vergi Numarası:</td><td><?PHP echo $row[1]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td></tr>
<tr>
</table>
</table>
<?PHP
}
?>
