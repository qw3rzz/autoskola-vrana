@extends('layouts.app')

@section('title', 'Autoškola Vrána')

@section('content')

    <section id="home" class="hero">
        <img class="hero-photo" src="{{ asset('images/hero-car.png') }}" alt="Vůz autoškoly Vrána v zatáčce za soumraku">
        <div class="hero-scrim"></div>
        <div class="hero-inner">
            <div>
                <span class="eyebrow">Autoškola Vrána · Skupina B</span>
                <h1 class="hero-title">S Vránou pod <span>křídly</span> zvládnete každou zatáčku</h1>
                <p class="hero-sub">Osobní a klidný přístup, moderní auta a instruktor, se kterým hodíte strach z řízení za hlavu.</p>
                <div class="hero-ctas">
                    <a href="#prihlaska" id="prihlaska" class="btn btn-red">Chci se přihlásit</a>
                    <a href="#o-nas" class="btn btn-ghost" style="border-color:#fff;color:#fff;">Více o autoškole</a>
                </div>
                <a href="#zdravotni" class="health-link">⬇ Lékařský posudek (PDF)</a>
            </div>
        </div>
    </section>

    <div class="strip">
        <div class="wrap strip-grid">
            <a href="#sluzby" class="strip-card">
                <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><path d="M4 5c0-1 1-2 2-2h2l2 5-2 2c1 3 3 5 6 6l2-2 5 2v2c0 1-1 2-2 2C10 20 4 14 4 5z"/></svg>
                <h3>Služby</h3>
                <p>Výcvik skupiny B, kondiční jízdy i příprava k přezkoušení.</p>
            </a>
            <a href="#cenik" class="strip-card">
                <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><rect x="3" y="6" width="18" height="13" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg>
                <h3>Ceník</h3>
                <p>Přehledné balíčky bez skrytých poplatků.</p>
            </a>
            <a href="#kontakt" class="strip-card">
                <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.6"><path d="M21 15v4a2 2 0 01-2 2c-9 0-16-7-16-16a2 2 0 012-2h4l2 5-2.5 2.5a12 12 0 006 6L17 15l4 0z"/></svg>
                <h3>Kontakt</h3>
                <p>Zavolejte, napište, nebo se stavte na kus řeči.</p>
            </a>
        </div>
    </div>

    <section id="o-nas">
        <div class="wrap about-grid">
            <div class="instructor-col">
                <h3 class="card-label">Něco o mně</h3>
                <div class="instructor-card">
                    <div class="instructor-photo">Foto instruktora</div>
                    <h3>Mgr. Zbyněk Vrána</h3>
                    <div class="role">Majitel &amp; hlavní instruktor</div>
                    <p class="contact-line">📞 +420 737 330 001</p>
                    <p class="contact-line">Výcvik skupiny B</p>
                    <div class="about-me">
                        <h4>Zajímavosti o mně</h4>
                        <p>„Není důležité, co všechno vím já, ale co z toho dokážu naučit vás. Zakládám si na stoprocentní trpělivosti, lidskosti a podpoře od první jízdy až po předání řidičáku.“</p>
                    </div>
                </div>
            </div>
            <div class="about-copy">
                <span class="eyebrow">O autoškole</span>
                <h2 class="section-title">Řízení, které dává smysl</h2>
                <p>Autoškolu Vrána jsem založil s jasným cílem: ukázat vám, že sednout si za volant nemusí být strašák, ale radost. Zapomeňte na křik, nervozitu a stresující situace — každý z nás jednou začínal a já moc dobře vím, jaké to je.</p>
                <p>Mám několikaleté zkušenosti jako instruktor partnerské autoškoly, a to jak s vedením teoretické výuky, tak i s praktickým výcvikem přímo v provozu. Tempo výuky přizpůsobím vašim potřebám — naučím vás jezdit bezpečně, předvídatelně a s přirozeným sebevědomím.</p>
                <div class="fleet">
                    <h3>Naše vozy</h3>
                    <div class="fleet-grid">
                        <div class="fleet-item">Vůz 1</div>
                        <div class="fleet-item">Vůz 2</div>
                        <div class="fleet-item">Vůz 3</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap team-section">
            <h3>Náš tým</h3>
            <p class="team-hint">Instruktoři autoškoly — nové kolegy sem lze kdykoliv přidat.</p>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-photo">Foto instruktora</div>
                    <div class="team-info">
                        <h4>Zbyněk Vrána</h4>
                        <div class="team-role">Majitel &amp; hlavní instruktor</div>
                    </div>
                </div>
                <div class="team-card placeholder">
                    <div class="team-photo">+ Foto instruktora</div>
                    <div class="team-info">
                        <h4>Volné místo</h4>
                        <div class="team-role">Instruktor</div>
                    </div>
                </div>
                <div class="team-card placeholder">
                    <div class="team-photo">+ Foto instruktora</div>
                    <div class="team-info">
                        <h4>Volné místo</h4>
                        <div class="team-role">Instruktor</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="duvody" class="alt">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">Proč právě já</span>
                <h2 class="section-title">6 důvodů, proč dělat autoškolu právě u mě</h2>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="num">01</div>
                    <h3>Zkušenosti z první linie</h3>
                    <p>23 let praxe u Policie ČR, dlouhodobě u dopravní policie a při šetření nehod. Uslyšíte, jak krizové situace na silnici reálně vznikají — a jak jim předcházet.</p>
                </div>
                <div class="benefit-card">
                    <div class="num">02</div>
                    <h3>Skutečný osobní přístup</h3>
                    <p>Jako majitel a instruktor v jedné osobě vás provedu výcvikem v klidu a bez tlaku, s výukou přizpůsobenou přesně vašemu tempu.</p>
                </div>
                <div class="benefit-card">
                    <div class="num">03</div>
                    <h3>Poctivost a pevná cena</h3>
                    <p>Cena v ceníku je konečná bez skrytých poplatků. Když se zkouška napoprvé nepovede, máte u mě 2× 45 minut kondičních jízd zdarma.</p>
                </div>
                <div class="benefit-card">
                    <div class="num">04</div>
                    <h3>Flexibilita bez příplatků</h3>
                    <p>Jízdy ráno, večer i o víkendu za stejnou cenu. V Holešově a okolí pro vás navíc přijedu přímo domů nebo ke škole.</p>
                </div>
                <div class="benefit-card">
                    <div class="num">05</div>
                    <h3>Know-how pro reálný život</h3>
                    <p>Naučíte se víc než teorii na testy — jak jednat se složkami IZS a jak udržet vozidlo v pořádku, aby vás nezaskočila silniční kontrola.</p>
                </div>
                <div class="benefit-card">
                    <div class="num">06</div>
                    <h3>První pomoc od záchranáře</h3>
                    <p>Zdravotní přípravu vás provede skutečný profesionální záchranář ze ZZS Zlínského kraje — praxe, která se vám bude hodit celý život.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sluzby">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">Naše služby</span>
                <h2 class="section-title">Co u nás zvládnete</h2>
                <p>Od základního výcviku po kondiční jízdy pro ty, kteří si chtějí osvěžit sebevědomí za volantem.</p>
            </div>
            <div class="services-grid">
                <div class="service-card" id="service-card-b">
                    <div class="num">01</div>
                    <h3>Výcvik skupiny B (L17)</h3>
                    <p>Kompletní příprava na řidičský průkaz — teorie i praxe krok za krokem, srozumitelně a v přátelské atmosféře. (1 vyučovací hodina = 45 minut)</p>
                    <button class="scope-toggle" data-target="scope-b"><span class="plus">+</span> Zobrazit rozsah oprávnění</button>
                    <div class="scope-body" id="scope-b">
                        <ul>
                            <li><strong>Motorová vozidla do 3 500 kg</strong> pro přepravu max. 8 osob kromě řidiče.</li>
                            <li><strong>Jízda s přívěsem</strong> do 750 kg, případně víc, pokud souprava nepřesáhne 3 500 kg.</li>
                            <li><strong>Motocykly a čtyřkolky</strong> — automaticky i skupiny AM, B1 a A1 s automatickou převodovkou.</li>
                            <li><strong>Tříkolky a sněžné skútry</strong> od 21 let.</li>
                            <li><strong>Větší dodávky na alternativní pohon</strong> do 4 250 kg po 2 letech držení skupiny B.</li>
                        </ul>
                        <p class="scope-footnote">Zkouška v autě s automatem = oprávnění pouze na automat. Víc v <a href="#faq-l17" style="color:var(--red);">FAQ o režimu L17</a>.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="num">02</div>
                    <h3>Zrychlený (VIP) kurz B (L17)</h3>
                    <p>Potřebujete řidičák co nejrychleji? VIP kurz zkrátí výcvik na minimum, s předností při plánování jízd a maximální flexibilitou. (1 h = 45 minut)</p>
                </div>
                <div class="service-card">
                    <div class="num">03</div>
                    <h3>Kondiční jízdy</h3>
                    <p>Dlouho jste neseděli za volantem, koupili nové auto, nebo máte respekt z dálnic či parkování? Společně vrátíme jistotu a klid za volantem.</p>
                </div>
                <div class="service-card">
                    <div class="num">04</div>
                    <h3>Příprava k přezkoušení</h3>
                    <p>Potřebujete se vrátit za volant po vybodování (12 bodů) nebo zákazu řízení? Pomůžu vám s přípravou, abyste to zvládli napoprvé.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cenik">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">Ceník</span>
                <h2 class="section-title">Jasně, férově a bez překvapení</h2>
            </div>
            <table class="price-table">
                <thead>
                <tr><th>Balíček</th><th>Poznámka</th><th>Cena</th></tr>
                </thead>
                <tbody>
                <tr><td>Základní kurz – Skupina B (<a href="#faq-l17" style="color:var(--red);text-decoration:underline;">L17</a>)</td><td>28 vyučovacích hodin (1 h = 45 min), teorie i výukové materiály</td><td class="price">20 000 Kč</td></tr>
                <tr><td>Zrychlený (VIP) kurz – Skupina B (<a href="#faq-l17" style="color:var(--red);text-decoration:underline;">L17</a>)</td><td>28 vyučovacích hodin, přednostní plánování jízd</td><td class="price">28 000 Kč</td></tr>
                <tr><td>Kondiční / doplňkové jízdy</td><td>Za 1 vyučovací hodinu (45 min)</td><td class="price">600 Kč</td></tr>
                <tr><td>Příprava k přezkoušení</td><td>Vrácení řidičského oprávnění</td><td class="price">5 000 Kč</td></tr>
                <tr><td>Převod výuky/výcviku z jiné autoškoly</td><td>Doplňkové jízdy pak 600 Kč / 45 min</td><td class="price">1 000 Kč</td></tr>
                <tr><td>Převod závěrečné zkoušky z jiné autoškoly</td><td>Doplňkové jízdy pak 600 Kč / 45 min</td><td class="price">1 000 Kč</td></tr>
                <tr><td>Storno celé autoškoly ze strany žáka</td><td>Při předčasném ukončení rozjetého výcviku</td><td class="price">10 000 Kč</td></tr>
                </tbody>
            </table>
            <p class="price-note">V ceně kurzu: kompletní teorie, 28 praktických jízd, studijní materiál zdarma, vyzvednutí na jízdy v Holešově a okolí, žádné příplatky za víkendy/rána/večery a garantovaná druhá šance (2× 45 min jízd zdarma). Mimo cenu je jen zákonný poplatek MěÚ Holešov za vykonání zkoušky (700 Kč).</p>
        </div>
    </section>

    <section id="recenze" class="alt">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">Recenze</span>
                <h2 class="section-title">Co říkají naši absolventi</h2>
            </div>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p>„Ukázková recenze — sem přijde reálný text od absolventa, který schválím.“</p>
                    <div class="who">Jméno, měsíc/rok</div>
                </div>
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p>„Recenze budou přidávány ručně, aby zůstal obsah pod kontrolou autoškoly.“</p>
                    <div class="who">Jméno, měsíc/rok</div>
                </div>
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p>„V budoucí verzi s Laravelem půjde recenze spravovat přes jednoduchý admin.“</p>
                    <div class="who">Jméno, měsíc/rok</div>
                </div>
            </div>
            <p class="review-note">Recenze jsou zatím ukázkové — reálné texty doplním, publikaci mám vždy pod kontrolou.</p>
        </div>
    </section>

    <section id="faq">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">Časté otázky</span>
                <h2 class="section-title">FAQ</h2>
            </div>
            <div id="faq-list">
                <div class="faq-item">
                    <button class="faq-q">Jak dlouho kurz trvá?<span class="plus">+</span></button>
                    <div class="faq-a"><p>Délku kurzu přizpůsobuji každému uchazeči individuálně podle jeho časových možností — můžete jezdit intenzivně, nebo si jízdy rozložit podle školy či práce. Pokud spěcháte, nabízím i VIP zrychlený kurz.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-q">Od kolika let mohu začít s výcvikem?<span class="plus">+</span></button>
                    <div class="faq-a"><p>Výcvik na skupinu B (L17) můžete zahájit už před dovršením 17 let, závěrečnou zkoušku pak nejdříve v den 17. narozenin. Pak můžete řídit v programu L17 pod dohledem mentora, nebo počkat do 18 let na plnohodnotné oprávnění.</p></div>
                </div>
                <div class="faq-item" id="faq-l17">
                    <button class="faq-q">Jak přesně funguje režim L17 a jaké jsou podmínky?<span class="plus">+</span></button>
                    <div class="faq-a">
                        <p><strong>Pro 17letého řidiče:</strong> oprávnění jen s písemným souhlasem zákonného zástupce; do 18 let smí řídit pouze s mentorem zapsaným v registru řidičů (max. 4 mentoři na žáka).</p>
                        <p><strong>Pro mentora:</strong> skupinu B musí mít déle než 10 let a nepřetržitě posledních 5 let, bez ztráty řidičského oprávnění, správního trestu nebo bodu v posledních 5 letech.</p>
                        <p><strong>Při jízdě:</strong> mentor sedí vedle řidiče, sleduje provoz, nesmí být pod vlivem alkoholu či jiných látek a na výzvu policie musí prokázat totožnost a podstoupit kontrolu.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q">Co všechno potřebuji k přihlášení do autoškoly?<span class="plus">+</span></button>
                    <div class="faq-a"><p>Vyplněnou Žádost o řidičské oprávnění a Posudek o zdravotní způsobilosti potvrzený vaším praktickým lékařem. Oba formuláře půjde stáhnout přímo v úvodu webu — jakmile je budete mít, stačí mě kontaktovat.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-q">Jak probíhá teoretická výuka?<span class="plus">+</span></button>
                    <div class="faq-a"><p>Přímo v naší učebně autoškoly v Holešově — žádné nudné samostudium doma. Pravidla, křižovatky i krizové situace z reálného provozu si společně srozumitelně projdeme.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-q">Mám strach, že mi to nepůjde. Je auto bezpečné?<span class="plus">+</span></button>
                    <div class="faq-a"><p>Strach na začátku je přirozený. Výcvikové auto má dvojité ovládání (pedály i na straně instruktora), takže mám nad vozidlem neustálou kontrolu a dokážu kdykoliv bezpečně zasáhnout. Jedeme tempem, které vám vyhovuje.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-q">Můžu platit na splátky?<span class="plus">+</span></button>
                    <div class="faq-a"><p>Ano. Rád rozložím celkovou cenu kurzu do několika splátek bez navýšení nebo skrytých úroků — konkrétní plán domluvíme hned na začátku.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-q">Co když neudělám zkoušku napoprvé?<span class="plus">+</span></button>
                    <div class="faq-a"><p>Žádný stres, stává se to. V ceně kurzu máte automaticky 2× 45 minut kondičních jízd zdarma na dopilování toho, co vás u zkoušky potrápilo — bez příplatku.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-q">Jak probíhá závěrečná zkouška a kolik stojí?<span class="plus">+</span></button>
                    <div class="faq-a"><p>Nejprve teoretický test na počítači, pak kontrola vozidla a zkouška z praktické jízdy — vše pod dohledem komisaře MěÚ Holešov. Zákonný správní poplatek 700 Kč se platí přímo úřadu a není součástí ceny kurzu.</p></div>
                </div>
            </div>
        </div>
    </section>

    <section id="prihlaska-zdravotni" class="alt">
        <div class="wrap">
            <div class="section-head">
                <span class="eyebrow">Přihláška</span>
                <h2 class="section-title">Přihláška do autoškoly</h2>
                <p>Formulář přihlášky sem doplním, jakmile pod IČO dokoupím licenci v aplikaci MOJE Autoškola. Pod ním bude i odkaz na Posudek o zdravotní způsobilosti ke stažení.</p>
            </div>
            <div id="zdravotni" style="border:2px dashed var(--line);padding:40px;text-align:center;color:#999;border-radius:var(--radius);">
                Zde bude vložen formulář přihlášky + zdravotní posudek
            </div>
        </div>
    </section>

    <section id="kontakt">
        <div class="wrap contact-grid">
            <div class="contact-info">
                <span class="eyebrow">Kontakt</span>
                <h2 class="section-title">Ozvěte se</h2>
                <div class="item">
                    <div class="label">Telefon</div>
                    <div class="value">+420 737 330 001</div>
                </div>
                <div class="item">
                    <div class="label">E-mail</div>
                    <div class="value">bude doplněno po zřízení domény</div>
                </div>
                <div class="item">
                    <div class="label">Adresa</div>
                    <div class="value">Holešov a okolí — přesná adresa učebny bude doplněna</div>
                </div>
                <div class="map-box">Google mapa</div>
            </div>
            <form class="contact-form">
                <label for="jmeno">Jméno a příjmení</label>
                <input id="jmeno" type="text" placeholder="Jan Novák">
                <label for="mail">E-mail</label>
                <input id="mail" type="email" placeholder="jan@email.cz">
                <label for="zprava">Zpráva</label>
                <textarea id="zprava" placeholder="Váš dotaz..."></textarea>
                <button type="button" class="btn btn-red" style="border:none;cursor:pointer;">Odeslat dotaz</button>
            </form>
        </div>
    </section>

@endsection
