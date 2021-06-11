<ul class="breadcrumb">
    @php 
        $segments = Request::segments();
        $link = '';
    @endphp
    @if (!count($segments))
        <li class="breadcrumb-item">Dashboard</li>
    @else
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard.index') }}">Dashboard</a>
        </li>
        @foreach ($segments as $segment)
            @php $link .= "/{$segment}" @endphp
            @if (!$loop->last)
                @if ($segments[$loop->index + 1] != 'edit' && $segments[$loop->index + 1] != 'show')
                    <li class="breadcrumb-item">
                        <a href="{{ $link }}">{{ Str::ucfirst($segment) }}</a>
                    </li>
                @endif
            @else
                <li class="breadcrumb-item active">{{ Str::ucfirst($segment) }}</li>
            @endif
        @endforeach
    @endif
</ul>