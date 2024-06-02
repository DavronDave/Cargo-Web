@extends('admin.layouts.app')
@section('projects')
    active
@endsection
@section('content')

    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-left">
            <li><a href="{{route('admin.dashboard')}}">Главная</a></li>
            <li class="active"><a href="{{route('admin.projects.index')}}">Проекты</a></li>
            <li>Инвойси</li>
            <li style="font-weight: bold">{{$project->name}} - {{$project->code}}</li>
        </ol>
        <div class="row">
            <div class="col-md-12 ui-sortable">
                <div class="panel panel-inverse">
                    @if($userPermission['Add invoice']==1)
                        <a href="{{route('admin.invoice.create', ['project' => $project->id])}}"
                           class="btn btn-success pull-right"
                           style="margin: 7px !important; height: 36px;">Добавить <i class="fa fa-plus"></i>
                        </a>
                    @endif
                    @if($userPermission['Import']==1)
                        <form action="{{route('admin.invoice.import', ['project' => $project->id])}}"
                              enctype="multipart/form-data" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success pull-right"
                                    style="margin: 7px !important; height: 36px;">Импорть <i class="fa fa-plus"></i>
                            </button>
                            <input type="number" name="passport_number"
                                   style="margin: 8px !important; height: 35px; width: 50px; font-size: 15px;"
                                   class="pull-right" placeholder="Кол." required>

                            <select name="driver_id" id="create_incoterm_id" class="pull-right form-control"
                                    style="width: 135px; margin: 8px !important" required>
                                <option value="">Выб. водителя</option>
                                @foreach ($drivers as $key => $driver)
                                    <option value="{{$driver->id}}">{{$driver->name}}</option>
                                @endforeach
                            </select>
                        </form>
                    @endif
                    @if($userPermission['PDF invoices']==1)
                        <form action="{{route('admin.pdf.invoices', ['project' => $project->id])}}">
                            @csrf
                            <button type="submit" class="btn btn-success pull-right"
                                    style="margin: 7px !important; height: 36px;">PDF <i class="fa fa-download"></i>
                            </button>
                            <input type="number" name="last"
                                   style="margin: 8px !important; height: 35px; width: 80px; font-size: 15px;"
                                   class="pull-right" placeholder="Конец" required>
                            <input type="number" name="first"
                                   style="margin: 8px !important; height: 35px; width: 80px; font-size: 15px;"
                                   class="pull-right" placeholder="Начало" required>
                        </form>
                    @endif
                        @if($userPermission['Move invoices']==1)
                            <form action="{{ route('admin.copy-invoice', ['project_id' => $project->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success pull-right"
                                        style=" margin-top:8px !important; height: 36px;"><i
                                        class="fa fa-chevron-circle-right"></i>
                                </button>
                                <input type="text" name="editable_invoices"
                                       style="margin: 8px !important; height: 35px; width: 170px; font-size: 15px;"
                                       class="pull-right" placeholder="До" required>
                                <input type="number" name="selected_invoice"
                                       style="margin: 8px !important; height: 35px; width: 65px; font-size: 15px;"
                                       class="pull-right" placeholder="От" required>
                            </form>
                        @endif
                    @if($userPermission['Move invoices']==1)
                        <form action="{{ route('admin.move-invoices') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success pull-right"
                                    style="margin: 7px !important; height: 36px;"> <i
                                    class="fa fa-upload"></i>
                            </button>
                            <select name="project_id" id="create_project_id" class="pull-right form-control"
                                    style="width: 120px; margin: 8px !important" required>
                                <option value="">Выб. проект</option>
                                @foreach ($projects as $key => $project)
                                    <option value="{{$project->id}}">{{$project->code}} - {{$project->name}}</option>
                                @endforeach
                            </select>
                    @endif

                    <div class="panel-heading" style="height: 50px; background-color: #242A30">
                        <h4 class="panel-title" style="color: white"></h4>
                    </div>
                    <div class="panel-body">
                        <div id="data-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="data-table" class="table table-striped table-bordered ">
                                        <thead>
                                        <tr client="row">
                                            <th style="width: 20px; padding: 30px 0; text-align: center" rowspan="2">
                                                <input type="checkbox" name="select-all"/>&nbsp;
                                            </th>
                                            <th style="width: 20px; padding: 30px 0; text-align: center" rowspan="2">№
                                            </th>
                                            <th style="width: 100px">@sortablelink('name', 'Инвойс')</th>
                                            <th>@sortablelink('name', 'Отправитель')</th>
                                            <th>@sortablelink('name', 'Получатель')</th>
                                            <th>@sortablelink('name', 'Паспорт пол')</th>
                                            <th>@sortablelink('key', 'Весь')</th>
                                            <th style="width: 130px;">@sortablelink('name', 'Общая цена ?')</th>
                                            <th style="width: 120px">@sortablelink('name', 'Выполнен ?')</th>
                                            <th style="width: 100px">@sortablelink('name', 'Инвойс')</th>
                                            <th style="width: 100px; text-align: center"><b>Действия</b></th>
                                        </tr>
                                        <tr>
                                            <form class="form-inline" method="GET">

                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Номер..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Отправитель..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Получатель..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Паспорт..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Весь..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Общая цена..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Выполнен..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <input style="width: 100%;" type="text" class="form-control"
                                                           id="filter"
                                                           name="name" placeholder="Номер..."
                                                           value="{{request('name')}}">
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-warning">
                                                        <i class="fa  fa-filter"></i> Фильтр
                                                    </button>
                                                </td>
                                            </form>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($invoices as $invoice)
                                            <tr >
                                                <td style="vertical-align: middle; text-align: center"><input  type="checkbox" name="selected_ids[]" value="{{ $invoice->id }}"/>&nbsp;</td>
                                                <td style="vertical-align: middle; text-align: center"> {{($invoices->currentpage()-1)*$invoices->perpage() +($loop->index+1)}}</td>
                                                <td style="vertical-align: middle; text-align: center">{{$invoice->number}}</td>
                                                <td style="vertical-align: middle; text-align: center">{{$invoice->sender_fullname}}</td>
                                                <td style="vertical-align: middle; text-align: center">{{$invoice->receiver_fullname}}</td>
                                                <td style="vertical-align: middle; text-align: center">{{$invoice->receiver_passport}}</td>
                                                <td style="background-color:
                                                    @if($invoice->weight > 30) red
                                                    @else
                                                    @endif;
                                                    color: @if($invoice->weight > 30) white @else black @endif; text-align: center">
                                                    {{ $invoice->weight ?? 0 }}
                                                </td>
{{--                                                <td style="vertical-align: middle; text-align: center">--}}
{{--                                                    {{ $totalPrice ?? 0 }}--}}

{{--                                                </td>--}}
                                                <td style="background-color:
                                                    @if(($totalPrice = $receiverPeopleWithTotalPrice->where('passport', $invoice->receiver_passport)->first()['total_price'] ?? null) >= 1000) red
                                                    @else
                                                    @endif;
                                                    color: @if(($totalPrice ?? 0) >= 1000) white @else black @endif; text-align: center">
                                                    {{ $totalPrice ?? 0 }}
                                                </td>
                                                {{--                                                <td>{{$invoice->ready_date}}</td>--}}
                                                {{--                                                <td><i class="fa fa" style="font-size: 2rem; color: red;"></i></td>--}}
                                                <td style="vertical-align: middle; text-align: center">@if($invoice->isCompleted==1)
                                                        <i style="color: green; font-size: 16px"
                                                           class=" fa fa-check"></i>
                                                    @elseif($invoice->isCompleted==0)
                                                        <i style="color: red; font-size: 16px" class=" fa fa-close"></i>
                                                    @endif</td>
                                                <td style="vertical-align: middle; text-align: center">{{$invoice->number}}</td>
{{--                                                                                                <td>{{ $receiverPeopleWithTotalPrice->where('passport', $invoice->receiver_passport)->first()['total_price'] ?? 0 }}</td>--}}


                                                <td style="vertical-align: middle; text-align: center">

                                                    @if($userPermission['Edit invoice']==1)
                                                        <a href="{{route('admin.invoice.edit', ['invoice' => $invoice->id, 'project' => $project_id])}}"
                                                           class=" btn btn-xs btn-info"
                                                           title="Изменить">
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </a>
                                                    @endif
                                                    @if($userPermission['Delete invoice']==1)
                                                        <a href="#modal-dialog-delete{{$invoice->id}}"
                                                           class="btn btn-xs btn-danger"
                                                           data-toggle="modal" title="Удалить">
                                                            <i class="fa  fa-trash-o"></i>
                                                        </a>
                                                    @endif
                                                    @if($userPermission['PDF invoice']==1)
                                                        <a href="{{route('admin.pdf.invoice', ['invoice' => $invoice->id])}}"
                                                           class="btn btn-xs btn-success"
                                                           data-toggle="modal" title="PDF">
                                                            <i class="fa  fa-file-pdf-o"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @include('admin.invoices.delete')
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-sm-12">--}}
                            {{--                                    <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate">--}}
                            {{--                                        <ul class="pagination pull-right">--}}
                            {{--                                            <li>--}}
                            {{--                                                {{$countries->links()}}--}}
                            {{--                                            </li>--}}
                            {{--                                        </ul>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    </form>

                    {{--                        @endif--}}
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
@endsection


{{--let geologicalConclusionModal = new Vue({--}}
{{--el: '#geologicalConclusionModal',--}}
{{--// delimiters: ["[[", "]]"],--}}
{{--data() {--}}
{{--return {--}}
{{--myChart1: null,--}}
{{--myChart2: null,--}}
{{--myChart3: null,--}}
{{--geologicalConclusionInfo: {},--}}
{{--thisYear: (new Date()).getFullYear(),--}}
{{--yearForChart: (new Date()).getFullYear(),--}}
{{--yearForDiverChart: (new Date()).getFullYear(),--}}
{{--yearStart: null,--}}
{{--yearFinish: null,--}}
{{--zoomIn: false,--}}
{{--lightboxSwiperOptions: {--}}
{{--zoom: true,--}}
{{--preventClicks: false,--}}
{{--preventClicksPropagation: false--}}
{{--},--}}
{{--// lightboxModal:null--}}
{{--}--}}
{{--},--}}

{{--watch: {--}}
{{--'geologicalConclusionInfo.path'() {--}}
{{--// if(this.individualDrillingInfo.path != '')--}}
{{--this.$refs.wellImg.addEventListener('click', function () {--}}
{{--lightboxModal.style.display = "block";--}}
{{--lightboxModalImg.src = this.src;--}}
{{--lightboxCaptionText.innerHTML = this.alt;--}}
{{--})--}}
{{--}--}}
{{--},--}}

{{--computed: {--}}
{{--validateYears() {--}}
{{--return this.yearStart && this.yearFinish && this.yearStart >= 1970 && this.yearFinish >= 1970 &&--}}
{{--this.yearStart <= (new Date()).getFullYear() && this.yearFinish <= (new Date())--}}
{{--.getFullYear()--}}
{{--}--}}
{{--},--}}

{{--methods: {--}}
{{--getDiverDataForChart() {--}}
{{--axios--}}
{{--.get('{{ route('map.diagramma.diver-info') }}', {--}}
{{--params: {--}}
{{--year: this.yearForDiverChart--}}
{{--}--}}
{{--})--}}
{{--.then(response => {--}}
{{--let data = response.data;--}}
{{--let year = data.year;--}}

{{--if (data.result == 1) {--}}
{{--this.myChart3.options.plugins.title.text =--}}
{{--`{{ __('messages.График уровня воды за') }} ${year} {{ __('messages.год по скважине') }} ${this.geologicalConclusionInfo.cadaster_number} {{ __('messages.по данным дайвера') }}`;--}}
{{--this.myChart3.data.datasets[0].data = data.diverData && [--}}
{{--data.diverData['01']['1']['water_level'],--}}
{{--data.diverData['01']['2']['water_level'],--}}
{{--data.diverData['01']['3']['water_level'],--}}
{{--data.diverData['02']['1']['water_level'],--}}
{{--data.diverData['02']['2']['water_level'],--}}
{{--data.diverData['02']['3']['water_level'],--}}
{{--data.diverData['03']['1']['water_level'],--}}
{{--data.diverData['03']['2']['water_level'],--}}
{{--data.diverData['03']['3']['water_level'],--}}
{{--data.diverData['04']['1']['water_level'],--}}
{{--data.diverData['04']['2']['water_level'],--}}
{{--data.diverData['04']['3']['water_level'],--}}
{{--data.diverData['05']['1']['water_level'],--}}
{{--data.diverData['05']['2']['water_level'],--}}
{{--data.diverData['05']['3']['water_level'],--}}
{{--data.diverData['06']['1']['water_level'],--}}
{{--data.diverData['06']['2']['water_level'],--}}
{{--data.diverData['06']['3']['water_level'],--}}
{{--data.diverData['07']['1']['water_level'],--}}
{{--data.diverData['07']['2']['water_level'],--}}
{{--data.diverData['07']['3']['water_level'],--}}
{{--data.diverData['08']['1']['water_level'],--}}
{{--data.diverData['08']['2']['water_level'],--}}
{{--data.diverData['08']['3']['water_level'],--}}
{{--data.diverData['09']['1']['water_level'],--}}
{{--data.diverData['09']['2']['water_level'],--}}
{{--data.diverData['09']['3']['water_level'],--}}
{{--data.diverData['10']['1']['water_level'],--}}
{{--data.diverData['10']['2']['water_level'],--}}
{{--data.diverData['10']['3']['water_level'],--}}
{{--data.diverData['11']['1']['water_level'],--}}
{{--data.diverData['11']['2']['water_level'],--}}
{{--data.diverData['11']['3']['water_level'],--}}
{{--data.diverData['12']['1']['water_level'],--}}
{{--data.diverData['12']['2']['water_level'],--}}
{{--data.diverData['12']['3']['water_level'],--}}
{{--];--}}
{{--this.myChart3.update();--}}
{{--}--}}
{{--})--}}
{{--.catch(function (error) {--}}
{{--let context = document.getElementById('diver-info').getContext('2d');--}}
{{--context.clearRect(0, 0, context.canvas.width, context.canvas.height);--}}
{{--alert("{{ __('messages.Данные за этот год отсуствует!') }}");--}}
{{--})--}}
{{--},--}}

{{--getObjDataForMonthlyChart() {--}}
{{--axios--}}
{{--.get("{{ route('map.diagramma.months') }}", {--}}
{{--params: {--}}
{{--id: this.geologicalConclusionInfo.id,--}}
{{--year: this.yearForChart--}}
{{--}--}}
{{--})--}}
{{--.then(response => {--}}
{{--let diagrammaMonth = response.data;--}}
{{--let year = diagrammaMonth.year;--}}

{{--if (diagrammaMonth.result == 1) {--}}
{{--this.myChart2.options.plugins.title.text =--}}
{{--`{{ __('messages.Среднемесячный график уровня воды за') }} ${year} {{ __('messages.год по скважине') }} ${this.geologicalConclusionInfo.cadaster_number}`;--}}
{{--this.myChart2.data.datasets[0].data = diagrammaMonth.urovenVody && [--}}
{{--diagrammaMonth.urovenVody.january,--}}
{{--diagrammaMonth.urovenVody.february,--}}
{{--diagrammaMonth.urovenVody.march,--}}
{{--diagrammaMonth.urovenVody.april,--}}
{{--diagrammaMonth.urovenVody.may,--}}
{{--diagrammaMonth.urovenVody.june,--}}
{{--diagrammaMonth.urovenVody.july,--}}
{{--diagrammaMonth.urovenVody.august,--}}
{{--diagrammaMonth.urovenVody.september,--}}
{{--diagrammaMonth.urovenVody.october,--}}
{{--diagrammaMonth.urovenVody.november,--}}
{{--diagrammaMonth.urovenVody.december,--}}
{{--];--}}
{{--this.myChart2.data.datasets[1].data = diagrammaMonth.forecast && [--}}
{{--diagrammaMonth.forecast.january,--}}
{{--diagrammaMonth.forecast.february,--}}
{{--diagrammaMonth.forecast.march,--}}
{{--diagrammaMonth.forecast.april,--}}
{{--diagrammaMonth.forecast.may,--}}
{{--diagrammaMonth.forecast.june,--}}
{{--diagrammaMonth.forecast.july,--}}
{{--diagrammaMonth.forecast.august,--}}
{{--diagrammaMonth.forecast.september,--}}
{{--diagrammaMonth.forecast.october,--}}
{{--diagrammaMonth.forecast.november,--}}
{{--diagrammaMonth.forecast.december,--}}
{{--];--}}
{{--this.myChart2.update();--}}
{{--}--}}
{{--})--}}
{{--.catch(function (error) {--}}
{{--let context = document.getElementById('monthly').getContext('2d');--}}
{{--context.clearRect(0, 0, context.canvas.width, context.canvas.height);--}}
{{--alert("{{ __('messages.Данные за этот год отсуствует!') }}");--}}
{{--})--}}
{{--},--}}

{{--getObjDataForYearlyChart(id, cadaster_number) {--}}
{{--axios--}}
{{--.get('{{ route('map.diagramma.years') }}', {--}}
{{--params: {--}}
{{--id: id,--}}
{{--year_start: this.yearStart,--}}
{{--year_finish: this.yearFinish--}}
{{--}--}}
{{--}).then(function (response) {--}}
{{--let diagrammaYears = response.data;--}}
{{--let ctx1 = document.getElementById('yearly').getContext('2d');--}}
{{--if (diagrammaYears.result == 1) {--}}
{{--if (this.myChart1) myChart1.destroy();--}}

{{--this.myChart1 = new Chart(ctx1, {--}}
{{--type: 'line',--}}
{{--data: {--}}
{{--labels: diagrammaYears.data.map(item => item.year),--}}
{{--datasets: [{--}}
{{--label: "{{ __('messages.График изменения уровня воды за год') }}",--}}
{{--fill: false,--}}
{{--data: diagrammaYears.data.map(item => item--}}
{{--.uroven_vody),--}}
{{--backgroundColor: 'rgba(17, 30, 108)',--}}
{{--borderColor: 'rgba(17, 30, 108)',--}}
{{--borderWidth: 1,--}}
{{--tension: 0.3--}}
{{--}],--}}
{{--},--}}
{{--options: {--}}
{{--responsive: true,--}}
{{--tooltips: {--}}
{{--mode: 'index',--}}
{{--intersect: true--}}
{{--},--}}
{{--plugins: {--}}
{{--title: {--}}
{{--display: true,--}}
{{--text: `{{ __('messages.Среднегодовой график уровня воды по скважине') }} ${cadaster_number} {{ __('messages.за последний 12 лет') }}`,--}}
{{--}--}}
{{--},--}}
{{--scales: {--}}
{{--y: {--}}
{{--ticks: {--}}
{{--beginAtZero: false,--}}
{{--},--}}
{{--reverse: true--}}
{{--}--}}
{{--},--}}
{{--}--}}
{{--});--}}
{{--}--}}
{{--}).catch(function (error) {--}}
{{--alert("{{ __('messages.Ошибка при получения данные') }}" + ': ', error);--}}
{{--})--}}
{{--},--}}

{{--getRegionOrDistrictName($obj) {--}}
{{--$locale = "{{app()->getLocale()}}";--}}
{{--console.log( $locale, $obj)--}}
{{--if($obj){--}}
{{--switch ($locale) {--}}
{{--case 'ru':--}}
{{--console.log('ru->',$locale,$obj.nameRu)--}}
{{--return $obj.nameRu;--}}
{{--case 'uz':--}}
{{--console.log('uz->',$locale,$obj.nameUz)--}}
{{--return $obj.nameUz;--}}
{{--case 'en':--}}
{{--console.log('en->',$locale,$obj.nameEn)--}}
{{--return $obj.nameEn;--}}
{{--default:--}}
{{--return $obj.nameUz;--}}
{{--}--}}
{{--}--}}
{{--},--}}


{{--renderMonthlyChart() {--}}
{{--let ctx2 = document.getElementById('monthly').getContext('2d');--}}

{{--if (this.myChart2) this.myChart2.destroy();--}}

{{--this.myChart2 = new Chart(ctx2, {--}}
{{--type: 'line',--}}
{{--data: {--}}
{{--labels: [--}}
{{--"{{ __('messages.Январь') }}",--}}
{{--"{{ __('messages.Февраль') }}",--}}
{{--"{{ __('messages.Март') }}",--}}
{{--"{{ __('messages.Апрель') }}",--}}
{{--"{{ __('messages.Май') }}",--}}
{{--"{{ __('messages.Июнь') }}",--}}
{{--"{{ __('messages.Июль') }}",--}}
{{--"{{ __('messages.Август') }}",--}}
{{--"{{ __('messages.Сентябрь') }}",--}}
{{--"{{ __('messages.Октябрь') }}",--}}
{{--"{{ __('messages.Ноябрь') }}",--}}
{{--"{{ __('messages.Декабрь') }}"--}}
{{--],--}}
{{--datasets: [{--}}
{{--label: "{{ __('messages.График изменения уровня воды за месец') }}",--}}
{{--fill: false,--}}
{{--backgroundColor: 'rgba(17, 30, 108)',--}}
{{--borderColor: 'rgba(17, 30, 108)',--}}
{{--data: [],--}}
{{--borderWidth: 1,--}}
{{--tension: 0.3--}}
{{--}, {--}}
{{--label: "{{ __('messages.forecast_data') }}",--}}
{{--fill: false,--}}
{{--backgroundColor: 'green',--}}
{{--borderColor: 'green',--}}
{{--data: [],--}}
{{--borderDash: [5, 5],--}}
{{--tension: 0.3--}}
{{--}],--}}
{{--},--}}
{{--options: {--}}
{{--responsive: true,--}}
{{--tooltips: {--}}
{{--enabled: false--}}
{{--},--}}
{{--plugins: {--}}
{{--title: {--}}
{{--display: true,--}}
{{--text: '',--}}
{{--// padding: 20,--}}
{{--// fontSize: 16--}}
{{--}--}}
{{--},--}}
{{--scales: {--}}
{{--y: {--}}
{{--ticks: {--}}
{{--beginAtZero: false,--}}
{{--},--}}
{{--reverse: true--}}
{{--}--}}
{{--}--}}
{{--}--}}
{{--});--}}
{{--},--}}

{{--renderDiverChart() {--}}
{{--let ctx3 = document.getElementById('diver-info').getContext('2d');--}}

{{--if (this.myChart3) this.myChart3.destroy();--}}

{{--this.myChart3 = new Chart(ctx3, {--}}
{{--type: 'line',--}}
{{--data: {--}}
{{--labels: [--}}
{{--"I;{{ __('messages.Январь') }}",--}}
{{--"II;{{ __('messages.Январь') }}",--}}
{{--"III;{{ __('messages.Январь') }}",--}}
{{--"I;{{ __('messages.Февраль') }}",--}}
{{--"II;{{ __('messages.Февраль') }}",--}}
{{--"III;{{ __('messages.Февраль') }}",--}}
{{--"I;{{ __('messages.Март') }}",--}}
{{--"II;{{ __('messages.Март') }}",--}}
{{--"III;{{ __('messages.Март') }}",--}}
{{--"I;{{ __('messages.Апрель') }}",--}}
{{--"II;{{ __('messages.Апрель') }}",--}}
{{--"III;{{ __('messages.Апрель') }}",--}}
{{--"I;{{ __('messages.Май') }}",--}}
{{--"II;{{ __('messages.Май') }}",--}}
{{--"III;{{ __('messages.Май') }}",--}}
{{--"I;{{ __('messages.Июнь') }}",--}}
{{--"II;{{ __('messages.Июнь') }}",--}}
{{--"III;{{ __('messages.Июнь') }}",--}}
{{--"I;{{ __('messages.Июль') }}",--}}
{{--"II;{{ __('messages.Июль') }}",--}}
{{--"III;{{ __('messages.Июль') }}",--}}
{{--"I;{{ __('messages.Август') }}",--}}
{{--"II;{{ __('messages.Август') }}",--}}
{{--"III;{{ __('messages.Август') }}",--}}
{{--"I;{{ __('messages.Сентябрь') }}",--}}
{{--"II;{{ __('messages.Сентябрь') }}",--}}
{{--"III;{{ __('messages.Сентябрь') }}",--}}
{{--"I;{{ __('messages.Октябрь') }}",--}}
{{--"II;{{ __('messages.Октябрь') }}",--}}
{{--"III;{{ __('messages.Октябрь') }}",--}}
{{--"I;{{ __('messages.Ноябрь') }}",--}}
{{--"II;{{ __('messages.Ноябрь') }}",--}}
{{--"III;{{ __('messages.Ноябрь') }}",--}}
{{--"I;{{ __('messages.Декабрь') }}",--}}
{{--"II;{{ __('messages.Декабрь') }}",--}}
{{--"III;{{ __('messages.Декабрь') }}"--}}
{{--],--}}
{{--datasets: [{--}}
{{--label: "{{ __('messages.График изменения данных из дайвера') }}",--}}
{{--fill: false,--}}
{{--data: [],--}}
{{--backgroundColor: 'rgba(17, 30, 108)',--}}
{{--borderColor: 'rgba(17, 30, 108)',--}}
{{--borderWidth: 1,--}}
{{--tension: 0.3--}}
{{--}],--}}
{{--},--}}
{{--options: {--}}
{{--tooltips: {--}}
{{--enabled: false--}}
{{--},--}}
{{--plugins: {--}}
{{--title: {--}}
{{--display: true,--}}
{{--text: '',--}}
{{--// padding: 20,--}}
{{--// fontSize: 16--}}
{{--}--}}
{{--},--}}
{{--scales: {--}}
{{--y: {--}}
{{--ticks: {--}}
{{--beginAtZero: false,--}}
{{--},--}}
{{--reverse: true--}}
{{--},--}}
{{--x: {--}}
{{--// id:'xAxis1',--}}
{{--// type:"category",--}}
{{--ticks: {--}}
{{--callback: function (label) {--}}
{{--let realLabel = this.getLabelForValue(label);--}}
{{--let decade = realLabel.split(";")[0];--}}
{{--// let month = label.split(";")[1];--}}
{{--return decade;--}}
{{--}--}}
{{--}--}}
{{--},--}}
{{--xAxis2: {--}}
{{--// id:'xAxis2',--}}
{{--type: "category",--}}
{{--grid: {--}}
{{--drawOnChartArea: false, // only want the grid lines for one axis to show up--}}
{{--},--}}
{{--ticks: {--}}
{{--callback: function (label) {--}}
{{--let realLabel = this.getLabelForValue(label);--}}
{{--let decade = realLabel.split(";")[0];--}}
{{--let month = realLabel.split(";")[1];--}}
{{--if (decade === "II") {--}}
{{--return month;--}}
{{--} else {--}}
{{--return "";--}}
{{--}--}}
{{--}--}}
{{--}--}}
{{--},--}}
{{--}--}}
{{--}--}}
{{--});--}}
{{--},--}}

{{--zoomInOut(event) {--}}
{{--let target = event.target;--}}
{{--let cssText = target.style.cssText;--}}
{{--// let currentwidth = target.clientwidth;--}}
{{--// let currentHeight = target.clientHeight;--}}

{{--if (cssText.includes("unset")) {--}}
{{--target.style.width = "100%";--}}
{{--target.style.maxHeight = "calc(100vh - 250px)";--}}
{{--} else {--}}
{{--target.style.width = "unset";--}}
{{--target.style.maxHeight = "unset";--}}
{{--}--}}
{{--}--}}
{{--}--}}
{{--});--}}




{{--generatePulsatingMarker(radius, color, state) {--}}
{{--let cssStyle = `--}}
{{--width: ${radius}px;--}}
{{--height: ${radius}px;--}}
{{--background: ${this.hexToRGBA(color)};--}}
{{--border: 1px solid ${color};--}}
{{--box-shadow: 0 0 0 ${color};--}}
{{--`;--}}
{{--let cssClass = state ? 'pulse' : 'unpulse';--}}

{{--return L.divIcon({--}}
{{--html: `<span style="${cssStyle}" class="${cssClass}" />`,--}}
{{--className: ''--}}
{{--})--}}
{{--},--}}


{{--setColorByType(type) {--}}
{{--switch (type) {--}}
{{--case 6:--}}
{{--return '#00008b'--}}
{{--case 5:--}}
{{--return '#008b8b'--}}
{{--case 4:--}}
{{--return '#8b0000'--}}
{{--case 9:--}}
{{--return '#ff8c00'--}}
{{--case 8:--}}
{{--return '#006400'--}}
{{--default:--}}
{{--return '#a9a9a9'--}}
{{--}--}}
{{--},--}}



