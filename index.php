<?php
    echo writeSecretSentence("l'ane", "soleil");

    function writeSecretSentence(string $animal, string $object) {
        return $animal . " s'incline face au " . $object;
    }