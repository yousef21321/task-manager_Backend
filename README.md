# 🧩 Laravel Task Management API

A RESTful API built with **Laravel** for managing tasks, supporting CRUD operations, filtering, and pagination.

---

## 🚀 Features

* 📋 Get all tasks (with pagination)
* ➕ Create new task
* ✏️ Update task (status, title, description)
* ❌ Delete task
* 🔍 Filter tasks (by status / title)
* 📅 Due date support
* ⚡ Clean API structure

---

## 🧱 Tech Stack

* PHP ^8.x
* Laravel ^10.x
* MySQL
* Eloquent ORM
* REST API

---

## ⚙️ Installation


### 2. Install dependencies

```bash
composer install
```

### 3. Setup environment

```bash
cp .env.example .env
php artisan key:generate
```



---

### 4. Run migrations

```bash
php artisan migrate
```

(Optional) Seed data:

```bash
php artisan db:seed
```

---

### 6. Run server

```bash
php artisan serve
```

Server will run at:

```
http://127.0.0.1:8000
```

---

## 🔗 API Endpoints

### 📋 Get All Tasks

```http
GET /api/tasks
```

### ➕ Create Task

```http
POST /api/tasks
```

### ✏️ Update Task

```http
PUT /api/tasks/{id}
```

### ❌ Delete Task

```http
DELETE /api/tasks/{id}
```

---

## 🧾 Example Request


---

## 🧠 Task Status Values

* `pending`
* `in_progress`
* `done`

---

## 📦 Project Structure

```bash
app/
├── Http/
│   ├── Controllers/
│   │   └── TaskController.php
│
├── Models/
│   └── Task.php

routes/
└── api.php
```

---


## 👨‍💻 Author

Youssef Abdou
