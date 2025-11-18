<?php

class Event{

    private string $eventName;
    private string $date;

  public function __construct(string $eventName, string $date) {
        $this->eventName = $eventName;
        $this->date = $date;
    }

    public function getDate(): string {
        return $this->date;
    }


    public function getEventName()
    {
        return $this->eventName;
    }
}


?>