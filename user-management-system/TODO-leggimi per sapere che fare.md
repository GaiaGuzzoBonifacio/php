 vuol dire che qualcuno ha premuto aggiungi
     - [ ] creo un'istanza dell'oggetto User
     - [ ] effettuo la validazione e sanificazione dei valori dell'istanza User
     - [ ] se tutto va bene allora salvo l'utente e dò un rimando in interfaccia grafica (di solito si va a una pagine di conferma)
            // [ ] prendo istanza del model e uso il metodo create
     - [ ] se non è tutto ok rimango sul form e segnalo gli errori

     per ogni errore /campo 
     firstName compilato giusto mentre lastName vuoto
     allora devo assicurarmi che l'utente non compili firstName di nuovo ma solo lastName--> devo rimanere nello stesso form e su firstName deve continuare ad esserci scritta la cosa giusta inserita, mentre in lastName deve esserci un mex d'errore "compila scemo" e una condizione true or false che attiva/disattiva isvalid nell'html tipo
     i messaggi devono essere multilingua in base alla lingua scelta / deve esserci un codice ci errore