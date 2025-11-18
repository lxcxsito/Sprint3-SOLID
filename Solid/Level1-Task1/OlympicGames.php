<?php
class OlympicGames {

    private $athletes = [];
    private $events = [];
    private $results = [];
    

    public function addAthlete(Athlete $athlete) {
        $this->athletes[] = $athlete;
    }

    public function addEvent(Event $event) {
        $this->events[] = $event;
    }

    public function addResult  (Result $result) {  
        $this->results[] = $result;
    }

    public function getAthletes()
    {
        return $this->athletes;
    }

    public function getEvents()
    {
        return $this->events;
    }
    public function getResults()
    {
        return $this->results;
    }

    public function showGame(){
        echo "Olympic Games Results:\n";
    foreach ($this->events as $event) {
        echo "Event: " . $event->getEventName(). " on " . $event->getDate() . "\n";
        foreach ($this->results as $result) {
            if ($result->getEvent()->getEventName() === $event->getEventName()) {
                $athlete = $result->getAthlete();
                echo $athlete->getName() . " from " .  $athlete->getCountry() . " won " . $result->getMedal() . "\n";
            }
        }
    }
    }
}

?>
