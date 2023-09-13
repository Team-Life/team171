<div class="categories_dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ 'type:カテゴリー名' }}
    </button>
    <ul class="dropdown-menu" style="padding-left: 2rem;">
        @foreach ($choices as $choice)
        <li class="dropdown-item">{{ $choice->type }}:{{ $choice->category_name }}</li>
        @endforeach
    </ul>
</div>
