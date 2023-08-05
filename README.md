# Vet38 - Pet Clinic Management System

![Vet38](vet38.jpg)

Vet38 is a simple Laravel app designed to support managing patients (cats, dogs, or rabbits) in a pet clinic. The system allows users to add new patients, assign them to an owner, and record the treatments they receive. Additionally, it provides a comprehensive dashboard with statistics about the types of patients and a chart displaying the number of treatments administered over the past year.

## Features

- Add new patients with details such as name, species (cat, dog, or rabbit), age, etc.
- Assign patients to their respective owners for easy management.
- Record and manage treatments administered to the patients.
- Interactive dashboard with statistics and insights on patient types and treatments.

## Installation

1. Clone this repository to your local machine.

```bash
git clone https://github.com/your-username/vet.git
```

2. Change into the project directory.

```bash
cd vet
```

3. Install the required dependencies via Composer.

```bash
composer install
```

4. Set up the environment file.

```bash
cp .env.example .env
```

5. Generate the application key.

```bash
php artisan key:generate
```

6. Create a new database for the application and update the `.env` file with your database credentials.

7. Run the database migrations to create the necessary tables.

```bash
php artisan migrate
```

8. Create an account for logging in.

```bash
php artisan make:filament-user
```

9. Serve the application locally.

```bash
php artisan serve
```

The application will now be accessible at `http://localhost:8000`.

## Usage

1. Access the application in your web browser using the URL provided after running the `php artisan serve` command.

2. log in with existing credentials.

3. Add patients by navigating to the "Patients" section and providing the required information.

4. Assign patients to their respective owners via the "Owners" section.

5. Record treatments administered to patients by going to the "Patients" section.

6. Explore the dashboard to view insightful statistics and the chart showing the number of treatments administered over the past year.

7. Perform a global search using the search bar at the top

8. You can also change the theme to either dark or light mode

## Technologies Used

- Laravel
- PHP
- MySQL
- Chart.js (for charting)

## Contributing

Contributions to Vet38 - Pet Clinic Management System are welcome! If you find any bugs, have feature requests, or want to improve the app, feel free to open an issue or submit a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Acknowledgments

We would like to express our gratitude to all contributors and the Laravel community for their invaluable support.

---

Feel free to modify and personalize this README to match your project's specific details. Replace the placeholder URLs, image, and other information with your actual ones. Best of luck with Vet38 development! 🐾