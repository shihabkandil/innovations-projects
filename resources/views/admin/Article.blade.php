@extends('layouts.master')
@section('content')

<table class="table">
<thead style ="background-color:grey;">
   <tr style="color: white;">
          <td>ID</td>
          <td style='width:20%;'>Title</td>
          <td>Article</td>
          <td>Pending</td>
     </tr>
  </thead>
     
  
      
     @foreach($id as $articles)
        <form method = 'POST' action = "{{ route('updateArticle') }}">
            @csrf
<tr >
<input type="hidden" name="articleID" value="{{$articles['id']}}">
    <td>{{$articles['id']}}</td>
    <td>{{$articles['title']}}</td>
    <td ><p style="white-space: pre-wrap;">{{$articles['text']}}</p></td>
    <td><button class='btn btn-secondary' type = 'submit'> Accept</button></td>
</tr>
</form>
@endforeach
     
</table>



@endsection