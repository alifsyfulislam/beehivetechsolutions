## Project Setup:

### 1. Clone the repo to htdocs or www folder

```
git clone 
```

### 2. go to the directory 
```
cd beehivetechsolutions
```

### 3. Install Composer
```
composer install
```

### 4. Create .env File
```
copy .env.example .env
```

### 5. Generate Key
```
php artisan key:generate
```

### 6. Enable Permission (for Linux User)

```
sudo chmod -R 777 storage
```

## 7. Database Section

```
Create db beehivetechsolutions
```
```
php artisan migrate
```
```
php artisan db:seed --class=PermissionTableSeeder
php artisan db:seed --class=RoleTableSeeder
php artisan db:seed --class=UserTableSeeder
```
##OR
```
php artisan db:seed --class=AllSeeder
```

## 8. Authentication

```
php artisan passport:install
```

# Great ! Done! 

## 9. From Browser
```html
http://localhost/beehivetechsolutions/public
```

### 10. From Postman ### post request
```html
http://localhost/beehivetechsolutions/public/api/login

body: 
    username: admin
    password: 123456
```


