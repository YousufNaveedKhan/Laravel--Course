<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>
        h1{
            text-align: center;
            font-size: 60;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 60%;
        }
        th, td{
            height: 40px;
            border : solid black thin ;
        }
        th{
            width: 5%;
            text-align: center;
        }
        td{
            width: 10%;
            text-align: center;
        }

    </style>
</head>
<body>
    <h1>Marksheet</h1>
    <table border="1">
        <tr><th>Name:</th> <td>{{ $id }}</td></tr>
        <tr><th>English:</th> <td>{{ $eng }}</td></tr>
        <tr><th>Urdu:</th> <td>{{ $urdu }}</td></tr>
        <tr><th>Islamiyat:</th> <td>{{ $isl }}</td></tr>
        <tr><th>Maths:</th> <td>{{ $maths }}</td></tr>
        <tr><th>Science:</th> <td>{{ $science }}</td></tr>
        <tr><th>Obtained Marks:</th> <td>{{ $obt }} / 500</td></tr>
        <tr><th>Percentage:</th> <td>{{ $per }}</td></tr>
        <tr><th>Grade:</th> <td>{{ $grade }}</td></tr>
        <tr><th>Remarks:</th> <td>{{ $remarks }}</td></tr>
    </table>
</body>
</html>
