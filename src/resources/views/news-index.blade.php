<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <h2 class="mb-3">Últimas Notícias</h2>
    <ul class="list-group">
        @foreach ($data as $item)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-1">{{ $item->title }}</h5>
                    <small class="text-muted">{{ $item->created_at->format('d/m/Y H:i:s') }}</small>
                </div>
                <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary btn-sm">Ver mais</a>
            </li>
        @endforeach
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

