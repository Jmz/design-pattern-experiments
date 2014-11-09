<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 09/11/14
 * Time: 11:47
 */

class UserObserver implements Observer
{
    /**
     * This method is run when the publisher object is updated.
     *
     * @param Observable $publisher
     * @return mixed
     */
    public function update(Observable $publisher)
    {
        echo get_class($publisher) . ' was updated and ' . get_class($this) . ' was notified.';
    }

} 