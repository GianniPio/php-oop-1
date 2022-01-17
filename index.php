<!-- /**
     * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
     */ -->

     <?php

     class Film {
        public $titolo;
        public $sottotitolo;
        public $regista;
        
        public function __construct($titolo) {
            $this -> titolo = $titolo;
        }

        public function getFullTitle() {
            if ($this -> sottotitolo != "") {
                return $this -> titolo . ": ". $this -> sottotitolo;
            }else {
                return $this -> titolo . ": " ;
            }
        }

        public function __toString(){
            if($this -> regista != "") {
                return $this -> getFullTitle() . " | " . $this -> regista;
            }else{
            return $this -> getFullTitle() . " | ???" ;
            }
        }
    
     }

     $f1 = new Film("Matrix");
     $f2 = new Film("Fantozzi 2");
     $f3 = new Film("Peter Pan");

     $f1 -> sottotitolo = "";
     $f2 -> sottotitolo = "il ritorno di Fantozzi";
     $f3 -> sottotitolo = "il ritorno all'isola che non c'è";
     
     $f1 -> regista = "";
     $f2 -> regista = "";
     $f3 -> regista = "Robin Budd";

     echo "film1: " . $f1 -> __toString() . "<br>";
     echo "film2: " . $f2 -> __toString() . "<br>";
     echo "film3: " . $f3 -> __toString() . "<br>";


     ?>