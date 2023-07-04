# omie-desafio
Este projeto foi criado como parte do processo seletivo da Omie. O desafio é desenvolver um layout semelhante ao modelo feito no Figma.


## Tecnologias Utilizadas
Para desenvolver este projeto, eu utilizei:
-  PHP (versão 8.2.7)
-  Composer (versão 2.5.8)
-  Bootstrap (versão 5)
-  CSS


## Instruções de Instalação
1. Para instalar as dependências necessárias no ambiente local, é necessário utilizar o comando `composer install`
2. Feito isso, o projeto pode ser executado com o comando `php -S localhost:3000`
3. Para visualizar a aplicação em execução, acesse http://localhost:3000


## Sobre o Login
Para atender ao requisito do desafio, eu criei a funcionalidade de login com a conta do Google.
Por se tratar de um projeto de teste, apenas os meus endereços de emails estão validados para o login.
Outros usuários devem pular a etapa de login com os seguintes passos:

1. Abra o arquivo `index.php`
2. Comente as linhas 10 a 12, com o seguinte trecho de código:
  ```php
  include SessionUser::isLogged() ?
    __DIR__ . '/includes/index.php' :
    __DIR__ . '/includes/login.php';
  ```
3. Descomente as linhas 16 e 17, com o seguinte trecho de código:
  ```php
  header('location: includes/index.php');
  exit;
  ```


## Demonstração

https://github.com/lerochas/omie-desafio/assets/48409727/c9676135-ec28-4693-b482-ca77f1a51643


## Observação
O excesso de demandas na última semana, somado à falta de experiência nas tecnologias requeridas, me impediu de cobrir todos os pontos requeridos.
