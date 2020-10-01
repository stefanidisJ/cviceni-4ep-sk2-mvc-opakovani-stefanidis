<?php

class Prispevek
{
    private $jmeno;
    private $nazev;
    private $prispevek;

    public function __construct($jmeno, $nazev, $prispevek)
    {
        $this->jmeno = $jmeno;
        $this->nazev = $nazev;
        $this->prispevek = $prispevek;
    }

    public function vytvor_prispevek()
    {
        $spojeni = DB::pripojit();
        $dotaz = "INSERT INTO 4ep_sk2_mvc_prispevky (jmeno, nazev, prispevek) VALUES ('$this->jmeno', '$this->nazev', '$this->prispevek')";

        mysqli_query($spojeni, $dotaz);

        return mysqli_affected_rows($spojeni) == 1;
    }

    /*static public function existuje($jmeno, $nazev, $prispevek)
    {
        $spojeni = DB::pripojit();

        $dotaz = "SELECT * FROM 4ep_sk2_mvc_prispevky WHERE jmeno='$jmeno'";
        $vysledek = mysqli_query($spojeni, $dotaz);
    }
    */
}
