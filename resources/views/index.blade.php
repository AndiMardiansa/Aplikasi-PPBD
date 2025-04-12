@extends('layouts.app')

@section('title', 'PPDB SMK Negeri 3 Palu - TA 2025/2026')

@section('content')
    @include('component.hero')
    @include('component.partner')
    @include('component.program')
    @include('component.persyaratan')
    @include('component.cara-daftar')
    @include('component.faq')
@endsection
