@extends('layout.dashboard')
@section('content')
    @include('components.customer.customer-create')
    @include('components.customer.customer-delete')
    @include('components.customer.customer-update')
    @include('components.customer.customer-list')
@endsection

