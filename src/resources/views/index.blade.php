<?php
$connect = new PDO("mysql:host=mysql;dbname=default;charset=utf8;",  'default',  'secret' );
if(!$connect){
    echo "データベースに接続できません";
}
$sql="SELECT id, name, cal, fe, vit_a, vit_b1, vit_b2, niacin, vit_c, vit_d, color FROM kellogg_table ORDER BY id";   
$stmt = $connect->prepare($sql);
$stmt->execute(); 
$data= "";
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $data.= "{";
    $data.= "    label: '".$row["name"]."',";
    $data.= "    data: [".$row["cal"].", ".$row["fe"].", ".$row["cal"].", ".$row["vit_a"].", ";
    $data.= $row["vit_b1"].", ".$row["vit_b2"].", ".$row["niacin"].", ".$row["vit_c"].", ".$row["vit_d"]."],";
    $data.= "    backgroundColor: 'rgba(".$row["color"].",0.4)',";
    $data.= "   borderColor: 'rgba(123, 255, 0, 1)',";
    $data.= "   borderWidth: 1";
    $data.= "},";
}
//echo $data;
$shurui="radar";
if( !empty($_POST["shurui"]) ){ $shurui=$_POST["shurui"]; }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chart.jsでモダンなグラフ作成、PHP mySQLとの組み合わせ</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"><!--　←　触らないBootstrap v4.3.1　-->
    <script src="js/jquery-3.4.1.min.js"></script><!--　←　触らない　-->
    <script src="js/bootstrap.min.js"></script><!--　←　触らない　-->
    <script src="js/Chart.min.js"></script>    
    <style>
        h1{font-size:1.3rem;}
        .table-font { font-size:0.7rem; }
        @media screen and (max-width: 480px) { 
        	.sm-non { display:none; }
        } 
    </style>
</head>
<body>
<div class="container">	
	<div style="">
		<div style="width:120px;height:auto;"><a href="https://chikaraemon.com/"><img src="logo.jpg"></a></div>
	</div>
    <h1 class="text-primary my-3">Chart.js PHP mySQLでコーンフレークの栄養価をレーダーチャートで表現 </h1>
	<div class="row">
		<div class="col-md-5">
            <form method="POST" anction="<?= $_SERVER['SCRIPT_NAME'] ?>" class="my-3">
                <select name="shurui" onchange="submit(this.form)">
                    <option value="radar"<?php if( $shurui=="radar" ){ echo "selected"; } ?>>レーダーチャート</option>
                    <option value="line"<?php if( $shurui=="line" ){ echo "selected"; } ?>>線グラフ</option>
                    <option value="bar"<?php if( $shurui=="bar" ){ echo "selected"; } ?>>棒グラフ</option>
                </select>
                <input type="submit" value="グラフ種類を変える" class="btn btn-primary">
            </form>
 
            <div class="text-sm">※数値100が各栄養素の朝食時の必要量の目安を表しています。</div>
            <div class="text-sm">※ケロッグ様ホームページのグラフを目視で読み取った為、数値に誤差が有ります。<BR>ご容赦ください。</div>
		</div>
		<div class="col-md-7">	
            <!--以下　グラフ-->
            <canvas id="myChart"></canvas>
            <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: '<?= $shurui ?>',
                data: {
                    labels: ['カルシウム', '鉄', 'ビタミンA', 'ビタミンB1', 'ビタミンB2', 'ナイアシン', 'ビタミンC', 'ビタミンD'],
                    datasets: [<?= $data ?>]
                }
            });
            </script>
            <!--以上　グラフ-->
		</div>
	</div>
	<div style="font-size:1.2rem;text-align:center;margin:2rem;">
		<a href="https://chikaraemon.com/">ちからえもん　ブログ</a>
	</div>
</div>
</body>
</html>