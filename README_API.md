Category API
============

This project exposes a simple CRUD API for `Category`.

Run the app locally:

```bash
php artisan serve
```

API endpoints (base `http://localhost:8000/api`):

- `GET /categories` — list categories
- `GET /categories/{id}` — show category
- `POST /categories` — create category
  - JSON body: `{ "name": "...", "dec": "...", "is_active": true }
- `PUT /categories/{id}` — update category
- `DELETE /categories/{id}` — delete category

Validation:
- `name` is required, max 255 chars
- `dec` is optional
- `is_active` is boolean (optional)

Postman collection: `postman_category_api.json`

Notes:
- Ensure `.env` database settings are correct and `categories` table exists.
- If migrations are missing, create a migration to add `dec` (text) and `is_active` (boolean) to the `categories` table.
