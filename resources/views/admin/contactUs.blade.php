@extends('layouts.master')
@section('content')

<table class="table">
<thead style ="background-color:grey;">
   <tr style="color: white;">
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Subject</td>
        <td>Message</td>
    </tr>
</thead>
@foreach($contactUs as $data) 
<tr >
    <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->subject}}</td>
    <td style="width:60%;">{{$data->message}}</td>
</tr>
@endforeach
     
</table>


@endsection