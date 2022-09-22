<?php

namespace App\Observers;

use App\Models\Informe;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;

class InformeObservser
{
    /**
     * Handle the Informe "created" event.
     *
     * @param  \App\Models\Informe  $informe
     * @return void
     */
    public function created(Informe $informe)
    {


        $informe->slug = Str::slug($informe->title, '-');
        $informe->save();
    }

    /**
     * Handle the Informe "updated" event.
     *
     * @param  \App\Models\Informe  $informe
     * @return void
     */
    public function updated(Informe $informe)
    {
//
    }

    /**
     * Handle the Informe "deleted" event.
     *
     * @param  \App\Models\Informe  $informe
     * @return void
     */
    public function deleted(Informe $informe)
    {
        //
    }

    /**
     * Handle the Informe "restored" event.
     *
     * @param  \App\Models\Informe  $informe
     * @return void
     */
    public function restored(Informe $informe)
    {
        //
    }

    /**
     * Handle the Informe "force deleted" event.
     *
     * @param  \App\Models\Informe  $informe
     * @return void
     */
    public function forceDeleted(Informe $informe)
    {
        //
    }
}
