<!-- field_type_name -->
@include('crud::fields.inc.wrapper_start')

@php
    $variant = $field['variant'] ?? 'info';
@endphp

@if(array_key_exists('divider', $field) && $field['divider'])
    <hr/>
@endif

@if(array_key_exists('title', $field))
    <h4 class="mb-2">{{ $field['title'] }}</h4>
@endif
@if(array_key_exists('content', $field))
    <div class="bd-callout border-{{ $field['variant'] ?? 'info' }}">
        {!! $field['content'] !!}
    </div>
@endif
@include('crud::fields.inc.wrapper_end')

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
        <style>
        .bd-callout {
            padding: 1.25rem;
            border: 1px solid #eee;
            border-left-width: 0.25rem;
            border-top-color: #eee !important;
            border-right-color: #eee !important;
            border-bottom-color: #eee !important;
            border-radius: 0.25rem;
            }
        </style>
    @endpush
@endif