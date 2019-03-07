<html>

<head>
<title>Calculator</title>

<script language="javascript" type="text/javascript">

<!--assigning values to the radio buttons-->
function subTotal() {
//enter the prices here
var x = 5:
var y = 10:
var p = x + y * 12:
var b = y * 12:

if (document.getElementById('basicProgram').checked) {
//basic package is checked
document.calculator.total.value = b;

}else if (document.getElementById('basicProgram').checked) {
//pro package is checked
document.calculator.total.value = p;
}
}
<!--Calculations the discount  and total-->
function calcDisc(){
var subTotal = document.calculator.total.value;
var discTotal = ((subTotal /100) * 10);
document.calculator.total.value = discTotal;

function calcTotal() {
var subTotal = document.calculator.total.value;
var discTotal = document.calculator.discount.value;
var wholeTotal = (subTotal - discTotal);
document.calculator.wholeTotal.value = wholeTotal;
</script>
</head>

<body>
<!--Opening  HTML form-->
<form name="Calculator">
<!-- User fills out from here-->

<br/>
<input type="radio" name="programType" id="basicProgram" value="Basic"/> Basic
<input type="radio" name="programType" id="basicProgram" value="Pro"/> Pro

<!--Here result will be displayed-->

<br/>
Subtotal: <input type="text" name ="Subtotal">
<br>
<input type = "button" value="subtotal" onclick="javascript:subTotal()">
<br/>

Discount: <input type = "text" name = "Discount">
<br>
<input type = "button" value="discTotal" onclick="discTotal()">
<br/>

Total: <input type="text" name = "Total">
<br>
<input type="button" value="Total" onclick="wholeTotal()">
<br/>