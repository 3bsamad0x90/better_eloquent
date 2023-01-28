@extends('layouts.app')
@section('title')
    Better Eloquent performance
@endsection
@section('content')
    <h1 class="text-center">Better Eloquent performance</h1>
<table class="table">
    <thead class="thead-dark text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Username</th>
        <th scope="col">Post's count</th>
      </tr>
    </thead>
    <tbody class="text-center">
        @php
            $i = 1;
        @endphp
        @forelse($users as $user)
            <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>
                {{ $user->name }}
            </td>
            {{-- <td>{{ $user->posts->count()}}</td> --}}
            <td>{{ $user->posts_count}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No posts found</td>
            </tr>
        @endforelse
    </tbody>
  </table>
@endsection
