<div {{ $attributes->merge(['class' => 'row setting']) }}>
    <div class="setting__title col-md-4">
        <div>
            <h4>{{ $title }}</h4>
            <p class="text-muted">{{ $description }}</p>
        </div>
    </div>
    <div class="setting__form col-md-8">
        {{ $slot }}
    </div>
</div>
