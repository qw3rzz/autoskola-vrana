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

<div class="rv-all-wrap">
    <button type="button" class="rv-all-btn" onclick="rvOpenModal()">Zobrazit všechny recenze</button>
</div>

{{-- Modal na postupné procházení recenzí --}}
<div class="rv-modal" id="rvModal" onclick="if(event.target === this) rvCloseModal()">
    <div class="rv-modal-box" role="dialog" aria-modal="true" aria-label="Recenze">
        <button type="button" class="rv-modal-close" onclick="rvCloseModal()" aria-label="Zavřít">✕</button>

        <div class="rv-modal-content">
            @foreach($reviews as $review)
                <div class="rv-modal-slide" data-index="{{ $loop->index }}">
                    <div class="stars">★★★★★</div>
                    <p>„{{ $review->text }}“</p>
                    <div class="who">{{ $review->author_name }}</div>
                </div>
            @endforeach
        </div>

        <div class="rv-modal-nav">
            <button type="button" onclick="rvPrev()" aria-label="Předchozí recenze">←</button>
            <span class="rv-modal-counter"><span id="rvCurrent">1</span> / {{ $reviews->count() }}</span>
            <button type="button" onclick="rvNext()" aria-label="Další recenze">→</button>
        </div>
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

    /* Tlačítko pod pásem */
    .rv-all-wrap {
        text-align: center;
        margin-top: .5rem;
    }
    .rv-all-btn {
        font: inherit;
        cursor: pointer;
        padding: .65rem 1.5rem;
        border-radius: 999px;
        border: 2px solid var(--red, #c8102e);
        background: transparent;
        color: var(--red, #c8102e);
        font-weight: 600;
        transition: background .2s, color .2s;
    }
    .rv-all-btn:hover {
        background: var(--red, #c8102e);
        color: #fff;
    }

    /* Modal */
    .rv-modal {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 1000;
        background: rgba(0, 0, 0, .55);
        padding: 1.5rem;
        align-items: center;
        justify-content: center;
    }
    .rv-modal.is-open {
        display: flex;
    }
    .rv-modal-box {
        position: relative;
        width: min(480px, 100%);
        background: #fff;
        border-radius: 14px;
        padding: 2rem 1.5rem 1.5rem;
        box-shadow: 0 20px 60px rgba(0, 0, 0, .3);
    }
    .rv-modal-close {
        position: absolute;
        top: .75rem;
        right: .75rem;
        border: none;
        background: none;
        font-size: 1.1rem;
        line-height: 1;
        cursor: pointer;
        color: #666;
        padding: .35rem;
    }
    .rv-modal-content {
        position: relative;
        min-height: 180px;
    }
    .rv-modal-slide {
        display: none;
        text-align: center;
    }
    .rv-modal-slide.is-active {
        display: block;
    }
    .rv-modal-slide .stars {
        margin-bottom: .5rem;
    }
    .rv-modal-slide .who {
        margin-top: 1rem;
        font-weight: 600;
    }
    .rv-modal-nav {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.25rem;
        margin-top: 1.5rem;
    }
    .rv-modal-nav button {
        border: 1px solid rgba(0, 0, 0, .15);
        background: #fff;
        width: 2.25rem;
        height: 2.25rem;
        border-radius: 50%;
        cursor: pointer;
        font-size: 1rem;
    }
    .rv-modal-nav button:hover {
        border-color: var(--red, #c8102e);
        color: var(--red, #c8102e);
    }
    .rv-modal-counter {
        font-size: .9rem;
        color: #555;
        min-width: 3.5rem;
        text-align: center;
    }
    .rv-form-wrap {
        text-align: center;
        margin-top: 1rem;
    }
    .rv-form-success {
        color: #1a7a3c;
        font-weight: 600;
        margin-bottom: .75rem;
    }
    .rv-form-error {
        display: block;
        color: var(--red, #c8102e);
        font-size: .85rem;
        margin-top: -.5rem;
        margin-bottom: .75rem;
    }
    #rvFormModal form {
        display: flex;
        flex-direction: column;
        gap: .5rem;
        text-align: left;
    }
    #rvFormModal label {
        font-weight: 600;
        font-size: .9rem;
    }
    #rvFormModal input[type="text"],
    #rvFormModal textarea {
        font: inherit;
        padding: .6rem .75rem;
        border: 1px solid rgba(0,0,0,.2);
        border-radius: 8px;
        resize: vertical;
    }
    #rvFormModal button[type="submit"] {
        margin-top: .5rem;
        align-self: flex-start;
    }
</style>

<script>
    (function () {
        var slides = null;
        var current = 0;

        function init() {
            if (!slides) {
                slides = document.querySelectorAll('#rvModal .rv-modal-slide');
            }
        }

        function show(index) {
            init();
            if (!slides.length) return;
            current = (index + slides.length) % slides.length;
            slides.forEach(function (slide, i) {
                slide.classList.toggle('is-active', i === current);
            });
            document.getElementById('rvCurrent').textContent = current + 1;
        }

        window.rvOpenModal = function () {
            init();
            document.getElementById('rvModal').classList.add('is-open');
            show(0);
            document.addEventListener('keydown', rvKeyHandler);
        };

        window.rvCloseModal = function () {
            document.getElementById('rvModal').classList.remove('is-open');
            document.removeEventListener('keydown', rvKeyHandler);
        };

        window.rvNext = function () { show(current + 1); };
        window.rvPrev = function () { show(current - 1); };

        function rvKeyHandler(e) {
            if (e.key === 'Escape') rvCloseModal();
            if (e.key === 'ArrowRight') rvNext();
            if (e.key === 'ArrowLeft') rvPrev();
        }

        window.rvOpenForm = function () {
            document.getElementById('rvFormModal').classList.add('is-open');
        };
        window.rvCloseForm = function () {
            document.getElementById('rvFormModal').classList.remove('is-open');
        };

        @if ($errors->has('author_name') || $errors->has('text'))
        document.addEventListener('DOMContentLoaded', function () {
            rvOpenForm();
        });
        @endif
    })();
</script>
