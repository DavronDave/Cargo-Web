<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manifest</title>
    <link rel="stylesheet" href="styles.css">
    <style>

        body{
            font-family: DejaVu Sans;
        }
        .container {
            margin-top: 30px;
            display: flex; /* Use flexbox */
            justify-content: space-between; /* Distribute space between elements */
        }

        .box {
            display: inline-block;
            width: 23%; /* Adjust the width as needed */
            font-size: 10px;
            padding: 3px;
            box-sizing: border-box;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }


        table {
            width: 100%;
            margin-right: 170px;
            border-collapse: collapse;
        }

        th, td {
            border: 0.5px solid #4F81BD;
            text-align: center;
            font-size: 7px;
        }

        th {
            padding: 3px;
            background-color: #4F81BD;
            text-align: center !important;
        }

        td{
            padding: 1px 3px 1px 3px;
        }

        tr:nth-child(even) {
            background-color: #DCE6F1;
        }

        tr:hover {
            background-color: #ddd;
        }


    </style>
</head>
<body>
<div class="container">
    <div class="box" style="border: 0.6px #4F81BD solid !important;">
        <p style="margin-bottom: -10px">{{$project->sender->name}} </p>
        <p style="margin-bottom: -10px">{{$project->sender->address}} </p>
        <p>ТЕЛ / {{$project->sender->phone}} </p>
    </div>
    <div class="box" style="width: 520px !important;">
        <p style="text-align: center; margin-bottom: -27px">Узбекистон Республикасига олиб кириладиган халкаро курьерлик жунатмалари буйича</p>
        <p style="font-size: 27px; text-align: center; padding: 0px">МАНИФЕСТ</p>

</div>
<div class="box" style="border: 0.6px #4F81BD solid !important;">
    <p style="margin-bottom: -10px">{{$project->receiver->name}} </p>
    <p style="margin-bottom: -10px">{{$project->receiver->address}} </p>
    <p>ТЕЛ / {{$project->receiver->phone}} </p>
</div>
</div>
<table>
    <thead>
    <tr>
        <th style="width: 30px">Т/р</th>
        <th style="width: 40px">1. Тижорат хужжатининг раками</th>
        <th style="width: 100px;">2. Халкаро курьерлик жунатмасининг жунатувчиси</th>
        <th style="width: 100px;">3. Халкаро курьерлик жунатмасининг кабул килувчиси</th>
        <th>TEL</th>
        <th>манзили</th>
        <th style="width: 330px;">4. Халкаро курьерликнинг жунатмасидаги товарларнинг кискача номи</th>
        <th style="width: 50px;">5. Халкаро курьерлик жунатмасининг брутто вазни (кг)</th>
        <th style="width: 60px;">6. Халкаро курьерлик жунатмасининг фактура киймати</th>
        <th style="width: 40px">Валюта номи</th>
    </tr>
    </thead>
    @php
        $totalWeight = 0;
        $totalPrice = 0;
        $number = 1;
    @endphp
    <tbody>
    @foreach ($project->invoices as $invoice)
        @php
            $totalWeight += $invoice->weight;
            $totalPrice += $invoice->total_price;
        @endphp
        <tr>
            <td>{{ $number++ }}</td>
            <td>{{ $invoice->number }}</td>
            <td style="text-align: left !important;">{{ $invoice->sender_fullname }}</td>
            <td style="text-align: left !important;">{{ $invoice->receiver_fullname }}</td>
            <td>{{ $invoice->receiver_phone }}</td>
            <td>{{ $invoice->address->name }}</td>
            <td style="text-align: left !important;">
                @foreach ($invoice->invoiceProducts as $product)
                    {{ $product->product->name }} {{ $product->quantity }}
                @endforeach
            </td>
            <td>{{ $invoice->weight }}</td>
            <td>{{ $invoice->total_price  }}</td>
            <td>USD</td>
        </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Total:</td>
        <td>{{ $totalWeight }}</td>
        <td>{{ $totalPrice }}</td>
        <td></td>
    </tr>
    </tbody>
</table>



{{--<table>--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>T/р</th>--}}
{{--        <th>Тижорат хужжатининг раками</th>--}}
{{--        <th>Халкаро курьерлик жунатмасининг жунатувчиси</th>--}}
{{--        <th>Халкаро курьерлик жунатмасининг кабул килувчиси</th>--}}
{{--        <th>TEL</th>--}}
{{--        <th>манзили</th>--}}
{{--        <th>Халкаро курьерликнинг жунатмасидаги товарларнинг кискача номи</th>--}}
{{--        <th>Халкаро курьерлик жунатмасининг брутто вазни (кг)</th>--}}
{{--        <th>Халкаро курьерлик жунатмасининг фактура киймати</th>--}}
{{--        <th>Валюта номи</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    <tr>--}}
{{--        <td>1</td>--}}
{{--        <td>Uraqova Mahliyo</td>--}}
{{--        <td>Sobitov Sardor</td>--}}
{{--        <td>998901049602</td>--}}
{{--        <td>Samarqand</td>--}}
{{--        <td>Odejda 3, Obuv 1, Lichni Veshi 3, Filtr 4</td>--}}
{{--        <td>11</td>--}}
{{--        <td>10,00 USD</td>--}}
{{--        <td>USD</td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td>2</td>--}}
{{--        <td>Uraqov Odil</td>--}}
{{--        <td>Eshmurodov Elmurodjon</td>--}}
{{--        <td>998957457494</td>--}}
{{--        <td>Samarqand</td>--}}
{{--        <td>Parfumeriya 3, Odejda 3, Obuv 1, Lichni Veshi 3</td>--}}
{{--        <td>18</td>--}}
{{--        <td>13,00 USD</td>--}}
{{--        <td>USD</td>--}}
{{--    </tr>--}}
{{--    <!-- Add more rows as needed -->--}}
{{--    </tbody>--}}
{{--</table>--}}
</body>
</html>
