✨ Fonctionnalités principales
🛍️ Côté utilisateur
Inscription et connexion
Consultation des produits
Ajout au panier
Validation du panier (création de commande)
Historique des commandes
Activation / désactivation de l’accès API
 API sécurisée (JWT)
Authentification via /api/login
Récupération des produits via /api/products
Accès API conditionné à l’activation dans le profil utilisateur
🛠️ Côté technique
Symfony 6+
Doctrine ORM
Fixtures pour les données de test
Serializer Symfony (Groupes)
Sécurité via JWT (LexikJWTAuthenticationBundle)
Assets optimisés

 Installation
1. Cloner le projet
bash
git clone https://github.com/votre-repo/greengoodies.git
cd greengoodies
2. Installer les dépendances PHP
bash
composer install
3. Configurer l’environnement
Créer un fichier .env.local :
bash
cp .env .env.local
Configurer la base de données :
Code
DATABASE_URL="mysql://root:password@127.0.0.1:3306/greengoodies?serverVersion=8.0"
4. Base de données
bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load -n
5. Lancer le serveur Symfony

bash
symfony server:start -d
Le site sera disponible sur :
Code
https://127.0.0.1:8001/
🌐 Tests Web (via cURL)
Page d’accueil
bash
curl -k https://127.0.0.1:8001/
Inscription
bash

curl -k -X POST https://127.0.0.1:8001/register \
 -H "Content-Type: application/x-www-form-urlencoded" \
 -d "registration_form[lastname]=Test&registration_form[firstname]=User&registration_form[email]=test1@gmail.com&registration_form[password]=password&registration_form[confirmPassword]=password&registration_form[acceptCgu]=1"


Connexion (avec cookies)
bash
curl -k -c cookies.txt -b cookies.txt -X POST https://127.0.0.1:8001/login \
 -H "Content-Type: application/x-www-form-urlencoded" \
 -d "_username=test@gmail.com&_password=password"
Ajouter un produit au panier
bash
curl -k -c cookies.txt -b cookies.txt https://127.0.0.1:8001/panier/ajouter/1
Afficher le panier
bash
curl -k -c cookies.txt -b cookies.txt https://127.0.0.1:8001/panier
Valider le panier
bash
curl -k -c cookies.txt -b cookies.txt https://127.0.0.1:8001/panier/valider
Historique des commandes
bash
curl -k -c cookies.txt -b cookies.txt https://127.0.0.1:8001/mon-compte
Activer / désactiver l’accès API
bash
curl -k -c cookies.txt -b cookies.txt -X POST https://127.0.0.1:8001/mon-compte/api/toggle
🔥 Tests API (via cURL)


Login API (identifiants corrects)
bash
curl -k -X POST https://127.0.0.1:8001/api/login \
 -H "Content-Type: application/json" \
 -d '{"username":"test1@gmail.com","password":"password"}'



Login API (mauvais mot de passe)

bash

curl -k -X POST https://127.0.0.1:8001/api/login \
 -H "Content-Type: application/json" \
 -d '{"username":"test1@gmail.com","password":"wrong"}'

Login API avec accès API désactivé
bash
curl -k -X POST https://127.0.0.1:8001/api/login \
 -H "Content-Type: application/json" \
 -d '{"username":"test1@gmail.com","password":"password"}'
 
Résultat attendu : 403 Forbidden
Récupérer les produits avec JWT
bash
TOKEN=$(curl -sk -X POST https://127.0.0.1:8001/api/login \
 -H "Content-Type: application/json" \
 -d '{"username":"test1@gmail.com","password":"password"}' | jq -r .token)

curl -k https://127.0.0.1:8001/api/products \
 -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE3Nzg2ODU1OTgsImV4cCI6MTc3ODY4OTE5OCwicm9sZXMiOlsiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoidGVzdDFAZ21haWwuY29tIn0.07nmpxF3UG9BITZYwYQlA9xhKNk8y83EmTKaYnwmyNDa63k0OJNrxgoPcQECfRvxgMhDCYVSGg0vbrxdYFeH65zIUuCOiWchRwUoxK4eBEGYH0IwPF1NEfqO53FfObzdAKravL9kuu_Rhrq83MKiGgK30ZZfW2pgmxhXOEytZei4ECPPxVzKreKbC4GQZI9ylm4DAHy8K3V00QamoW4N01OFLTEbgwrd2ckTzDaQSHghfOZ2vU7Y0PZsu6B_WOp1L0c2eQZdeBaDrrMD16Rrdu8w-naleT7jQJ03BUoP8b1QNDn6GkjVDfoL6BuZ15bFgi29GlktGgzeaKdSMnqi5Q"


Token invalide
bash
curl -k https://127.0.0.1:8001/api/products \
 -H "Authorization: Bearer INVALID"

🧪 Vérifications techniques
Valider le schéma Doctrine
bash
php bin/console doctrine:schema:validate
Recharger les fixtures
bash
php bin/console doctrine:fixtures:load -n
Vérifier les assets
bash
ls -lh public/assets
Vérifier les images optimisées
bash
ls -lh public/uploads
📄 Licence
Projet réalisé dans le cadre du parcours OpenClassrooms – Développeur d’Applications PHP/Symfony.
Usage pédagogique uniquement.