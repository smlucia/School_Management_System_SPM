<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Report</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <style>
    * {
        font-family: 'Roboto';
        margin: 3px;
    }

    .align {
        float: right;
        margin-top: -90px;
        padding: 5px;
    }

    #box {

        padding: 30px;
        height: auto;
        border: 2px solid;

        margin-top: 40px;
    }

    button {
        width: 200px;
        height: 30px;
        font-size: 18px;
        color: whitesmoke;
        background-color: darkgrey;
        border-radius: 7px;
        border: none;
    }

    a {
        text-decoration: none;
        color: black;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #DDD;
    }

    tr:hover {
        background-color: #D6EEEE;
    }
    </style>
</head>

<body>

    <div id="box">
        <p style="margin-top: 60px; margin-left:20px;font-size:28px;"><b>Student Report</b></p>

        <p style="float: right; margin-top:-80px;  font-size:18px;">Ellucian
            <br> +9411 2729568<br>
            +9411 2123789<br>
            ellucian.info@yahoo.com
        </p>
        <hr style="margin-top: 80px; width:100%;">
        <br><br>

        <p style="font-size: 24px;"><b>Number of students sitting for : </b> </p><br>
        <p style="font-size: 18px;"><b>Scholarship Exam : </b> {{ $resultsCount}} </p><br>
        <table>
            <tr>
                <th>Index No </th>
                <th> Name</th>
            </tr>
            @foreach($results as $r1)
            <tr>
                <td>{{ $r1->index }} </td>
                <td>{{ $r1->name }} </td>
            </tr>
            @endforeach
        </table><br>

        <p style="font-size: 18px;"><b>GCE Ordinary Level Exam : </b>{{ $results2Count}} </p><br>
        <table style="">
            <tr>
                <th>Index No </th>
                <th> Name</th>
            </tr>
            @foreach($results2 as $r2)
            <tr>
                <td>{{ $r2->index }} </td>
                <td>{{ $r2->name }} </td>
            </tr>
            @endforeach
        </table> <br>

        <p style="font-size: 18px;"><b>GCE Advanced Level Exam : </b>{{ $results3Count}} </p><br>
        <table style="">
            <tr>
                <th>Index No </th>
                <th> Name</th>
            </tr>
            @foreach($results3 as $r3)
            <tr>
                <td>{{ $r3->index }} </td>
                <td>{{ $r3->name }} </td>
            </tr>
            @endforeach
        </table>

        </br>
    </div>
    <button>
<<<<<<< HEAD
        <a href="http://127.0.0.1:8000/generate-pdf4">Download Report</a>
=======
        <a href="http://127.0.0.1:8000/generate-pdf">Download Report</a>
>>>>>>> dfe0bb1672516fa038637dee1a91896902bdaaa5
    </button>
</body>

</html>