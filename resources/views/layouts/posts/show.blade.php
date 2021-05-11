<form action="/edit"method='POST'>
@call_user_func
<input type="hidden" name="id" value="{{$data['id']}}">
<input type="text" name="title" value="{{$data['Title']}}">
<input type="text" name="Description" value="{{$data['Description']}}">
@if ($data->img)
            <img src="{{ asset('/storage/img/'.$data->img) }}">
            @else
                <h3 style="color:white">No image available<h3>
                @endif
<button type= "submit">update</button>
<a href="../list">back</ab>
</form>
