# rumos-dicionario-mvc

## Email

composer require phpmailer/phpmailer

https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps 

https://myaccount.google.com/apppasswords 

## Tailwind

Tailwind is installed with:

>npm install -d tailwindcss@latest postcss@latest autoprefixer@latest

created style.css with the tailwind imports

npx tailwindcss init -> generates tailwind.config.js

added, a script in package.json -> "build-css": "tailwindcss build -i style.css -o css/style.css"

in tailwind.config.js added './views/*.php' to content so that tailwind styles are applied to html files

to run the script we use: 

>npm run build-css

The images used are from pixabay or wikimedia, licence should not be an issue

The font used is roboto, from google fonts;

The icons used are from font awesome.

# Definição do projeto | Dicionário

## Funcionalidades | Minimum viable product

### Homepage

- Pesquisa de palavras - utilizando o comando SQL LIKE ou MySQL Full Text Search
- Palavra do dia - selecionada aleatoriamente ou escolhida por admin. A tabela da palavra do dia tem a data e id de palavra. 
- Secção de novas palavras - requer que palavras tenham data de criação. É mostrada a palavra mais recente.
- Link para listas de palavras - listas criadas por users; podem ser públicas ou privadas
	- View com lista das listas
	- View com listas individuais
- Grid/índice - Links para listas de palavras organizadas por primeira letra - a, b, c...

### Página da palavra
- Nome
- Definição - podem existir múltiplos resultados
- Part of speech
- Sinónimos
- Frases exemplificativas
- Link para adição da palavra a uma lista, se existe login

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
		+ Lista de users
		+ Eliminação de users
		+ Alteração dos dados de users
	+ Gestão de palavras
		+ Adição de novas palavras
		+ Alteração de dados das palavras, adição de sinónimos e frases exemplificativas
	+ Eliminação de palavras
	+ Marcação de palavras como palavra do dia

### Base de dados de palavras

- **OPTED** - Online Plain Text English Dictionary
- Descarregada a partir do site [\[2\]](#kaggle-opted)
- Licença - [CC0: Public Domain](https://creativecommons.org/publicdomain/zero/1.0/, creativecommons.org), permitindo a utilização para fins de qualquer género, incluindo fins comerciais, sem necessidade de permissão.
- Ficheiro .csv
- Exemplo de algumas linhas:

| Word | Count | POS | Definition |
| --- | --- | --- | --- |
| Abacus | 6 | "n." | "A table or tray strewn with sand  anciently used for drawing calculating etc." |
| Abacus | 6 | "n." | "A calculating table or frame; an instrument for performing arithmetical calculations by balls sliding on wires  or counters in grooves the lowest line representing units the second line tens etc. It is still employed in China." |
| Abassis | 7 | "n." | "A silver coin of Persia  worth about twenty cents."

**Notas** : 

- A mesma palavra pode estar presente na tabela múltiplas vezes, com múltiplos significados
- *Count* é o número de letras
- *POS* é 'Part Of Speech' - nome, verbo...

## Links

1. [Cambridge dictionary](https://dictionary.cambridge.org/ "dictionary.cambridge.org")
2. <a name="kaggle-opted">[The Online Plain Text English Dictionary (OPTED)](https://www.kaggle.com/datasets/dfydata/the-online-plain-text-english-dictionary-opted?resource=download, "kaggle.com") </a>
3. [MySQL Full-Text Search](https://www.mysqltutorial.org/mysql-full-text-search/, "mysqltutorial.org")




