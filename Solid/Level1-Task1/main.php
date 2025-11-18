    <?php
    require_once 'Athlete.php';
    require_once 'Result.php';
    require_once 'Event.php';
    require_once 'OlympicGames.php';


    $olympicGames = new OlympicGames();

    $athlete1 = new Athlete("Lucas", "Spain");
    $athlete2 = new Athlete("Maria", "Italy");
    $athlete3 = new Athlete("Marc", "USA");

    $event1 = new Event("running", "2024-08-01");
    $event2 = new Event("swimming", "2024-08-02");

    $result1 = new Result($athlete1,$event1,"Gold");
    $result2 = new Result($athlete2,$event1,"Plata");
    $result3 = new Result($athlete3,$event1,"Bronze");


    $olympicGames -> addAthlete($athlete1);
    $olympicGames -> addAthlete($athlete2);
    $olympicGames -> addAthlete($athlete3);

    $olympicGames->addEvent($event1);
    $olympicGames->addEvent($event2);

    $olympicGames -> addResult($result1);
    $olympicGames -> addResult($result2);
    $olympicGames->addResult($result3);

    echo $olympicGames -> showGame();
    ?>