<?php

	//koneksi	require 'code_function.php';

	

	$db_code = query ( "SELECT * FROM db_code"); 

?>

<!DOCTYPE html>

<html>

<head>

<title>CODE TRAFO</title>

</head>

<body>

<h1>CODE TRAFO</h1>

<a href="code_tambah.php">New TR-CODE</a>

<form action="" method="post"  >

	<table border="1" cellspacing=""  cellpadding="10"  >

	<tr>

		<th>No.</th>

		<th>TR-CODE</th>

		<th>Cooling</th>

		<th>Standard</th>

		<th>Capasity kVA</th>

		<th>Frequensi</th>

		<th>Phase</th>

		<th>HV</th>

		<th>LV</th>

		<th>Tapping</th>

		<th>Vector Grub</th>

		<th>class</th>

		<th>Applied HV</th>

		<th>Applied LV</th>

		<th>BIL</th>

		<th>WF</th>

		<th>WF Max</th>

		<th>I0 (%)</th>

		<th>WCU</th>

		<th>WCU Max</th>

		<th>WT</th>

		<th>WT Max</th>

		<th>Impedance</th>

		<th>Noise</th>

		<th>Winding Material HV</th>

		<th>Winding Material LV</th>

		<th>Eff</th>

		<th>Reg</th>

		<th>Temp rise oil</th>

		<th>Temp rise HV/LV</th>

		<th>temp load loss</th>

		<th>Oil Liter</th>

		<th>Oil kG</th>

		<th>Tank</th>

		<th>Inner</th>

		<th>Total</th>

		<th>Tanggal</th>

		<th>Note</th>

		<th>Aksi</th>

	</tr>

<?php $i=1;?>

<?php foreach ($db_code as $row):?>

	<tr>

		<td><?= $i;?></td>

		<td><?=$row["tr_code"];?></td>

		<td><?=$row["cooling"];?></td>

		<td><?=$row["standart"];?></td>

		<td><?=$row["kva"];?></td>

		<td><?=$row["frequensi"];?></td>

		<td><?=$row["phase"];?></td>

		<td><?=$row["hv"];?></td>

		<td><?=$row["lv"];?></td>

		<td><?=$row["taping"];?></td>

		<td><?=$row["vector"];?></td>

		<td><?=$row["class"];?></td>

		<td><?=$row["applied_hv"];?></td>

		<td><?=$row["applied_lv"];?></td>

		<td><?=$row["bil"];?></td>

		<td><?=$row["wf"];?></td>

		<td><?=$row["wf_max"];?></td>

		<td><?=$row["i0"];?></td>

		<td><?=$row["wcu"];?></td>

		<td><?=$row["wcu_max"];?></td>

		<td><?=$row["wt"];?></td>

		<td><?=$row["wt_max"];?></td>

		<td><?=$row["impedance"];?></td>

		<td><?=$row["noise"];?></td>

		<td><?=$row["winding_mt_hv"];?></td>

		<td><?=$row["winding_mt_lv"];?></td>

		<td><?=$row["eff"];?></td>

		<td><?=$row["reg"];?></td>

		<td><?=$row["temprise_oil"];?></td>

		<td><?=$row["temprise_hv_lv"];?></td>

		<td><?=$row["temp_load_loss"];?></td>

		<td><?=$row["oil_l"];?></td>

		<td><?=$row["oil_kg"];?></td>

		<td><?=$row["tank"];?></td>

		<td><?=$row["core"];?></td>

		<td><?=$row["total"];?></td>

		<td><?=$row["tanggal"];?></td>

		<td><?=$row["note"];?></td>

		<td>

			<a href="ubah_code.php? id_code=<?= $row['id_code'];?>" >ubah</a> |

			<a href="Hapus.php? id_code=<?= $row['id_code'];?>" 

		    onclick="return confirm('yakin');">hapus</a>

		</td>

	</tr>

<?php $i++ ; ?>

<?php endforeach ; ?>

</table>

</form>

</body>


</html>

<?php
$conn = mysqli_connect("localhost:3306","root" ,"root","Quality");


function query ($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
    
}

function tambah ($data){
    global $conn;
    //ambil data elemen
    $tr_code =htmlspecialchars($data["tr_code"]);
    $cooling =htmlspecialchars($data["cooling"]);
    $standart=htmlspecialchars($data["standart"]);
    $kva=htmlspecialchars($data["kva"]);
    $frequensi =htmlspecialchars($data["frequensi"]);
    $phase =htmlspecialchars($data["phase"]);
    $hv=htmlspecialchars($data["hv"]);
    $lv=htmlspecialchars($data["lv"]);
    $taping =htmlspecialchars($data["taping"]);
    $vector =htmlspecialchars($data["vector"]);
    $class=htmlspecialchars($data["class"]);
    $applied_hv=htmlspecialchars($data["applied_hv"]);
    $applied_lv=htmlspecialchars($data["applied_lv"]);
    $bil =htmlspecialchars($data["bil"]);
    $wf=htmlspecialchars($data["wf"]);
    $wf_max=htmlspecialchars($data["wf_max"]);
    $i0=htmlspecialchars($data["i0"]);
    $wcu=htmlspecialchars($data["wcu"]);
    $wcu_max=htmlspecialchars($data["wcu_max"]);
    $wt=htmlspecialchars($data["wt"]);
    $wt_max=htmlspecialchars($data["wt_max"]);
    $impedance=htmlspecialchars($data["impedance"]);
    $noise=htmlspecialchars($data["noise"]);
    $winding_mt_hv=htmlspecialchars($data["winding_mt_hv"]);
    $winding_mt_lv=htmlspecialchars($data["winding_mt_lv"]);
    $eff=htmlspecialchars($data["eff"]);
    $reg=htmlspecialchars($data["reg"]);
    $temprise_oil=htmlspecialchars($data["temprise_oil"]);
    $temprise_hv_lv=htmlspecialchars($data["temprise_hv_lv"]);
    $temp_rise_loss=htmlspecialchars($data["temp_rise_loss"]);
    $oil_l=htmlspecialchars($data["oil_l"]);
    $oil_kg=htmlspecialchars($data["oil_kg"]);
    $tank=htmlspecialchars($data["tank"]);
    $core=htmlspecialchars($data["core"]);
    $total=htmlspecialchars($data["total"]);
    $tanggal=htmlspecialchars($data["tanggal"]);
    $note=htmlspecialchars($data["note"]);

    $query = "INSERT INTO db_code
            VALUES
            (
            '',
            '$tr_code',
            '$cooling',
            '$standart',
            '$kva',
            '$frequensi',
            '$phase',
            '$hv',
            '$lv',
            '$taping',
            '$vector',
            '$class',
            '$applied_hv',
            '$applied_lv',
            '$bil',
            '$wf',
            '$wf_max',
            '$i0',
            '$wcu',
            '$wcu_max',
            '$wt',
            '$wt_max',
            '$impedance',
            '$noise',
            '$winding_mt_hv',
            '$winding_mt_lv',
            '$eff',
            '$reg',
            '$temprise_oil',
            '$temprise_hv_lv',
            '$temp_rise_loss',
            '$oil_l',
            '$oil_kg',
            '$tank',
            '$core',
            '$total',
            '$tanggal',
            '$note')
            ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}


function hapuscode($id_code){
    global $conn;
    mysqli_query($conn,"DELETE FROM db_code WHERE id_code=$id_code");
    return mysqli_affected_rows($conn);
}


function ubahcode ($data){
    global $conn;
    $id_code = $data["id_code"];
    $tr_code =htmlspecialchars($data["tr_code"]);
    $cooling =htmlspecialchars($data["cooling"]);
    $standart=htmlspecialchars($data["standart"]);
    $kva=htmlspecialchars($data["kva"]);
    $frequensi =htmlspecialchars($data["frequensi"]);
    $phase =htmlspecialchars($data["phase"]);
    $hv=htmlspecialchars($data["hv"]);
    $lv=htmlspecialchars($data["lv"]);
    $taping =htmlspecialchars($data["taping"]);
    $vector =htmlspecialchars($data["vector"]);
    $class=htmlspecialchars($data["class"]);
    $applied_hv=htmlspecialchars($data["applied_hv"]);
    $applied_lv=htmlspecialchars($data["applied_lv"]);
    $bil =htmlspecialchars($data["bil"]);
    $wf=htmlspecialchars($data["wf"]);
    $wf_max=htmlspecialchars($data["wf_max"]);
    $i0=htmlspecialchars($data["i0"]);
    $wcu=htmlspecialchars($data["wcu"]);
    $wcu_max=htmlspecialchars($data["wcu_max"]);
    $wt=htmlspecialchars($data["wt"]);
    $wt_max=htmlspecialchars($data["wt_max"]);
    $impedance=htmlspecialchars($data["impedance"]);
    $noise=htmlspecialchars($data["noise"]);
    $winding_mt_hv=htmlspecialchars($data["winding_mt_hv"]);
    $winding_mt_lv=htmlspecialchars($data["winding_mt_lv"]);
    $eff=htmlspecialchars($data["eff"]);
    $reg=htmlspecialchars($data["reg"]);
    $temprise_oil=htmlspecialchars($data["temprise_oil"]);
    $temprise_hv_lv=htmlspecialchars($data["temprise_hv_lv"]);
    $temp_rise_loss=htmlspecialchars($data["temp_rise_loss"]);
    $oil_l=htmlspecialchars($data["oil_l"]);
    $oil_kg=htmlspecialchars($data["oil_kg"]);
    $tank=htmlspecialchars($data["tank"]);
    $core=htmlspecialchars($data["core"]);
    $total=htmlspecialchars($data["total"]);
    $tanggal=htmlspecialchars($data["tanggal"]);
    $note=htmlspecialchars($data["note"]);
    
   //query insert data
    $query="UPDATE db_code SET
            
            tr_code = '$tr_code',
            cooling = '$cooling',
            standart = '$standart',
            kva = '$kva',
            frequensi = '$frequensi',
            phase = '$phase',
            hv = '$hv',
            lv = '$lv',
            taping = '$taping',
            vector = '$vector',
            class = '$class',
            applied_hv = '$applied_hv',
            applied_lv = '$applied_lv',
            bil = '$bil',
            wf = '$wf',
            wf_max = '$wf_max',
            i0 = '$i0',
            wcu = '$wcu',
            wcu_max = '$wcu_max',
            wt = '$wt',
            wt_max = '$wt_max',
            impedance = '$impedance',
            noise = '$noise',
            winding_mt_hv = '$winding_mt_hv',
            winding_mt_lv = '$winding_mt_lv',
            eff = '$eff',
            reg = '$reg',
            temprise_oil = '$temprise_oil',
            temprise_hv_lv = '$temprise_hv_lv',
            temp_rise_loss = '$temp_rise_loss',
            oil_l =  '$oil_l',
            oil_kg = '$oil_kg',
            tank = '$tank',
            core = '$core',
            total = '$total',
            tanggal = '$tanggal',
            note = '$note'
            WHERE id_code = $id_code
            ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

    
}

?>  


   