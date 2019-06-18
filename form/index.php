
<?php
/**
 * Created by IntelliJ IDEA.
 * User: LENOVO
 * Date: 6/16/2019
 * Time: 9:09 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation Form</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    <style>
        #title{
            padding: 10px;
            background-color: #7d64ff;
            width: 100%;
        }
        #customer{
            margin-left: 40%;
            font-size: 35px;
            font-weight: bold;
            color: #e2e6ea;
        }
        .label{
            /*margin-left: 40px;*/
            font-size: 20px;
            font-weight: bold;
            margin-right: 0px;
        }
        .input{
            margin-bottom: 18px;
            width: 700px;
            height: 48px;
            border-radius: 5px;
        }
        #button{
            width: 180px;
            height: 50px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5a30b5;
            color: #d4edda;
            border-radius: 20px;
            margin-left: 80px;
        }
    </style>

</head>


<body>

<!--<form action="2ndPage.php" method="post" id="form">-->
<!--    Customer ID :<input type="text" name="cid"><br><br>-->
<!--    Customer Name :<input type="text" name="name"><br><br>-->
<!--    NIC :<input type="text" name="nic"><br><br>-->
<!--    Email Address : <input type="text" name="email"><br><br>-->
<!--    Contact number :  <input type="text" name="contact_number"><br><br>-->
<!--    Salary :  <input type="text" name="salary"><br><br>-->
<!--    <button type="submit" form="form" value="submit">Submit</button>-->
<!--    <button type="reset" value="Reset">Reset</button>-->
<form action="" method="post ">
<div class="row">
    <div class="col-md-12" id="title">
        <label id="customer">Customer form</label>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label class="label">Customer ID</label>
    </div>
    <div class="col-md-7">
        <input type="text" placeholder="Customer ID" class="input" name="cid">
    </div>
</div>
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label class="label">Customer Name</label>
        </div>
        <div class="col-md-7">
            <input type="text" placeholder="Customer Name" class="input" name="cname">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label class="label">Email Address</label>
        </div>
        <div class="col-md-7">
            <input type="text" placeholder="E-mail" class="input" name="email">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label class="label">Contact Number</label>
        </div>
        <div class="col-md-7">
            <input type="text" placeholder="Contact Number" class="input" name="cnumber">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label class="label">Salary</label>
        </div>
        <div class="col-md-7">
            <input type="text" placeholder="Salary" class="input" name="salary">
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-7"></div>
        <div class="col-md-3">
           <button id="button">Submit</button>
        </div>
    </div>
</form>
<script src="js/jquery-3.4.1.min.js"></script>
<script>
    //Validation for Phone Number
    if (
        $("#btnadd").click(function () {
            var value = $("#cnumber").val();
            var regEx = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
            var result = regEx.test(value);
            if (!result) {
                alert(" Telephone Number is Invalid");
            }
        })) ;
    //Validation for Name
    if (
        $("#btnadd").click(function () {
            var value = $("#name").val();
            var regEx = /^[a-zA-Z]*$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Name Is Invalide..Please Input Only Letters");
            }
        })
    ) ;
    //validation for salary
    if (
        $("#btnadd").click(function () {
            var value = $("#salary").val().length>2;
            var regEx = /^\d{1,6}\.\d{1,6}$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Please input Salary Like : 0000.00");
            }
        })
    ) ;
    $("#button").click(function () {
        var cid=$("#cid").val();
        var regEx ="/C-\d{3}/";
        var result=regEx.test(cid);
        if (!result) {
            alert("ID is Invalid")
        }
    });

    $("#cid").keyup(function () {
        if($("#cid").val().length>4){
            alert("Invalid Customer ID ")
        }
    });
</script>
</body>
</html>
