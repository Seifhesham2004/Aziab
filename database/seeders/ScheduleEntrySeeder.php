<?php

namespace Database\Seeders;

use App\Models\ScheduleEntry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ScheduleEntrySeeder extends Seeder
{
    public function run(): void
    {
        // SAILBOAT — Beneteau Cyclades 50.5  (2027 / 2028)
        $sailboat = [
            ['1 Apr 2027',  '6 Apr 2027'],
            ['8 Apr 2027',  '13 Apr 2027'],
            ['15 Apr 2027', '20 Apr 2027'],
            ['21 Apr 2027', '24 Apr 2027'],
            ['26 Apr 2027', '29 Apr 2027'],
            ['30 Apr 2027', '3 May 2027'],
            ['5 May 2027',  '10 May 2027'],
            ['14 May 2027', '17 May 2027'],
            ['18 May 2027', '23 May 2027'],
            ['24 May 2027', '29 May 2027'],
            ['1 Jun 2027',  '4 Jun 2027'],
            ['5 Jun 2027',  '11 Jun 2027'],
            ['13 Jun 2027', '18 Jun 2027'],
            ['20 Jun 2027', '25 Jun 2027'],
            ['30 Jun 2027', '3 Jul 2027'],
            ['6 Jul 2027',  '12 Jul 2027'],
            ['15 Aug 2027', '20 Aug 2027'],
            ['22 Aug 2027', '27 Aug 2027'],
            ['1 Sep 2027',  '6 Sep 2027'],
            ['8 Sep 2027',  '13 Sep 2027'],
            ['14 Sep 2027', '17 Sep 2027'],
            ['18 Sep 2027', '21 Sep 2027'],
            ['23 Sep 2027', '28 Sep 2027'],
            ['1 Oct 2027',  '4 Oct 2027'],
            ['6 Oct 2027',  '9 Oct 2027'],
            ['10 Oct 2027', '15 Oct 2027'],
            ['16 Oct 2027', '21 Oct 2027'],
            ['22 Oct 2027', '27 Oct 2027'],
            ['28 Oct 2027', '31 Oct 2027'],
            ['1 Nov 2027',  '6 Nov 2027'],
            ['8 Nov 2027',  '13 Nov 2027'],
            ['15 Nov 2027', '20 Nov 2027'],
            ['22 Nov 2027', '27 Nov 2027'],
            ['28 Nov 2027', '3 Dec 2027'],
            ['5 Dec 2027',  '10 Dec 2027'],
            ['12 Dec 2027', '17 Dec 2027'],
            ['18 Dec 2027', '23 Dec 2027'],
            ['28 Dec 2027', '2 Jan 2028'],
            ['5 Jan 2028',  '10 Jan 2028'],
            ['11 Jan 2028', '16 Jan 2028'],
        ];
        foreach ($sailboat as [$s,$e]) {
            ScheduleEntry::create([
                'boat'       => 'Sailboat Beneteau Cyclades 50.5',
                'region'     => 'egypt',
                'start_date' => Carbon::parse($s),
                'end_date'   => Carbon::parse($e),
            ]);
        }

        // CATAMARAN Bali 40 — 2026 / 2027
        $bali = [
            ['15 Aug 2026', '20 Aug 2026'],
            ['22 Aug 2026', '27 Aug 2026'],
            ['1 Sep 2026',  '6 Sep 2026'],
            ['8 Sep 2026',  '13 Sep 2026'],
            ['14 Sep 2026', '17 Sep 2026'],
            ['18 Sep 2026', '21 Sep 2026'],
            ['23 Sep 2026', '28 Sep 2026'],
            ['1 Oct 2026',  '4 Oct 2026'],
            ['6 Oct 2026',  '9 Oct 2026'],
            ['10 Oct 2026', '15 Oct 2026'],
            ['16 Oct 2026', '21 Oct 2026'],
            ['22 Oct 2026', '27 Oct 2026'],
            ['28 Oct 2026', '31 Oct 2026'],
            ['1 Nov 2026',  '6 Nov 2026'],
            ['8 Nov 2026',  '13 Nov 2026'],
            ['15 Nov 2026', '20 Nov 2026'],
            ['22 Nov 2026', '27 Nov 2026'],
            ['28 Nov 2026', '3 Dec 2026'],
            ['5 Dec 2026',  '10 Dec 2026'],
            ['12 Dec 2026', '17 Dec 2026'],
            ['18 Dec 2026', '23 Dec 2026'],
            ['28 Dec 2026', '2 Jan 2027'],
            ['5 Jan 2027',  '10 Jan 2027'],
            ['11 Jan 2027', '16 Jan 2027'],
        ];
        foreach ($bali as [$s,$e]) {
            ScheduleEntry::create([
                'boat'       => 'Catamaran Bali 40',
                'region'     => 'egypt',
                'start_date' => Carbon::parse($s),
                'end_date'   => Carbon::parse($e),
            ]);
        }

        // GREECE
        $greece = [
            ['15 May 2027', '22 May 2027', 'Cyclades Route'],
            ['24 Jul 2027', '31 Jul 2027', 'Corfu / Ionian Route'],
            ['31 Jul 2027', '7 Aug 2027',  'Corfu / Ionian Route'],
            ['18 Sep 2027', '25 Sep 2027', 'Cyclades Route'],
        ];
        foreach ($greece as [$s,$e,$r]) {
            ScheduleEntry::create([
                'boat'       => 'Greece — chosen yacht',
                'region'     => 'greece',
                'route'      => $r,
                'start_date' => Carbon::parse($s),
                'end_date'   => Carbon::parse($e),
            ]);
        }
    }
}
