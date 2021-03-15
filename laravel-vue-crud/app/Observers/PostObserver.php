<?php

namespace App\Observers;

use App\Item;

class PostObserver
{
    /**
     * Handle the item "created" event.
     *
     * @param  \App\Item  $item
     * @return void
     */
    public function created(Item $item)
    {
        $id = $item->id;
        $data = new Item();
        $data->id = $id;
    }

    /**
     * Handle the item "updated" event.
     *
     * @param  \App\Item  $item
     * @return void
     */
    public function updated(Item $item)
    {
        $id = $item->id;
        $data = new Item();
        $data->id = $id;
    }

    /**
     * Handle the item "deleted" event.
     *
     * @param  \App\Item  $item
     * @return void
     */
    public function deleted(Item $item)
    {
    }

    /**
     * Handle the item "restored" event.
     *
     * @param  \App\Item  $item
     * @return void
     */
    public function restored(Item $item)
    {
    }

    /**
     * Handle the item "force deleted" event.
     *
     * @param  \App\Item  $item
     * @return void
     */
    public function forceDeleted(Item $item)
    {
    }
}
