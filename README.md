# Comic Website

A comics website built using Laravel, TailwindCSS, and SQLite.

## Technologies Used

-   **Laravel**: PHP framework for web application development.
-   **TailwindCSS**: CSS framework for responsive design and rapid customization.
-   **SQLite**: Lightweight database used for development.

## Setup Instructions

Follow these steps to run this project locally:

1. **Clone the Repository**

    ```bash
    git clone https://github.com/Zaki-Fadlan/comics_webapp.git
    ```

2. **Navigate to the Project Directory**

    ```bash
    cd comics_webapp
    ```

3. **Install PHP Dependencies**

    ```bash
    composer install
    ```

4. **Run Database Migrations**

    ```bash
    php artisan migrate
    ```

5. **Seed Database**

    ```bash
    php artisan db:seed DatabaseSeeder
    ```

6. **Start the Laravel Server**

    ```bash
    php artisan serve
    ```

7. **Open a New Terminal and Install Node Modules**

    ```bash
    npm Install
    ```

8. **Build TailwindCSS**

    ```bash
    npm run dev
    ```
