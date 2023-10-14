// 1-vazifa<br>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<?php
    $fff = null;
    if(isset($_POST['phone']) && !empty($_POST['phone'])){
        $phone = $_POST['phone'];
        if(substr($phone, 1, 3) != '998'){
            echo "Xatolik - 998 telefon nomer emas";
        }
        if(strlen($phone) != 13 || ! is_numeric($phone, 1)){
            echo "xatolik";
        }
    }
?>

<div class="col-md-3">
<form method="post" action="data.php">
    <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Telefon nomer</label>
        <input type="text" class="form-control" id="exampleInputPhone" value="<?$phone?>" name="phone"          
         placeholder="Telefon nomer">
    </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


// 2-vazifa <br>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input1 = $_POST["input1"];
            $input2 = $_POST["input2"];

            $sum = $input1 + $input2;

            echo "Kiritilgan sonlar yig'indisi: " . $sum;
        }
        ?>

    <form method="POST" action="data.php">
        <input type="text" name="input1" placeholder="Input 1" required>
        <br><br>
        <input type="text" name="input2" placeholder="Input 2" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>



    // 3-vazifa<br>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number = $_POST["number"];
  switch ($number) {
    case 1:
      echo "Dushanba";
      break;
    case 2:
      echo "Seshanba";
      break;
    case 3:
      echo "Chorshanba";
      break;
    case 4:
      echo "Payshanba";
      break;
    case 5:
      echo "Juma";
      break;
    case 6:
      echo "Shanba";
      break;
    case 7:
      echo "Yakshanba";
      break;
    default:
      echo "Noto'g'ri son kiritildi.";
      break;
  }
}
?>

<form method="post" action="">
    <label for="number">Bir son kiriting (1-7):</label><br>
    <input type="number" id="number" name="number" min="1" max="7" required>
    <button type="submit">Submit</button>
</form>

// 4-vazifa

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulyator</title>

</head>

<body>
    <div class="kalkulyator">
        <h1>Kalkulyator</h1>
    </div>



    <div class="parts">
        <div class="part1">
            <div>
                <input name="firstNumber" type="text" />
                <label>firstNumber</label><br>
            </div>
            <div>
                <input name="secondNumber" type="text" />
                <label>secondNumber</label>
                <br>
            </div>
            <div>
                <input name="result" type="text" />
                <label>Result</label>
            </div>
        </div>
        <div class="part2">
            <input type="submit" value="Qoshish">

            <input type="submit" value="Ayirish">

            <input type="submit" value="Kopaytirish">

            <input type="submit" value="Bolish">
        </div>
    </div>
    </div>
</body>

</html>

// 5-vazifa
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulyator</title>

</head>

<body>
    <div class="kalkulyator">
        <h1>Kalkulyator</h1>
    </div>



    <div class="parts">
        <div class="part1">
            <div>
                <input name="firstNumber" type="text" />
                <label>firstNumber</label><br>
            </div>
            <div>
                <input name="secondNumber" type="text" />
                <label>secondNumber</label>
                <br>
            </div>
            <div>
                <input name="result" type="text" />
                <label>Result</label>
            </div>
        </div>
        <div class="part2">
            <input type="submit" value="Qoshish">

            <input type="submit" value="Ayirish">

            <input type="submit" value="Kopaytirish">

            <input type="submit" value="Bolish">
        </div>
    </div>
    </div>
</body>

</html>

//6-vazifa
<?php
// if (isset($_POST) ) {
//     echo '<pre>';
//     print_r($_POST);
//     die;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pitsa buyurtma qilish</title>
    <link rel="stylesheet" href="8.2vazifa.css" />
</head>

<body>
    <section class="container">
        <form action="pizza.php" method="post">
            <div class="menu">
                <div class="title">
                    <h1 class="table" border="1" width="00" height="300" align="center">
                        Pitsa buyurtma berish
                    </h1>
                </div>

                <div class="main_text">
                    <h1>Noni qanday bo'lsin?</h1>
                    <select class="" name="noni">
                        <option value="Yupqa">Yupqa</option>
                        <option value="Qalin">Qalin</option>
                    </select>
                </div>

                <div class="size">
                    <h1>Kattaligi</h1>
                    <!-- <div class="pizza_sizes">
                        <p>25sm</p>
                        <p>30sm</p>
                        <p>35sm</p>
                    </div> -->

                    <select name="pizza_size">
                        <option value="25sm">25sm</option>
                        <option value="30sm">30sm</option>
                        <option value="35sm">35sm</option>
                    </select>
                </div>

                <div class="putt">
                    <h1>Ustiga nima solaylik?</h1>

                    <div class="putt_item">
                        <div class="item_part1">
                            <div>
                                <input name="pamidor" type="checkbox" />
                                <label>Pomidor</label>
                            </div>

                            <div>
                                <input name="kurka_goshti" type="checkbox" />
                                <label>Kurka go'shti</label>
                            </div>
                            <div>
                                <input name="zaytun" type="checkbox" />
                                <label>Zaytun</label>
                            </div>
                        </div>
                        <div class="item_part2">
                            <div>
                                <input name="tuzlangan_bodring" type="checkbox" />
                                <label>Tuzlangan bodring</label>
                            </div>
                            <div>
                                <input name="qoziqorin" type="checkbox" />
                                <label>Qo'ziqorin</label>
                            </div>
                            <div>
                                <input name="qazi" type="checkbox" />
                                <label>Qazi</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="additions">
                    <h1>Qo'shimchalar</h1>

                    <div class="products">
                        <div class="items">
                            <label>Achchiq</label>
                            <input name="achchiq" type="checkbox" />
                        </div>
                        <div class="items2">
                            <label>Sosiskali</label>
                            <input name="sasiska" type="checkbox" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="line"></div>

            <div class="right">
                <div class="zakaz">
                    <h1>Non:</h1>
                    <p><?php
                        if (isset($_POST['noni']) && !empty($_POST['noni'])) {
                            $noni = $_POST['noni'];
                            echo $noni;
                        } else {
                            echo 'tanlanmagan';
                        }
                        ?></p>
                </div>
                <div class="size">
                    <h1>Kattaligi:</h1>
                    <p1><?php
                        if (isset($_POST['pizza_size']) && !empty($_POST['pizza_size'])) {
                            $size = $_POST['pizza_size'];
                            echo $size;
                        } else {
                            echo 'tanlanmagan';
                        }
                        ?></p1>
                </div>
                <div class="products">
                    <h1>Ustida:</h1>
                    <p1><?php
                        if (isset($_POST['pamidor']) && !empty($_POST['pamidor'])) {
                            $pamidor = $_POST['pamidor'];
                            echo '-Pamidor';
                        } else {
                            echo '';
                            echo '<br>';
                        }
                        echo '<br>';
                        if (isset($_POST['kurka_goshti']) && !empty($_POST['kurka_goshti'])) {
                            $kurka_goshti = $_POST['kurka_goshti'];
                            echo '-Kurka goshti';
                        } else {
                            echo "";
                            echo '<br>';
                        }
                        echo '<br>';
                        if (isset($_POST['zaytun']) && !empty($_POST['zaytun'])) {
                            $zaytun = $_POST['zaytun'];
                            echo '-Zaytun';
                        } else {
                            echo '';
                            echo '<br>';
                        }
                        echo '<br>';
                        if (isset($_POST['tuzlangan_bodring']) && !empty($_POST['tuzlangan_bodring'])) {
                            $tuzlangan_bodring = $_POST['tuzlangan_bodring'];
                            echo '-Tuzlangan bodring';
                        } else {
                            echo '';
                            echo '<br>';
                        }
                        echo '<br>';
                        if (isset($_POST['qoziqorin']) && !empty($_POST['qoziqorin'])) {
                            $qoziqorin = $_POST['qoziqorin'];
                            echo '-Qoziqorin';
                        } else {
                            echo "";
                            echo '<br>';
                        }
                        echo '<br>';
                        if (isset($_POST['qazi']) && !empty($_POST['qazi'])) {
                            $qazi = $_POST['qazi'];
                            echo '-Qazi';
                        } else {
                            echo '';
                            echo '<br>';
                        }
                        ?></p1>
                </div>
                <div class="over">
                    <h1>Qo'shimcha:</h1>
                    <p><?php
                        if (isset($_POST['achchiq']) && !empty($_POST['achchiq'])) {
                            $achchiq = $_POST['achchiq'];
                            echo '-Achchiq';
                        } else {
                            echo '';
                            echo '<br>';
                        }
                        echo '<br>';
                        if (isset($_POST['sasiska']) && !empty($_POST['sasiska'])) {
                            $sasiska = $_POST['sasiska'];
                            echo '-Sasiska';
                        } else {
                            echo '';
                            echo '<br>';
                        }
                        ?></p>
                </div>
                <button class="sumbit">Buyurtma berish</button>
            </div>
        </form>
    </section>
</body>

</html>

//7-vazifa

// 7- vazifa

<?php
function convert($size, $unit)
{
    if ($unit == "KB") {
        return $fileSize = round($size / 1024, 4) . 'KB';
    }
    if ($unit == "MB") {
        return $fileSize = round($size / 1024 / 1024, 4) . 'MB';
    }
    if ($unit == "GB") {
        return $fileSize = round($size / 1024 / 1024 / 1024, 4) . 'GB';
    }
}

if (isset($_POST['convert_size'])) {
    $size = $_POST['size'];
    $unit = $_POST['convert_unit'];
    $size = convert($size, $unit);
}
?>

<html>

<head></head>

<body>

<style>
    body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:#A9BCF5;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#045FB4;
}
#wrapper h1 p
{
 font-size:18px;
}
#convert_div input[type="text"]
{
 width:400px;
 height:55px;
 padding-left:10px;
 font-size:18px;
 margin-bottom:15px;
 border:none;
 color:#045FB4;
 font-weight:bold;
}
#convert_div select
{
 margin:0px;
 padding:0px;
 border:none;
 width:70px;
 height:55px;
 margin-bottom:15px;
 border:none;
 color:#045FB4;
 font-weight:bold;
}
#convert_div input[type="submit"]
{
 width:330px;
 height:45px;
 font-size:16px;
 font-weight:bold;
 background-color:#5882FA;
 color:white;
 border:none;
 box-shadow:0px 4px 0px 0px #2E64FE;
 border-radius:3px;
}
</style>
    <div id="wrapper">

        <div id="convert_div">
            <form method="post" action="">
                <input type="text" name="size" placeholder="Enter Bytes">
                <select name="convert_unit">
                    <option>KB</option>
                    <option>MB</option>
                    <option>GB</option>
                </select>
                <br>
                <input type="submit" name="convert_size" value="Convert Bytes">
            </form>
            <p><?php echo $size; ?></p>
        </div>

    </div>
</body>

</html>

//8-vazifa

<?php
// echo '<pre>';
// print_r($sum);
// die;
// $totalSum = null;
// if (isset($_POST['Mastava']) && !empty(($_POST['Mastava']))) {
//     $sum  =  $_POST['Mastava'];
//     $totalSum += $sum;
// }
// if (isset($_POST['Moxora']) && !empty(($_POST['Moxora']))) {
//     $sum  = $_POST['Moxora'];
//     $totalSum += $sum;
// }
// if (isset($_POST["Shorva"]) && !empty(($_POST["Sho'rva"]))) {
//     $sum  = $_POST["Sho'rva"];
//     $totalSum += $sum;
// }
// if (isset($_POST['Norin']) && !empty(($_POST['Norin']))) {
//     $sum  = $_POST['Norin'];
//     $totalSum += $sum;
// }
// if (isset($_POST['Osh']) && !empty(($_POST['Osh']))) {
//     $sum  = $_POST['Osh'];
//     $totalSum += $sum;
// }
// if (isset($_POST['Manti']) && !empty(($_POST['Manti']))) {
//     $sum  = $_POST['Manti'];
//     $totalSum += $sum;
// }
// if (isset($_POST['Qozon_Kabob']) && !empty(($_POST['Qozon_Kabob']))) {
//     $sum  = $_POST['Qozon_Kabob'];
//     $totalSum += $sum;
// }
// if (isset($_POST["Lagmon"]) && !empty(($_POST["Lag'mon"]))) {
//     $sum  = $_POST["Lag'mon"];
//     $totalSum += $sum;
// }
// if (isset($_POST['Choy']) && !empty(($_POST['Choy']))) {
//     $sum  = $_POST['Choy'];
//     $totalSum += $sum;
// }
// if (isset($_POST['Coca_Cola']) && !empty(($_POST['Coca_Cola']))) {
//     $sum  = $_POST['Coca_Cola'];
//     $totalSum += $sum;
// }
// if (isset($_POST['Fanta']) && !empty(($_POST['Fanta']))) {
//     $sum  = $_POST['Fanta'];
//     $totalSum += $sum;
// }
// if (isset($_POST['Kofe']) && !empty(($_POST['Kofe']))) {
//     $sum  = $_POST['Kofe'];
//     $totalSum += $sum;
// }
// if (isset($_POST['Achchiq_chuchuk']) && !empty(($_POST['Achchiq_chuchuk']))) {
//     $sum  = $_POST['Achchiq_chuchuk'];
//     $totalSum += $sum;
// }
// if (isset($_POST['olivye']) && !empty(($_POST['olivye']))) {
//     $sum  = $_POST['olivye'];
//     $totalSum += $sum;
// }
// if (isset($_POST['Fransuzkiy']) && !empty(($_POST['Fransuzkiy']))) {
//     $sum  = $_POST['Fransuzkiy'];
// }
// if (isset($_POST['Mujiskoy_kapriz']) && !empty(($_POST['Mujiskoy_kapriz']))) {
//     $sum  = $_POST['Mujiskoy_kapriz'];
//     $totalSum += $sum;
// }

$totalSum = null;
// print_r($_POST);

$foods = $_POST;
// print_r($_POST);

// foreach ($foods as $key => $value) {
//     // echo 'key '. $key;
//     // echo ' -- ';
//     // echo 'value '. $value;
//     // echo '<br>';
//     switch ($key) {
//         case 'Mastava':
//             $sum  =  $value;
//             $totalSum += $sum;
//             break;
//         case 'Moxora':
//             $sum  =  $_POST['Moxora'];
//             $totalSum += $sum;
//             break;
//         case 'Shorva':
//             $sum  =  $_POST['Shorva'];
//             $totalSum += $sum;
//             break;
//         case 'Norin':
//             $sum  =  $_POST['Norin'];
//             $totalSum += $sum;
//             break;
//         case 'Osh':
//             $sum  =  $_POST['Osh'];
//             $totalSum += $sum;
//             break;
//         case 'Manti':
//             $sum  =  $_POST['Manti'];
//             $totalSum += $sum;
//             break;
//         case 'Qozon_Kabob':
//             $sum  =  $_POST['Qozon_Kabob'];
//             $totalSum += $sum;
//             break;
//         case 'Lagmon':
//             print "Lagmon";
//             break;
//         case 'Choy':
//             $sum  =  $_POST['Choy'];
//             $totalSum += $sum;
//             break;
//         case 'Coca_Cola':
//             $sum  =  $_POST['Coca_Cola'];
//             $totalSum += $sum;
//             break;
//         case 'Fanta':
//             $sum  =  $_POST['Fanta'];
//             $totalSum += $sum;
//             break;
//         case 'Kofe':
//             $sum  =  $_POST['Kofe'];
//             $totalSum += $sum;
//             break;
//         case 'Achchiq_chuchuk':
//             $sum  =  $_POST['Achchiq_chuchuk'];
//             $totalSum += $sum;
//             break;
//         case 'olivye':
//             $sum  =  $_POST['olivye'];
//             $totalSum += $sum;
//             break;
//         case 'Fransuzkiy':
//             $sum  =  $_POST['Fransuzkiy'];
//             $totalSum += $sum;
//             break;
//         case 'Mujiskoy_kapriz':
//             $sum  =  $_POST['Mujiskoy_kapriz'];
//             $totalSum += $sum;
//             break;
//     }
// }

foreach ($foods as $key => $value) {
    // echo 'key ' . $key;
    // echo ' -- ';
    // echo 'value ' . $value;
    // echo '<br>';
    switch ($key) {
        case 'Mastava':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Moxora':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Shorva':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Norin':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Osh':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Manti':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Qozon_Kabob':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Lagmon':
            echo "Lagmon";
            break;
        case 'Choy':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Coca_Cola':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Fanta':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Kofe':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Achchiq_chuchuk':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'olivye':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Fransuzkiy':
            $sum = $value;
            $totalSum += $sum;
            break;
        case 'Mujiskoy_kapriz':
            $sum = $value;
            $totalSum += $sum;
            break;
    }
}

$percent = $totalSum * 0.15;
echo $totalSum + $percent;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hisob kitob menyusi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="container">
        <form action="index.php" method="post">
            <div class="main_menu">
                <div class="menu_title">
                    <h1>Menu</h1>
                </div>
                <div class="first_food">
                    <h1>1-Taom</h1>
                    <div>
                        <input type="radio" name="Mastava" value="16000">Mastava(16 000 so'm)
                        <input type="radio" name="Moxora" value="15500">Moxora(15 500 so'm)
                        <input type="radio" name="Shorva" value="15000">Sho'rva(15 000 so'm)
                        <input type="radio" name="Norin" value="20500">Norin(20 500 so'm)
                        <?php ?>
                    </div>
                </div>
                <div class="second_food">
                    <h1>2-Taom</h1>
                    <div>
                        <input type="radio" name="Osh" value="20000">Osh(20 000 so'm)
                        <input type="radio" name="Manti" value="18500">Manti(18 500 so'm)
                        <input type="radio" name="Qozon_Kabob" value="23000">Qozon Kabob(23 000 so'm)
                        <input type="radio" name="Lagmon" value="21500">Lag'mon(21 500 so'm)
                    </div>
                </div>
                <div class="drink">
                    <h1>Ichimlik</h1>
                    <div>
                        <input type="radio" name="Choy" value="2000">Choy(2 000 so'm)
                        <input type="radio" name="Coca_Cola" value="8500">Coca Cola(8 500 so'm)
                        <input type="radio" name="Fanta" value="8500">Fanta(8 500 so'm)
                        <input type="radio" name="Kofe" value="10500">Kofe(10 500 so'm)
                    </div>
                </div>
                <div class="salad">
                    <h1>Salatalar</h1>
                    <div>
                        <input type="radio" name="Achchiq_chuchuk" value="5000">Achchiq chuchuk(5 000 so'm)
                        <input type="radio" name="olivye" value="olivye(8000">olivye(8 000 so'm)
                        <input type="radio" name="Fransuzkiy" value="8000">Fransuzkiy(8 000 so'm)
                        <input type="radio" name="Mujiskoy_kapriz" value="10500">Mujiskoy kapriz(10 500 so'm)
                    </div>
                </div>
                <div class="menu_title">
                    <h1>15 % usluga</h1>
                </div>
                <button>Hisoblash</button>
                <div class="menu_title">
                    <h1>Jami:</h1>
                </div>
            </div>
        </form>
    </section>

</body>

</html>

