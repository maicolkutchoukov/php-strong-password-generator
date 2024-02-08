<?php
session_start();
    function generaPassword($lunghezza = 12) {
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