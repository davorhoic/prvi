<?php
/** Koristeći uvjetovani tip kontrolne strukture switch ispišite 
 * koji je trenutno dan u tjednu.
 * Za ispravno izvršenu vježbu koristite PHP funkciju date(). 
 * Nazivi dana moraju biti na hrvatskom jeziku.
 */
 
/* OVO RADI, ALI NEMA SWITCHA :)

    $datefmt = datefmt_create(
    'hr_HR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'Europe/Zagreb',
    IntlDateFormatter::GREGORIAN,
    'EEEE'
  );

  echo datefmt_format($datefmt, time());
 */

switch (date('l')) {
    case 'Monday':
        echo "Ponedjeljak";
        break;
    case 'Tuesday':
        echo "Utorak";
        break;
    case 'Wednesday':
        echo "Srijeda";
        break;
    case 'Thursday':
        echo "Četvrtak";
        break;
    case 'Friday':
        echo "Petak";
        break;
    case 'Saturday':
        echo "Subota";
        break;
    default:
        echo "Nedjelja";
        break;
} date('l');

?>