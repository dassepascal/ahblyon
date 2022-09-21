<?php

namespace App\Observers;

use App\Models\Parraine;
use Illuminate\Support\Str;

class ParraineObserver
{
    /**
     * Handle the Parraine "created" event.
     *
     * @param  \App\Models\Parraine  $parraine
     * @return void
     */
    public function created(Parraine $parraine)
    {
        $parraine->slug = Str::slug($parraine->title,'-');
        $parraine->save();
    }

    /**
     * Handle the Parraine "updated" event.
     *
     * @param  \App\Models\Parraine  $parraine
     * @return void
     */
    public function updated(Parraine $parraine)
    {
        //
    }

    /**
     * Handle the Parraine "deleted" event.
     *
     * @param  \App\Models\Parraine  $parraine
     * @return void
     */
    public function deleted(Parraine $parraine)
    {
        //
    }

    /**
     * Handle the Parraine "restored" event.
     *
     * @param  \App\Models\Parraine  $parraine
     * @return void
     */
    public function restored(Parraine $parraine)
    {
        //
    }

    /**
     * Handle the Parraine "force deleted" event.
     *
     * @param  \App\Models\Parraine  $parraine
     * @return void
     */
    public function forceDeleted(Parraine $parraine)
    {
        //
    }
}
