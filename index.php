 <!DOCTYPE html>
 <html>

 <head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>Codificador de Texto</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
     <script src='main.js'></script>
 </head>

 <body>
     <div class="container">
         <h1>Cifrador de Textos</h1>
         <div class="content">
             <h2>Cifrar texto</h2>
             <form method="POST" action="cifrar.php">
                 <div class="formDiv">
                     <label for="text">Digite um texto para ser cifrado</label>
                     <textarea name="text"></textarea>
                     <select name="select">
                        <option selected value="1">Cifrar</option>
                        <option value="2">Decifrar</option>
                    </select>
                     <button type="submit">CIFRAR</button>
                 </div>
             </form>
         </div>
     </div>
 </body>

 </html>