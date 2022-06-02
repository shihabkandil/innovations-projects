@extends('layouts.master')
@section('content')

<table class="table">
<thead style ="background-color:#1985E7;">
<tr>
          <td>ID</td>
          <td>title</td>
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
    <td>{{$articles['text']}}</td>
    <td><button type = 'submit'> Accept
     </button></td>

</tr>
</form>
@endforeach
     
</table>



@endsection