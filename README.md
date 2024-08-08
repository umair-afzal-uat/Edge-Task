# Authentication Portal with Statamic & Laravel

## Overview

Welcome to the Authentication Portal project! This repository contains a simple yet robust authentication system built using Statamic and Laravel. The portal allows users to register, log in, and log out, while providing both public and member-only pages. It utilizes a MySQL database to manage user accounts securely.

## Features

-   **User Authentication**: Users can create accounts, log in, and log out independently of Statamic CMS users.
-   **Access Control**: The application features public pages accessible to everyone and member-only pages that require authentication.
-   **MySQL Database**: User accounts are stored in a MySQL database with a dedicated `accounts` table.

### Database Schema

The `accounts` table includes the following fields:

| Field    | Type              | Description                        |
| -------- | ----------------- | ---------------------------------- |
| id       | INT (Primary Key) | Unique identifier for each account |
| email    | VARCHAR           | User's email address               |
| password | VARCHAR           | Hashed password for security       |

## Getting Started

### Prerequisites

-   PHP >= 8.2
-   Composer
-   MySQL
-   Laravel >= 11.x
-   Statamic

### Installation

1. **Clone the Repository**:

    ```bash
    git clone https://github.com/umair-afzal-uat/Edge-Task.git
    cd Edge-Task
    ```

2. **Install Dependencies**:

    ```bash
    composer install
    ```

3. **Set Up Environment**:
   Copy the `.env.example` file to `.env` and configure your database settings.

4. **Run Migrations**:
   Create the database and run the migrations to set up the `accounts` table.

    ```bash
    php artisan migrate
    ```

5. **Start the Development Server**:
    ```bash
    php artisan serve
    ```

Visit `http://localhost:8000` to see your new authentication portal in action!

## Accessing the Statamic Control Panel

To access the Statamic Control Panel, navigate to the following URL in your web browser:

```bash
http://localhost:8000/cp
```

## Creating a User in Statamic

To create a new user in Statamic, you can use the command line interface. Make sure you have access to your terminal and are in the root directory of your Statamic project.

### Step 1: Open Terminal

Open your terminal application and navigate to your Statamic project directory:

```bash
cd /path/to/your/Edge-Task/project
```

### Step 2: Create a New User

Run the following command to create a new user:

```bash
php please pro:enable
```

```bash
php please make:user
```

You will be prompted to enter the following details:

-   **Email**: The email address for the new user.
-   **Password**: A secure password for the new user.
-   **Name**: The full name of the user.
-   **Role**: Assign a role to the user (e.g., admin, editor) (Hint: choosed super user for full statamic access).

### Step 3: Confirm User Creation

After you have entered the required information, the new user will be created. You can now log in to the Control Panel using the new user's credentials.

## Live Demo

To access the custom authentication, navigate to the following URL in your web browser:

```bash
http://18.119.124.117
```

To access the Statamic Control Panel, navigate to the following URL in your web browser:

```bash
http://18.119.124.117/cp
```

```Use following credentials for Statamic login
Email: 'umair.afzal@edge.com'
Password: 'Pa5306DyqlkTTy3'
```

## Git Commit Guidelines

To maintain a clean and organized codebase, please follow these Git commit guidelines:

-   **Semantic Prefixes**: Use prefixes like `feat`, `fix`, `docs`, `wip`, and `chore` to categorize your commits.
-   **Imperative, Lowercase, Descriptive**: Write commit messages in the imperative mood and keep them lowercase.
-   **Atomic Commits**: Each commit should represent a single logical change.

### Example Commit Messages

-   `feat: implement user registration functionality`
-   `fix: validate email format during registration`
-   `docs: update README with installation instructions`

## Design Process

### Planning

The project began with a clear understanding of the requirements: a simple authentication system with user management capabilities. We outlined the necessary features and designed the database schema to support these functionalities.

### Implementation

1. **User Registration**: Developed a registration form that captures user email and password, ensuring password hashing for security. Laravel's request validation was utilized to ensure that all input data meets the required criteria. The registration logic is encapsulated within a service layer to maintain separation of concerns and improve testability.

2. **Login and Logout**: Implemented login functionality with session management and a logout feature to terminate user sessions. Laravel resource responses were employed to provide structured feedback to the client during these processes. The login and logout logic is managed by a dedicated service class to streamline controller actions and handle business logic efficiently.

3. **Access Control**: Created middleware to restrict access to member-only pages, ensuring that only authenticated users can view specific content.

4. **Repository Pattern**: Utilized the repository pattern to separate business logic from data access logic. This pattern provides a clean structure for accessing and managing data and facilitates better testability and maintainability.

5. **Service Pattern**: Leveraged the service pattern to manage controller logic, delegating business logic to service classes. This approach improves code organization and makes the application easier to maintain and extend.

### Frontend Design

The frontend design focuses on usability and responsiveness. We utilized Laravel Blade templates to create a clean and intuitive user interface that enhances user experience.

## Conclusion

This project showcases the integration of Statamic and Laravel to create a functional authentication portal. We hope you find this repository useful and informative. Feel free to contribute or reach out with any questions!

---

Thank you for checking out the Authentication Portal project! Happy coding!
