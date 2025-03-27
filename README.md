# PHP Browser History Script

[![PHP 7.4](https://img.shields.io/badge/PHP-7.4-blue.svg)](https://www.php.net/)
[![Docker](https://img.shields.io/badge/Docker-Available-blue.svg)](https://www.docker.com/)

A PHP script that simulates browser history navigation, implementing back/forward functionality and page visits.

## Project Structure

```
browser-history/
├── LICENSE.md
├── README.md
├── .gitignore
└── src/
    └── solve.php
```

## Prerequisites

- PHP 7.4 or higher
- Docker (optional, for containerized execution)

## Installation

Clone the repository:
```bash
git clone git@github.com:luismr/php-browser-history-script.git
cd php-browser-history-script
```

## Running Instructions

### macOS/Linux

```bash
php src/solve.php
```

### Windows

```bash
php src\solve.php
```

### Docker

Using the official PHP CLI image:

```bash
docker run --rm -v $(pwd):/app -w /app php:7.4-cli php src/solve.php
```

## Input Parameters

The script expects input in the following format:

1. First line: Number of operations (N)
2. Second line: Space-separated list of operations (S)

### Operations Types:
- `back`: Navigate to the previous page
- `forward`: Navigate to the next page
- Any other string: Visit a new page

### Example Input:
```
3
hackerearth contests back
```

### Example Output:
```
/home/hackerearth
```

## Features

- Simulates browser history navigation
- Handles back/forward operations
- Maintains history stack
- Returns complete path up to current position
- Starts with "/home" as initial page

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## Author

Luis Machado Reis

## Acknowledgments

- PHP Team for the amazing language
- Docker Team for containerization
- All contributors who help improve this project 