## How to start
To start, clone the repository and navigate to the project directory:

```bash
git clone https://github.com/your-repo/wizkid-manager2000.git
cd wizkid-manager2000
```

Install the dependencies:

```bash
composer install
npm install
```

Set up the environment file:

```bash
cp .env.example .env
php artisan key:generate
```

Run the migrations:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

You can now access the application at `http://localhost:8000`.


## test users

User 1

    Name: John Doe
    Email: john.doe@example.com
    Password: password123

User 2

    Name: Jane Smith
    Email: jane.smith@example.com
    Password: secure456

User 3

    Name: Alice Johnson
    Email: alice.johnson@example.com
    Password: test12345
