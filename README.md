# taller-formularios


### **Persona 1: Estructura de Datos y Persistencia**
Este módulo sienta las bases técnicas del almacenamiento.
*   **Términos a investigar (3):**
    1.  **PDO (PHP Data Objects):** Capa de abstracción para la conexión[cite: 1].
    2.  **Consultas Preparadas:** Técnica para evitar inyecciones[cite: 1].
    3.  **Base de Datos:** Estructura de tablas en MariaDB/MySQL[cite: 1].
*   **Entregable:** Script SQL de la tabla y archivo de conexión funcional.

### **Persona 2: El Formulario y el Transporte (Taller 1)**
Se encarga de la interfaz básica y cómo viajan los datos[cite: 1].
*   **Términos a investigar (5):**
    1.  **Action:** Destino del formulario[cite: 1].
    2.  **Name:** Identificador del campo para PHP[cite: 1].
    3.  **Method="get":** Envío vía URL[cite: 1].
    4.  **Method="post":** Envío oculto en el cuerpo[cite: 1].
    5.  **Submit:** El activador del envío[cite: 1].
*   **Entregable:** HTML del Taller 1 y capturas de la URL comparando GET vs POST.

### **Persona 3: Captura Global de Información**
Maneja la recepción de datos desde el servidor[cite: 1].
*   **Términos a investigar (4):**
    1.  **$_POST:** Array de datos enviados por POST[cite: 1].
    2.  **$_GET:** Array de datos enviados por GET[cite: 1].
    3.  **$_REQUEST:** Array que combina GET, POST y Cookies[cite: 1].
    4.  **$_SERVER:** Información del entorno del servidor[cite: 1].
*   **Entregable:** Script de procesamiento que imprima los valores de estos arrays.

### **Persona 4: Validación y Limpieza (Taller 2)**
Es el primer filtro de seguridad del backend[cite: 1].
*   **Términos a investigar (4):**
    1.  **filter_var():** Validación de tipos (email, int)[cite: 1].
    2.  **isset():** Verificar si una variable existe[cite: 1].
    3.  **empty():** Verificar si un campo está vacío[cite: 1].
    4.  **htmlspecialchars():** Protección contra ataques XSS[cite: 1].
*   **Entregable:** Lógica de validación del formulario de registro con mensajes de error.

### **Persona 5: Seguridad Avanzada e Integración (Taller 3)**
Cierra el sistema con protecciones de alto nivel[cite: 1].
*   **Términos a investigar (3):**
    1.  **password_hash():** Cifrado seguro de contraseñas[cite: 1].
    2.  **csrf_token:** Protección contra falsificación de solicitudes[cite: 1].
    3.  **TLS/SSL (HTTPS):** Seguridad en la capa de transporte[cite: 1].
*   **Entregable:** Implementación del token de seguridad y el hash en el Taller 3.

---

### **Resumen de Responsabilidades**

| Rol                 | Términos | Taller Principal |

| **BD & PDO**        | 3        | Base de todos los talleres |
| **Frontend & HTML** | 5        | Taller 1 (GET vs POST) |
| **Superglobales**   | 4        | Procesamiento de datos |
| **Validación PHP**  | 4        | Taller 2 (Registro) |
| **Cifrado & CSRF**  | 3        | Taller 3 (Seguro completo) |
