<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $reviews = [
            ['Vendula M.', 'Každá jízda je skvělá zkušenost! Vše vysvětluje s klidem a trpělivostí, v autě panuje super atmosféra a i při chybě má neuvěřitelně podporující přístup. Za volantem se cítím jistě a řízení mě fakt baví. Pro mě TOP STROP!'],
            ['Marek K.', 'Pan Vrána je vynikající instruktor. Profesionální, klidný a lidský přístup na každé hodině. Nemohl jsem si vybrat lépe!'],
            ['Markéta S.', 'Jízdy byly strašně fajn, dobře se mi povídalo. Pomohlo mi to od napětí z řízení, takže jsem si hodiny opravdu užila. Vysvětlení pravidel bylo srozumitelné a hlavně probíhalo v klidu. Oceňuji trpělivost a celkově přátelský přístup.'],
            ['Lukáš K.', 'Super učitel! Má skvělý smysl pro humor, skvělý lidský přístup a dokáže vše perfektně a s přehledem naučit. Výcvik mě moc bavil.'],
            ['Anna M.', 'Moc doporučuji! Učitel mě trpělivě upozornil i na chyby, které jsem si sama ani neuvědomovala, a hned mi vysvětlil, jak je příště napravit. Hodiny mají skvělý přínos a z každé jízdy si odnáším spoustu cenných zkušeností.'],
            // TODO: Jan V. nedodal text – zástupný návrh, ať si ho schválí / přepíše
            ['Jan V.', 'Pohodová a kamarádská atmosféra, srozumitelné vysvětlování a žádný stres. Za volantem jsem si po pár hodinách začal věřit. Doporučuji!'],
            ['Lucie B.', 'Skvělá a pohodová atmosféra, díky které šlo řízení úplně samo. Moc oceňuji hlavně praktické a užitečné rady ohledně parkování, které mi daly obrovskou jistotu do dalších jízd!'],
            ['Petr Ch.', 'Jízdy byly fakt super! V autě panovala uvolněná atmosféra a sranda, což ze mě rychle sundalo stres z řízení. Všechna pravidla mi pan Vrána vysvětlil srozumitelně a s obrovskou trpělivostí. Za volantem jsem se cítil v klidu a výcvik jsem si fakt užil. Doporučuji!'],
        ];

        foreach ($reviews as [$name, $text]) {
            Review::updateOrCreate(
                ['author_name' => $name],
                ['text' => $text, 'is_published' => true],
            );
        }
    }
}
