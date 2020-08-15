# quicktestapi

Quick API Test (Laravel 5.8)

Acceso a Proyecto:

1. Realizar clon del proyecto para pruebas locales (git clone https://github.com/DiegoCastro93/quicktestapi.git)
2. Crear base de datos local “quicktestapi”.
3. Migrar tablas con artisan (php artisan migrate)
4. Ingresar a Postman y realizar las peticiones que se nombran a continuación
5. Agregar registros por SEED a la tabla “users” (php artisan db:seed --class=UsersTableSeeder)

Consumo de servicios API REST

1. POST /login
   http://localhost:8000/api/login/
   Type: OAuth 2.0
   Access Token: C5CIc6JZl9jv6NVPHb23AfpX7G0hUee2zdl40FiDOqub1Q1UGuW1PzKmnH6B
   {
   "email": "user3@example.com",
   "password": "SECRET"
   }
   Response:
   {
   "first_name": "John",
   "last_name": "Doe",
   "email": "user3@example.com",
   "age": 42,
   "image": "IMAGE",
   "description": "Description text",
   "updated_at": "2020-08-15 04:58:56",
   "created_at": "2020-08-15 04:58:56",
   "id": 21,
   "api_token": "GSkNqmMkCERtAgx9u76rtdHTaUCY4S1mvXxrhOpKKh7yWGCoLkuZWEPoLqk6"
   }
2. POST /users
   http://localhost:8000/api/users/
   {
   "first_name": "John",
   "last_name": "Doe",
   "email": "user5@example.com",
   "password": "SECRET",
   "age": 42,
   "image": "IMAGE",
   "description": "Description text"
   }
   Response:
   {
   "first_name": "John",
   "last_name": "Doe",
   "email": "user5@example.com",
   "age": 42,
   "image": "IMAGE",
   "description": "Description text",
   "updated_at": "2020-08-15 04:58:56",
   "created_at": "2020-08-15 04:58:56",
   "id": 21,
   "api_token": "GSkNqmMkCERtAgx9u76rtdHTaUCY4S1mvXxrhOpKKh7yWGCoLkuZWEPoLqk6"
   }
3. PUT /users/{id}
   http://localhost:8000/api/users/21
   {
   "id": 21,
   "first_name": "John Edited",
   "last_name": "Doe Edited",
   "email": "user5edited@example.com",
   "password": "SECRETEDITED",
   "age": 24,
   "image": "IMAGEEDITED",
   "description": "Description text edited"
   }
   Response:
   {
   "id": 21,
   "first_name": "John Edited",
   "last_name": "Doe Edited",
   "email": "user5edited@example.com",
   "age": 24,
   "image": "IMAGEEDITED",
   "description": "Description text edited",
   "created_at": "2020-08-15 04:58:56",
   "updated_at": "2020-08-15 05:06:12",
   "api_token": "GSkNqmMkCERtAgx9u76rtdHTaUCY4S1mvXxrhOpKKh7yWGCoLkuZWEPoLqk6"
   }
4. PATCH /users/{id}
   http://localhost:8000/api/users/21
   {
   "first_name": "Steven",
   "last_name": "Smith",
   "age": 26
   }
   Response:
   {
   "id": 21,
   "first_name": "Steven",
   "last_name": "Smith",
   "email": "user5edited@example.com",
   "age": 26,
   "image": "IMAGEEDITED",
   "description": "Description text edited",
   "created_at": "2020-08-15 04:58:56",
   "updated_at": "2020-08-15 05:10:38",
   "api_token": "GSkNqmMkCERtAgx9u76rtdHTaUCY4S1mvXxrhOpKKh7yWGCoLkuZWEPoLqk6"
   }
5. GET /users
   http://localhost:8000/api/users/
   Response:
   [
   {
   "id": 1,
   "first_name": "Admin",
   "last_name": "Quick",
   "email": "admin@quick.com",
   "age": null,
   "image": null,
   "description": null,
   "created_at": "2020-08-14 23:57:44",
   "updated_at": "2020-08-14 23:57:44",
   "api_token": null
   },
   {
   "id": 2,
   "first_name": "Jamar",
   "last_name": "Greenholt",
   "email": "padberg.kenny@yahoo.com",
   "age": 3,
   "image": "https://lorempixel.com/640/480/?92872",
   "description": "Velit necessitatibus iste optio totam pariatur eaque. Minima laudantium nihil earum nemo accusantium fuga. Commodi eligendi adipisci qui ut harum. Doloremque saepe amet quidem eius.",
   "created_at": "2020-08-14 23:57:44",
   "updated_at": "2020-08-14 23:57:44",
   "api_token": "SGhcqfvb4Qsc4cQKK7NrTWhos5p4mbGE4vpHGVJpjf3Qqd7tYg"
   },…
6. GET /users/{id}
   http://localhost:8000/api/users/21
   Response:
   {
   "id": 21,
   "first_name": "Steven",
   "last_name": "Smith",
   "email": "user5edited@example.com",
   "age": 26,
   "image": "IMAGEEDITED",
   "description": "Description text edited",
   "created_at": "2020-08-15 04:58:56",
   "updated_at": "2020-08-15 05:10:38",
   "api_token": "GSkNqmMkCERtAgx9u76rtdHTaUCY4S1mvXxrhOpKKh7yWGCoLkuZWEPoLqk6"
   }
7. DELETE /users/{id}
   http://localhost:8000/api/users/21
   Response:
   204
