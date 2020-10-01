<?php

class Prispevek
{
    private function mam_dostatek_dat_k_vytvoreni()
    {
        // kontrola existence udaju ve formulari
        if(!isset($_POST["nazev"]))
            return false;
        if(!isset($_POST["prispevek"]))
            return false;
        
        return true;
    }

    private function data_k_vytvoreni_jsou_v_poradku($nazev, $prispevek)
    {
        // pozadavky na jmeno a heslo
        if(strlen($nazev) < 1)
            return false;
        if(strlen($prispevek) < 1)
            return false;
        
        return true;
    }

    public function vytvorit()
    {
        // bud se zpracuje registracni formular, nebo se zobrazi
        if($this->mam_dostatek_dat_k_registraci())
        {
            $nazev = trim($_POST["nazev"]);
            $prispevek = trim($_POST["prispevek"]);

            if($this->data_k_vytvoreni_jsou_v_poradku($nazev, $prispevek))
            {
                // dochazi k registraci uzivatele
                $jmeno = $_SESSION["prihlaseny_uzivatel"]
                $prispevek = new Prispevek($jmeno, $nazev, $prispevek);

                if($prispevek->vytvor_prispevek())
                {
                    // uzivatel je uspesne registrovan
                    // presmeruju ho na prihlaseni
                    return spustit("stranky", "domu");
                }
                else
                {
                    // registrace selhala na urovni modelu
                    return spustit("stranky", "chyba");
                }
            }
            else
            {
                // data ve formulari nejsou v poradku
                require_once "views/uzivatele/prispevky.php";
            }
        }
        else
        {
            // data ve formulari nejsou kompletni
            require_once "views/uzivatele/prispevky.php";
        }
    }
}
