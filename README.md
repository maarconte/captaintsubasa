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

# Optionel
## Installer Local by Flyweel
Pour installer un site wordpress local en quelques clic, vous pouvez utiliser [Local](https://local.getflywheel.com).

# Installer le thème
Se placer dans le dossier wp-content/themes/
```sh
git clone https://github.com/ThatMuch/StanLee-WPTheme-Generator.git captaintsubasa
```
Dans le fichier gulp.js changer à la ligne 33 :
'demarkage.local' par '[URL_du_projet_local]' (Cela peut être localhost:8000 ou local.dev en fonction de vos configurations)

Si vous utilisez Local by Flywheel se référer au Site Domain
![Local by Flywheel](https://getflywheel.com/wp-content/uploads/2016/12/Dash-Collapsed@2x.png)

## Installer les modules
```sh
npm install
```
# Utiliser le thème
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