@extends('layouts.app')

@section('content')
  <table>
    <thead>
      <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Send Schedule</td>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td><a href="/users/send_schedule/{{$user->id}}"> Send Schedule </a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

{!! (new Landish\Pagination\Materialize($users))->render() !!}
@endsection
