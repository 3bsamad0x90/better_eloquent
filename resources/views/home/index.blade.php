@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
<h1 class="text-center">Better Eloquent performance</h1>
<table class="table">
    <thead class="thead-dark text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Auther</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @php
        $i = 1;
        @endphp
        @forelse($times as $time)
        <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>
                {{ $time->title }}
            </td>
            <td>{{ $time}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">No posts found</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
