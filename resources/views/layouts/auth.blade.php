@extends('layouts.master')

{{--
    Section:
    - title
    - route
    - fields
    - actions
    - messages
--}}
@section('content')
    <div class="wrapper">
        <div class="auth-page d-flex justify-content-center align-items-center">
            <div class="row w-100">
                <div class="col-lg-8 align-justify-center contact-form overflow-auto p-0">
                    <div class="w-100 py-5 px-3 auth-content">
                        <h2 class="mb-5 font-weight-light text-center">
                            @yield('title')
                        </h2>
                        @if (session('status'))
                            <div class="alert alert-success col-md-6 mx-auto" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @php
                            $sectionFields = isset(View::getSections()['fields']) ? View::getSections()['fields'] : '[]';
                            $fields = json_decode(htmlspecialchars_decode($sectionFields), true) ?? [];
                        @endphp

                        @if (count($fields) > 0)
                            <form method="POST" action="@yield('form-action')"
                                class="mx-auto col-md-8 rounded border shadow pt-4 pb-3">
                                @csrf

                                @foreach ($fields as $field)
                                    @if (isset($field['type']) && $field['type'] === 'checkbox')
                                        <x-form.checkbox :label="$field['label'] ?? ''" />
                                    @else
                                        <x-form.input
                                            :label="$field['label'] ?? ''"
                                            :name="$field['name']"
                                            :required="$field['required'] ?? false"
                                            :autoFocus="$field['autoFocus'] ?? false"
                                            :type="$field['type'] ?? 'text'"
                                            :selectOptions="$field['selectOptions'] ?? []"
                                            :value="$field['value'] ?? null"
                                        />
                                    @endif
                                @endforeach

                                <hr class="mt-4 mb-3" />
                                <div class="form-group row mb-0">
                                    @yield('actions')
                                </div>
                            </form>
                        @endif

                        <div class="col-lg-12 text-center mt-5">
                            @yield('messages')
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 right-image pl-3 d-none d-md-block auth-background"></div>
            </div>
        </div>
    </div>
@endsection
