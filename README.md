# Put a GIT bash terminal

- File
  - Settings
    - Enter 'Terminal' in search
      - Change Shell path to : "C:\Program Files\Git\bin\bash.exe"

---

# Steps to install Doctrine and connect database (Wamp) :

## 	1. Install Doctrine

```bash
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle
```

## 	2. Set database URL in .env file

```
DATABASE_URL=mysql://login:password@127.0.0.1:3306/dbName
```

## 	3. Save and load entity from database

```bash
php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity
```

## 	4. Load repository for each entity

Please add in each entity file `@ORM\Entity(repositoryClass="App\Repository\CategoryRepository")` before execute this command
```bash
php bin/console make:entity --regenerate App
```