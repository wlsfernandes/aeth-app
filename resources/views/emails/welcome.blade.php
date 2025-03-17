<!DOCTYPE html>
<html>

<head>
    <title>Welcome to the AETH Member Exclusive Access</title>
</head>

<body>
    <h1>¡Bienvenido a AETH, {{ $user->name }}! / Welcome to AETH, {{ $user->name }}!</h1>

    <h3>Tu Información de Inicio de Sesión:</h3>
    <p>Tu cuenta ha sido creada exitosamente. Aquí están tus credenciales de inicio de sesión:</p>
    <ul>
        <li><strong>Correo Electrónico:</strong> {{ $user->email }}</li>
        <li><strong>Contraseña:</strong> {{ $password }}</li>
    </ul>
    <p>Por favor, cambia tu contraseña después de iniciar sesión por primera vez.</p>
    <hr>
    <p>Nos complace tenerle como nuevo miembro de la Asociación para la Educación Teológica Hispana (AETH). Gracias por
        unirse a nuestra misión de mejorar la educación teológica y apoyar el desarrollo continuo de nuestra comunidad.
    </p>

    <h3>Detalles de su membresía:</h3>
    <p>Como miembro valioso, ahora tiene acceso a una gama de beneficios exclusivos diseñados para apoyar su crecimiento
        y compromiso con AETH. Aquí tiene un resumen de lo que incluye su plan de membresía:</p>
    <ul>
        <li>Acceso a seminarios web y eventos</li>
        <li>Grabaciones de seminarios web</li>
        <li>Descuento en la librería</li>
        <li>Acceso al Centro de Recursos</li>
        <li>Programas de colaboración</li>
        <li>Oportunidades de networking</li>
        <li>Certificados de Participación</li>
        <li>Biblioteca de Contenidos y Recursos</li>
    </ul>
    <p><strong>Su membresía se renueva automáticamente.</strong> Le enviaremos un recordatorio cuando se acerque la
        fecha de renovación con los detalles correspondientes.</p>

    <h3>Próximos Pasos:</h3>
    <ol>
        <li><strong>Visite nuestro sitio web:</strong> Explore <a href="https://www.somosaeth.com">www.somosaeth.com</a>
            [confirme
            la nueva dirección web aquí] para obtener más información sobre nuestros programas y próximos eventos.</li>
        <li><strong>Acceda a sus Beneficios:</strong> Cree su perfil y cuenta <a href="#">Regístrese aquí</a>. Luego,
            utilice su número de identificación único para acceder a seminarios web, grabaciones y otros recursos.</li>
        <li><strong>Conéctese con Nosotros:</strong> Síganos en redes sociales y utilice su credencial de miembro para
            compartir su afiliación a AETH.</li>
    </ol>

    <p>Si tiene alguna pregunta o necesita ayuda, comuníquese con nuestra oficina administrativa al <strong>(407)
            205-7981</strong>, por WhatsApp al <strong>407-754-6863</strong>, o por correo electrónico a
        <strong>membership@aeth.org</strong>.
    </p>

    <p>Esperamos contar con su participación y colaboración activa mientras trabajamos juntos para promover la educación
        teológica y su impacto en nuestro mundo.</p>

    <hr>

    <h3>Your Login Information:</h3>
    <p>Your account has been created successfully. Here are your login credentials:</p>
    <ul>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Password:</strong> {{ $password }}</li>
    </ul>
    <p>Please change your password after logging in for the first time.</p>
    <hr>
    <p>We are delighted to have you as a new member of the Asociación para la Educación Teológica Hispana (AETH). Thank
        you for joining us in our mission to enhance theological education and support the continuous development of our
        community.</p>

    <h3>Your Membership Details:</h3>
    <p>As a valued member, you now have access to a range of exclusive benefits designed to support your growth and
        engagement with AETH. Here is an overview of what your Membership plan includes:</p>
    <ul>
        <li>Access to Webinars & Events</li>
        <li>Webinar Recordings</li>
        <li>Resource Center Access</li>
        <li>Partnership Programs</li>
        <li>Networking Opportunities</li>
        <li>Participation Certificates</li>
        <li>Library of Content & Resources</li>
    </ul>
    <p><strong>Your membership renews automatically.</strong> We will send you a reminder when renewal approaches with
        renewal details.</p>

    <h3>Next Steps:</h3>
    <ol>
        <li><strong>Visit Our Website:</strong> Explore <a href="https://www.somosaeth.com">www.somosaeth.com</a>
            [confirm the new
            web address here] to learn more about our programs and upcoming events.</li>
        <li><strong>Access Your Benefits:</strong> Create your profile and account <a href="#">Sign up here</a>. Then
            use your unique identifier number to access webinars, recordings, and other resources.</li>
        <li><strong>Connect with Us:</strong> Follow us on social media and use your membership badge to share your
            affiliation with AETH.</li>
    </ol>

    <p>If you have any questions or need assistance, please feel free to contact our administrative office at
        <strong>(407) 205-7981</strong>, via WhatsApp at <strong>407-754-6863</strong>, or email us at
        <strong>membership@aeth.org</strong>.
    </p>

    <p>We look forward to your active participation and collaboration as we work together to advance theological
        education and its impact on our world.</p>

    <hr>



    <p><strong>Thank you for joining us!</strong></p>
</body>

</html>
