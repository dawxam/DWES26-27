<?php 
class Player {
    private $name;
    private $birthday;
    private $country;
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;
    private $yellowCards;
    private $redCards;

    public function __construct($name, $birthday, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCards, $redCards) {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowCards = $yellowCards;
        $this->redCards = $redCards;
    }

    public function getName() {
        return $this->name;
    }

    public function getBirthday() {
        return $this->birthday;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getDorsal() {
        return $this->dorsal;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getGoals() {
        return $this->goals;
    }

    public function getMatches() {
        return $this->matches;
    }

    public function getMinutes() {
        return $this->minutes;
    }

    public function getYellowCards() {
        return $this->yellowCards;
    }

    public function getRedCards() {
        return $this->redCards;
    }
}
?>