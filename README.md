# Definição do projeto | Dicionário

## Funcionalidades | Minimum viable product

### Descrição

Este projeto consiste num dicionário que implementa a pesquisa de uma base de dados de
palavras e os seus significados na língua inglesa - OPTED

O dicionário implementa as seguintes funcionalidades:

- Pesquisa de palavras - utilizando o comando SQL LIKE
- Página da palavra
- Palavra do dia - selecionada aleatoriamente na tabela, todos os dias durante o 
1o carregamento da página. A tabela da palavra do dia tem a data e id de palavra, assim como o
id da definição da mesma.
- Secção de novas palavras - requer que palavras tenham data de criação. É mostrada a palavra mais recente, adicionada na base de dados através do phpMyAdmin.
- Link para listas de palavras - listas criadas por users
    - Existe um view com lista das listas e um com listas individuais
- Grid/índice - Links para listas de palavras organizadas por primeira letra - a, b, c...

### Página da palavra
- Nome
- Definição - podem existir múltiplos resultados
- Part of speech - advérbio, verbo, nome ou outra entidade gramatical.
- Link para adição da palavra a uma lista, se existe login.

### Gestão de users e área administrativa

- Form de registo
- Form de login
- É enviado um email para confirmar o registo.
- User possui os seguintes dados:
    + Nome
    + Email
    + Password
    + Tipo de user - admin, ou normal
- Página de perfil
    + Form de mudança de dados e de password
- Área administrativa:
    + Gestão de users:
        + É mostrada uma tabela com os dados dos users
        + É aqui possível fazer eliminação de users, clicando no botão "delete"
        + Alteração dos dados de users - é possível editar o nome de user, o seu email
        Alterar as permissões de admin, e ativar ou desativar os users.
- Página de perfil - é mostrada uma página com o nome e o email do user. 
Clicando no ícone "lápis" é possível editar os dados do user.
- Registo - é mostrado um form de registo onde o user deve preencher os seus dados
conforme as validações implementadas.
O fim do registo desencadeia o envio de um email através do pacote "php mailer"
Este email permite ativar o perfil, inicialmente inativo.
- Login - um simples form de login, que valida o user email e a respetiva passe, encriptada,
na base de dados.

### Base de dados de palavras

- **OPTED** - Online Plain Text English Dictionary
- Descarregada a partir do site [\[2\]](#kaggle-opted)
- Licença - [CC0: Public Domain](https://creativecommons.org/publicdomain/zero/1.0/, creativecommons.org), permitindo a utilização para fins de qualquer género, incluindo fins comerciais, sem necessidade de permissão.
- Ficheiro .csv
- Exemplo de algumas linhas:

| Word | Count | POS | Definition |
| --- | --- | --- | --- |
| Abacus | 6 | "n." | "A table or tray strewn with sand  anciently used for drawing calculating etc." |
| Abacus | 6 | "n." | "A calculating table or frame; an instrument for performing arithmetical calculations by balls sliding on wires  or counters in grooves the lowest line representing units the second line tens etc. It is still employed in China." |
| Abassis | 7 | "n." | "A silver coin of Persia  worth about twenty cents."

**Notas** : 

- A mesma palavra pode estar presente na tabela múltiplas vezes, com múltiplos significados,
Como tal foi necessário criar um script de importação e normalização das tabelas,
presente na pasta "helpers". Este script separa as palavras, definições, em tabelas distintas, e 
carrega os dados para a base de dados MySQL.
- *Count* é o número de letras
- *POS* é 'Part Of Speech' - nome, verbo...

## Links

1. [Cambridge dictionary](https://dictionary.cambridge.org/ "dictionary.cambridge.org") - Inspiração do site implementado, sendo que este projeto seguiu uma estrutura semelhante.
2. <a name="kaggle-opted">[The Online Plain Text English Dictionary (OPTED)](https://www.kaggle.com/datasets/dfydata/the-online-plain-text-english-dictionary-opted?resource=download, "kaggle.com") </a>

## Email

Para implementar o email foi necessário instalar o seguinte pacote utilizando o package manager:

>composer require phpmailer/phpmailer

As funcionalidades de envio de email foram implementadas seguindo o seguinte exemplo:

>https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps

Para enviar o email é necessário criar uma password de aplicação no website da Google: 

>https://myaccount.google.com/apppasswords 

## Tailwind

O front-end do projeto foi implementado com ajuda da framework tailwind.

Esta framework requer instalação, com o seguinte comando:

>npm install -d tailwindcss@latest postcss@latest autoprefixer@latest

É necessário criar o ficheiro style.css com os imports do tailwind.

Devemos correr o seguinte comando para gerar o ficheiro tailwind.config.js

>npx tailwindcss init 

Foi adicionado um script no ficheiro "package.json";

> "build-css": "tailwindcss build -i style.css -o css/style.css"

No ficheiro tailwind.config.js foi adicionada a linha './views/*.php' para que os estilos de tailwind se apliquem aos ficheiros de html.

Para compilar os estilos, corremos então o comando:

>npm run build-css

## Outras Notas

As imagens usadas são retiradas do site "pixabay", com licença de uso livre.

O font utilizado é roboto, do site "Google Fonts";

Os ícones utilizados são disponibilizados no site "Font Awesome".


