# 1) LANCER LE SERVEUR SYMFONY

symfony server:start -d

# 2) PAGE D’ACCUEIL (liste des produits)

curl -k https://127.0.0.1:8000/

# 3) INSCRIPTION UTILISATEUR

curl -k -X POST https://127.0.0.1:8000/register \
 -H "Content-Type: application/x-www-form-urlencoded" \
 -d "registration_form[email]=newuser@gmail.com&registration_form[plainPassword]=password&registration_form[firstname]=Aly&registration_form[lastname]=Diabira"

# 4) CONNEXION UTILISATEUR

curl -k -X POST https://127.0.0.1:8000/login \
 -H "Content-Type: application/x-www-form-urlencoded" \
 -d "\_username=newuser@gmail.com&\_password=password"

# 5) PANIER : AJOUTER UN PRODUIT

curl -k https://127.0.0.1:8000/panier/ajouter/1

# 6) PANIER : AFFICHER LE PANIER

curl -k https://127.0.0.1:8000/panier

# 7) PANIER : VALIDER LE PANIER (CRÉE UNE COMMANDE)

curl -k https://127.0.0.1:8000/panier/valider

# 8) MON COMPTE : HISTORIQUE DES COMMANDES

curl -k https://127.0.0.1:8000/mon-compte

# 9) MON COMPTE : ACTIVER / DÉSACTIVER L’ACCÈS API

curl -k https://127.0.0.1:8000/mon-compte/api/toggle

# 10) API : LOGIN AVEC IDENTIFIANTS CORRECTS

curl -k -X POST https://127.0.0.1:8000/api/login \
 -H "Content-Type: application/json" \
 -d '{"username":"test@gmail.com","password":"password"}'

# 11) API : LOGIN AVEC MAUVAIS MOT DE PASSE

curl -k -X POST https://127.0.0.1:8000/api/login \
 -H "Content-Type: application/json" \
 -d '{"username":"test@gmail.com","password":"wrong"}'

# 12) API : LOGIN AVEC ACCÈS API DÉSACTIVÉ

# (désactiver d’abord via /mon-compte/api/toggle)

curl -k -X POST https://127.0.0.1:8000/api/login \
 -H "Content-Type: application/json" \
 -d '{"username":"test@gmail.com","password":"password"}'

# 13) API : RÉCUPÉRER LES PRODUITS AVEC JWT

# (REMPLACER TON_TOKEN_ICI PAR LE TOKEN REÇU)

curl -k https://127.0.0.1:8000/api/products \
 -H "Authorization: Bearer TON_TOKEN_ICI"

# 14) API : TOKEN INVALIDE

curl -k https://127.0.0.1:8000/api/products \
 -H "Authorization: Bearer INVALID"

# 15) DOCTRINE : VALIDATION DU SCHÉMA

php bin/console doctrine:schema:validate

# 16) DOCTRINE : RECHARGER LES FIXTURES

php bin/console doctrine:fixtures:load -n

# 17) COMPOSER : VÉRIFIER LES DÉPENDANCES

composer show

# 18) VÉRIFIER LES IMAGES OPTIMISÉES

ls -lh public/uploads

# 19) VÉRIFIER LES ASSETS MINIFIÉS

ls -lh public/build
