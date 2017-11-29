<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Página para criar</title>
      <link rel="shortcut icon" href="images/logo.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.teal-red.min.css">
      <link rel="stylesheet" href="./css/csspages.css">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <style>
         #view-source {
         position: fixed;
         display: block;
         right: 0;
         bottom: 0;
         margin-right: 40px;
         margin-bottom: 40px;
         z-index: 900;
         }
      </style>
   </head>
   <body>
      <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout">
         <div class="demo-ribbon"></div>
         <main class="demo-main mdl-layout__content">
            <div class="demo-container mdl-grid">
               <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
               <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
                  <?php
                     // Cria uma variável que terá os dados do erro
                     $erro = false;
                     
                     // Verifica se o POST tem algum valor
                     if ( !isset( $_POST ) || empty( $_POST ) ) {
                      $erro = 'Nada foi postado.';
                     }
                     
                     // Cria as variáveis dinamicamente
                     foreach ( $_POST as $chave => $valor ) {
                      // Remove todas as tags HTML
                      // Remove os espaços em branco do valor
                      $$chave = trim( strip_tags( $valor ) );
                     
                      // Verifica se tem algum valor nulo
                      if ( empty ( $valor ) ) {
                        $erro = 'Existem campos em branco.';
                      }
                     }
                     
                     // Verifica se $idade realmente existe e se é um número.
                     // Também verifica se não existe nenhum erro anterior
                     if ( ( ! isset( $idade ) || ! is_numeric( $idade ) ) && !$erro ) {
                      $erro = 'A idade deve ser um valor número.';
                     }
                     
                     // Verifica se $email realmente existe e se é um email.
                     // Também verifica se não existe nenhum erro anterior
                     if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
                      $erro = 'Envie um email válido.';
                     }
                     
                     //Verifica senha
                     if (($pwd=="")||($pwd2=="")||($pwd != $pwd2)) {
                       $erro = 'Senha Inválida';
                       $pwd=md5($pwd);
                       if ($pwd==md5($pwd2)) {
                       $erro = 'Senha Inválida';
                       }
                     }
                     
                     // Se existir algum erro, mostra o erro
                     if ( $erro ) {
                      echo $erro;
                     } else {
                      // Se a variável erro continuar com valor falso
                      // Você pode fazer o que preferir aqui, por exemplo,
                      // enviar para a base de dados, ou enviar um email
                      // Tanto faz. Vou apenas exibir os dados na tela.
                      echo "<h1> Você informou:</h1>";
                      foreach ( $_POST as $chave => $valor ) {
                        echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
                      }
                     }
                     
                     ?>
               </div>
            </div>
            </footer>
      </div>
      </main>
      </div>
   </body>
</html>