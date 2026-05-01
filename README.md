# taller-formularios

Para que el equipo esté totalmente coordinado y nadie se pierda, aquí tienes una guía detallada de "paso a paso" para cada integrante. Cada persona debe investigar sus términos, aplicarlos en el código y **tomar la captura de pantalla** de esa parte específica para el informe[cite: 1].

---

### **Integrante 1: Arquitecto de Base de Datos y Conexión**
Tu trabajo es preparar el "almacén" de datos y el puente que PHP usará para hablar con él[cite: 1].
*   **Qué hacer:**
    1.  **En XAMPP (phpMyAdmin):** Crea la base de datos y la tabla de usuarios con los campos necesarios (`id`, `nombre`, `email`, `password`)[cite: 1].
    2.  **Configurar PDO:** Escribe el archivo de conexión usando la clase `new PDO()`. Esto es lo que permite que PHP se conecte a MariaDB de forma moderna y profesional[cite: 1].
    3.  **Consultas Preparadas:** Debes crear la estructura de la consulta `INSERT` usando marcadores (como `:nombre`, `:email`) en lugar de variables directas para evitar inyecciones[cite: 1].
*   **Capturas obligatorias:** El código de la conexión PDO y la estructura de la tabla en la base de datos[cite: 1].

### **Integrante 2: Especialista en Interfaz y Envío (Taller 1)**
Te encargas de la parte visual y de cómo el usuario envía la información[cite: 1].
*   **Qué hacer:**
    1.  **HTML de los formularios:** Crea dos formularios iguales. En uno pones `method="get"` y en el otro `method="post"`[cite: 1].
    2.  **Atributos clave:** Asegúrate de que cada `<input>` tenga su atributo `name` bien definido, ya que sin eso PHP no podrá "leer" qué escribió el usuario[cite: 1].
    3.  **Diferenciación:** Debes demostrar cómo al usar GET, el email y el nombre aparecen arriba en la barra de direcciones (URL), mientras que en POST no se ven[cite: 1].
*   **Capturas obligatorias:** El código HTML del formulario y una foto de la barra de direcciones del navegador mostrando los datos del GET[cite: 1].

Términos a investigar (5):

    Action: Destino del formulario.  
    
    Name: Identificador del campo para PHP.  
    
    Method="get": Envío vía URL.  
    
    Method="post": Envío oculto en el cuerpo.  
    
    Submit: El activador del envío.




### **Integrante 3: Gestor de Recepción y Servidor**
Tu misión es recibir los datos que envió el Integrante 2 y ver qué más nos dice el servidor[cite: 1].
*   **Qué hacer:**
    1.  **Captura con Superglobales:** Usa `var_dump($_POST)` y `var_dump($_GET)` para mostrar en pantalla todo lo que llegó desde el formulario[cite: 1].
    2.  **Uso de $_REQUEST:** Demuestra que este array puede capturar datos de ambos métodos simultáneamente[cite: 1].
    3.  **Análisis del Servidor:** Usa `$_SERVER['PHP_SELF']` o `$_SERVER['REQUEST_METHOD']` para mostrar datos técnicos de la ejecución actual en la página[cite: 1].
*   **Capturas obligatorias:** El resultado en pantalla de los `var_dump` y la información extraída de `$_SERVER`[cite: 1].


Términos a investigar (4):

    $_POST: Array de datos enviados por POST.  
    
    $_GET: Array de datos enviados por GET.  
    
    $_REQUEST: Array que combina GET, POST y Cookies.  
    
    $_SERVER: Información del entorno del servidor.


### **Integrante 4: Guardián de Validación (Taller 2)**
Tú eres el filtro. Nada entra a la base de datos si no es válido o si es peligroso[cite: 1].
*   **Qué hacer:**
    1.  **Verificación de Existencia:** Usa `isset()` para saber si el botón fue presionado y `empty()` para asegurar que no enviaron campos en blanco[cite: 1].
    2.  **Validación de Formato:** Usa `filter_var($email, FILTER_VALIDATE_EMAIL)` para rechazar correos que no tengan un formato real[cite: 1].
    3.  **Limpieza XSS:** Aplica `htmlspecialchars()` a cada dato recibido para que, si alguien intenta escribir código malicioso, se convierta en texto simple y no dañe el sitio[cite: 1].
*   **Capturas obligatorias:** El código PHP con los `if` de validación y una prueba del formulario rechazando un correo mal escrito[cite: 1].

Términos a investigar (4):

    filter_var(): Validación de tipos (email, int).  
    
    isset(): Verificar si una variable existe.  
    
    empty(): Verificar si un campo está vacío.  
    
    htmlspecialchars(): Protección contra ataques XSS.


### **Integrante 5: Experto en Criptografía e Integración (Taller 3)**
Tú manejas los datos más sensibles y cierras el candado de seguridad[cite: 1].
*   **Qué hacer:**
    1.  **Hash de Contraseñas:** Usa `password_hash()` para convertir la clave del usuario en una cadena de texto irreconocible antes de guardarla[cite: 1]. **Nunca** guardes contraseñas en texto plano[cite: 1].
    2.  **Implementar CSRF Token:** Genera un código aleatorio oculto en el formulario para asegurar que la petición viene de tu sitio y no de un atacante externo[cite: 1].
    3.  **Seguridad de Capa:** Explica cómo el protocolo TLS/SSL (HTTPS) cifra la comunicación entre el navegador y el servidor para que nadie "escuche" los datos en el camino[cite: 1].
*   **Capturas obligatorias:** El código donde generas el hash y el campo oculto (hidden input) con el token CSRF en el HTML[cite: 1].

Términos a investigar (3):

    password_hash(): Cifrado seguro de contraseñas.  
    
    csrf_token: Protección contra falsificación de solicitudes.  
    
    TLS/SSL (HTTPS): Seguridad en la capa de transporte.

---
---

### **Resumen de Responsabilidades**

| Rol                 | Términos | Taller Principal |

| **BD & PDO**        | 3        | Base de todos los talleres |

| **Frontend & HTML** | 5        | Taller 1 (GET vs POST) |

| **Superglobales**   | 4        | Procesamiento de datos |

| **Validación PHP**  | 4        | Taller 2 (Registro) |

| **Cifrado & CSRF**  | 3        | Taller 3 (Seguro completo) |
