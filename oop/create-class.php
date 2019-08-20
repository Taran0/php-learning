<?php

class Szemely
{
    public $vezNev = "";
    public $kerNev = "";
    public $kor = null;
    private $password = "12345"; //csak osztály methoddal férsz hozzá, nem öröklődik
    protected $dns = "tcgat"; //öröklődik
    public static $szemszin = "kék"; //osztályszintű változó

    //const: osztályszinttű, alapértelmezettként publikus, nem megváltoztatható, de öröklődik
    //hivatkozás rá: self::OMazonosito;
    const OMazonosito = 1325465;

    public function __construct($vNev, $kNev)
    {
        $this->vezNev = $vNev;
        $this->kerNev = $kNev;
    }

    public function Udv()
    {
        echo "Szia " . $this->kerNev . " vagyok" . "<br>";

        //static változóra hivatkozoás
        echo "A szemem színe: " . self::$szemszin . "<br>";
    }

    private function Password()
    {
        echo $password;
    }

    public function PasswordCheck()
    {
        $this . Password();
    }

    //osztályszinten tudom hívni (nem kell példányosítani)
    //Szemely::Udv2();
    public static function Udv2(){
        echo "Szemszin: " . self::$szemszin . "<br>";
    }

    //véget ér az obj élettartama(lefut a kód), akkor unsetteljen pl változókat
    //pl időmérőt nullázni
    public function __destruct()
    {
        echo "Meghaltam!<br>";
    }
}

$ember1 = new Szemely("Musk", "Elon");
$ember1->kor = 48;

//ezt így lehet, de nem jó, mert static változót az osztály szinttű változó
//itt meg objektumszintű változóként kezeltük (helyes: self kulcszó+osztálymethodon keresztül)
//$ember1->szemszin = "fökete";

//osztályszinttű(static) változó megváltoztatása
Szemely::$szemszin = "Fekete";
$ember1->Udv();


