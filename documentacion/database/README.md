# 📂 Documentación de Base de Datos

Esta documentación detalla la estructura, el orden de ejecución y la lógica de las migraciones del sistema. Su objetivo es facilitar el entendimiento de las entidades, sus dependencias y los modelos que las gobiernan.

---

## 🏗️ Estructura Global y Orden de Ejecución

El orden de las migraciones es crítico para evitar errores de llaves foráneas. Las migraciones se dividen en:

1. **Migraciones de Raíz (Core):** Tablas esenciales de Laravel y autenticación.
2. **Migraciones por Módulos:** Tablas específicas de la lógica de negocio (próximamente).

---

## 🛠️ Migraciones de Raíz (Core)

Estas migraciones se encuentran en `database/migrations/` y no pertenecen a un módulo específico. Son la base fundamental del sistema.

### 1. Entidad: Autenticación y Usuarios

**Archivo:** `0001_01_01_000000_create_users_table.php`

Esta migración contiene las tablas necesarias para el sistema de sesiones y seguridad.

#### 📊 Tablas generadas:

| Tabla | Modelo | Descripción |
| --- | --- | --- |
| `users` | `User` | Almacena la información principal de los usuarios. |
| `password_reset_tokens` | N/A | Tokens temporales para la recuperación de contraseñas. |
| `sessions` | N/A | Manejo de sesiones de usuario (persistidas en DB). |

#### 📝 Detalle de Campos Relevantes:

> **Nota:** La tabla `sessions` incluye un índice en `user_id` para optimizar las consultas de sesiones activas por usuario.

* **users**
* `email`: Único, utilizado como identificador de acceso.
* `email_verified_at`: Timestamp para control de seguridad.


* **sessions**
* `user_id`: Relación opcional (nullable) con la tabla `users`.
* `ip_address`: Almacena la dirección IP (soporta IPv6 con longitud 45).



---

## 📦 Módulos del Sistema (Pendientes)

A medida que el proyecto crezca, las nuevas migraciones se documentarán bajo este apartado, separadas por su respectivo módulo.

| Módulo | Estado | Descripción |
| --- | --- | --- |
| **Auth** | ✅ Activo | Manejo de usuarios y seguridad (Raíz). |
| **Inventario** | ⏳ Pendiente | Gestión de productos y stock. |
| **Ventas** | ⏳ Pendiente | Registro de transacciones y facturación. |

---
