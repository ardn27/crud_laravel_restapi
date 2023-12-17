```markdown
# Laravel REST API for Mahasiswa

This is a simple guide on how to create a RESTful API for managing Mahasiswa (students) using Laravel and test it using Postman.

## Prerequisites

Make sure you have the following installed on your machine:

- [PHP](https://www.php.net/manual/en/install.php)
- [Composer](https://getcomposer.org/download/)
- [Laravel](https://laravel.com/docs/10.x/installation)
- [Postman](https://www.postman.com/downloads/)

## Getting Started

1. Clone this repository:

   ```bash
   git clone https://github.com/ardn27/crud-laravel-restapi.git
   cd laravel-mahasiswa-api
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Copy the `.env.example` file and rename it to `.env`:

   ```bash
   cp .env.example .env
   ```

4. Run database migrations:

   ```bash
   php artisan migrate
   ```

5. Start the development server:

   ```bash
   php artisan serve
   ```

Your Laravel API is now running at `http://localhost:8000`.

## API Endpoints

### 1. Get All Mahasiswa

- **GET /api/mahasiswa**: Get all Mahasiswa records

### 2. Get Mahasiswa by ID

- **GET /api/mahasiswa/{id}**: Get a specific Mahasiswa by ID

### 3. Create Mahasiswa

- **POST /api/mahasiswa**: Create a new Mahasiswa

   Request Body:
   ```json
   {
     "nama": "John Doe",
     "nbi": "123456",
     "jurusan": "Computer Science",
     "tgl_lahir": 2001-01-01,
     "alamat": "mars",
     "jenis_kelamin": "non-biner",
     "image": "your image"
   }
   ```

### 4. Update Mahasiswa

- **PUT /api/mahasiswa/{id}**: Update a Mahasiswa by ID

   Request Body:
   ```json
   {
     "nama": "John Doe",
     "nbi": "123456",
     "jurusan": "Computer Science",
     "tgl_lahir": 2001-01-01,
     "alamat": "mars",
     "jenis_kelamin": "male maybe",
     "image": "your image"
   }
   ```

### 5. Delete Mahasiswa

- **DELETE /api/mahasiswa/{id}**: Delete a Mahasiswa by ID

## Testing with Postman

1. Open Postman and import the collection from the `postman` folder in this repository.

2. Update the environment variables in Postman to match your local setup.

3. Test each API endpoint using the provided requests.

## Additional Information

- Laravel Documentation: [https://laravel.com/docs/8.x](https://laravel.com/docs/8.x)
- Postman Documentation: [https://learning.postman.com/docs/getting-started/introduction/](https://learning.postman.com/docs/getting-started/introduction/)

