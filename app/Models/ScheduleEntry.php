<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleEntry extends Model
{
    protected $fillable = ['boat','region','route','start_date','end_date','notes','availability'];

    protected $casts = [
        'start_date' => 'date',
        'end_date'   => 'date',
    ];

    public function dateRangeLabel(): string
    {
        $start = $this->start_date;
        $end   = $this->end_date;

        if ($start->format('Y') === $end->format('Y') && $start->format('m') === $end->format('m')) {
            return $start->format('j') . '–' . $end->format('j M Y');
        }
        if ($start->format('Y') === $end->format('Y')) {
            return $start->format('j M') . ' – ' . $end->format('j M Y');
        }
        return $start->format('j M Y') . ' – ' . $end->format('j M Y');
    }
}
