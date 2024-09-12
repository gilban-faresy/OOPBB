<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .output{
            display: flex;
            justify-content: space-between;
        }
        .form{
            width: 500px;
            height: 28em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color:#fff;
            border-radius:8px;
            padding-top: 120px;
        }
        form{
            background-color: skyblue;
            transition: 1s;
            box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.1);
            width: 80%;
            height: 270px;
            border-radius: 20px;
        }
        form:hover{
            transform: scale(1.05);
            background-color:blanchedalmond;
            transition: 1s;
        }
        button{
            width: 50%;
            height: 50px;
            border-radius: 10px;
            color: white;
            border:none;
            background-color: skyblue;
            box-shadow: 2px 2px  rgba(0, 0, 0, 0.1);
        }
        button:active{
            transform: translate(2px, 2px);
            box-shadow: none;
        }
        
        input, select{
            width: 70%;
            height: 25px;
        }
        h1{
            font-size: 50px;
            margin: 15% 0 0 5% ;
        }
    </style>
</head>
<body>
    <div class="output">
        
    <h1>Pembelian Bahan Bakar Shell</h1>
    <center>
    <div class="form">
<form action="BB2.php" method="post" >
        <div >
            <br>
            <br><br>
            <label for="liter">Masukkan Jumlah Liter Pembelian : </label>
            <br>
            <input type="number" name="liter" id ="liter" required>
        </div>
        <br>
        <div >
            <label for="jenis">Pilih Jenis Bahan Bakar</label>
            <br>
            <select name="jenis" required>
                <option value="SSuper">Shell Super</option>
                <option value="SVPower">Shell SVPower</option>
                <option value="SSuper">Shell SVPowerDiesel</option>
                <option value="SSuper">Shell SVPowerNitro</option>
            </select>
        </div>
        <br>
        <button type="submit" name="submit">beli</button>
        <br>
</form>
</div>
</center>
</div>
</body>
</html>