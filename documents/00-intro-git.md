# Résumé des commandes git et github
## Création d'un dépôt local
- Dans visual code sélectionner le dossier du **thème** et avec touche droit de la souris 
 **open intégrated terminal**
- git init (on l'exécute une seul fois cette commande. Permet de créer le dossier **.git**
- git status
- git add --all ou git add .
- git commit -m "s2c1 on décrit les modifications"
- git log 
- git log --oneline
- git remote add 4w4 https://github.com/vohoangphile.git
- git branch -m main (change le nom de la branche master pour main)
- git branch lab1 (créer la branche lab1)
- git checkout lab1 (pour changer de branche vers lab1)
- git log --oneline (les branches lab1 et main pointe vers le même commit)
- git checkout main
- git push 4w4 main (pousse la branche active main vers github dans le dépôt 4w4 vers 
la branche main)
- git checkout lab1
- git push 4w4 lab1
- git branch lab2
- git checkout lab2
- git push 4w4 lab2 (pousse la branche active lab2 vers 4w4 dans la branche lab2)
