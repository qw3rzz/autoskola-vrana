@php
    $repeat = max(1, (int) ceil(10 / $reviews->count()));   // kolikrát opakovat recenze v jedné sadě
@endphp

<div class="reviews-marquee" style="--count: {{ $reviews->count() * $repeat }}">
    <div class="reviews-track">
        {{-- Dvě stejné sady za sebou = nekonečná smyčka --}}
        @foreach([false, true] as $isClone)
            <div class="reviews-group">
                @for($i = 0; $i < $repeat; $i++)
                    @foreach($reviews as $review)
                        <div class="review-card rv-item" @if($isClone || $i > 0) aria-hidden="true" @endif>
                            <div class="stars">★★★★★</div>
                            <p>„{{ $review->text }}“</p>
                            <div class="who">{{ $review->author_name }}</div>
                        </div>
                    @endforeach
                @endfor
            </div>
        @endforeach
    </div>
</div>

<style>
    .reviews-marquee {
        --rv-gap: 1.25rem;
        --rv-speed: 7s;                     /* sekund na jednu recenzi – větší = pomalejší */

        overflow: hidden;
        padding: .75rem 0 1.5rem;           /* místo pro stíny karet */
        -webkit-mask-image: linear-gradient(to right, transparent, #000 6%, #000 94%, transparent);
        mask-image: linear-gradient(to right, transparent, #000 6%, #000 94%, transparent);
    }

    .reviews-track {
        display: flex;
        width: max-content;
        animation: reviews-scroll calc(var(--count) * var(--rv-speed)) linear infinite;
    }

    .reviews-group {
        display: flex;
        gap: var(--rv-gap);
        padding-right: var(--rv-gap);       /* díky tomu je posun přesně -50 % */
        flex-shrink: 0;
    }

    /* Zastavení při najetí myší / dotyku / focusu, ať si to jde přečíst */
    .reviews-marquee:hover .reviews-track,
    .reviews-marquee:focus-within .reviews-track,
    .reviews-marquee:active .reviews-track {
        animation-play-state: paused;
    }

    @keyframes reviews-scroll {
        to { transform: translateX(-50%); }
    }

    /* Jen rozměry karty v pásu, vzhled si bere z tvého .review-card */
    .rv-item {
        width: min(340px, 82vw);
        flex-shrink: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
    }
    .rv-item .who {
        margin-top: auto;                   /* jméno vždy dole, karty stejně vysoké */
    }

    /* Kdo má vypnuté animace: ruční posouvání, bez opakovaných karet */
    @media (prefers-reduced-motion: reduce) {
        .reviews-marquee {
            overflow-x: auto;
            -webkit-mask-image: none;
            mask-image: none;
        }
        .reviews-track { animation: none; }
        .rv-item[aria-hidden="true"] { display: none; }
    }
</style>
