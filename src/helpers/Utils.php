<?php

namespace AlphaRemote\PhpProject\helpers;

class Utils
{

    public static function isArgValid($arg, $lengthMin = 3)
    {
        if (strlen($arg) < $lengthMin) {
            echo "El argumento debe tener más de " . $lengthMin . " letras.";
            return false;
        }

        return true;
    }

    public static function show($resources){

        $showing = 'Recursos encontrados:' . PHP_EOL;

        // Imprimir cada recurso
        foreach ($resources as $r) {
            $showing .= '* ' . $r->type . ': ' . $r->noun . ' | ' . $r->option . PHP_EOL;
        }

        return $showing;
    }

}