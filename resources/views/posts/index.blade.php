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
        <th scope="col">Email</th>
        <th scope="col">Rating</th>
        <th scope="col">AVG</th>
        <th scope="col">Max Rating</th>
        <th scope="col">Min Rating</th>
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
            <td>
                {{-- {{ $post->ratings->count() }} --}}
                {{ $post->ratings_count }}
            </td>
            <td>
                {{ number_format($post->ratings_avg_rating, 2) }}
            </td>
            <td>
                {{ ($post->ratings_max_rating) ?? 'No Rating' }}
            </td>
            <td>
                {{ ($post->ratings_min_rating) ?? 'No Rating' }}
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
