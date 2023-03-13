DEBUT

    DECLARE compteur => 0
    DECLARE resultat => 0

    ECRIRE "Entrez un nombre:"
    LIRE nbrChoisi

    TANT QUE compteur <> nbrChoisi ALORS
        compteur++
        resultat => resultat * compteur
    FIN TANT QUE

    AFFICHE resultat

FIN
