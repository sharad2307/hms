@extends('layouts.app')

@section('content')
<div class="container">
  <a href="/home"><button class="btn btn-primary">Back</button>
  </a>
</div>
<br>
<div class="container">
  <h2>Verify results of the Students</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>University Roll Number</th>
        <th>Admission number</th>
        <th>Verify</th>
    </tr>
</thead>
<tbody>
   
    @if($users->count())
    @foreach($users as $user)
    @if($user->result_status=='0')

    <tr class="checkbox {{ $user->result_status ? 'table-success' : '' }}">
        <td>{{ $user->name}}
        </td>
        <td>{{ $user->roll_number}}</td>
        <td>{{ $user->admission_number}}</td>
        <td><form method="POST" action="/verifyresults/{{ $user->id}}">
            @csrf 
            @method('PATCH')
            <input type="checkbox" name="result_status"  id="result_status" onchange="this.form.submit()"
            {{ $user->result_status ? 'checked' : '' }}>
        </form></td>
    </tr>
    @endif
    @endforeach
    @endif

     @if($users->count()=='0')
    Nothing to show.
    @endif

</tbody>
</table>
</div>

<div class="container">
  <h2>Verified Students</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>University Roll Number</th>
        <th>Admission number</th>
        <th>Verify</th>
    </tr>
</thead>
<tbody>
    @if($users->count()=='0')
    Nothing to show.
    @endif

    @if($users->count())
    @foreach($users as $user)
    @if($user->result_status=='1')
    <tr class="checkbox {{ $user->result_status ? 'table-success' : '' }}">

        <td>{{ $user->name}}
        </td>
        <td>{{ $user->roll_number}}</td>
        <td>{{ $user->admission_number}}</td>
        <td><form method="POST" action="/verifyresults/{{ $user->id}}">
            @csrf 
            @method('PATCH')
            <input type="checkbox" name="result_status"  id="result_status" onchange="this.form.submit()"
            {{ $user->result_status ? 'checked' : '' }}>
        </form></td>
    </tr>
    @endif
    @endforeach
    @endif

@if($users->count()=='0')
    Nothing to show.
    @endif

</tbody>

 
</table>
</div>

@endsection
