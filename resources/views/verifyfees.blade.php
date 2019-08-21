@extends('layouts.app')

@section('content')
<div class="container">
  <a href="/home"><button class="btn btn-primary">Back</button>
  </a>
</div>
<br>
<div class="container">
  <h2>Verify fees of the Students</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>UTR number</th>
        <th>Verify</th>
      </tr>
    </thead>
    <tbody>
      @if($users->count())
     @foreach($users as $user)
      @if($user->fee_status=='0')
     <tr class="checkbox {{ $user->fee_status ? 'table-success' : '' }}">
      <td>{{ $user->name}}
      </td>
      <td>{{ $user->utr_number }}</td>
      <td><form method="POST" action="/verifyfees/{{ $user->id}}">
        @csrf 
        @method('PATCH')
        
        <input type="checkbox" name="fee_status"  id="fee_status" onchange="this.form.submit()"
        {{ $user->fee_status ? 'checked' : '' }}>
      
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


<br>
<div class="container">
  <h2>Verify fees of the Students</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>UTR number</th>
        <th>Verify/Unverify</th>
      </tr>
    </thead>
    <tbody>
     @if($users->count())
     @foreach($users as $user)
      @if($user->fee_status=='1')
     <tr class="checkbox {{ $user->fee_status ? 'table-success' : '' }}">
      <td>{{ $user->name}}
      </td>
      <td>{{ $user->utr_number }}</td>
      <td><form method="POST" action="/verifyfees/{{ $user->id}}">
        @csrf 
        @method('PATCH')
        
        <input type="checkbox" name="fee_status"  id="fee_status" onchange="this.form.submit()"
        {{ $user->fee_status ? 'checked' : '' }}>
      
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
