# rumos-dicionario-mvc

Tailwind is installed with:

>npm install -d tailwindcss@latest postcss@latest autoprefixer@latest

created style.css with the tailwind imports

npx tailwindcss init -> generates tailwind.config.js

added, a script in package.json -> "build-css": "tailwindcss build -i style.css -o css/style.css"

in tailwind.config.js added './views/.php' to content so that tailwind styles are applied to html files

to run the script we use: 

>npm run build-css

The images used are from pixabay or wikimedia, licence should not be an issue

The font used is roboto, from google fonts;

The icons used are from font awesome.

The site can be run with npm command -> live-server --port=9090

live server is installed with -> npm install -g live-server