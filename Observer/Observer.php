<?php

interface Observer
{
    /**
     * This method is run when the publisher object is updated.
     *
     * @param Observable $publisher
     * @return mixed
     */
    public function update(Observable $publisher);
}