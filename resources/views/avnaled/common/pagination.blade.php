@if ($paginator->hasPages())
<div class="page">
    <div>
        @if ($paginator->onFirstPage())
        @else
        <a class="prev" href="{{ $paginator->previousPageUrl() }}"><<</a>
        @endif

            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="current">{{ $page }}</span>
                        @else
                            <a class="num" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

        @if ($paginator->hasMorePages())
        <a class="next" href="{{ $paginator->nextPageUrl() }}">>></a>
            @else
            @endif

        <span class="rows">共 {{$paginator->total()}} 条记录</span>
    </div>
</div>
@endif