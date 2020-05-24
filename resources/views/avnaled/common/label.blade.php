<span>【本文标签】：</span>
@foreach($words as $value)
    @if($value->link)
<a target="_blank" href="{{$value->link}}">{{$value->keyword}}</a>
@else
<a target="_blank" href="{{route('avnaled.search', ['word' => $value->keyword])}}">{{$value->keyword}}</a>
@endif
    @endforeach
<br>