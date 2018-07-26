@extends('backend.layout')
@section('content')


    <!-- Page Content -->
      <br/>
        <h1>Show Sesi: {{ $sesi->name }}</h1></br>

        @include('common.alert')

          <p>ID : {{ $sesi->id }}</p>
          <p>Name : {{ $sesi->name}}</p>
          <p>Status : {{ $sesi->status ? 'Open':'Close'}}</p>
          <p>Pingat : {{ $sesi->pingat }}</p>
          <hr>
          <small>Updated at {{ $sesi->updated_at -> format('H:i:s d M Y') }}</small>

          <br/><br/><br/>
          <a href="{{ url()->previous() }}" type="button" class="btn btn-default">Back to senarai</a>
    
@endsection

