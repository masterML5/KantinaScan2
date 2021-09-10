<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretrazivanje po datumu</title>
</head>
<body>
<form class="daterangereport" method="POST" action="insert_report.php">
                <fieldset id="daterangefield">
                    <legend><b>Unesite opseg datuma za pretraživanje</b></legend>
                    <div class= "group1">
                        <div class = "group2">
                            <label for="fromdate"> Od </label>
                            <br/>
                            <input type="date" name="fromdate" required/>
                        </div>
                        <div class = "group2">
                            <label for="todate"> Do </label>
                            <br/>
                            <input type="date" name="todate" required/>
                        </div>
                        <br/>
                    </div>
                </fieldset>
                <br/>
                    <div class="formbuttons">
                        <input name= "formsubmit" id="formsubmit" type="submit" value="Potvrdi" />
                    </div>
</form>

</body>
</html>