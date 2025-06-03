# Hotel Management System

## Front End


## Back End


## Database Tables



## Installation

Follow these instructions to set up and run the project locally on your machine.

### Prerequisites

-   [Git](https://git-scm.com/)
-   [Composer](https://getcomposer.org/)
-   [PHP](https://www.php.net/)

### Installation

1. Clone the repository:

```bash
   git clone https://github.com/Stucom-Pelai/M07_UF3_Eloquent-Hotel.git
```

2. Install Composer dependencies:

```bash
composer install
```

3. Copy the example enviroment file:

```bash
cp .env.example .env
```

4. Generate an application key

```bash
php artisan key:generate
```

5. Create a symbolic link from 'public/storage' to 'storage/app/public'

```bash
php artisan storage:link
```

6. Clear compiled view files

```bash
php artisan view:clear
```

9. Create mp0613_hotel database


10. Run migrations and seed the database

```bash
php artisan migrate:fresh --seed
```

11. Start the Laravel development server 

```bash
php artisan serve
```

12. You are all set



