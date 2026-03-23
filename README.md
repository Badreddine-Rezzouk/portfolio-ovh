# **Projet "portfolio-ovh"**

Ce projet correspond à mon site web accessible à l'adresse https://www.badreddinerezzouk.com/ 

**Contenu**
=============================================

**Accueil**
------------------------------------------------------------

La page d'accueil est probablement la plus importante d'un portfolio. Elle impose la premiere opinion du visiteur quant à la capacité du développeur.

### Le scroll snap

Si vous essayez de scroller sur cette page, vous remarquerez que celle-ci se "colle" à certains points specifiques. Ce système permet de garder une bonne esthetique en empechant l'utilisateur de se positioner à une hauteur peu désirable.

### L'horloge

Cette horloge est construite à partir de la bibliothèque JS [Luxon](https://moment.github.io/luxon/#/), adaptant le format au langage utilisé avec ce morceau de code Javascript:

```
function getChosenLanguage() {
    const url = new URL(window.location.href);
    const segments = url.pathname.split('/').filter(Boolean);
    if (segments[0] === 'portfolio-ovh') {
        return segments[1] || null;
    }
    return segments[0] || null;
}

const availableLanguage = new Map([
    ['FR-fr', 'fr'],
    ['US-en', 'en'],
    ['CN-zh', 'zh']
]);

const rawChoice = getChosenLanguage();
const userlanguage = availableLanguage.get(rawChoice) || 'en';
```
La variable availableLanguage sert ici à traduire le format utilisé par l'URL en un format lisible pour Luxon.
