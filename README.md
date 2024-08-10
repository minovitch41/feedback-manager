# Feedback Manager

Welcome to the **Feedback Manager** project! This is a simple web application designed to collect and display user feedback. It provides a basic interface for users to leave their feedback and view past submissions.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

The Feedback Manager allows users to submit feedback through a form. This feedback is then stored in a MySQL database and can be viewed by anyone with access to the application. The project includes a basic setup with:

- **Feedback submission form**
- **Feedback display page**
- **Basic styling using Bootstrap**

## Features

- **Submit feedback**: Users can provide their name, email, and feedback message.
- **View feedback**: All submitted feedback is displayed on a dedicated page.
- **Responsive design**: The application uses Bootstrap to ensure it looks good on all devices.

## Installation

To get a copy of this project up and running on your local machine, follow these steps:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/minovitch41/feedback-manager.git
    ```

2. **Navigate into the project directory:**

    ```bash
    cd feedback-manager
    ```

3. **Set up the environment:**
    - Ensure you have [XAMPP](https://www.apachefriends.org/index.html) or [MAMP](https://www.mamp.info/en/) installed.
    - Create a database named `php_dev` in your MySQL server.
    - Import the provided SQL file to create the necessary tables.

4. **Update the configuration:**
    - Edit the `config/database.php` file with your database credentials.

5. **Start the server:**
    - Start Apache and MySQL from your XAMPP/MAMP control panel.

## Usage

1. **Open your browser** and navigate to `http://localhost/feedback-manager`.
2. **Submit feedback** using the provided form on the home page.
3. **View past feedback** by navigating to the feedback page.

## Contributing

We welcome contributions to improve this project! If you have suggestions, bug reports, or would like to add new features, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeatureName`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/YourFeatureName`).
5. Open a Pull Request on GitHub.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
