<!-- 

Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L'esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all'utente.

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. 
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all'utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

 -->

 <?php

 include './function.php';

 
   /*  function generaPassword($lunghezza = 12) {
        // Caratteri che verranno utilizzati nella generazione della password
        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';

        // Calcola la lunghezza della stringa di caratteri
        $lunghezzaCaratteri = strlen($caratteri);

        // Variabile che conterrà la password generata
        $password = '';

        // Genera la password casuale utilizzando i caratteri specificati
        for ($i = 0; $i < $lunghezza; $i++) {
            $indiceCasuale = rand(0, $lunghezzaCaratteri - 1);
            $password .= $caratteri[$indiceCasuale];
        }

        return $password;
    }

    // Utilizzo della funzione per generare una password casuale di lunghezza 12
    $passwordCasuale = generaPassword();

    echo "Password casuale: $passwordCasuale"; */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Password Generator</h1>
    <form action="response.php" method="get">
        <input type="number" name="password_length">
        <button>Invia</button>
    </form>
</body>
</html>