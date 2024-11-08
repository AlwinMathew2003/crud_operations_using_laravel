# Laravel CRUD Operations Project

This guide will walk you through the steps required to set up and run this Laravel CRUD Operations project on your local machine.

## Prerequisites

- **XAMPP**: Required to run Apache and MySQL.
- **Composer**: Required to manage PHP dependencies for Laravel.

### Step 1: Install XAMPP

1. Download XAMPP from https://www.apachefriends.org/index.html.
2. Install XAMPP and launch the XAMPP Control Panel.
3. Start the **Apache** and **MySQL** modules.

### Step 2: Install Composer

1. Download Composer from https://getcomposer.org/download/.
2. Follow the installation instructions.
3. Verify installation by opening a terminal or command prompt and running:
    
    ```bash

    composer --version
    
    ```
    

### Step 3: Clone the Project

1. Open a terminal or command prompt.
2. Navigate to the folder where you want to install the project.
3. Clone the repository with:
    
    ```bash
   
    git clone https://github.com/AlwinMathew2003/crud_operations_using_laravel.git
    
    ```
    
4. Go into the project directory:
    
    ```bash
    bash
    
    cd crud_operations_using_laravel
    
    ```
    

### Step 4: Install Dependencies

Run this command to install all the required packages:

```bash
bash

composer install

```

### Step 5: Set Up Environment Variables

1. Copy the `.env.example` file to create a new `.env` file:
    
    ```bash
    bash
    
    cp .env.example .env
    
    ```
    
2. Generate an application key:
    
    ```bash
    bash
    
    php artisan key:generate
    
    ```
    

### Step 6: Configure the Database

1. Open **phpMyAdmin** at http://localhost/phpmyadmin.
2. Create a new database, e.g., `laravel_crud`.
3. Open the `.env` file and configure the database settings:
    
    ```
    env
    
    DB_DATABASE=laravel_crud
    DB_USERNAME=root
    DB_PASSWORD=
    
    ```
    

### Step 7: Run Migrations and Seed Database (If Needed)

To create tables and add default data (if provided), run:

```bash
bash

php artisan migrate
php artisan db:seed

```

### Step 8: Start the Laravel Server

Run the following command to start the development server:

```bash
bash

php artisan serve

```

Visit http://127.0.0.1:8000 in your browser to view the application.
