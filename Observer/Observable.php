<?php

interface Observable
{
    /**
     * Attach a new subscriber object.
     *
     * @param Observer $subscriber
     */
    public function attach(Observer $subscriber);

    /**
     * Remove an attached object.
     *
     * @param Observer $subscriber
     */
    public function detach(Observer $subscriber);

    /**
     * Notify the subscriber.
     */
    public function notify();
}