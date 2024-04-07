<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Invoice #0187</title>
    <style>
        body {
            margin-top: 65px;
            margin-left: 30px;
            margin-right: -15px;
            font-family: DejaVu Sans
        }
        .invoice .header .sender-info,
        .invoice .header .recipient-info {
            display: inline-block;
            width: 49%; /* Set width for each side */
        }
        .invoice .header {
            display: flex;

            justify-content: space-between;
            align-items: flex-start; /* Align items vertically at the top */
            text-align: center;
        }

        .invoice .header div {
            width: 49%; /* Set width for each side */
        }

        .invoice .header h4 {
            margin: 5px;
            color: cornflowerblue;
        }
        .invoice .header h5 {
            margin: 0;
        }
        .invoice h2 {
            text-align: center;
            margin-top: -55px;
        }

        .invoice td strong {
            font-size: 13px;
        }
        .invoice .details {
            margin-top: 20px;
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .invoice th{
            font-size: 15px;
        }

        .invoice th, .invoice td {
            border: 1px solid #ccc;
            padding: 3px;
        }

        .invoice .total {
            margin-top: 20px;
            text-align: right;
        }

        .invoice .footer {
            /*margin-top: 4px;*/
            /*text-align: center;*/
            display: inline-block;
        }
        .invoice .footer .ready_date,
        .invoice .footer .pinfl {
            display: inline-block;
            width: 49%;
        }
        .details .product-name-value{
            border: 1px solid #ccc;
            height: 17px;
            text-align: left;
        }
        .details td{
            border: 1px solid #ccc;
            height: 17px;
            text-align: center;
        }
        .details .product-name{
            width: 38%;
        }
        .details .product-quantity{
            width: 10%;
        }
        .details .product-weight{
            width: 15%;
        }
        .details .product-weight-2{
            width: 15%;
        }
        .details .product-price{
            width: 15%;
        }


    </style>
</head>
<body>
<div class="invoice" style="width: 90%; margin-top: -70px">
    <h2 style="padding-bottom: 15px">Invoice  <span style="margin-left: 15px">-</span>    <span style="margin-left: 30px">{{$invoice->number}}</span></h2>
    <div class="header">
        <div class="sender-info">
            <img src="{{ asset($RuCountry->emblem) }}" style="height: 80px;">
            <h5>СТРАНА ОТПРАВИТЕЛЬ</h5>

            <h4>РОССИЙСКИЙ ФЕДЕРАЦИЯ</h4>
            <!-- Add sender information here -->
        </div>
        <div class="recipient-info">
            <img src="{{ asset($UzCountry->emblem) }}" style=" height: 80px;">
            <h5>СТРАНА ПОЛУЧАТЕЛЬ</h5>

            <h4>РЕСПУБЛИКА УЗБЕКИСТАН</h4>
            <!-- Add recipient information here -->
        </div>
    </div>
    <table>
        <tr>
            <td><strong>Ф.И.О отправитель:</strong></td>
            <td>{{$invoice->sender_fullname}}</td>
        </tr>
        <tr>
            <td><strong>Ф.И.О получателя:</strong></td>
            <td>{{$invoice->receiver_fullname}}</td>
        </tr>
        <tr>
            <td><strong>Паспорт получателя:</strong></td>
            <td>{{$invoice->receiver_passport}}</td>
        </tr>
        <tr>
            <td><strong>День рож. получателя:</strong></td>
            <td>{{$invoice->receiver_date}}</td>
        </tr>
        <tr>
            <td><strong>Адрес получателя:</strong></td>
            <td>{{$invoice->address->name}}</td>
        </tr>
      @if($invoice->project->isDisplayPhone)
            <tr>
                <td><strong>Контакт получателя:</strong></td>
                <td>{{$invoice->receiver_phone}}</td>
            </tr>
      @endif
    </table>
    <div>
        <div class="details">
            <h4 style="text-align: center; margin-top: -5px">Перечень товаров</h4>
            <table>
                    <thead>
                    <tr>
                        <th>№</th>
                        <th class="product-name">Наименование</th>
                        <th class="product-quantity">Количество</th>
                        <th class="product-weight">Вес нетто (кг)</th>
                        <th class="product-weight-2">Вес брутто (кг)</th>
                        <th class="product-price">Цена за единицу (Доллар США)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $counter = 1;
                    @endphp
                    @foreach($invoice_products as $invoice_product)
                        <tr>
                            <td>{{ $counter }}</td>
                            <td class="product-name-value p-l-4">{{$invoice_product->product->name}}</td>
                            <td>{{$invoice_product->quantity}}</td>
                            <td></td>
                            <td></td>
                            <td>{{$invoice_product->price}} $</td>
                        </tr>
                        @php
                            $counter++;
                        @endphp
                    @endforeach

                    @for ($i = 1; $i <= $loopLimit - count($invoice_products); $i++)
                        <tr>
                            <td>{{$i+count($invoice_products)}}</td>
                            <td ></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endfor

                    <tr>
                        <td></td>
                        <td>Итого:</td>
                        <td>{{$totalQuantity}}</td>
                        <td>{{$invoice->weight}} кг</td>
                        <td></td>
                        <td>{{$totalPrice}} $</td>
                    </tr>
            </table>
        </div>
    </div>
{{--    <div class="footer">--}}
{{--        <p>SIGNATURE AND STAMPS of SENDERS / подпись и печать отправителя</p>--}}
{{--        <p class="ready_date"><strong>Дата:</strong> 17.08.2023</p>--}}
{{--        <p class="pinfl"><strong>Подпись:</strong> 32703791590080</p>--}}
{{--    </div>--}}
</div>
</body>
</html>
