@props(['width' => 'w-64'])

<div {{ $attributes->merge(['class' => 'flex justify-center items-center']) }}>
    <img 
        src="{{ asset('images/orvix-logo.png') }}" 
        alt="Orvix Studio Logo" 
        class="{{ $width }} h-auto object-contain transition-transform duration-300 hover:scale-105"
    >
</div>