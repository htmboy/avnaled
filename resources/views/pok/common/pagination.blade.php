@if ($paginator->hasPages())
<div class="pages">
    <div class="pagination">
        @if ($paginator->onFirstPage())
            <p>首页</p><p>上一页</p>
        @else
            <a href="{{ $paginator->url(1) }}">首页</a>
            <a href="{{ $paginator->previousPageUrl() }}">上一页</a>
        @endif

        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="cur">{{ $page }}</a>
                    @else
                        <a data-ey_fc35fdc="html" href="{{ $url }}" data-tmp="1">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" data-ey_fc35fdc="html" data-tmp="1">下一页</a>
            <a href="{{ $paginator->url($paginator->lastPage()) }}" data-ey_fc35fdc="html" data-tmp="1">末页</a>
        @else
            <p>下一页</p><p>末页</p>
        @endif
    </div>
</div>
@endif