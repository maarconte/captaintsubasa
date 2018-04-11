# Prérequis
## Installer Node JS et NPM
NodeJs et NPM est nécessaire pour installer le thème. Si c'est déjà le cas, passez à l'étape suivante. Sinon téléchargez [NodeJs](https://nodejs.org/en/download/). Une fois installé, vous pouvez vérifier la version de NodeJs et NPM en tapant les commandes suivantes.
```sh
node -v
npm -v
````
## Installer Sass
```sh
npm install -g sass
```
## Installer Gulp
```sh
npm install --global gulp
```
## Cloner le thème
Se placer dans le dossier wp-content/themes/
```sh
git clone https://github.com/ThatMuch/StanLee-WPTheme-Generator.git captaintsubasa
```
## Installer les modules
```sh
npm install
```
# Utilisez le thème
## Lancer le projet
```sh
gulp
```

## Compresser le thème pour l'exporter
```sh
gulp build
```

## Optimiser les images
```sh
gulp images
```

## Générer les fichiers de traduction (WP POT) 
```sh
gulp translate
```