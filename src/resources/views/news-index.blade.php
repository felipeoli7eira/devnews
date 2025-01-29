<ul>
    @foreach ($data as $item)
        <li>{{ $item->title }} - {{ $item->created_at->format('d/m/Y H:i:s') }}</li>
    @endforeach
</ul>
