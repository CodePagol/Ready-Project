@php
    $desktopImageExists = file_exists(public_path('images/front_logo_300_500.png'));
    $mobileImageExists = file_exists(public_path('images/front_logo_auto_200.png'));
@endphp
<div class="box__mobile box__image-container">
    {{-- Mobile --}}
    <div class="mobile-view">
        @if ($mobileImageExists)
            <img src="{{ asset('images/front_logo_auto_200.png') }}" alt="Mobile Picture" class="box__image">
        @else
            <h2 class="box__title neon-text audiowide-bold">{{ env('APP_NAME') }}</h2>
        @endif
    </div>
</div>

<div class="box__left box__image-container">
    {{-- Desktop --}}
    <div class="desktop-view">
        @if ($desktopImageExists)
            <img src="{{ asset('images/front_logo_300_500.png') }}" alt="Desktop Picture" class="box__image">
        @else
            <h2 class="box__title neon-text audiowide-bold">{{ env('APP_NAME') }}</h2>
        @endif
    </div>
</div>