@extends('layouts.app')

@section('title', 'Informace o ochraně osobních údajů | Autoškola Vrána')

@section('content')

    <section class="alt" style="padding-top:150px;">
        <div class="wrap" style="max-width:860px;">
            <div class="section-head">
                <span class="eyebrow">GDPR</span>
                <h1 class="section-title">Informace o ochraně osobních údajů</h1>
                <p>V tomto dokumentu naleznete základní informace o zpracování osobních údajů při přihlášení a výuce v naší autoškole.</p>
            </div>

            <div class="gdpr-text">

                <h2>1. Kdo je správcem Vašich osobních údajů?</h2>
                <p>
                    Správcem osobních údajů je <strong>Mgr. Zbyněk Vrána</strong>, provozovatel Autoškoly Vrána.
                </p>
                <p>
                    Provozovna: Tovární 1333, 769 01 Holešov<br>
                    IČO: 30146178<br>
                    Datová schránka: 9s42n4w<br>
                    E-mail: <a href="mailto:info@autoskolavrana.cz">info@autoskolavrana.cz</a><br>
                    Telefon: <a href="tel:+420737330001">+420 737 330 001</a>
                </p>
                <p>Správce nejmenoval pověřence pro ochranu osobních údajů.</p>

                <h2>2. Zdroje a kategorie zpracovávaných osobních údajů</h2>
                <p>
                    Osobní údaje získáváme přímo od Vás, a to při vyplnění přihlášky do naší autoškoly
                    (žádost o přijetí k výuce a výcviku). Správce zpracovává základní identifikační a kontaktní údaje
                    a dále zvláštní kategorie osobních údajů:
                </p>
                <ul>
                    <li>
                        <strong>Identifikační a kontaktní údaje:</strong> titul, jméno a příjmení, datum a místo narození,
                        rodné číslo, trvalé bydliště, státní občanství, číslo dokladu totožnosti, e-mailová adresa,
                        telefonní číslo, korespondenční adresa a údaje o bankovním spojení.
                    </li>
                    <li>
                        <strong>Zvláštní kategorie osobních údajů:</strong> údaje o zdravotním stavu
                        (posudek o zdravotní způsobilosti k řízení motorových vozidel).
                    </li>
                </ul>

                <h2>3. Právní základy a účely zpracování osobních údajů</h2>
                <p>
                    Vaše osobní údaje používáme výhradně na základě zákonných důvodů stanovujících právo či povinnost s nimi nakládat:
                </p>
                <ol>
                    <li>
                        <strong>Plnění smlouvy</strong> (čl. 6 odst. 1 písm. b) GDPR): zpracování je nezbytné pro uzavření
                        a řádné plnění smlouvy o výuce a výcviku v autoškole.
                    </li>
                    <li>
                        <strong>Plnění právních povinností</strong> (čl. 6 odst. 1 písm. c) GDPR): plnění povinností uložených
                        zákonem č. 247/2000 Sb. (vedení povinné dokumentace autoškoly) a tvorba i uchovávání daňových a účetních dokladů.
                    </li>
                    <li>
                        <strong>Zvláštní kategorie osobních údajů</strong> (čl. 9 odst. 2 písm. b) GDPR): posudek o zdravotní
                        způsobilosti zpracováváme na základě plnění právní povinnosti vyžadované zákonem pro výcvik.
                    </li>
                    <li>
                        <strong>Oprávněný zájem správce</strong> (čl. 6 odst. 1 písm. f) GDPR):
                        <ul>
                            <li>
                                <strong>Obchodní sdělení:</strong> rozesílání obchodních sdělení s nabídkou akcí či služeb
                                na e-mailovou adresu zákazníků podle § 7 odst. 3 zákona č. 480/2004 Sb.
                            </li>
                            <li>
                                <strong>Kamerový záznam ve vozidlech:</strong> v každém výcvikovém vozidle je umístěna kamera
                                nahrávající průběh jízdy (přední a zadní výhled) za účelem šetření dopravních incidentů
                                a ochrany života, zdraví a majetku.
                            </li>
                        </ul>
                    </li>
                </ol>
                <p>
                    Oba případy byly podrobeny balančnímu testu dle recitálu č. 47 GDPR s výsledkem, že zájmy ani základní práva
                    subjektu údajů nemají převahu. Proti oprávněnému zájmu správce můžete vznést námitku.
                </p>

                <h2>4. Doba uchování údajů</h2>
                <p>Osobní údaje uchováváme pouze po dobu nezbytně nutnou:</p>
                <ul>
                    <li>
                        <strong>Smluvní agenda a nároky:</strong> po dobu trvání poskytování služeb a dále po dobu uplynutí
                        promlčecích lhůt pro uplatnění nároků (3 roky od vzniku nároku).
                    </li>
                    <li>
                        <strong>Daňové a účetní doklady:</strong> po dobu stanovenou právními předpisy (až 10 let).
                    </li>
                    <li>
                        <strong>Kamerové záznamy:</strong> uchovávány po dobu 168 hodin, ledaže dojde k incidentu
                        (v takovém případě po dobu šetření).
                    </li>
                    <li>
                        <strong>Zdravotní způsobilost:</strong> nejdéle do 1 roku od uzavření smlouvy.
                    </li>
                </ul>
                <p>Po uplynutí stanovených dob správce údaje vymaže.</p>

                <h2>5. Příjemci osobních údajů</h2>
                <p>Vaše údaje neprodáváme a předáváme je pouze v nezbytném rozsahu:</p>
                <ul>
                    <li>
                        <strong>Orgány veřejné moci:</strong> obecní úřad obce s rozšířenou působností (ORP) za účelem přihlášení
                        ke zkouškám z odborné způsobilosti a kontrolní orgány.
                    </li>
                    <li>
                        <strong>Zpracovatelé:</strong> provozovatel aplikace Moje autoškola (společnost NEPLUS, s.r.o.)
                        zajišťující online přihlašování a evidenci, poskytovatelé e-mailových a cloudových služeb a doručovací služby.
                    </li>
                    <li>
                        <strong>Zaměstnanci a lektorování:</strong> pověření učitelé a administrativní pracovníci autoškoly.
                    </li>
                </ul>

                <h2>6. Vaše práva podle GDPR</h2>
                <p>Za podmínek stanovených v GDPR máte vůči správci tato práva:</p>
                <ul>
                    <li>právo na přístup k osobním údajům (čl. 15 GDPR),</li>
                    <li>právo na opravu nepřesných údajů (čl. 16 GDPR),</li>
                    <li>právo na výmaz („právo být zapomenut“), pokud již neexistuje právní důvod (čl. 17 GDPR),</li>
                    <li>právo na omezení zpracování (čl. 18 GDPR),</li>
                    <li>právo na přenositelnost údajů (čl. 20 GDPR),</li>
                    <li>právo vznést námitku proti zpracování založenému na oprávněném zájmu (čl. 21 GDPR),</li>
                    <li>
                        právo podat stížnost u dozorového úřadu: Úřad pro ochranu osobních údajů
                        (<a href="https://www.uoou.cz" target="_blank" rel="noopener">www.uoou.cz</a>),
                        Pplk. Sochora 27, 170 00 Praha 7.
                    </li>
                </ul>
                <p>
                    Svá práva můžete uplatnit e-mailem na
                    <a href="mailto:info@autoskolavrana.cz">info@autoskolavrana.cz</a>.
                </p>

                <h2>7. Podmínky zabezpečení</h2>
                <p>
                    Správce prohlašuje, že přijal veškerá vhodná technická a organizační opatření k zabezpečení osobních údajů
                    v datových úložištích i v listinné podobě a přístup k nim mají pouze jím pověřené osoby.
                </p>

                <h2>8. Závěrečná ustanovení</h2>
                <p>
                    Zaškrtnutím příslušného pole a odesláním objednávky či přihlášky z internetového formuláře potvrzujete,
                    že jste seznámen/a s těmito podmínkami ochrany osobních údajů.
                </p>
                <p>Tyto podmínky jsou platné a účinné od 1. listopadu 2026.</p>

                <p style="margin-top:32px;">
                    <a href="{{ route('home') }}">← Zpět na hlavní stránku</a>
                </p>
            </div>
        </div>
    </section>

    <style>
        .gdpr-text h2{font-size:1.4rem;margin:32px 0 10px;}
        .gdpr-text p,.gdpr-text li{line-height:1.7;}
        .gdpr-text ul,.gdpr-text ol{padding-left:22px;margin:8px 0 12px;}
        .gdpr-text li{margin-bottom:8px;}
        .gdpr-text li > ul{margin-top:8px;}
        .gdpr-text a{color:var(--red);text-decoration:underline;}
    </style>

@endsection
