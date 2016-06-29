@extends('layouts.app')

@section('content')
  <table>
    <thead>
      <tr>
        <td>Name</td>
        <td>Email</td>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

{!! (new Landish\Pagination\Materialize($users))->render() !!}
@endsection
