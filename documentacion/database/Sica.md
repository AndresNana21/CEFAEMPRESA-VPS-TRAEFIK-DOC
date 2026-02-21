# Documentación de Base de Datos - Módulo SICA

Esta documentación detalla la estructura de las tablas creadas mediante migraciones de Laravel para el sistema de gestión del monolito SICA.

## 1. Estructura de Aplicación y Módulos

### Tabla: `modules`

Gestiona los módulos principales que agrupan las funcionalidades del sistema.

* **Campos:**
* `id`: Identificador único (Primary Key).
* `name`: Nombre del módulo.
* `description`: Breve descripción de la finalidad del módulo.
* `timestamps`: Registro de creación y actualización.



### Tabla: `apps`

Contiene las aplicaciones específicas asociadas a cada módulo.

* **Campos:**
* `id`: Identificador único.
* `name`: Nombre de la aplicación (Ej: Inventario, Registro).
* `description`: Descripción funcional.
* `icon`: Clase o ruta del icono visual.
* `url`: Ruta de acceso al panel o recurso.
* `is_active`: Estado booleano de la aplicación.
* `module_id`: Llave foránea que conecta con la tabla `modules`.


* **Relaciones:** `onDelete('cascade')` con módulos.

---

## 2. Gestión Académica (Programas y Fichas)

### Tabla: `programs`

Define los programas de formación disponibles.

* **Campos:**
* `name`: Nombre del programa académico.
* `description`: Detalle del programa.
* `type_program`: Tipo de formación (Enumeración: `technician`, `technologist`).



### Tabla: `fichas`

Representa los grupos de formación específicos.

* **Campos:**
* `number`: Código único de la ficha.
* `start_date`: Fecha de inicio de etapa lectiva.
* `start_productive`: Fecha de inicio de etapa productiva.
* `end_date`: Fecha de finalización.
* `state`: Estado actual (Enumeración: `active`, `inactive`).
* `program_id`: Relación foránea con `programs`.
* `user_id`: Relación con el instructor o gestor a cargo (tabla `users`).



### Tabla: `pashes` (Fases)

Controla los tiempos de las fases del proyecto o formación.

* **Campos:**
* `number`: Identificador de la fase.
* `start_date` / `end_date`: Rango de fechas.
* `state`: Estado (Enumeración: `active`, `inactive`).



---

## 3. Información Personal y Aprendices

### Tabla: `people`

Almacena la información básica de cualquier persona registrada en el sistema.

* **Campos:**
* `first_name` / `last_name`: Nombres y apellidos.
* `document_number`: Número de identificación.
* `type_document`: Tipo (Enumeración: `CC`, `TI`).
* `doccument_img`: Ruta al archivo PDF del documento.
* `phone_number` / `second_phone_number`: Datos de contacto.
* `user_id`: Relación 1:1 o 1:N con la tabla de autenticación `users`.
* `CV`: Ruta al archivo PDF de la hoja de vida.



### Tabla: `apprentices` (Aprendices)

Tabla pivot/relacional que vincula a una persona con un proceso de formación específico.

* **Campos:**
* `people_id`: Llave foránea hacia `people`.
* `ficha_id`: Llave foránea hacia `fichas`.
* `state`: Condición académica (Enumeración: `Aprendiz`, `Pasante`, `Cancelado`).



---

## Resumen de Relaciones Principales

| Tabla Origen | Tabla Destino | Tipo de Relación | Acción en Borrado |
| --- | --- | --- | --- |
| `apps` | `modules` | Muchos a Uno | Cascade |
| `fichas` | `programs` | Muchos a Uno | Cascade |
| `fichas` | `users` | Muchos a Uno | Cascade |
| `people` | `users` | Uno a Uno/Muchos | Cascade |
| `apprentices` | `people` | Muchos a Uno | Cascade |
| `apprentices` | `fichas` | Muchos a Uno | Cascade |

