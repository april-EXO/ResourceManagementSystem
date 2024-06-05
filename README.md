
# Resource Management System

## Objective of the Project
The aim of this project is to develop a resource management system that matches the demand and supply of resources effectively.

## Features
- **Resource Request Platform:** Allows people in need to request resource support.
- **Donation Platform:** Enables the public to donate resources to those in need.

## Technologies Used
- PHP Laravel
- MySQL
- JavaScript
- HTML/CSS

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/april-EXO/ResourceManagementSystem.git
   cd ResourceManagementSystem
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Copy .env.example to .env:**
   ```bash
   cp .env.example .env
   ```

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Configure your .env file:**
   - Set your database connection details.
   - Add any other necessary configurations.

6. **Run migrations:**
   ```bash
   php artisan migrate
   ```

7. **Import the database:**
   - The database file is available in the `src` directory.
   - Import it into your MySQL database using a tool like phpMyAdmin or the MySQL command line.

8. **Compile assets:**
   ```bash
   npm run dev
   ```

9. **Start the development server:**
   ```bash
   php artisan serve
   ```

## Usage

1. Access the application via `http://localhost:8000`.
2. Navigate through the resource request and donation platforms.

## Demo

A simple demo video is available [here](https://drive.google.com/file/d/1yNO6kqnItAYFV9yp3RvHEzgt5VwN2TUv/view?usp=sharing).

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Open a pull request.

## Contact

For any questions or inquiries, please contact April at hsy.k10@gmail.com .

