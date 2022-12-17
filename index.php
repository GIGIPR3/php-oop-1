<?php

class Movie {

    public $titolo;

    public $regista;

    public $eta;

    public $genere;


    function __construct($titolo, $regista, $eta, $genere){
        $this -> titolo = $title;
        $this -> regista = $regista;
        $this -> eta = $eta;
        $this -> genere = $genere;

    }

    public function eta(){

        if($this -> eta == '18+'){
            "L'utente ha selezionato un film per Maggiorenni";
        } else{
            "L'utente ha selezionato un film per Minorenni";
        }
    }

    public function showOnScreen(){
        echo "<strong>Title:</strong> " . $this ->titolo;
        echo "<br>";
        echo "<strong>Genre:</strong> " . $this ->regista;
        echo "<br>";
        echo "<strong>Language:</strong> " . $this ->eta;
        echo "<br>";
        echo "<strong>Vote:</strong> " . $this ->genere;
        echo "<br>";
        echo $this->eta();
        echo "<br>";
        echo "<br>";
        echo "<br>";
  }

}




?>