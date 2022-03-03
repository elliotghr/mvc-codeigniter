    CodeIgniter
        El objetivo es permitirle desarrollar proyectos mucho más rápido de lo que podría si estuviera escribiendo código desde cero, al proporcionar un amplio conjunto de bibliotecas para tareas comúnmente necesarias, así como una interfaz simple y una estructura lógica para acceder a estas bibliotecas

    ¿Para quién es CodeIgniter?           
         CodeIgniter es adecuado para usted si:
         Quiere un marco que ocupe poco espacio.
         Necesita un rendimiento excepcional.
         Necesita una amplia compatibilidad con las cuentas de alojamiento estándar que ejecutan una variedad de versiones y configuraciones de PHP.
         Desea un marco que requiera una configuración casi nula.
         Desea un marco que no requiera que use la línea de comando.
         Desea un marco que no requiera que se adhiera a reglas de codificación restrictivas.
         No está interesado en bibliotecas monolíticas a gran escala como PEAR.
         No desea verse obligado a aprender un lenguaje de plantillas (aunque unanalizador de plantillas está disponible opcionalmente si lo desea).
         Evita la complejidad, favoreciendo las soluciones simples.
         Necesita una documentación clara y completa.

    CodeIgniter es ligero
        Peso verdaderamente ligero. El sistema central requiere solo unas pocas bibliotecas muy pequeñas. Esto está en marcado contraste con muchos marcos que requieren muchos más recursos. Las bibliotecas adicionales se cargan dinámicamente a pedido, según sus necesidades para un proceso determinado, por lo que el sistema base es muy simple y bastante rápido.

    CodeIgniter genera direcciones URL limpias
        Las URL generadas por CodeIgniter son limpias y compatibles con los motores de búsqueda. En lugar de utilizar el enfoque estándar de "cadena de consulta" para las URL que es sinónimo de sistemas dinámicos, CodeIgniter utiliza un enfoque basado en segmentos:

            ejemplo _ com / noticias / artículo / 345

    CodeIgniter tiene un gran impacto
        CodeIgniter viene con una gama completa de bibliotecas que permiten las tareas de desarrollo web más comúnmente necesarias, como acceder a una base de datos, enviar correos electrónicos, validar datos de formularios, mantener sesiones, manipular imágenes, trabajar con datos XML-RPC y mucho más.

    Características de CodeIgniter
        Sistema basado en modelo-vista-controlador
        Peso extremadamente ligero.
        Clases de base de datos completas con soporte para varias plataformas.
        Compatibilidad con la base de datos del generador de consultas
        Formulario y Validación de Datos
        Seguridad y Filtrado XSS
        Gestión de sesiones
        Clase de envío de correo electrónico. Admite archivos adjuntos, correo electrónico HTML/de texto, múltiples protocolos (sendmail, SMTP y Mail) y más.
        Biblioteca de manipulación de imágenes (recorte, cambio de tamaño, rotación, etc.). Admite GD, ImageMagick y NetPBM
        Clase de carga de archivos
        Clase FTP
        Localización
        Paginación
        Cifrado de datos
    
    Diagrama de flujo de la aplicación
        El index.php sirve como controlador frontal, inicializando los recursos básicos necesarios para ejecutar CodeIgniter.
        El enrutador examina la solicitud HTTP para determinar qué se debe hacer con ella.
        Si existe un archivo de caché, se envía directamente al navegador, sin pasar por la ejecución normal del sistema.
        Seguridad. Antes de que se cargue el controlador de la aplicación, la solicitud HTTP y los datos enviados por el usuario se filtran por seguridad.
        El controlador carga el modelo, las bibliotecas principales, los ayudantes y cualquier otro recurso necesario para procesar la solicitud específica.
        La vista finalizada se procesa y luego se envía al navegador web para que se vea. Si el almacenamiento en caché está habilitado, la vista se almacena en caché primero para que se pueda servir en las solicitudes posteriores.

    Modelo-Vista-Controlador
        CodeIgniter tiene un enfoque bastante flexible para MVC ya que no se requieren modelos. Si no necesita la separación añadida, o encuentra que el mantenimiento de modelos requiere más complejidad de la que desea, puede ignorarlos y construir su aplicación mínimamente usando Controladores y Vistas. CodeIgniter también le permite incorporar sus propios scripts existentes, o incluso desarrollar bibliotecas centrales para el sistema, lo que le permite trabajar de la manera que tenga más sentido para usted.

    Diseño y Objetivos Arquitectónicos
        Nuestro objetivo para CodeIgniter es el máximo rendimiento, capacidad y flexibilidad en el paquete más pequeño y liviano posible.

        Desde un punto de vista técnico y arquitectónico, CodeIgniter fue creado con los siguientes objetivos:

        Instanciación dinámica. En CodeIgniter, los componentes se cargan y las rutinas se ejecutan solo cuando se solicitan, en lugar de globalmente. El sistema no hace suposiciones con respecto a lo que se puede necesitar más allá de los recursos básicos mínimos, por lo que el sistema es muy liviano de manera predeterminada. Los eventos, desencadenados por la solicitud HTTP, y los controladores y vistas que diseñe determinarán qué se invoca.

        Bajo acoplamiento. El acoplamiento es el grado en que los componentes de un sistema dependen unos de otros. Cuanto menos dependan los componentes unos de otros, más reutilizable y flexible se vuelve el sistema. Nuestro objetivo era un sistema muy débilmente acoplado.

        Singularidad de componentes. La singularidad es el grado en que los componentes tienen un propósito estrictamente enfocado. En CodeIgniter, cada clase y sus funciones son altamente autónomas para permitir la máxima utilidad.


    Codeigniter: 3-. Controladores
        Extiende de una clase llamada CI_Controller