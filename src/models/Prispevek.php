<?php

class Prispevek
{
    private $nazev;
    private $text;

    public function __construct($nazev, $text)
    {
        $this->nazev = $nazev;
        $this->text = $text;
    }

    public function vytvor()
    {
        $spojeni = DB::pripojit();
        $dotaz = "INSERT INTO 4ep_sk2_mvc_prispevky (nazev, text) VALUES ('$this->nazev', '$this->text')";

        mysqli_query($spojeni, $dotaz);

        return mysqli_affected_rows($spojeni) == 1;
    }
}