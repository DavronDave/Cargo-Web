@extends('layouts.master')

@section('content')
    <div id="list" class="py-3">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    @include('components.forms.ithb-search-form', ['url' => 'first-reports.list'])
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm small">
                            <thead class="text-center">
                            <tr>
                                <th>№</th>
                                <th>
                                    {{ __('messages.water_source_name') }}
                                </th>
                                <th>
                                    {{ __('messages.district') }}
                                </th>
                                <th>
                                    {{ __('messages.show_hide') }}
                                </th>
                                <th>
                                    {{__('messages.action')}}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $i => $item)
                                <tr class="text-center">
                                    <td class="align-middle"> {{ $i + 1 }} </td>
                                    <td class="align-middle text-left">
                                        {{ $item->name }}
                                    </td>
                                    <td class="align-middle text-left">
                                        {{ $item->district->name ?? '' }}
                                    </td>
                                    <td class="align-middle">
                                        <input type="checkbox" @if ($objects_in_use && in_array($item->id, $objects_in_use)) checked @endif
                                        value="{{ $item->is_hidden }}" data-id="{{ $item->id }}"
                                               @change="toggleVisible">
                                    </td>
                                    <td class="align-middle">
                                        <button class="btn btn-sm btn-outline-info" @click="openEditModal({{ $item }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form class="d-inline" method="POST" action="{{ route('ithb-objects.destroy', $item->id) }}">
                                            @csrf
                                            <button class="btn btn-sm btn-outline-danger" type="submit"
                                                    onclick="return confirm('Вы уверены?');">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>


                                </tr>
                                @forelse ($item->children as $j => $child)
                                    <tr class="text-center">
                                        <td class="align-middle"></td>
                                        <td class="align-middle text-left">
                                            - {{ $child->name }}
                                        </td>
                                        <td class="align-middle text-left">
                                            {{ $item->district->name }}
                                        </td>
                                        <td class="align-middle">
                                            <input type="checkbox" @if ($objects_in_use && in_array($child->id, $objects_in_use)) checked @endif
                                            value="{{ $child->is_hidden }}" data-id="{{ $child->id }}"
                                                   @change="toggleVisible">
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-sm btn-outline-info" @click="openEditModal({{$item}})">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <form class="d-inline" method="POST" action="{{ route('ithb-objects.destroy', $child->id) }}">
                                                @csrf
                                                <button class="btn btn-sm btn-outline-danger" type="submit"
                                                        onclick="return confirm('Вы уверены?');">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Modals --}}
@section('modal')
    {{--    @include('components.modals.ithb-form-modal')--}}
    @include('components.modals.ithb-edit_form-modal')
@endsection

@push('scripts')
    <script>
        new Vue({
            el: "#list",
            data: {
                isLoading: false,
                ithb_object_ids: [],
                year: @json($filter['year']),
                formState: {  // Initialize formState object
                    id: null,
                    name: '',          // Add other properties as needed
                    is_child: false,
                    parent_id: null,
                    district_id: null,
                },
            },
            methods: {
                toggleVisible(event) {
                    if (event.target.checked)
                        this.ithb_object_ids.push(Number(event.target.dataset.id))
                    else {
                        this.ithb_object_ids = this.ithb_object_ids.filter(item => item != event.target.dataset.id)
                    }
                },
                async onSubmit() {
                    try {
                        this.isLoading = true
                        const res = await axios(
                            {
                                url: "{{ route('first-report-records.store') }}",
                                method: 'POST',
                                data: {
                                    ithb_object_ids: this.ithb_object_ids,
                                    year: this.year,
                                }
                            })

                        location.href = "{{ route('first-reports.index') }}?year=" + this.year
                    } catch (error) {
                        if (error.response?.status == 422) onMessage(
                            "{{ __('messages.none_object_selected') }}",
                            'text-danger')
                        else onMessage(error.response.data.message, 'text-danger')
                    } finally {
                        this.isLoading = false
                    }
                },
                // openEditModal(item) {
                //     console.log('Item:', item);
                //
                //     // Make sure 'item' is defined and has the 'id' property
                //     if (item && item.id !== undefined) {
                //
                //         this.formState.id = item.id;
                //         this.formState.name = item.name;
                //         this.formState.is_child = item.is_child;
                //         this.formState.parent_id = item.parent_id;
                //         this.formState.district_id = item.district_id;
                //
                //         console.log('FormState after assignment:', this.formState);
                //
                //         $('#objectModal').modal('show');
                //     } else {
                //         console.error('Invalid item:', item);
                //     }
                // },
                openEditModal(item) {
                    console.log('Received Item:', item);

                    // Update formState properties with values from 'item'
                    this.formState.id = item.id;
                    this.formState.name = item.name;
                    this.formState.is_child = item.is_child;
                    this.formState.parent_id = item.parent_id;
                    this.formState.district_id = item.district_id;

                    this.$forceUpdate();
                    Object.assign(this.formState, item);
                    console.log('FormState after assignment:', this.formState);

                    // Show the edit modal
                    $('#objectModal').modal('show');
                },

            },
            mounted() {
                this.ithb_object_ids = @json($objects_in_use);
            }
        });
    </script>
@endpush



{{--search--}}
<form action="{{ route($url) }}">
    <div class="row">
        <div class="col-auto my-auto">
            <h6 class="text-uppercase font-weight-bold my-auto">
                {{ __('messages.form') }}
            </h6>
        </div>
        <div class="col-auto">
            <input required type="number" name="year" class="form-control form-control-sm" step="1" min="1900"
                   max="{{ date('Y') }}" value="{{ $filter['year'] ?? date('Y') }}">
        </div>
        <div class="col-auto">
            <button class="btn btn-sm btn-primary" type="submit">
                {{ __('messages.open') }}
            </button>
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                    data-target="#objectModal">{{ __('messages.add_object') }}</button>
        </div>
        <div class="col-auto ml-auto">
            <button type="button" class="btn btn-danger btn-sm" @click="onSubmit">
                {{ __('messages.add_selection_to_report') }}
            </button>
        </div>
    </div>
</form>


{{--edit--}}
<div id="objectModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                {{--                <h5 class="modal-title">--}}
                {{--                    @{{ formState.id ? '{{ __('messages.edit_object') }}' : '{{ __('messages.add_object') }}' }}--}}
                {{--                    {{ formState.id ? __("messages.edit_object") : "Ob'ekt qo'shish" }}--}}

            </div>
            {{--            <form @submit.prevent="formState.id !== null ? updateData() : storeData()">--}}
            {{--                @csrf--}}
            {{--                @if(isset($item->id))--}}
            {{--                    <input type="hidden" name="id" v-model="formState.id">--}}
            {{--                @endif--}}
            <form @submit.prevent="formState.id ? updateData() : storeData()">
                @csrf
                <input type="hidden" v-if="formState.id" v-model="formState.id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                {{ __('messages.water_source_name') }}
                                <input type="text" class="form-control" v-model="this.formState.name">

                                <div class="text-danger small" v-if="formErrors?.name?.length > 0">
                                    @{{ formErrors.name[0] }}
                                </div>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label>
                                {{ __('messages.district') }}
                                <select class="custom-select" v-model="formState.district_id" >
                                    <option hidden :value="null">{{ __('messages.select') }}</option>
                                    <option v-for="district, districtIndex in districts" :value="district.areaid"
                                            :key="districtIndex">
                                        @{{ district['name'] }}
                                    </option>
                                </select>
                                <div class="text-danger small" v-if="formErrors?.district_id?.length > 0">
                                    @{{ formErrors.district_id[0] }}
                                </div>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" v-model="formState.is_child">
                                {{ __('messages.is_child') }}
                                <div class="text-danger small" v-if="formErrors?.is_child?.length > 0">
                                    @{{ formErrors.is_child[0] }}
                                </div>
                            </label>
                        </div>
                        <div v-if="formState.is_child" class="col-md-6">
                            <label>
                                {{ __('messages.object') }}
                                <select class="form-control form-control-sm" v-model="formState.parent_id">
                                    <option value="null" selected hidden>{{ __('messages.select') }}</option>
                                    @foreach ($parentObjs as $obj)
                                        <option value="{{ $obj->id }}">{{ $obj->name }}
                                            ({{ $obj->district->name ?? '' }})
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger small" v-if="formErrors?.parent_id?.length > 0">
                                    @{{ formErrors.parent_id[0] }}
                                </div>
                            </label>
                        </div>
                    </div>
                    <!-- existing form fields here -->

                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm" type="submit">
                            {{ __('messages.save') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        {{--const objectModalInstance = new Vue({--}}
        {{--    el: "#objectModal",--}}
        {{--    data() {--}}
        {{--        return {--}}
        {{--            formState: {--}}
        {{--                id: null,--}}
        {{--                name: '',--}}
        {{--                is_child: false,--}}
        {{--                parent_id: null,--}}
        {{--                district_id: null,--}}
        {{--            },--}}
        {{--            formErrors: null,--}}
        {{--            isLoading: false,--}}
        {{--            districts: []--}}
        {{--        };--}}
        {{--    },--}}
        {{--    mounted() {--}}
        {{--        this.districts = @json(auth()->user()->districts);--}}
        {{--    },--}}
        {{--    methods: {--}}
        {{--        async storeData() {--}}
        {{--            console.log('Store')--}}
        {{--            try {--}}
        {{--                this.isLoading = true;--}}
        {{--                this.formErrors = null;--}}
        {{--                await axios({--}}
        {{--                    url: "{{ route('ithb-objects.store') }}",--}}
        {{--                    method: 'POST',--}}
        {{--                    data: this.formState--}}
        {{--                });--}}

        {{--                onMessage("{{ __('messages.success') }}");--}}
        {{--                location.reload();--}}
        {{--            } catch (error) {--}}
        {{--                this.formErrors = error.response?.data?.errors;--}}
        {{--            } finally {--}}
        {{--                this.isLoading = false;--}}
        {{--            }--}}
        {{--        },--}}
        {{--        async updateData() {--}}
        {{--            console.log("Update")--}}
        {{--            try {--}}
        {{--                this.isLoading = true;--}}
        {{--                this.formErrors = null;--}}
        {{--                await axios({--}}
        {{--                    url: "{{ route('ithb-objects.update', ['ithb_object' => $item->id]) }}", // Provide the ID here--}}
        {{--                    method: 'PUT',--}}
        {{--                    data: this.formState--}}
        {{--                });--}}

        {{--                onMessage("{{ __('messages.success') }}");--}}
        {{--                location.reload();--}}
        {{--            } catch (error) {--}}
        {{--                this.formErrors = error.response?.data?.errors;--}}
        {{--            } finally {--}}
        {{--                this.isLoading = false;--}}
        {{--            }--}}
        {{--        },--}}
        {{--    },--}}
        {{--});--}}

        const objectModalInstance = new Vue({
            el: "#objectModal",
            data() {
                return {
                    formState: {
                        id: null,
                        name: '',
                        is_child: false,
                        parent_id: null,
                        district_id: null,
                    },
                    formErrors: null,
                    isLoading: false,
                    districts: []
                };
            },
            mounted() {
                this.districts = @json(auth()->user()->districts);
            },
            methods: {
                async storeData() {
                    // ...
                },
                async updateData() {
                    // ...
                },
            },
        });


    </script>
@endpush
