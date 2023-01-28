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
        <th scope="col">Title</th>
        <th scope="col">Auther</th>
        <th scope="col">Em  ail</th>
      </tr>
    </thead>
    <tbody class="text-center">
        @php
            $i = 1;
        @endphp
        @forelse($posts as $post)
            <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>
                {{ $post->title }}
            </td>
            <td>{{ $post->user->name }}</td>
            <td>
                {{ $post->user->email  }}
            </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No posts found</td>
            </tr>
        @endforelse
    </tbody>
  </table>
@endsection
