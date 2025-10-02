<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Il mio primo PHP</title>
    <style>
      form{
        display: flex;
        flex-flow: column;
        gap: .8em;
        width: 300px;
        padding: 1em;
        border: 1px solid black;
        border-radius: 8px;
        margin: 2em auto 0;
      }
    </style>
  </head>
  <body>
 <h1>Salùtati!!</h1>

 <p>Compila il form qui sotto per avere un saluto personalizzato dal nostro sito web!</p>
 
 <hr>

 <!-- FORM -->
 <form action="./saluto.php" method="GET">
  <label for="">Come ti chiami?</label> 
  <!-- per sepcificare il nome del parametro da inviare dobbiamo usare "name" -->
  <input type="text" name="nominativo" placeholder="Il tuo nome"> 
  <button type="submit">Salutami</button>
 </form>

  </body>
</html>
