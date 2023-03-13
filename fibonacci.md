DEBUT

    DEBUT FONCTION fibonacci(n)
        SI n == 0 ALORS
            RETOURNE 0
        FIN SI
        SI n == 1 ALORS
            RETOURN 1
        FIN SI
        n = fibonacci(n-1) + fibonacci(n-2)
        RETOURN n
    FIN FONCTION

    AFFICHER fibonacci(8)

FIN