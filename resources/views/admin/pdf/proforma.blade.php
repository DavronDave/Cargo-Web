<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proforma Invoice</title>
    <style>
        body {
            font-family: DejaVu Sans;
        }

        .invoice {
            padding: 20px;
            margin: 20px;
        }

        .invoice p{
            font-size: 10px;
            margin-top: -6px;
        }

        .header {
            text-align: center;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .address .company{
            background-color: #D9D9D9;
        }

        .address p{
            text-align: center;
        }

        .address {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            margin-top: 30px;
        }

        .sender-address,
        .recipient-address {
            width: 48%;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        .container-div{
            display: flex;
        }

        .box {
            /*flex: 0 0 40%; !* Set the width to 48% for each div *!*/
            display: flex;
            width: 48%;
        }

        .company-container {
            display: block;
            margin-top: 40px;
            padding: 0px;
        }

        .company {
            margin-top: 30px;
            display: inline-block;
            width: 49%; /* Adjust the width as needed */
            vertical-align: top; /* Align the companies at the top of the container */
        }
        .header-company{
            background-color:  #D9D9D9;
            margin-bottom: 4px !important;
        }
        .company p {
            margin-bottom: -13px;
            font-size: 11px;
        }

        .sender-company{
            margin-top: -15px;
        }

        .receiver-company{
            margin-top: 10px;
        }

        .company .sender-company p{
            padding: 1px;
            text-align: center;
        }

        .company .receiver-company p{
            padding: 1px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #000;
            font-size: 11px;
            text-align: center;
        }
        th{
            height: 80px;
        }

        .red-td td{
            height: 270px;
            vertical-align: top;
            color: red;
        }

    </style>
</head>
<body>
<div class="company-container">

    <div class="header">СЧЕТ-ПРОФОРМА/PROFORMA INVOICE № <span style="margin-left: 25px">{{$project->code}}</span></div>
    <p style="margin-top: -18px; font-size: 11px !important; text-align: center"> <strong>По Контракт № Пос/{{$companyContract->code}} (Соглашение об обслуживании) от {{date('d.m.Y', strtotime($companyContract->from_date))}}</strong></p>
    <div class="company">
        <div class="sender-company">
            <p class="header-company"><strong>ОТ КОГО / SENT BY</strong></p>
            <p>{{$senderCompany->name}}</p>
            <p>{{$senderCompany->address}}</p>
            <p>ТЕЛ / {{$senderCompany->phone}}</p>
        </div>
    </div>
    <div class="company">

    </div>
    <div class="company">
        <div class="sender-company">
            <p class="header-company"><strong>КОМУ / SENT TO</strong></p>
            <p>{{$receiverCompany->name}}</p>
            <p>{{$receiverCompany->address}}</p>
            <p>ТЕЛ / {{$receiverCompany->phone}}</p>
        </div>
    </div>
    <div class="company">
        <div class="receiver-company" style="margin-top: -20px">
            <p style="margin-top: 15px !important; font-size: 11px; margin-bottom: 5px !important;" ><strong>НАКЛАДНАЯ № / CMR № <span style="margin-right: -20px; margin-left: 48px !important;">{{$project->code}}</span></strong></p>
            <p>Кол-во мест / Number of pieces: <span style="margin-left: 20px">{{$overallInvoices}}</span></p>
            <p>Вес Брутто / Total Gross Weight: <span style="margin-left: 18px">{{$overallWeights}}</span></p>
            <p>Вес Нетто / Total Net Weight: <span style="margin-left: 33px">
                    @if($overallWeights<=500)
                        {{$overallWeights-30}}
                    @elseif($overallWeights>500 && $overallWeights<=1000)
                        {{$overallWeights-50}}
                    @elseif($overallWeights>1000 && $overallWeights<=1500)
                        {{$overallWeights-80}}
                    @else
                        {{$overallWeights-100}}
                    @endif
                </span>
            </p>
            <p>Carrier / Транспортное агентство: </p>
        </div>
    </div>
    <table>
        <thead>
        <tr>
            <th>Полное описание товара / Full description of goods</th>
            <th>Quantity / Кол- во</th>
            <th style="width: 40px">Unit / Ед. изм.</th>
            <th style="width: 70px">Unit price / Цена за ед., валюта</th>
            <th style="width: 100px">Total / Общая стоимость, валюта</th>
        </tr>
        </thead>
        <tbody>
        <tr class="red-td">
            <td >Курьерские отправленные / Сourier sent</td>
            <td>PCs / шт</td>
            <td>{{$overallInvoices}}</td>
            <td>{{ number_format($overallPrices / $overallInvoices, 2) }}</td>
            <td>{{number_format($overallPrices,2)}}</td>
        </tr>
        <tr>
            <td>Total / ИТОГО</td>
            <td></td>
            <td></td>
            <td>{{ number_format($overallPrices / $overallInvoices, 2) }}</td>
            <td>{{number_format($overallPrices,2)}}</td>
        </tr>
        </tbody>
    </table>
    <p style="font-size: 12px; text-align: center"><strong>Общая стоимость, валюта/Total value, currency: <span style="margin-left: 20px; color: red; unicode-bidi: bidi-override; direction: rtl; padding-left: 0.3em;">{{number_format($overallPrices,2) }} долларов</span></strong></p>
    <p style="font-size: 12px; margin-top: -7px">Условия транспортировки (ИНКОТЕРМС) / Term of transportation (INCOTERMS) -
        <strong>INCOTERMS 2010</strong></p>
    <p style="font-size: 12px">Цель экспорта / Reason for export: Delivery <strong><u>{{$project->incoterm->name}}</u></strong></p>
    <p style="font-size: 12px">Подтверждаю, что все вышеуказанное верно /</p>
    <p style="font-size: 12px; margin-top: -12px">I declare that the information mentioned above is true and correct to the best of my knowledge</p>
    <p style="font-size: 12px; margin-bottom: -8px">
        Подпись / Signature: ____________________ <br>
        ФИО / Name: __________________________ <br>
        Дата / Date: <br>
        {{date('d.m.Y', strtotime($project->ready_date))}} <br>
        Место для печати / Stamp place</p>
</div>
</body>
</html>
