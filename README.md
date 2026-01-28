
# 🚀 CEFAEMPRESA

**CEFAEMPRESA** es una plataforma integral diseñada para la gestión de información en **SENA Empresa**. Más allá de la administración interna, el proyecto sirve como un ecosistema de aprendizaje donde se documenta el uso de herramientas de programación de vanguardia y la administración avanzada de servidores VPS (Virtual Private Servers).

El software ha sido construido bajo los principios de **escalabilidad, mantenibilidad y modernidad**, utilizando configuraciones específicas para asegurar un ciclo de vida prolongado y eficiente.

---

## 🛠 Tecnologías y Flujo de Trabajo

### Gestión de Versiones y Colaboración

Para garantizar una integración fluida entre desarrolladores, utilizamos un flujo de trabajo estandarizado:

* **GitHub**: Plataforma centralizada para el alojamiento de repositorios, gestión de *code reviews* y control minucioso de versiones.
* **Git**: Motor de control de versiones local para el manejo de cambios y sincronización con la nube.
* **Git Flow**: Implementamos esta metodología para organizar el desarrollo a través de ramas específicas (Master, Develop, Feature, Hotfix), asegurando que el código en producción sea siempre estable.

### Arquitectura de Servidor (VPS)

Implementamos una arquitectura basada en microservicios y contenedores para maximizar el rendimiento del servidor:

* **Docker**: Permite aislar el software en contenedores (sub-máquinas virtuales ligeras), evitando conflictos entre diferentes proyectos y sus dependencias.
* **Docker Compose**: Herramienta encargada de la orquestación, despliegue y configuración de las imágenes definidas en archivos `docker-compose.yml`.
* **Traefik**: Actúa como un **Reverse Proxy** moderno. Gestiona las peticiones entrantes mediante dominios y puertos, redirigiendo el tráfico de forma automática y segura (SSL) hacia los contenedores correspondientes.

> **Nota:** Esta arquitectura permite desplegar múltiples aplicaciones con versiones tecnológicas distintas en el mismo servidor de forma totalmente independiente.

---

## 🏗 Framework y Ecosistema

### Laravel 12

El núcleo del sistema es **Laravel 12**, seleccionado por su capacidad para centralizar la lógica de negocio bajo el patrón **MVC (Modelo-Vista-Controlador)**. Su estructura limpia permite una conexión fluida entre la base de datos, la lógica del servidor y la interfaz de usuario.

### Extensiones de Alto Rendimiento

Para potenciar la productividad y facilitar la creación de módulos independientes, integramos librerías especializadas:

* **Filament Modules**: Esta librería es fundamental para nuestra arquitectura modular. Permite separar las características del software en módulos independientes dentro del panel administrativo de [Filament](https://filamentphp.com/), facilitando el mantenimiento y la escalabilidad del sistema.
* *Repositorio:* [savannabits/filament-modules](https://github.com/savannabits/filament-modules)



---
## 📚 Centro de Documentación

Aquí encontrarás guías detalladas para configurar tu entorno y entender las herramientas clave del proyecto.

| Herramienta | Descripción | Guía de Instalación / Uso |
| --- | --- | --- |
| **WSL2** | Windows Subsystem for Linux: El estándar para desarrollar en Linux desde Windows. | [🔗 Configurar WSL](https://github.com/AndresNana21/CEFAEMPRESA-VPS-TRAEFIK-DOC/documentacion/wsl) |
| **Laragon** | Entorno de desarrollo local rápido y potente para Windows. | [🔗 Configurar Laragon](https://github.com/AndresNana21/CEFAEMPRESA-VPS-TRAEFIK-DOC/doc/laragon) |
| **Filament PHP** | Panel administrativo elegante para formularios y recursos de Laravel. | [🔗 Guía de Filament](https://github.com/AndresNana21/CEFAEMPRESA-VPS-TRAEFIK-DOC/doc/filament) |
| **Laravel** | Framework PHP para artesanos de la web. | [🔗 Documentación Laravel](https://github.com/AndresNana21/CEFAEMPRESA-VPS-TRAEFIK-DOC/doc/laravel) |
| **Módulos** | Estructura modular para separar la lógica del negocio. | [🔗 Guía de Módulos](https://github.com/AndresNana21/CEFAEMPRESA-VPS-TRAEFIK-DOC/doc/modules) |
| **Traefik** | Configuración del Proxy Inverso para el despliegue en VPS. | [🔗 Guía de Traefik](https://github.com/AndresNana21/CEFAEMPRESA-VPS-TRAEFIK-DOC/doc/traefik) |
| **Git** | Estándares de Git Flow y manejo de repositorios. | [🔗 Guía de Git](https://github.com/AndresNana21/CEFAEMPRESA-VPS-TRAEFIK-DOC/doc/git) |

---
