
1. `git clone https://github.com/pierresilva/simplest-laravel-apirest-crud.git`
2. `cd simplest-laravel-apirest-crud.git`
3. `composer install`
4. `cp .env.example .env`
5. Editar el archivo `.env` acorde a la base de datos
6. `php artisan migrate`

#### Rutas

Obtener personas: GET `api/person`

Crear persona:    POST `api/person`
                     
Request:

```json
{
  "name": "Some Professor",
  "email": "some@professor.com",
  "phone": "89990000",
  "address": {
    "street": "Calle 33 # 33-44 1",
    "city": "Neiva",
    "state": "Huila",
    "postal_code": 410001,
    "country": "Colombia"
  }, 
  "student": { // Si se requiere que sea estudiante
    "number": "12347",
    "is_elegible_to_enroll": true
  }, 
  "professor": { // Si se requiere que sea profesor
    "salary": 200000
  }
}
```

Obtener persona: GET `api/person/:id`

Actualizar persona: PUT `api/person/:id`

Request: 

```json
{
  "name": "Some Professor",
  "email": "some@professor.com",
  "phone": "89990000",
  "address": {
    "street": "Calle 33 # 33-44 1",
    "city": "Neiva",
    "state": "Huila",
    "postal_code": 410001,
    "country": "Colombia"
  }, 
  "student": { // Si se requiere actualizar a estudiante
    "number": "12347",
    "is_elegible_to_enroll": true
  }, 
  "professor": { // Si se requiere actualizar a profesor
    "salary": 200000
  }
}
```

Actualizar persona: PUT `api/person/:id`

Eliminar persona: DELETE `api/person/:id`
