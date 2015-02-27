@extends('app')

@section('content')
 <b>Name:</b> {{ $registration->name}}<br>
 <b>Sex:</b> {{ $registration->sex}}<br>
 <b>Date of Birth:</b> {{ $registration->dob }}

 <br>
@endsection