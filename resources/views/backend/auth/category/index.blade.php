@extends('backend.layouts.app')
@push('after-styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endpush

@section('title', __('Category Management'))


@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Category Management')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link icon="c-icon cil-plus" class="card-header-action" :href="route('admin.auth.role.create')" :text="__('Create Category')" />
        </x-slot>

        <x-slot name="body">
            <h1>This is testing</h1>
        </x-slot>
    </x-backend.card>
@endsection

@push('before-scripts')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
@endpush
