# Laravel Check
Laravel Check is designed to check that your environment is ready to deploy Laravel. Currently, it will check that your PHP configuration is correct for running the latest version of Laravel. Other features are planned in the future and others are welcome to contribute. See below for planned features.

## Running
To run Laravel Check, simply clone this repository and then run `php check.php`. The output will tell you anything you're missing and give you a summary of whether your environment is ready to go or not.

## Planned Features
* .env parsing to check project-specific requirements (Redis/MySQL connectivity, etc.)
* NGINX/Apache configuration checks
* File permission checks

## Contributing
When contributing to this project, feel free to add any features either from above or extras you have thought of yourself. Once you have written your code, create a pull request into the `main` branch for review.