@extends('layouts.app')

@section('title', 'Přihláška | Autoškola Vrána')

@section('content')

    <section class="alt" style="padding-top:150px;min-height:80vh;">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">Přihláška</span>
                <h1 class="section-title">Přihláška do autoškoly</h1>
                <p>Vyplňte online přihlášku a já se vám ozvu. K přihlášení budete potřebovat také Posudek o zdravotní způsobilosti potvrzený praktickým lékařem.</p>
            </div>

            <p class="price-note" style="margin:0 0 24px;">
                <a href="{{ asset('docs/posudek-o-zdravotni-zpusobilosti.pdf') }}" style="color:var(--red);text-decoration:underline;" download>⬇ Stáhnout Posudek o zdravotní způsobilosti (PDF)</a>
            </p>

            <iframe src="https://vrana.moje-autoskola.cz/prihlaska.php?iframe=1"
                    width="100%" height="1050" style="border:0;"
                    frameborder="0" rel="nofollow" id="ma_iframe"
                    title="Online přihláška do autoškoly"></iframe>
            <script src="https://vrana.moje-autoskola.cz/js/iframe-resizer/iframeResizer.min.js"></script>
            <script>iFrameResize();</script>

            <p class="price-note">
                On-line přihlašování žáků zajišťuje software
                <a href="https://www.moje-autoskola.cz" target="_blank" rel="noopener" style="text-decoration:underline;">MOJE AUTOŠKOLA</a>.
            </p>
        </div>
    </section>

@endsection
