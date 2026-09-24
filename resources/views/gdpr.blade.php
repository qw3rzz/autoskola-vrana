@extends('layouts.app')

@section('title', 'Zásady ochrany osobních údajů — Autoškola Vrána')

@section('content')
    <section class="wrap" style="padding:60px 0;max-width:800px;margin:0 auto;">
        <h1>Zásady ochrany osobních údajů</h1>
        <p><em>Účinné od: {{ now()->format('d.m.Y') }}</em></p>

        <h2>1. Správce osobních údajů</h2>
        <p>Mgr. Zbyněk Vrána, Autoškola Vrána, IČO: [doplnit], se sídlem [doplnit adresu],
            kontaktní e-mail: [doplnit], telefon: +420 737 330 001 ("správce").</p>

        <h2>2. Jaké údaje zpracováváme</h2>
        <p>Prostřednictvím kontaktního formuláře a přihlášky do kurzu zpracováváme: jméno a příjmení,
            e-mailovou adresu, telefonní číslo a obsah vaší zprávy/přihlášky. U přihlášky do kurzu dále
            datum narození a údaje potřebné pro evidenci dle zákona o získávání a zdokonalování odborné
            způsobilosti k řízení motorových vozidel.</p>

        <h2>3. Účel a právní základ zpracování</h2>
        <ul>
            <li>Vyřízení vašeho dotazu / komunikace — oprávněný zájem správce (čl. 6 odst. 1 písm. f) GDPR)</li>
            <li>Uzavření a plnění smlouvy o autoškole (přihláška, evidence žáka) — čl. 6 odst. 1 písm. b) GDPR</li>
            <li>Plnění zákonných povinností (evidence dle zákona č. 247/2000 Sb.) — čl. 6 odst. 1 písm. c) GDPR</li>
        </ul>

        <h2>4. Doba uchovávání</h2>
        <p>Dotazy z kontaktního formuláře: [např. 1 rok od vyřízení]. Údaje žáků autoškoly: po dobu
            vyžadovanou zákonem o získávání a zdokonalování odborné způsobilosti k řízení motorových vozidel.</p>

        <h2>5. Příjemci údajů</h2>
        <p>Vaše údaje nepředáváme třetím stranám, s výjimkou případů, kdy to vyžaduje zákon (např. evidence
            u příslušného úřadu), nebo poskytovatelů, kteří pro nás zajišťují technický provoz webu (hosting).</p>

        <h2>6. Vaše práva</h2>
        <p>Máte právo na přístup k údajům, jejich opravu, výmaz, omezení zpracování, přenositelnost a
            vznést námitku proti zpracování. Můžete se také obrátit na Úřad pro ochranu osobních údajů
            (uoou.cz).</p>

        <h2>7. Cookies</h2>
        <p>Tento web v současné době nepoužívá analytické ani marketingové cookies. Používá pouze
            technické cookies nezbytné pro provoz přihlášení do administrace.</p>

        <h2>8. Kontakt</h2>
        <p>V případě dotazů ohledně zpracování osobních údajů nás kontaktujte na [e-mail].</p>
    </section>
@endsection
