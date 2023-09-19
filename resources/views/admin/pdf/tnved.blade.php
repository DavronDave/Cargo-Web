<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="invoice_form.css">
    <title>Invoice / Упаковочный лист 2023-0006</title>
    <style>
        body {
            font-family: DejaVu Sans;
            margin-top: 25px;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: #f0f0f0;
            padding: 10px;
            margin: 0;
        }

        .company-container {
            display: block;
            padding: 0px;
        }

        .company {
            display: inline-block;
            width: 49%; /* Adjust the width as needed */
            vertical-align: top; /* Align the companies at the top of the container */
        }
        .company p {
           margin-bottom: -17px;
            font-size: 10px;
        }

        .sender-company{
            margin-top: -50px;
        }

        .receiver-company{
            margin-top: -50px;
        }

        .company .sender-company p{
            padding: 3px;
        }

        .company .receiver-company p{
            padding: 3px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }

        hr {
            border: 1px solid #4F81BD;
            margin: 20px 0;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .invoice-table th,
        .invoice-table td {
            font-size: 10px;
            border: 1px solid #ccc;
            padding: 5px;
            text-align: left;
        }

        .invoice-table th {
            height: 40px;
        }

        .invoice-table td {
            height: 10px;
        }

        .invoice-table th {
            color: white;
            font-size: 12px;
            font-weight: bold;
            background-color: #4F81BD;
        }

        /* Optional: Add styles for alternating rows (zebra-striping) */
        .invoice-table tbody tr:nth-child(even) {
            background-color: #DCE6F1;
        }

        .additional-info {
            margin-top: 20px;
            display: flex;
            /*flex-direction: row;*/
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .info-pair {
            flex: 0 1 calc(50% - 10px); /* Two columns with a bit of spacing */
            text-align: left;
            margin-top: -7px;
            margin-bottom: 10px;
        }

        .info-label {
            font-size: 12px;
            margin-left: 170px;
            /*font-weight: bold;*/
        }

        .info-value {
            font-size: 12px;
            margin-top: -50px;
            text-align: right;
            margin-right: 170px;
        }
    </style>
</head>
<body>
<h3>INVOICE / Упаковочный лист <span style="margin-left: 20px">{{$project->code}}</span></h3>
<div class="company-container">
    <div class="company">
        <p>Sending Company</p>
        <hr>
        <div class="sender-company">
            <p>{{$project->sender->name}}</p>
            <p style="width: 50%">{{$project->sender->address}}</p>
            <p>ТЕЛ / {{$project->sender->phone}}</p>
        </div>
    </div>
    <div class="company">
        <p>Receiving Company</p>
        <hr>
        <div class="receiver-company">
            <p>{{$project->receiver->name}}</p>
            <p style="width: 70%">{{$project->receiver->address}}</p>
            <p>ТЕЛ / {{$project->receiver->phone}}</p>
        </div>
    </div>
</div>
<hr>
<table class="invoice-table">
    <thead>
    <tr>
        <th>№</th>
        <th>Описание груза</th>
        <th>Количество шт</th>
        <th>KOD ТНВЭД</th>
        <th>Вес kg</th>
        <th>Стоимость USD</th>
    </tr>
    </thead>
    <tbody>
    @php
    $number = 1;
    @endphp
    @foreach($categoriesData as $index => $categoryData)
        <tr>
            <td>{{ $number}}</td>
            <td>{{ $categoryData['name'] }}</td>
            <td>{{ $categoryData['quantity'] }}</td>
            <td>{{ $categoryData['code'] }}</td>
            <td>{{ $categoryData['weight'] }}</td>
            <td>{{ $categoryData['price'] }}</td>
        </tr>
        {{$number++}}
    @endforeach
    <tr>
        <td></td>
        <td>Overall</td>
        <td>{{ $overallQuantities }}</td>
        <td></td>
        <td>{{ $overallWeights }}</td>
        <td>{{ $overallPrices }}</td>
    </tr>
    </tbody>
</table>
<div class="additional-info">
<div class="info-pair">
    <div class="info-label">Количество мест посылок:</div>
    <div class="info-value">{{$overallInvoices}} шт</div>
</div>

<div class="info-pair">
    <div class="info-label">Количество товара:</div>
    <div class="info-value">{{ $overallQuantities }} шт</div>
</div>

<div class="info-pair">
    <div class="info-label">Общий вес:</div>
    <div class="info-value">{{ $overallWeights }} KG</div>
</div>

<div class="info-pair">
    <div class="info-label">Общий стоимость:</div>
    <div class="info-value">${{ $overallPrices }} USD</div>
</div>
</div>

<p style="font-size: 8px">Declaration Statement: I hereby certify that the information on this invoice is true and correct and the contents and value of this shipment is as stated above</p>
<!-- Rest of your form content here -->
</body>
</html>
