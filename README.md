# laravel-model-controller
Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.

Create un nuovo progetto Laravel 9
tramite phpMyAdmin create un nuovo database laravel_model_controller
Importate nel vostro database la tabella movies in allegato
Inserite le vostre credenziali per il database nel file .env
Create un model Movie -> php artisan make:model Movie
Create un controller che gestirà la rotta / -> php artisan make:controller Guest/PageController
All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
BONUS:
Stilare il layout nei dettagli con Sass
Suggerimenti utili:
Occhio alle credenziali del file .env e alla porta del vostro mysql - che deve essere attivo con MAMP
Verificate che nel php.ini della vostra versione PHP (dentro MAMP) la direttiva pdo_mysql sia attivata