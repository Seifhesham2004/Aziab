<?php

namespace Database\Seeders;

use App\Models\ScheduleEntry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

/**
 * Wipes existing Sailboat Beneteau Cyclades 50.5 entries and reloads the
 * latest 2027 / early-2028 schedule including availability flags.
 */
class SailboatScheduleRefreshSeeder extends Seeder
{
    public function run(): void
    {
        ScheduleEntry::where('boat', 'Sailboat Beneteau Cyclades 50.5')->delete();

        $trips = [
            ['30 Mar 2027', '4 Apr 2027',  null],
            ['5 Apr 2027',  '10 Apr 2027', null],
            ['11 Apr 2027', '16 Apr 2027', null],
            ['17 Apr 2027', '22 Apr 2027', null],
            ['23 Apr 2027', '29 Apr 2027', 'Fully Booked'],
            ['1 May 2027',  '7 May 2027',  'Fully Booked'],
            ['8 May 2027',  '13 May 2027', null],
            ['14 May 2027', '19 May 2027', null],
            ['20 May 2027', '25 May 2027', null],
            ['26 May 2027', '31 May 2027', null],
            ['3 Jun 2027',  '9 Jun 2027',  'Fully Booked'],
            ['10 Jun 2027', '14 Jun 2027', 'Fully Booked'],
            ['17 Jun 2027', '21 Jun 2027', 'Fully Booked'],
            ['24 Jun 2027', '28 Jun 2027', 'Fully Booked'],
            ['30 Jun 2027', '3 Jul 2027',  null],
            ['6 Jul 2027',  '12 Jul 2027', null],
            ['17 Jul 2027', '22 Jul 2027', null],
            ['15 Aug 2027', '20 Aug 2027', null],
            ['22 Aug 2027', '27 Aug 2027', null],
            ['1 Sep 2027',  '6 Sep 2027',  null],
            ['8 Sep 2027',  '13 Sep 2027', null],
            ['14 Sep 2027', '17 Sep 2027', null],
            ['18 Sep 2027', '21 Sep 2027', null],
            ['23 Sep 2027', '28 Sep 2027', null],
            ['1 Oct 2027',  '4 Oct 2027',  null],
            ['6 Oct 2027',  '9 Oct 2027',  null],
            ['10 Oct 2027', '15 Oct 2027', null],
            ['16 Oct 2027', '21 Oct 2027', null],
            ['22 Oct 2027', '27 Oct 2027', null],
            ['28 Oct 2027', '31 Oct 2027', null],
            ['1 Nov 2027',  '6 Nov 2027',  null],
            ['8 Nov 2027',  '13 Nov 2027', null],
            ['14 Nov 2027', '19 Nov 2027', null],
            ['20 Nov 2027', '23 Nov 2027', null],
            ['25 Nov 2027', '29 Nov 2027', 'Fully Booked'],
            ['2 Dec 2027',  '6 Dec 2027',  'Fully Booked'],
            ['7 Dec 2027',  '12 Dec 2027', '6 spots left'],
            ['13 Dec 2027', '18 Dec 2027', null],
            ['19 Dec 2027', '24 Dec 2027', null],
            ['28 Dec 2027', '2 Jan 2028',  null],
            ['5 Jan 2028',  '10 Jan 2028', null],
            ['11 Jan 2028', '16 Jan 2028', null],
        ];

        foreach ($trips as [$s, $e, $availability]) {
            ScheduleEntry::create([
                'boat'         => 'Sailboat Beneteau Cyclades 50.5',
                'region'       => 'egypt',
                'start_date'   => Carbon::parse($s),
                'end_date'     => Carbon::parse($e),
                'availability' => $availability,
            ]);
        }
    }
}
