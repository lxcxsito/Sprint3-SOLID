<?php
require_once 'Athlete.php';
require_once 'Event.php';


class Result{

    private Athlete $athlete;
    private Event $event;
    private string $medal;

    public function __construct(Athlete $athlete, Event $event, string $medal) {
        $this->athlete = $athlete;
        $this->event = $event;
        $this->medal = $medal;
    }


    public function getEvent()
    {
        return $this->event;
    }

    public function getAthlete()
    {
        return $this->athlete;
    }

    public function getMedal()
    {
        return $this->medal;
    }
}

?>