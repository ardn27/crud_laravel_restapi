
## API Endpoints

## Tabel Mahasiswa

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

## Tabel Buku

### 1. Get All Book

- **GET /api/buku**: Get all Book records

### 2. Get Book by ID

- **GET /api/buku/{id}**: Get a specific Book by ID

### 3. Create Buku

- **POST /api/buku**: Create a new Book

   Request Body:
   ```json
   {
     "judul": "Bumi Manusia",
     "deskripsi": "Buku Petualangan tanah jawa",
     "cover": "your image"
   }
   ```

### 4. Update Book

- **PUT /api/buku/{id}**: Update a Book by ID

   Request Body:
   ```json
   {
     "judul": "25 Nabi dan Rasul",
     "deskripsi": "Buku Perjalanan 25 Nabi dan Rasul",
     "cover": "your image"
   }
   ```

### 5. Delete Book

- **DELETE /api/buku/{id}**: Delete a Book by ID


## Tabel Pinjaman

### 1. Get All Pinjaman

- **GET /api/pinjaman**: Get all Pinjaman records

### 2. Get Pinjaman by ID

- **GET /api/pinjaman/{id}**: Get a specific Pinjaman by ID

### 3. Create Pinjaman

- **POST /api/pinjaman**: Create a new Pinjaman

   Request Body:
   ```json
   {
     "mahasiswa_id": 1,
     "buku_id": 2,
     "tgl_pinjam": 2023-12-19,
     "kondisi": "baik"
   }
   ```

### 4. Update Pinjaman

- **PUT /api/pinjaman/{id}**: Update a Pinjaman by ID

   Request Body:
   ```json
   {
     "mahasiswa_id": 3,
     "buku_id": 1,
     "tgl_pinjam": 2023-12-19,
     "kondisi": "layak"
   }
   ```

### 5. Delete Pinjaman

- **DELETE /api/pinjaman/{id}**: Delete a Pinjaman by ID

