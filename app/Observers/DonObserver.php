<?php

namespace App\Observers;

use App\Models\Dons;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;

class DonObserver
{
    /**
     * Handle the Article "created" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function created(Dons $dons)
    {

         $dons->slug = Str::slug($dons->title, '-');
         $dons-> save();

    }

    /**
     * Handle the Article "updated" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function updated(Dons $dons)
    {
        $dons->slug = Str::slug($dons->title, '-');
        $dons-> saveQuietly();
    }

    /**
     * Handle the Article "deleted" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function deleted(Dons $dons)
    {
        //
    }

    /**
     * Handle the Article "restored" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function restored(Dons $dons)
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function forceDeleted(Dons $dons)
    {
        //
    }
}
