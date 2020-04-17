<?php
include("../private/shared/header.php");
?>
<link rel="stylesheet" type="text/css" href="stylesheet/styling.css">
<head>
    <style>
        body{
            background: #092756;
            background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
        }
        table {
            width:100%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        table#t01 tr:nth-child(even) {
            background-color: #eee;
        }
        table#t01 tr:nth-child(odd) {
            background-color: #fff;
        }
        table#t01 th {
            background-color: black;
            color: white;
        }
        h1{
            text-align: center;
            color: red;
        }

    </style>
</head>
<body>
<h1>Programma festival weekend</h1>
<table id="t01">
    <tr>
        <th></th>
        <th>Vrijdag</th>
        <th>Zaterdag</th>
        <th>Zondag</th>
    </tr>
    <tr>
        <td>20.30</td>
        <td>Festival opener</td>
        <td rowspan="">Club ondersteboven </td>
        <td>Kinderdisco</td>
    </tr>
    <tr>
        <td>22.00</td>
        <td>Dj Mike Gerritsen</td>
        <td>Dj Maurice en Rene Karst</td>
        <td>Silent disco</td>

    </tr>
    <tr>
        <td rowspan="2">23.00/01.00</td>
        <td rowspan="2">Beatcrooks </td>
        <td rowspan="2">Paul Elstak</td>
        <td>Radio 538</td>
    </tr>
    <tr>
<td>Mystery guest</td>






    </tr>
</table>


</body>