
# Laravel Repository Maker

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

The **Laravel Repository Maker** package provides a simple and efficient way to implement the Repository Design Pattern in Laravel projects. With a custom Artisan command (`make:repository`), developers can automatically generate repository classes with pre-defined methods like `index`, `store`, `update`, and `delete`.

This tool is designed to enhance modularity, promote clean architecture, and save development time.

## Installation

You can install the package via Composer.

1. Add the repository to your `composer.json`:
   ```json
   composer require shakib53626/laravel-repository-maker:dev-master
   ```

2. Run `composer install` to install the package:
   ```bash
   composer install
   ```

## Usage

Once the package is installed, you can use the custom Artisan command to generate repository classes.

To generate a new repository, run:

```bash
php artisan make:repository User
```

This command will create a `UserRepository` class in the `app/Repositories` directory with default methods.

### Generated Repository Structure

The generated repository class will include the following methods:

- `index()`: Logic for listing resources
- `store()`: Logic for storing a new resource
- `show()`: Logic for displaying a single resource
- `update()`: Logic for updating a resource
- `delete()`: Logic for soft-deleting a resource
- `trashList()`: Logic for listing trashed resources
- `restore()`: Logic for restoring a trashed resource
- `permanentDelete()`: Logic for permanently deleting a resource

## Configuration

This package doesn't require any configuration out of the box. However, you can customize the generated repository methods according to your needs.

## License

This package is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Contributing

If you'd like to contribute to the package, feel free to fork the repository and submit a pull request.

1. Fork the repository.
2. Create a feature branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Create a new Pull Request.

## Author

- **Shakibul Islam**  
  Email: [diu.shakib@gmail.com](mailto:diu.shakib@gmail.com)
