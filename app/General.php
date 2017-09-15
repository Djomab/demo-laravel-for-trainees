<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    // ce modèle contient des methodes générales qui peuvent être utilisés partout

    //cette fonction la date de format string en format sql acceptable dans la base de données
    public static function dateFormatSql($date){
        $d = explode(' ', $date);
        $mois = $d[2];
        switch ($mois) {
            case 'January': $mois='01'; break;
            case 'February': $mois='02'; break;
            case 'March': $mois='03'; break;
            case 'April': $mois='04'; break;
            case 'May': $mois='05'; break;
            case 'June': $mois='06'; break;
            case 'July': $mois='07'; break;
            case 'August': $mois='08'; break;
            case 'September': $mois='09'; break;
            case 'October': $mois='10'; break;
            case 'November': $mois='11'; break;
            case 'December': $mois='12'; break;
            default: $mois=""; break;
        }
        return $d[1].'-'.$mois.'-'.$d[3];
    }
}
