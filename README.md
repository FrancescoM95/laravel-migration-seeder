# Esercizio di oggi: **Laravel Migration Seeder Factory**

nome repo: `laravel-migration-seeder`

1. Iniziamo un nuovo progetto laravel (ricordate di controllare che non vi installi la versione 11).

1. Creiamo una tabella trainstramite una migration.
    Ogni treno dovrà avere:

    - Azienda
    - Stazione di partenza
    - Stazione di arrivo
    - Orario di partenza
    - Orario di arrivo
    - Codice Treno
    - Numero Carrozze
    - In orario
    - Cancellato (si / no)

    È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto.

1. Una volta eseguita la migration provate ad inserire un dato sul db tramite PhpMyAdmin.
1. Se tutto funziona, potete passare a generare i file utilizzando una factory:
php artisan make:factory NomeFactory
1. Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna

## BONUS

Provate a crearvi un array contenente dei dati da poter utilizzare all'interno di un Seeder !
