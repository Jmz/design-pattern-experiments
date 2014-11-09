<?php

class User implements Observable
{
    /**
     * The array of objects subscribed.
     *
     * @var array
     */
    protected $subscribers = [];

    /**
     * Attach a new subscriber object.
     *
     * @param Observer $subscriber
     */
    public function attach(Observer $subscriber)
    {
        $this->subscribers[] = $subscriber;
    }

    /**
     * Remove an attached object.
     *
     * @param Observer $subscriber
     */
    public function detach(Observer $subscriber)
    {
        $key = array_search($subscriber, $this->subscribers);
        if ($key !== false) {
            unset($this->subscribers[$key]);
        }
    }

    /**
     * Notify the subscriber.
     */
    public function notify()
    {
        foreach($this->subscribers as $subscriber) {
            $subscriber->update($this);
        }
    }

    /**
     * This method shows how the subscriber classes are notified.
     */
    public function update()
    {
        echo 'Here we would update something in the user class.';
        $this->notify();
    }
} 