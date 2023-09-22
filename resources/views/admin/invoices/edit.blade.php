@extends('admin.layouts.app')
@section('projects')
    active
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li class="active">Проекты</li>
        </ol>
        <div class="row">
{{--            @dd($project->id)--}}
            <div class="col-md-12 ui-sortable">
                <form method="post" action="{{ route('admin.invoice.update', ['invoice' => $invoice->id,'project' => $project->id]) }}" >
                    @csrf
                    @method('PUT')
                <div class="panel panel-inverse">
{{--                    <a href="" class="btn btn-success pull-right btn-xs"--}}
{{--                       style="margin: 8px !important"--}}
{{--                       >Save <i class="fa fa-save"></i>--}}
{{--                    </a>--}}
                    <button class="btn btn-success pull-right btn-xs  m-5" style="width: 70px; height: 30px" type="submit">Save</button>
                    <div class="panel-heading">
                        <h4 class="panel-title">Список</h4>
                    </div>
                    <div class="panel-body m-20" style="min-height: 510px">
                        <div id="data-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group" >
                                        <label for="number">Номер invoice</label><br>
                                        <input type="number" name="number" id="number" placeholder="Введите Код" class="form-control" value="{{ old('number') ?? $invoice->number }}">
                                        <br>
                                        @error('number')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ui-sortable">
                                    <div class="form-group" >
                                        <label for="sender_fullname">Отправитель</label><br>
                                        <input type="text" name="sender_fullname" id="sender_fullname" placeholder="Введите Отправитель" class="form-control" value="{{ old('sender_fullname') ?? $invoice->sender_fullname }}">
                                        <br>
                                        @error('sender_fullname')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ui-sortable">
                                    <div class="form-group" >
                                        <label for="receiver_fullname">Получатель</label><br>
                                        <input type="text" name="receiver_fullname" id="receiver_fullname" placeholder="Введите Получатель" class="form-control" value="{{ old('receiver_fullname') ?? $invoice->receiver_fullname }}">
                                        <br>
                                        @error('receiver_fullname')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ui-sortable">
                                    <div class="form-group" >
                                        <label for="receiver_phone">Телефон</label><br>
                                        <input type="tel" name="receiver_phone" id="receiver_phone" placeholder="Введите Телефон" class="form-control" value="{{ old('receiver_phone') ?? $invoice->receiver_phone }}">
                                        <br>
                                        @error('receiver_phone')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-3 ui-sortable">
                                    <div class="form-group" >
                                        <label for="receiver_passport">Паспорт получателя</label><br>
                                        <input type="text" name="receiver_passport" id="receiver_passport" placeholder="Введите Паспорт" class="form-control" value="{{ old('receiver_passport') ?? $invoice->receiver_passport }}">
                                        <br>
                                        @error('receiver_passport')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ui-sortable">
                                    <div class="form-group" >
                                        <label for="receiver_date">День рождения получателя</label><br>
                                        <input data-mask='dd/mm/yyyy' name="receiver_date" id="receiver_date" placeholder="dd/mm/yyyy" class="form-control" value="{{ old('receiver_passport') ?? $invoice->receiver_date }}">
                                        <br>
                                        @error('receiver_date')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ui-sortable">
                                    <div class="form-group" >
                                        <label for="address_id">Адрес</label><br>
                                        <select name="address_id" id="address_id" class="form-control" style="width: 180px">
                                            <option value="" >Выбрать...</option>
                                            @foreach ($regions as $key => $region)
                                                <option value="{{$region->id}}"  @if ($region->id == $invoice->address_id) selected @endif>{{$region->name}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        @error('address_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
{{--                                <div class="col-md-3 ui-sortable">--}}
{{--                                    <div class="form-group" >--}}
{{--                                        <label for="ready_date">Дата</label><br>--}}
{{--                                        <input type="date" value="{{ $invoice->ready_date }}" name="ready_date" id="ready_date" placeholder="Введите Телефон" class="form-control">--}}
{{--                                        <br>--}}
{{--                                        @error('ready_date')--}}
{{--                                        <span class="text-danger">{{$message}}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="col-md-3 ui-sortable">
                                    <div class="form-group" >
                                        <label for="weight">Вес нетто (кг)</label><br>
                                        <input type="number"  name="weight" id="weight" placeholder="Введите нетто" class="form-control" step="0.1" value="{{ $invoice->weight }}">
                                        <br>
                                        @error('weight')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <hr style="height: 1px; border: none; color: #333; background-color: #333">
                            <div class="bg-secondary">
                                <table class="table table-bordered">
                                    <thead class="">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Продукт</th>
                                        <th scope="col">Количество</th>
                                        <th scope="col">Цена</th>
                                        <th scope="col">Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($invoice_products) > 0)
                                        @foreach($invoice_products as $invoice_product)
                                            <tr>
                                                <td scope="row">1</td>
                                                <td>
                                                    <select name="product_id[]" id="product_id" class="form-control" style="width: 220px">
                                                        <option value="">Выбрать...</option>
                                                        @foreach ($products as $key => $product)
                                                            <option value="{{$product->id}}" @if ($product->id == $invoice_product->product_id) selected @endif>{{$product->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td><input type="number" name="quantity[]" class="form-control" value="{{$invoice_product->quantity}}" ></td>
                                                <td><input type="number" name="price[]" class="form-control" value="{{$invoice_product->price}}"></td>
                                                <td><button type="button" class="btn btn-primary" id="add_btn"><i class="glyphicon glyphicon-plus"></i></button></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>
                                                <select name="product_id[]" id="product_id" class="form-control" style="width: 220px">
                                                    <option value="">Выбрать...</option>
                                                    @foreach ($products as $key => $product)
                                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="number" name="quantity[]" class="form-control"></td>
                                            <td><input type="number" name="price[]" class="form-control"></td>
                                            <td><button type="button" class="btn btn-primary" id="add_btn"><i class="glyphicon glyphicon-plus"></i></button></td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

    <script>
        $(document).ready(function () {
            // Initialize selectize on the initial select element
            $('select').selectize({
                sortField: 'text'
            });

            // Unbind previously attached event handlers
            $('tbody').off();

            $('#add_btn').on('click', function () {
                addRow();
            });

            // Capture Enter key press in input fields
            $('tbody').on('keypress', 'input', function (e) {
                if (e.which === 13) { // Check if the Enter key is pressed
                    addRow();
                    return false; // Prevent form submission or line break in the input field
                }
            });

            function addRow() {
                var rowCount = $('tbody tr').length + 1;
                var html = '';
                html += '<tr>';
                html += '<th scope="row">' + rowCount + '</th>';
                html += '<td><select name="product_id[]" class="form-control selectize-select" style="width: 220px"><option value="">Выбрать...</option>@foreach ($products as $key => $product)<option value="{{$product->id}}">{{$product->name}}</option>@endforeach</select></td>';
                html += '<td><input type="number" name="quantity[]" class="form-control"></td>';
                html += '<td><input type="number" name="price[]" class="form-control"></td>';
                html += '<td><button type="button" class="btn btn-danger" id="remove"><i class="glyphicon glyphicon-remove"></i></button></td>';
                html += '</tr>';
                $('tbody').append(html);

                // Initialize selectize on the newly added select element
                $('select.selectize-select').selectize({
                    sortField: 'text'
                });
            }
        });

        $(document).on('click', '#remove', function () {
            $(this).closest('tr').remove();
        });

    </script>
@endsection


