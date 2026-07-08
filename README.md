# 📋 PROYECTO SEGUNDO PARCIAL - DAW PHP 2026CI
## Sistema Web de Gestión de Pedidos - Restaurante SABORÈ

---

### 1. Descripción General
Aplicación web dinámica desarrollada para administrar la información y operaciones de un restaurante. Permite gestionar clientes, pedidos, productos, categorías, proveedores, compras, empleados y ventas, utilizando operaciones CRUD completas, con almacenamiento en base de datos MySQL y una estructura organizada bajo el patrón de diseño **MVC (Modelo - Vista - Controlador)**.

---

### 2. Objetivo General
Desarrollar una aplicación web funcional que permita gestionar información mediante operaciones de Crear, Leer, Actualizar y Eliminar**, usando PHP como lenguaje del lado del servidor, MySQL para la persistencia de datos, y aplicando buenas prácticas de programación, validación de entradas y correcta organización del código.

---

### 3. Requisitos del Sistema
Funcionalidad: CRUD completo para todas las entidades relacionadas.
Backend: PHP + MySQL, conexión segura y estructurada.
Arquitectura: Separación de capas según el patrón MVC.
Frontend: Interfaz en HTML, CSS y JavaScript.
Validaciones: En cliente (JavaScript) y en servidor (PHP).
Despliegue: Repositorio en GitHub y aplicación en Render.

---

### 4. Estructura del Proyecto

SISTEMA_COMIDA/
├── app/
│ ├── controllers/ # Lógica de cada módulo
│ │ ├── ClienteController.php
│ │ ├── PedidoController.php
│ │ ├── CategoriaController.php
│ │ ├── ProductoController.php
│ │ ├── ProveedorController.php
│ │ ├── CompraController.php
│ │ ├── EmpleadoController.php
│ │ └── VentaController.php
│ │
│ ├── models/ # Conexión y consultas a la base de datos
│ │ ├── Cliente.php
│ │ ├── Pedido.php
│ │ ├── Categoria.php
│ │ ├── Producto.php
│ │ ├── Proveedor.php
│ │ ├── Compra.php
│ │ ├── Empleado.php
│ │ └── Venta.php
│ │
│ └── views/ # Interfaces de usuario
│ ├── clientes/
│ ├── pedidos/
│ ├── categorias/
│ ├── productos/
│ ├── proveedores/
│ ├── compras/
│ ├── empleados/
│ └── ventas/
│
├── config/
│ └── conexion.php # Archivo de conexión a la base de datos
│
├── database/
│ └── db_sabore_restaurante.sql # Archivo con la estructura y datos de la BD
│
├── public/
│ ├── index.php # Página principal / Panel de control
│ ├── css/
│ │ ├── inicio.css
│ │ └── styles.css
│ ├── js/
│ │ └── scripts.js
│ └── img/
│ └── logo.png
│
└── README.md # Este archivo


---

### 5. Tecnologías Utilizadas
- **Lenguaje Backend**: PHP 8.2
- **Gestor de Base de Datos**: MySQL / MariaDB
- **Frontend**: HTML5, CSS3, JavaScript
- **Arquitectura**: Modelo - Vista - Controlador (MVC)
- **Entorno de desarrollo**: XAMPP / phpMyAdmin
- **Control de versiones**: Git + GitHub
- **Despliegue**: Render

---

### 6. Instalación y Configuración

#### 📋 Requisitos previos
- Servidor web Apache
- PHP 8.0 o superior
- MySQL o MariaDB
- phpMyAdmin

#### ⚙️ Pasos para ejecutar
1. Colocar el proyecto:
   Mueve la carpeta `SISTEMA_COMIDA` dentro de la carpeta `htdocs` (si usas XAMPP) o `www` (si usas WAMP).

2. Crear la base de datos:
   - Entra a `http://localhost/phpmyadmin`
   - Crea una nueva base de datos con el nombre: `db_sabore_restaurante`
   - Selecciona la base de datos, ve a la pestaña **Importar**
   - Selecciona el archivo: `database/db_sabore_restaurante.sql`
   - Haz clic en **Ejecutar**

3. Verificar la conexión:
   En el archivo `config/conexion.php` confirma estos datos:
   ```php
   <?php
   $servidor = "localhost";
   $usuario = "root";
   $clave = "";
   $base_datos = "db_sabore_restaurante";

   $conexion = mysqli_connect($servidor, $usuario, $clave, $base_datos);

   if (!$conexion) {
       die("Error de conexión: " . mysqli_connect_error());
   }
   ?>

7. Instrucciones de Uso
Desde el panel principal puedes acceder a cada módulo:

Clientes
Registrar: Ingresar datos del cliente.
Consultar: Ver lista completa.
Editar: Modificar información.
Eliminar: Borrar registros.

Pedidos
Crear pedidos asignando cliente y productos.
Actualizar estado o detalles.
Eliminar pedidos cancelados.

Categorías
Agrupar productos por tipo para mejor organización.

Productos
Administrar el menú: nombre, precio, descripción y categoría.

Proveedores
Registrar datos de los proveedores de insumos.

Compras
Controlar las compras realizadas a proveedores.

Empleados
Registrar al personal del restaurante.

Ventas
Registrar cada venta asociada al empleado que la atendió.

8. Relaciones entre Entidades
Cliente (1) → Pedido (N)
Categoría (1) → Producto (N)
Proveedor (1) → Compra (N)
Empleado (1) → Venta (N)

9. Equipo de Desarrollo
Antonella: Módulos de Cliente y Pedido
James: Módulos de Categoría y Producto
Jonathan: Módulos de Proveedor y Compra
Micael: Módulos de Empleado y Venta

10. Enlaces del Proyecto
Repositorio GitHub: https://github.com/[tu_usuario]/SISTEMA_COMIDA
Aplicación en Render: https://sistema-sabore.onrender.com