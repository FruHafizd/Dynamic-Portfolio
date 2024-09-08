# Dynamic Portfolio

![Status](https://img.shields.io/badge/Status-In%20Progress-yellow.svg)

## 📖 Overview
**Dynamic Portfolio** is a web application designed to create and manage a dynamic portfolio using modern PHP frameworks and technologies. This project leverages **Filament**, **PHP**, and **Laravel** to offer a scalable and customizable solution for showcasing projects and skills.

## 🚀 Features
- **Dynamic Content Management:** Easily add, update, and delete portfolio items through an intuitive admin interface.
- **Responsive Design:** Modern, responsive design that looks great on any device.
- **Customizable Layouts:** Flexible layouts to fit various types of content and presentation styles.
- **User Authentication:** Secure access to the admin panel with Laravel's built-in authentication.
- **Rich Text Editing:** Utilize advanced text editing features to create compelling project descriptions.

## ⚙️ Technologies Used
- **[Laravel](https://laravel.com/):** PHP framework for building web applications with a focus on simplicity and elegance.
- **[Filament](https://filamentphp.com/):** Admin panel and form builder for Laravel that simplifies the process of managing application data.
- **PHP:** Server-side scripting language used for backend development.
- **HTML/CSS:** For building the structure and styling of the portfolio pages.
- **JavaScript:** To enhance user interaction and add dynamic features.

## 🔨 Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/FruHafizd/Dynamic-Portfolio.git
   cd Dynamic-Portfolio
   ```

2. **Install Dependencies:**
   Make sure you have [Composer](https://getcomposer.org/) installed, then run:
   ```bash
   composer install
   ```
   OR
   ```bash
   composer update
   ```
3. **Set Up Environment:**
   Copy the `.env.example` file to `.env` and update the environment variables as needed:
   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations and Seeders:**
   Set up your database in the `.env` file, then run the migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

6. **Install Node Dependencies (Optional):**
   If your project uses frontend assets managed by Laravel Mix, install the node packages:
   ```bash
   npm install
   npm run dev
   ```

7. **Serve the Application:**
   Start the local development server:
   ```bash
   php artisan serve
   ```

8. **Access the Application:**
   Open your browser and visit `http://localhost:8000` to see your portfolio in action.
