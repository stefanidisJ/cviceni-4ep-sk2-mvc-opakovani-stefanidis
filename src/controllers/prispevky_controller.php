<?php

class Prispevky
{
    private function mam_dostatek_dat_k_vytvoreni()
    {
        // kontrola existence udaju ve formulari
        if(!isset($_POST["nazev"]))
            return false;
        if(!isset($_POST["text"]))
            return false;
        
        return true;
    }

    private function data_k_vytvoreni_jsou_v_poradku($nazev, $text)
    {
        // pozadavky na jmeno a heslo
        if(strlen($nazev) < 1)
            return false;
        if(strlen($text) < 1)
            return false;
        
        return true;
    }

    public function vytvorit()
    {
        global $zakladni_url;
        
        // bud se zpracuje registracni formular, nebo se zobrazi
        if($this->mam_dostatek_dat_k_vytvoreni())
        {
            $nazev = $_POST["nazev"];
            $text = $_POST["text"];

            if($this->data_k_vytvoreni_jsou_v_poradku($nazev, $text))
            {
                // dochazi k registraci uzivatele
                $prispevek = new Prispevek($nazev, $text);

                if($prispevek->vytvor())
                {
                    // uzivatel je uspesne registrovan
                    // presmeruju ho na prihlaseni
                    header("location:".$zakladni_url."index.php/stranky/domu/");
                }
                else
                {
                    // registrace selhala na urovni modelu
                    header("location:".$zakladni_url."index.php/stranky/chyba/");
                }
            }
            else
            {
                // data ve formulari nejsou v poradku
                require_once "views/prispevky/vytvorit.php";
            }
        }
        else
        {
            // data ve formulari nejsou kompletni
            require_once "views/prispevky/vytvorit.php";
        }
    }
}
