<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language file.
 *
 * @package   theme_remui
 * @copyright (c) 2023 WisdmLabs (https://wisdmlabs.com/) <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['advancedsettings'] = 'Configuraciones avanzadas';
$string['backgroundimage'] = 'Imagen de fondo';
$string['backgroundimage_desc'] = 'La imagen a mostrar como fondo del sitio. La imagen de fondo que cargues aquí anulará la imagen de fondo de los archivos de tu tema.';
$string['brandcolor'] = 'Color de marca';
$string['brandcolor_desc'] = 'El color de marca.';
$string['bootswatch'] = 'Bootswatch';
$string['bootswatch_desc'] = 'Un bootswatch es un conjunto de variables y css de Bootstrap para dar estilo a Bootstrap';
$string['choosereadme'] = 'RemUI es un tema moderno altamente personalizable. Este tema está destinado a ser utilizado directamente o como tema principal al crear nuevos temas utilizando Bootstrap 4.';
$string['currentinparentheses'] = '(current)';
$string['configtitle'] = 'Edwiser RemUI';
$string['generalsettings'] = 'básico';
$string['loginbackgroundimage'] = 'Imagen de fondo de la página de inicio de sesión';
$string['loginbackgroundimage_desc'] = 'La imagen a mostrar como fondo de la página de inicio de sesión.';
$string['nobootswatch'] = 'Ninguno';
$string['pluginname'] = 'Edwiser RemUI';
$string['presetfiles'] = 'Archivos preestablecidos de temas adicionales';
$string['presetfiles_desc'] = 'Los archivos preestablecidos se pueden utilizar para cambiar drásticamente la apariencia del tema. Consulta <a href="https://docs.moodle.org/dev/remui_Presets">remui presets</a> para obtener información sobre cómo crear y compartir tus propios archivos preestablecidos y consulta el <a href="https://archive.moodle.net/remui">Repositorio de preajustes</a> para ver los preajustes que otros han compartido.';
$string['preset'] = 'Preajuste del tema';
$string['preset_desc'] = 'Elige un preajuste para cambiar ampliamente el aspecto del tema.';
$string['privacy:metadata'] = 'El tema remui no almacena datos personales sobre ningún usuario.';
$string['rawscss'] = 'SCSS sin procesar';
$string['rawscss_desc'] = 'Utiliza este campo para proporcionar código SCSS o CSS que se inyectará al final de la hoja de estilos.';
$string['rawscsspre'] = 'SCSS inicial sin procesar';
$string['rawscsspre_desc'] = 'En este campo puedes proporcionar código SCSS de inicialización, que se inyectará antes que todo lo demás. La mayoría de las veces utilizarás esta configuración para definir variables.';
$string['region-side-pre'] = 'Derecha';
$string['region-side-top'] = 'Arriba';
$string['region-side-bottom'] = 'Abajo';
$string['showfooter'] = 'Mostrar pie de página';
$string['unaddableblocks'] = 'Bloques no necesarios';
$string['unaddableblocks_desc'] = 'Los bloques especificados no son necesarios al usar este tema y no se mostrarán en el menú "Agregar bloque".';

$string['privacy:metadata:preference:draweropenblock'] = 'La preferencia del usuario para ocultar o mostrar el cajón con bloques.';
$string['privacy:metadata:preference:draweropenindex'] = 'La preferencia del usuario para ocultar o mostrar el cajón con el índice de cursos.';
$string['privacy:metadata:preference:draweropennav'] = 'La preferencia del usuario para ocultar o mostrar el menú de navegación en el cajón.';
$string['privacy:drawerindexclosed'] = 'La preferencia actual para el cajón del índice de cursos está cerrada.';
$string['privacy:drawerindexopen'] = 'La preferencia actual para el cajón del índice de cursos está abierta.';
$string['privacy:drawerblockclosed'] = 'La preferencia actual para el cajón de bloques está cerrada.';
$string['privacy:drawerblockopen'] = 'La preferencia actual para el cajón de bloques está abierta.';
$string['privacy:drawernavclosed'] = 'La preferencia actual para el cajón de navegación está cerrada.';
$string['privacy:drawernavopen'] = 'La preferencia actual para el cajón de navegación está abierta.';

// Deprecated since Moodle 4.0.
$string['totop'] = 'Ir arriba';

// Edwiser RemUI Settings Page Strings.

// Settings Tabs strings.
$string['homepagesettings'] = 'Página de inicio';
$string['coursesettings'] = "Página del curso";
$string['footersettings'] = 'Pie de página';
$string["formsettings"] = "Formularios";
$string["iconsettings"] = "Iconos";
$string['loginsettings'] = 'Página de inicio de sesión';

$string['versionforheading'] = '<span class="small remuiversion"> Versión {$a}</span>';
$string['themeversionforinfo'] = '<span>Versión actualmente instalada: Edwiser RemUI v{$a}</span>';

// General Settings.
$string['mergemessagingsidebar'] = 'Unir panel de mensajes';
$string['mergemessagingsidebardesc'] = 'Unir panel de mensajes en la barra lateral derecha';
$string['logoorsitename'] = 'Elegir formato de logo del sitio';
$string['logoorsitenamedesc'] = 'Solo logo: logo grande de la marca<br /> Logo mini: mini logo de la marca <br /> Solo icono: un icono como marca <br/> Icono y nombre del sitio: icono con el nombre del sitio';
$string['onlylogo'] = 'Solo logo';
$string['logo'] = 'Logo';
$string['logomini'] = 'Logo mini';
$string['icononly'] = 'Solo icono';
$string['iconsitename'] = 'Icono y nombre del sitio';
$string['logodesc'] = 'Puede agregar el logo que se mostrará en la cabecera. Nota: la altura preferida es de 50px. Si desea personalizarlo, puede hacerlo desde la casilla de CSS personalizado.';
$string['logominidesc'] = 'Puede agregar el logomini que se mostrará en la cabecera cuando la barra lateral esté colapsada. Nota: la altura preferida es de 50px. Si desea personalizarlo, puede hacerlo desde la casilla de CSS personalizado.';
$string['siteicon'] = 'Ícono del sitio';
$string['siteicondesc'] = '¿No tiene un logo? Puede elegir uno de esta <a href="https://fontawesome.com/v4.7.0/cheatsheet/" target="_new" ><b style="color:#17a2b8!important">lista</b></a>. <br /> Solo ingrese el texto después de "fa-".';
$string['navlogin_popup'] = 'Habilitar popup de inicio de sesión';
$string['navlogin_popupdesc'] = 'Habilitar el popup de inicio de sesión para iniciar sesión rápidamente sin redirigir a la página de inicio de sesión.';
$string['coursecategories'] = 'Categorías';
$string['enablecoursecategorymenu'] = "Menú desplegable de categorías en la cabecera";
$string['enablecoursecategorymenudesc'] = "Manténgalo habilitado si desea mostrar el menú desplegable de categorías en la cabecera";
$string['coursepagesettings'] = "Página de curso";
$string['coursepagesettingsdesc'] = "Configuraciones relacionadas con los cursos.";
$string['coursecategoriestext'] = "Renombrar menú desplegable de categorías en la cabecera";
$string['coursecategoriestextdesc'] = "Puede agregar un nombre personalizado para el menú desplegable de categorías en la cabecera.";
$string['enablerecentcourses'] = 'Habilitar cursos recientes';
$string['enablerecentcoursesdesc'] = 'Si está habilitado, el menú desplegable de cursos recientes se mostrará en la cabecera.';
$string['recent'] = 'Recientes';
$string['recentcoursesmenu'] = 'Menú de cursos recientes';
$string['searchcatplaceholdertext'] = 'Buscar categorías';
$string['viewallnotifications'] = 'Ver todas las notificaciones';
$string['forgotpassword'] = '¿Olvidó su contraseña?';
$string['enableannouncement'] = "Habilitar anuncio en todo el sitio";
$string['enableannouncementdesc'] = "Habilitar anuncio en todo el sitio para todos los usuarios.";
$string['enabledismissannouncement'] = "Permitir anuncio del sitio cerrable";
$string['enabledismissannouncementdesc'] = "Si se habilita, se permite a los usuarios cerrar el anuncio.";
$string['brandlogo'] = 'Logotipo de marca';
$string['brandname'] = 'Nombre de la marca';

$string['announcementtext'] = "Anuncio";
$string['announcementtextdesc'] = "Mensaje de anuncio para ser mostrado en todo el sitio.";
$string['announcementtype'] = "Tipo de anuncio";
$string['announcementtypedesc'] = "Seleccione el tipo de anuncio para mostrar un color de fondo diferente para el anuncio.";
$string['typeinfo'] = "Información";
$string['typedanger'] = "Urgente";
$string['typewarning'] = "Advertencia";
$string['typesuccess'] = "Éxito";

// Google Analytics.
$string['googleanalytics'] = 'ID de seguimiento de Google Analytics';
$string['googleanalyticsdesc'] = 'Por favor, introduzca su ID de seguimiento de Google Analytics para habilitar el análisis en su sitio web. El formato de ID de seguimiento debería ser similar a [UA-XXXXX-Y].<br/> Tenga en cuenta que al incluir esta configuración, estará enviando datos a Google Analytics y debe asegurarse de que sus usuarios estén informados sobre esto. Nuestro producto no almacena ninguno de los datos que se envían a Google Analytics.';
$string['favicon'] = 'Favicon';
$string['favicosize'] = 'El tamaño esperado es de 16x16 píxeles';
$string['favicondesc'] = 'El "icono favorito" de su sitio. Es un recordatorio visual de la identidad del sitio web y se muestra en la barra de direcciones o en las pestañas del navegador.';
$string['fontselect'] = 'Selector de tipo de fuente';
$string['fontselectdesc'] = 'Seleccione entre fuentes estándar o tipos de fuentes web de Google<a href="https://fonts.google.com/" target="_new">fuentes web de Google</a>. Guarde para mostrar las opciones para su elección. Nota: Si el tipo de letra del personalizador se establece en Estándar, se aplicará la fuente web de Google.';
$string['fontname'] = 'Fuente del sitio';
$string['fontnamedesc'] = 'Introduzca el nombre exacto de la fuente que se utilizará para Moodle.';
$string['fonttypestandard'] = 'Fuente estándar';
$string['fonttypegoogle'] = 'Fuente web de Google';

$string['sendfeedback'] = "Enviar comentarios a Edwiser";
$string['enableedwfeedback'] = "Comentarios y soporte de Edwiser";
$string['enableedwfeedbackdesc'] = "Habilitar Comentarios y soporte de Edwiser, visible solo para los administradores.";
$string["checkfaq"] = "Edwiser RemUI - Ver preguntas frecuentes";
$string['poweredbyedwiser'] = 'Desarrollado por Edwiser';
$string['poweredbyedwiserdesc'] = 'Desmarque para eliminar "Desarrollado por Edwiser" de su sitio.';
$string['enabledictionary'] = 'Habilitar diccionario';
$string['enabledictionarydesc'] = 'Si se habilita, se activará la función de diccionario y se mostrará el significado del texto seleccionado en un cuadro emergente.';
$string['customcss'] = 'CSS personalizado';
$string['customcssdesc'] = 'Puede personalizar el CSS desde el cuadro de texto de arriba. Los cambios se reflejarán en todas las páginas de su sitio.';
// Footer Content
$string['followus'] = 'Síganos';
$string['poweredby'] = 'Desarrollado por';

// One click report  bug/feedback.
$string['sendfeedback'] = "Enviar comentarios a Edwiser";
$string['descriptionmodal_text1'] = "<p>Los comentarios le permiten enviarnos sugerencias sobre nuestros productos. Agradecemos los informes de problemas, las ideas de funciones y los comentarios generales.</p><p>Comience escribiendo una breve descripción:</p>";
$string['descriptionmodal_text2'] = "<p>A continuación, le permitiremos identificar las áreas de la página relacionadas con su descripción.</p>";
$string['emptydescription_error'] = "Ingrese una descripción.";
$string['incorrectemail_error'] = "Ingrese una dirección de correo electrónico correcta.";

$string['highlightmodal_text1'] = "Haga clic y arrastre en la página para ayudarnos a comprender mejor sus comentarios. Puede mover este cuadro de diálogo si está en el camino.";
$string['highlight_button'] = "Resaltar área";
$string['blackout_button'] = "Ocultar información";
$string['highlight_button_tooltip'] = "Resalte las áreas relevantes para sus comentarios.";
$string['blackout_button_tooltip'] = "Oculte cualquier información personal.";

$string['feedbackmodal_next'] = 'Capturar Pantalla y Continuar';
$string['feedbackmodal_skipnext'] = 'Saltar y Continuar';
$string['feedbackmodal_previous'] = 'Atrás';
$string['feedbackmodal_submit'] = 'Enviar';
$string['feedbackmodal_ok'] = 'De acuerdo';

$string['description_heading'] = 'Descripción';
$string['feedback_email_heading'] = 'Correo electrónico';
$string['additional_info'] = 'Información adicional';
$string['additional_info_none'] = 'Ninguna';
$string['additional_info_browser'] = 'Información del navegador';
$string['additional_info_page'] = 'Información de la página';
$string['additional_info_pagestructure'] = 'Estructura de la página';
$string['feedback_screenshot'] = 'Captura de pantalla';
$string['feebdack_datacollected_desc'] = 'Un resumen de los datos recopilados está disponible <strong><a href="https://forums.edwiser.org/topic/67/anonymously-tracking-the-usage-of-edwiser-products" target="_blank">aquí</a></strong>.';

$string['submit_loading'] = 'Cargando...';
$string['submit_success'] = 'Gracias por tu retroalimentación. Valoramos cada comentario que recibimos.';
$string['submit_error'] = 'Lamentablemente, se produjo un error al enviar tus comentarios. Por favor, inténtalo de nuevo.';
$string['send_feedback_license_error'] = "Por favor, activa la licencia para obtener soporte del producto.";
$string['disabled'] = 'Desactivado';

$string['nocoursefound'] = 'No se encontraron cursos';

$string['pagewidth'] = 'Diseño del tema';
$string['pagewidthdesc'] = 'Aquí puedes elegir el tamaño del diseño de las páginas.';
$string['defaultpermoodle'] = 'Ancho estrecho (predeterminado de Moodle)';
$string['fullwidthlayout'] = 'Ancho completo';

// Footer Page Settings.
$string['footersettings'] = 'Pie de página';
$string['socialmedia'] = 'Redes Sociales';
$string['socialmediadesc'] = 'Ingrese los enlaces a las redes sociales para su sitio.';
$string['facebooksetting'] = 'Facebook';
$string['facebooksettingdesc'] = 'Ingrese el enlace a la página de Facebook de su sitio. Por ejemplo: https://www.facebook.com/nombredepagina';
$string['twittersetting'] = 'Twitter';
$string['twittersettingdesc'] = 'Ingrese el enlace a la página de Twitter de su sitio. Por ejemplo: https://www.twitter.com/nombredepagina';
$string['linkedinsetting'] = 'LinkedIn';
$string['linkedinsettingdesc'] = 'Ingrese el enlace a la página de LinkedIn de su sitio. Por ejemplo: https://www.linkedin.com/in/nombredepagina';
$string['gplussetting'] = 'Google Plus';
$string['gplussettingdesc'] = 'Ingrese el enlace a la página de Google Plus de su sitio. Por ejemplo: https://plus.google.com/nombredepagina';
$string['youtubesetting'] = 'YouTube';
$string['youtubesettingdesc'] = 'Ingrese el enlace a la página de YouTube de su sitio. Por ejemplo: https://www.youtube.com/channel/UCU1u6QtAAPJrV0v0_c2EISA';
$string['instagramsetting'] = 'Instagram';
$string['instagramsettingdesc'] = 'Ingrese el enlace a la página de Instagram de su sitio. Por ejemplo: https://www.instagram.com/nombre';
$string['pinterestsetting'] = 'Pinterest';
$string['pinterestsettingdesc'] = 'Ingrese el enlace a la página de Pinterest de su sitio. Por ejemplo: https://www.pinterest.com/nombre';
$string['quorasetting'] = 'Quora';
$string['quorasettingdesc'] = 'Ingrese el enlace a la página de Quora de su sitio. Por ejemplo: https://www.quora.com/nombre';
$string['footerbottomtext'] = 'Texto del pie de página en la esquina inferior izquierda';
$string['footerbottomlink'] = 'Enlace del pie de página en la esquina inferior izquierda';
$string['footerbottomlinkdesc'] = 'Ingrese el enlace para la sección inferior izquierda del pie de página. Por ejemplo: http://www.suempresa.com';
$string['footercolumn1heading'] = 'Contenido del pie de página para la primera columna (izquierda)';
$string['footercolumn1headingdesc'] = 'Esta sección se refiere a la parte inferior (Columna 1) de su página principal.';
$string['footercolumn1title'] = 'Título de la primera columna del pie de página';
$string['footercolumn1titledesc'] = 'Agregar título a esta columna.';
$string['footercolumncustomhtml'] = 'Contenido personalizado';
$string['footercolumn1customhtmldesc'] = 'Puede personalizar el HTML de esta columna usando el cuadro de texto proporcionado arriba.';
$string['footercolumn2heading'] = 'Contenido del pie de página para la segunda columna (centro)';
$string['footercolumn2headingdesc'] = 'Esta sección se refiere a la parte inferior (Columna 2) de su página principal.';
$string['footercolumn2title'] = 'Título de la segunda columna del pie de página';
$string['footercolumn2titledesc'] = 'Agregar título a esta columna.';
$string['footercolumn2customhtml'] = 'HTML personalizado';

$string['footercolumn2customhtmldesc'] = 'Puede personalizar el HTML de esta columna utilizando el cuadro de texto proporcionado arriba.';
$string['footercolumn3heading'] = 'Contenido del pie de página para la tercera columna (centro)';
$string['footercolumn3headingdesc'] = 'Esta sección se refiere a la parte inferior (Columna 3) de su página principal.';
$string['footercolumn3title'] = 'Título de la tercera columna del pie de página';
$string['footercolumn3titledesc'] = 'Agregue un título a esta columna.';
$string['footercolumn3customhtml'] = 'HTML personalizado';
$string['footercolumn3customhtmldesc'] = 'Puede personalizar el HTML de esta columna utilizando el cuadro de texto proporcionado arriba.';
$string['footercolumn4heading'] = 'Contenido del pie de página para la cuarta columna (derecha)';
$string['footercolumn4headingdesc'] = 'Esta sección se refiere a la parte inferior (Columna 4) de su página principal.';
$string['footercolumn4title'] = 'Título de la cuarta columna del pie de página';
$string['footercolumn4titledesc'] = 'Agregue un título a esta columna.';
$string['footercolumn4customhtml'] = 'HTML personalizado';
$string['footercolumn4customhtmldesc'] = 'Puede personalizar el HTML de esta columna utilizando el cuadro de texto proporcionado arriba.';
$string['footerbottomheading'] = 'Configuración del pie de página inferior';
$string['footerbottomdesc'] = 'Aquí puede especificar su propio enlace que desea ingresar en la sección inferior del pie de página';
$string['footerbottomtextdesc'] = 'Agregue texto a la configuración inferior del pie de página.';
$string['footercopyrightsshow'] = 'mostrar';
$string['footercopyright'] = 'Mostrar contenido de derechos de autor';
$string['footercopyrights'] = '[sitio] © [año]. Todos los derechos reservados.';
$string['footercopyrightsdesc'] = 'Agregue contenido de derechos de autor en la parte inferior de la página.';
$string['footercopyrightstags'] = 'Etiquetas:<br>[sitio] - Nombre del sitio<br>[año] - Año actual';
$string['footerbottomlink'] = 'Enlace inferior izquierdo del pie de página';
$string['footerbottomlinkdesc'] = 'Ingrese el enlace para la sección inferior izquierda del pie de página. Por ejemplo, http://www.suempresa.com';
$string['footerbottomtext'] = 'Texto inferior izquierdo del pie de página';
$string['footerbottomlink'] = 'Enlace inferior izquierdo del pie de página';
$string['copyrighttextarea'] = 'Contenido de derechos de autor';
$string['footercolumnsize'] = 'Número de widgets';
$string['one'] = 'Uno';
$string['two'] = 'Dos';
$string['three'] = 'Tres';
$string['four'] = 'Cuatro';
$string['showsocialmediaicon'] = "Mostrar íconos de redes sociales";
$string['footercolumntype'] = 'Tipo';
$string['footercolumncustommenudesc'] = 'Agregue sus elementos de menú en este formato por ejemplo:<br>
<pre>
[
    {
        "texto": "Agregue su texto aquí",
        "dirección": "http://XYZ.abc"
    },
    {
        "texto": "Agregue su texto aquí",
        "dirección": "http://XYZ.abc"
    }, ...
]
</pre>
<b style="color:red;">Nota:</b> Para agregar fácilmente contenido al pie de página personalice el área del pie de página con nuestro <a href="'.$CFG->wwwroot.'/admin/settings.php?section=themesettingremui#theme_remui_edwiserpersonalizer" onclick= location.href="'.$CFG->wwwroot.'/admin/settings.php?section=themesettingremui#theme_remui_edwiserpersonalizer";location.reload();>Personalizador Visual </a>';
$string['gotop'] = 'Ir arriba';

$string['menu'] = 'Menú';
$string['content'] = 'Contenido';
$string['footercolumntypedesc'] = 'Puede elegir el tipo de widget de pie de página';
$string['socialmediaicondesc'] = 'Mostrará iconos de redes sociales en esta sección';
$string['footercolumncustommmenu'] = 'Agregar elementos de menú';
$string['follometext'] = 'Sígueme en {$a}';
$string['footercolumndesc'] = 'Seleccione el número de widgets en el pie de página';
$string['footershowlogo'] = 'Mostrar logo de pie de página';
$string['footershowlogodesc'] = 'Mostrar el logo en el pie de página secundario.';

$string['footertermsandconditionsshow'] = 'Mostrar Términos y Condiciones';
$string['footertermsandconditions'] = 'Enlace de Términos y Condiciones';
$string['footertermsandconditionsdesc'] = 'Puede agregar un enlace a la página de Términos y Condiciones.';
$string['footertermsandconditionsshowdesc'] = 'Términos y Condiciones del pie de página';
$string['footerprivacypolicyshowdesc'] = 'Enlace de Política de Privacidad';

$string['footerprivacypolicyshow'] = 'Mostrar Política de Privacidad';
$string['footerprivacypolicy'] = 'Enlace de Política de Privacidad';
$string['footerprivacypolicydesc'] = 'Puede agregar un enlace a la página de Política de Privacidad.';
$string['termsandconditions'] = 'Términos y Condiciones';
$string['privacypolicy'] = 'Política de Privacidad';
$string['typeamessage'] = "Escriba su mensaje aquí";
$string['allcontacts'] = "Todos los contactos";

$string['administrator'] = 'Administrador';
$string['contacts'] = 'Contactos';
$string['blogentries'] = 'Entradas de blog';
$string['discussions'] = 'Discusiones';
$string['aboutme'] = 'Acerca de mí';
$string['courses'] = 'Cursos';
$string['interests'] = 'Intereses';
$string['institution'] = 'Departamento e institución';
$string['location'] = 'Ubicación';
$string['description'] = 'Descripción';
$string['editprofile'] = 'Editar perfil';
$string['start_date'] = 'Fecha de inicio';
$string['complete'] = 'Completado';
$string['surname'] = 'Apellido';
$string['actioncouldnotbeperformed'] = '¡No se pudo realizar la acción!';
$string['enterfirstname'] = 'Por favor, ingrese su nombre de pila.';
$string['enterlastname'] = 'Por favor, ingrese su apellido.';
$string['entervalidphoneno'] = 'Ingrese un número de teléfono válido';
$string['enteremailid'] = 'Por favor, ingrese su ID de correo electrónico.';
$string['enterproperemailid'] = 'Por favor, ingrese un ID de correo electrónico válido.';
$string['detailssavedsuccessfully'] = '¡Detalles guardados correctamente!';
$string['fullname'] = 'Nombre completo';
$string['viewcourselow'] = 'ver curso';

$string['focusmodesettings'] = 'Configuración del modo de enfoque';
$string['focusmode'] = 'Modo de enfoque';
$string['enablefocusmode'] = 'Habilitar modo de enfoque';
$string['enablefocusmodedesc'] = 'Si está habilitado, aparecerá un botón para cambiar al aprendizaje libre de distracciones en la página del curso.';
$string['focusmodeenabled'] = 'Modo de enfoque habilitado';
$string['focusmodedisabled'] = 'Modo de enfoque deshabilitado';
$string['coursedata'] = 'Datos del curso';
$string['prev'] = 'Anterior';
$string['next'] = 'Siguiente';
$string['enablecoursestats'] = 'Habilitar estadísticas del curso';
$string['enablecoursestatsdesc'] = 'Si está habilitado, el administrador, los gerentes y el profesor verán las estadísticas de los usuarios relacionadas con el curso matriculado en la página de un solo curso.';

// Course Stats.
$string['notenrolledanycourse'] = 'No matriculado en ningún curso.';
$string['enrolledusers'] = 'Estudiantes matriculados';
$string['studentcompleted'] = 'Estudiantes completados';
$string['inprogress'] = 'En progreso';
$string['yettostart'] = 'Aún no iniciado';
$string['completepercent'] = '{$a}% Curso completado';
$string['seeallmycourses'] = "<span class='d-none d-lg-block'>Ver todos mis </span> <span>cursos en progreso</span>";
$string['noactivity'] = 'No hay actividades en el curso';
$string['activitydata'] = '{$a->complete} de {$a->total} actividades completadas';
$string['loginsettingpic'] = 'Cargar imagen de fondo';
$string['loginsettingpicdesc'] = 'Cargar imagen como fondo para el formulario de inicio de sesión.';
$string['loginpagelayout'] = 'Posición del formulario de inicio de sesión';
$string['loginpagelayoutdesc'] = 'Elija el diseño de la página de inicio de sesión.';
$string['logincenter'] = 'Centro';
$string['loginleft'] = 'Lado izquierdo';
$string['loginright'] = 'Lado derecho';
$string['brandlogopos'] = "Mostrar logo en la página de inicio de sesión";
$string['brandlogoposdesc'] = "Si está habilitado, el logo de marca se mostrará en la página de inicio de sesión.";
$string['hiddenlogo'] = "Desactivar";
$string['sidebarregionlogo'] = 'En la tarjeta de inicio de sesión';
$string['maincontentregionlogo'] = 'En la región central';
$string['loginpanellogo'] = 'Logo del encabezado (Página de inicio de sesión)';
$string['loginpanellogodesc'] = 'Depende de la configuración <strong>Elegir formato de logo del sitio</strong>';
$string['signuptextcolor'] = 'Color de la descripción del sitio';
$string['signuptextcolordesc'] = 'Seleccione el color del texto para la descripción del sitio.';
$string['brandlogotext'] = "Descripción del sitio";
$string['loginpagesitedescription'] = 'Descripción del sitio en la página de inicio de sesión';
$string['brandlogotextdesc'] = "Agregar texto para la descripción del sitio que se mostrará en la página de inicio de sesión y registro. Dejar en blanco si no se desea poner ninguna descripción.";
$string['createnewaccount'] = 'Crear una nueva cuenta';
$string['welcometobrand'] = 'Hola, bienvenido a {$a}';
$string['entertologin'] = "Ingrese sus datos para iniciar sesión en su cuenta";
$string['forgotaccount'] = '¿Olvidó su contraseña?';
$string['potentialidps'] = 'O inicie sesión con su cuenta';
$string['firsttime'] = 'Primera vez que utiliza este sitio';
// Signup Page.
$string['createnewaccount'] = 'Crear una nueva cuenta';
// Course Page Settings.
$string['coursesettings'] = "Página de curso";
$string['enrolpagesettings'] = "Configuración de la página de inscripción";
$string['enrolpagesettingsdesc'] = "Administre el contenido de la página de inscripción aquí.";
$string['coursearchivepagesettings'] = 'Configuración de la página de archivo de cursos';
$string['coursearchivepagesettingsdesc'] = 'Administre la distribución y el contenido de la página de archivo de cursos.';
$string['courseperpage'] = 'Cursos por página';
$string['courseperpagedesc'] = 'Número de cursos que se mostrarán por página en la página de archivo de cursos.';
$string['none'] = 'Ninguno';
$string['fade'] = 'Desvanecer';
$string['slide-top'] = 'Deslizar hacia arriba';
$string['slide-bottom'] = 'Deslizar hacia abajo';
$string['slide-right'] = 'Deslizar hacia la derecha';
$string['scale-up'] = 'Agrandar';
$string['scale-down'] = 'Reducir';
$string['courseanimation'] = 'Animación de la tarjeta de curso';
$string['courseanimationdesc'] = 'Seleccione la animación de la tarjeta de curso que aparecerá en la página de archivo de cursos.';

$string['currency'] = 'USD';
$string['currency_symbol'] = '$';
$string['enrolment_payment'] = 'Pago del curso';
$string['enrolment_payment_desc'] = 'Configuración de las preferencias de inscripción del curso. ¿Todos los cursos requieren pago o algunos son gratuitos? Esta configuración dicta cómo funcionará la inscripción del curso y cómo se mostrará.';
$string['allrequirepayment'] = 'Todos los cursos requieren pago';
$string['somearefree'] = 'Algunos cursos son gratuitos';
$string['allarefree'] = 'Todos los cursos son gratuitos';

$string['showcoursepricing'] = 'Mostrar precios del curso';
$string['showcoursepricingdesc'] = 'Habilite esta configuración para mostrar la sección de precios en la página de inscripción.';
$string['fullwidthcourseheader'] = 'Encabezado de curso de ancho completo';
$string['fullwidthcourseheaderdesc'] = 'Habilite esta configuración para hacer que el encabezado del curso sea de ancho completo.';

$string['price'] = 'Precio';
$string['course_free'] = 'GRATIS';
$string['enrolnow'] = 'Matricularse ahora';
$string['buyand'] = 'Comprar y ';
$string['notags'] = 'Sin etiquetas.';
$string['tags'] = 'Etiquetas';

$string['enrolment_layout'] = 'Diseño de página de matriculación';
$string['enrolment_layout_desc'] = 'Habilitar el diseño de Edwiser para una página de matriculación mejorada.';
$string['disable'] = 'Deshabilitar';
$string['defaultlayout'] = 'Diseño predeterminado de Moodle';
$string['enable_layout1'] = 'Diseño de Edwiser';

$string['webpage'] = "Página web";
$string['categorypagelayout'] = 'Diseño de la página de archivo de cursos';
$string['categorypagelayoutdesc'] = 'Seleccionar entre los diseños de página de archivo de cursos.';
$string['edwiserlayout'] = 'Diseño de Edwiser';
$string['categoryfilter'] = 'Filtro de categoría';

$string['skill1'] = 'Principiante';
$string['skill2'] = 'Intermedio';
$string['skill3'] = 'Avanzado';

$string['lastupdatedon'] = 'Última actualización el ';

$string['courseoverview'] = "Resumen del curso";
$string['coursecontent'] = "Contenido del curso";
$string['instructors'] = "Instructores";
$string['reviews'] = "Opiniones";
$string['curatedby'] = 'Curado por';
$string["studentsenrolled"] = 'Estudiantes matriculados';
$string['lesson'] = 'Lección';
$string['category'] = 'Categoría';
$string['review'] = 'Opinión';
$string['length'] = 'Duración';
$string['lecture'] = 'Conferencia';
$string['startdate'] = 'Fecha de inicio';
$string['skilllevel'] = 'Nivel de habilidad';
$string['language'] = 'Idioma';
$string['certificate'] = 'Certificado';
$string['students'] = 'Estudiantes';
$string['courses'] = 'Cursos';

// Archivo de cursos.
$string['cachedef_courses'] = 'Caché para cursos';
$string['cachedef_guestcourses'] = 'Caché para cursos de invitados';
$string['cachedef_updates'] = 'Caché para actualizaciones';
$string['mycourses'] = "Mis cursos";
$string['allcategories'] = 'Todas las categorías';
$string['categorysort'] = 'Ordenar categorías';
$string['sortdefault'] = 'Ordenar (ninguno)';
$string['sortascending'] = 'Ordenar A a Z';
$string['sortdescending'] = 'Ordenar Z a A';

// Frontpage Old String.
// Home Page Settings.
$string['homepagesettings'] = 'Página principal';
$string['frontpagedesign'] = 'Diseño de página de inicio';
$string['frontpagedesigndesc'] = 'Habilitar constructor de página de inicio de Edwiser RemUI o Constructor heredado.';
$string['frontpagechooser'] = 'Elegir diseño de la página principal';
$string['frontpagechooserdesc'] = 'Elija el diseño de su página principal.';
$string['frontpagedesignold'] = 'Constructor de página de inicio heredado';
$string['frontpagedesignolddesc'] = 'Panel de control predeterminado como anterior.';
$string['frontpagedesignnew'] = 'Nuevo diseño';
$string['frontpagedesignnewdesc'] = 'Nuevo diseño fresco con múltiples secciones. Puede configurar secciones individualmente en la página principal.';
$string['newhomepagedescription'] = 'Haga clic en "Inicio del sitio" en la barra de navegación para ir al "Constructor de página de inicio" y crear su propia página de inicio.';
$string['frontpageloader'] = 'Cargar imagen de carga para la página principal';
$string['frontpageloaderdesc'] = 'Esto reemplaza el cargador predeterminado con su imagen.';
$string['frontpageimagecontent'] = 'Contenido del encabezado';
$string['frontpageimagecontentdesc'] = 'Esta sección se relaciona con la parte superior de su página principal.';
$string['frontpageimagecontentstyle'] = 'Estilo';
$string['frontpageimagecontentstyledesc'] = 'Puede elegir entre Estático y Presentación de diapositivas.';
$string['staticcontent'] = 'Estático';
$string['slidercontent'] = 'Presentación de diapositivas';
$string['addtext'] = 'Agregar texto';
$string['defaultaddtext'] = 'La educación es un camino probado hacia el progreso.';
$string['addtextdesc'] = 'Aquí puede agregar el texto que se mostrará en la página principal, preferiblemente en HTML.';
$string['uploadimage'] = 'Subir imagen';
$string['uploadimagedesc'] = 'Puede cargar una imagen como contenido de diapositiva.';
$string['video'] = 'Código incrustado de iframe';
$string['videodesc'] = 'Aquí puede insertar el código incrustado de iframe del video que se va a incrustar.';
$string['contenttype'] = 'Seleccionar tipo de contenido';
$string['contentdesc'] = 'Puede elegir entre imagen o proporcionar URL de video.';
$string['imageorvideo'] = 'Imagen / Video';
$string['image'] = 'Imagen';
$string['videourl'] = 'URL del video';
$string['slideinterval'] = 'Intervalo de diapositivas';
$string['slideintervalplaceholder'] = 'Número entero positivo en milisegundos.';
$string['slideintervaldesc'] = 'Puede establecer el tiempo de transición entre las diapositivas. En caso de que haya una diapositiva, esta opción no tendrá efecto. Si el intervalo no es válido (vacío|0|menor que 0), el intervalo predeterminado es de 5000 milisegundos.';
$string['slidercount'] = 'Número de diapositivas';
$string['slidercountdesc'] = '';
$string['one'] = '1';
$string['two'] = '2';
$string['three'] = '3';
$string['four'] = '4';
$string['five'] = '5';
$string['six'] = '6';
$string['eight'] = '8';
$string['nine'] = '9';
$string['twelve'] = '12';
$string['slideimage'] = 'Cargar imágenes para el slider';
$string['slideimagedesc'] = 'Puede cargar una imagen como contenido para esta diapositiva.';
$string['sliderurl'] = 'Agregar enlace al botón del slider';
$string['slidertext'] = 'Agregar texto al slider';
$string['defaultslidertext'] = '';
$string['slidertextdesc'] = 'Puede insertar el contenido de texto para esta diapositiva. Preferiblemente en HTML.';
$string['sliderbuttontext'] = 'Agregar texto al botón en la diapositiva';
$string['sliderbuttontextdesc'] = 'Puede agregar texto al botón en esta diapositiva.';
$string['sliderurldesc'] = 'Puede insertar el enlace de la página a la que el usuario será redirigido una vez que haga clic en el botón.';
$string['sliderautoplay'] = 'Establecer la reproducción automática del slider';
$string['sliderautoplaydesc'] = 'Seleccione "sí" si desea una transición automática en su presentación de diapositivas.';
$string['true'] = 'Sí';
$string['false'] = 'No';
$string['frontpageblocks'] = 'Contenido del cuerpo';
$string['frontpageblocksdesc'] = 'Puede insertar un encabezado para el cuerpo de su sitio.';
$string['frontpageblockdisplay'] = 'Sección Acerca de nosotros';
$string['frontpageblockdisplaydesc'] = 'Puede mostrar u ocultar la sección "Acerca de nosotros", también puede mostrar la sección "Acerca de nosotros" en formato de cuadrícula.';
$string['donotshowaboutus'] = 'No mostrar';
$string['showaboutusinrow'] = 'Mostrar sección en una fila';
$string['showaboutusingridblock'] = 'Mostrar sección en un bloque de cuadrícula';

// Acerca de nosotros.
$string['frontpageaboutus'] = 'Acerca de nosotros de la página de inicio';
$string['frontpageaboutusdesc'] = 'Esta sección es para la sección Acerca de nosotros de la página de inicio.';
$string['frontpageaboutustitledesc'] = 'Agregar título a la sección Acerca de nosotros';
$string['frontpageaboutusbody'] = 'Descripción del cuerpo para la sección Acerca de nosotros';
$string['frontpageaboutusbodydesc'] = 'Una breve descripción sobre esta sección.';
$string['enablesectionbutton'] = 'Habilitar botones en las secciones';
$string['enablesectionbuttondesc'] = 'Habilitar los botones en las secciones del cuerpo.';
$string['sectionbuttontextdesc'] = 'Ingrese el texto para el botón en esta sección.';
$string['sectionbuttonlinkdesc'] = 'Ingrese el enlace URL para esta sección.';
$string['frontpageblocksectiondesc'] = 'Agregar título a esta sección.';

// Sección de bloque 1.
$string['frontpageblocksection1'] = 'Título del cuerpo para la 1ª sección';
$string['frontpageblockdescriptionsection1'] = 'Descripción del cuerpo para la 1ª sección';
$string['frontpageblockiconsection1'] = 'Icono de Font-Awesome para la 1ª sección';
$string['sectionbuttontext1'] = 'Texto del botón para la 1ª sección';
$string['sectionbuttonlink1'] = 'Enlace URL para la 1ª sección';

// Sección de bloque 2.
$string['frontpageblocksection2'] = 'Título del cuerpo para la 2ª sección';
$string['frontpageblockdescriptionsection2'] = 'Descripción del cuerpo para la 2ª sección';
$string['frontpageblockiconsection2'] = 'Icono de Font-Awesome para la 2ª sección';
$string['sectionbuttontext2'] = 'Texto del botón para la 2ª sección';
$string['sectionbuttonlink2'] = 'Enlace URL para la 2ª sección';

// Sección de bloque 3.
$string['frontpageblocksection3'] = 'Título del cuerpo para la 3ª sección';
$string['frontpageblockdescriptionsection3'] = 'Descripción del cuerpo para la 3ª sección';
$string['frontpageblockiconsection3'] = 'Icono de Font-Awesome para la 3ª sección';
$string['sectionbuttontext3'] = 'Texto del botón para la 3ª sección';
$string['sectionbuttonlink3'] = 'Enlace URL para la 3ª sección';

// Sección de bloque 4.
$string['frontpageblocksection4'] = 'Título del cuerpo para la 4ª sección';
$string['frontpageblockdescriptionsection4'] = 'Descripción del cuerpo para la 4ª sección';
$string['frontpageblockiconsection4'] = 'Icono de Font-Awesome para la 4ª sección';
$string['sectionbuttontext4'] = 'Texto del botón para la 4ª sección';
$string['sectionbuttonlink4'] = 'Enlace URL para la 4ª sección';
$string['defaultdescriptionsection'] = 'Aproveche de forma integral tecnologías justo a tiempo a través de escenarios corporativos.';
$string['frontpagetestimonial'] = 'Testimonio de portada';
$string['frontpagetestimonialdesc'] = 'Sección de testimonios de portada';
$string['enablefrontpageaboutus'] = 'Habilitar sección de testimonios';
$string['enablefrontpageaboutusdesc'] = 'Habilitar la sección de testimonios en la página de portada.';
$string['frontpageaboutusheading'] = 'Encabezado de testimonios';
$string['frontpageaboutusheadingdesc'] = 'Encabezado para el texto predeterminado de la sección';
$string['frontpageaboutustext'] = 'Texto del testimonio';
$string['frontpageaboutustextdesc'] = 'Ingrese el texto del testimonio para la página de portada.';
$string['frontpageaboutusdefault'] = '<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam.</p>';
$string['testimonialcount'] = 'Cantidad de testimonios';
$string['testimonialcountdesc'] = 'Cantidad de testimonios para mostrar.';
$string['testimonialimage'] = 'Imagen del testimonio';
$string['testimonialimagedesc'] = 'Imagen de la persona para mostrar con el testimonio';
$string['testimonialname'] = 'Nombre de la persona';
$string['testimonialnamedesc'] = 'Nombre de la persona';
$string['testimonialdesignation'] = 'Cargo de la persona';
$string['testimonialdesignationdesc'] = 'Designación de la persona.';
$string['testimonialtext'] = 'Testimonio de la persona';
$string['testimonialtextdesc'] = 'Lo que la persona dice';
$string['frontpageblockimage'] = 'Subir imagen';
$string['frontpageblockimagedesc'] = 'Puedes subir una imagen como contenido para esto.';
$string['frontpageblockiconsectiondesc'] = 'Puedes elegir cualquier icono de esta <a href="https://fontawesome.com/v4.7.0/cheatsheet/" target="_new">lista</a>. Solo ingresa el texto después de "fa-".';
$string['frontpageblockdescriptionsectiondesc'] = 'Una breve descripción sobre el título.';

// Course.
$string['graderreport'] = 'Informe del Evaluador';
$string['enroluser'] = 'Inscribir usuarios';
$string['activityeport'] = 'Informe de Actividades';
$string['editcourse'] = 'Editar Curso';
$string['imageforcourse'] = 'Imagen para el Curso';
// Next Previous Activity.
$string['activityprev'] = 'Actividad anterior';
$string['activitynext'] = 'Actividad siguiente';
$string['activitynextpreviousbutton'] = 'Habilitar botón de actividad siguiente y anterior';
$string['activitynextpreviousbuttondesc'] = 'Cuando se habilita, el botón de actividad siguiente y anterior aparecerá en la página de Actividad Individual para cambiar entre actividades';
$string['disablenextprevious'] = 'Desactivar';
$string['enablenextprevious'] = 'Habilitar';
$string['enablenextpreviouswithname'] = 'Habilitar con nombre de actividad';

// Importer.
$string['importer'] = 'Importador';
$string['importer-missing'] = 'El complemento Edwiser Site Importer está ausente. Visite el sitio de <a href="https://edwiser.org">Edwiser</a> para descargar este complemento.';

// Information center.
$string['informationcenter'] = 'Centro de información';
$string['licensenotactive'] = '<strong>¡Alerta!</strong> La licencia no está activada, por favor <strong>active</strong> la licencia en la configuración de RemUI.';
$string['licensenotactiveadmin'] = '<strong>¡Alerta!</strong> La licencia no está activada, por favor <strong>active</strong> la licencia <a class="text-primary" href="'.$CFG->wwwroot.'/admin/settings.php?section=themesettingremui#informationcenter" >aquí</a>.';
$string['activatelicense'] = 'Activar licencia';
$string['deactivatelicense'] = 'Desactivar licencia';
$string['renewlicense'] = 'Renovar licencia';
$string['deactivated'] = 'Desactivada';
$string['active'] = 'Activa';
$string['notactive'] = 'No activa';
$string['expired'] = 'Expirada';
$string['licensekey'] = 'Clave de licencia';
$string['licensestatus'] = 'Estado de la licencia';
$string['no_activations_left'] = 'Límite excedido';
$string['activationfailed'] = 'La activación de la clave de licencia falló. Por favor, inténtelo de nuevo más tarde.';
$string['noresponsereceived'] = 'No se recibió ninguna respuesta del servidor. Por favor, inténtelo de nuevo más tarde.';
$string['licensekeydeactivated'] = 'La clave de licencia ha sido desactivada.';
$string['siteinactive'] = 'Sitio inactivo (presione "Activar licencia" para activar el plugin).';
$string['entervalidlicensekey'] = 'Por favor, introduzca una clave de licencia válida.';
$string['nolicenselimitleft'] = 'Se ha alcanzado el límite máximo de activaciones, no quedan activaciones disponibles.';
$string['licensekeyisdisabled'] = 'Su clave de licencia está deshabilitada.';
$string['licensekeyhasexpired'] = "Su clave de licencia ha expirado. Por favor, renuévela.";
$string['licensekeyactivated'] = "Su clave de licencia está activada.";
$string['entervalidlicensekey'] = "Por favor, introduzca una clave de licencia correcta.";
$string['edwiserremuilicenseactivation'] = 'Activación de la clave de licencia de Edwiser RemUI';
$string['enterlicensekey'] = "Introduzca la clave de licencia...";
$string['invalid'] = "Inválido";

$string['courseheaderdesign'] = 'Diseño del encabezado de la página del curso';
$string['courseheaderdesigndesc'] = 'Elige el diseño del encabezado de la página del curso';
$string['default'] = 'Por defecto';
$string['headerdesign'] = 'Diseño del encabezado {$a}';
$string['sidebarcoursemenuheading'] = "Menú del curso";

// Notification.
$string['inproductnotification'] = "Actualizar preferencias de usuario (Notificación en el producto) - RemUI";

$string["noti_enrolandcompletion"] = 'Los diseños modernos y profesionales de Edwiser RemUI han ayudado brillantemente a aumentar su compromiso general con el aprendizaje con <b>{$a->enrolment} nuevas inscripciones en cursos y {$a->completion} finalizaciones de cursos</b> este mes';

$string["noti_completion"] = 'Edwiser RemUI ha mejorado sus niveles de compromiso con los estudiantes: Tiene un total de <b>{$a->completion} finalizaciones de cursos</b> este mes';

$string["noti_enrol"] = 'Su diseño de LMS se ve genial con Edwiser RemUI: Tiene <b>{$a->enrolment} nuevas inscripciones en cursos</b> en su portal este mes';

$string["coolthankx"] = "¡Genial, gracias!";

$string['gridview'] = 'Vista de cuadrícula';
$string['listview'] = 'Vista de lista';
$string['summaryview'] = 'Vista de resumen';

$string['side-top'] = "Superior lateral";
$string['content'] = "Contenido";
$string['side-bottom'] = "Inferior lateral";
$string['side-pre'] = "Lateral pre";

$string['sitenamecolor'] = "Color del nombre o del icono del sitio";
$string['sitenamecolordesc'] = "Color para el nombre del sitio y el texto del icono del sitio, que también se aplicará en la página de inicio de sesión.";

$string['coursesenrolled'] = "Cursos inscritos";
$string['coursescompleted'] = "Cursos completados";
$string['activitiescompleted'] = "Actividades completadas";
$string['activitiesdue'] = "Actividades pendientes";

// Customizer Strings
$string['customizer-migrate-notice'] = 'La configuración de color se ha migrado a Customizer. Haga clic en el botón a continuación para abrir Customizer.';
$string['customizer-close-heading'] = 'Cerrar Customizer';
$string['customizer-close-description'] = 'Los cambios no guardados se descartarán. ¿Desea continuar?';
$string['reset'] = 'Restablecer';
$string['resetall'] = 'Restablecer todo';
$string['reset-settings'] = 'Restablecer todas las configuraciones de Customizer';
$string['reset-settings-description'] = '<div>La configuración de Customizer se restaurará a la predeterminada. ¿Desea continuar?</div>
<div class="mt-3"><strong>Restablecer todo:</strong> Restablecer todas las configuraciones.</div>
<div class="mt-3"><strong>Restablecer:</strong> Se restablecerán las configuraciones excepto las siguientes configuraciones.</div>';

$string['link'] = 'Enlace';
$string['customizer'] = 'Personalizador';
$string['error'] = 'Error';
$string['resetdesc'] = 'Restablecer la configuración a la última guardada o a la predeterminada cuando no se haya guardado nada';
$string['noaccessright'] = '¡Lo siento! No tienes permisos para utilizar esta página';

$string['font-family'] = 'Familia de fuentes';
$string['font-family_help'] = 'Establecer la familia de fuentes de {$a}';

$string['button-font-family'] = 'Familia de fuentes';
$string['button-font-family_help'] = 'Establecer la familia de fuentes del texto del botón';

$string['font-size'] = 'Tamaño de fuente';
$string['font-size_help'] = 'Establecer el tamaño de fuente de {$a}';
$string['font-weight'] = 'Peso de la fuente';
$string['font-weight_help'] = 'Establecer un peso de fuente de {$a}. La propiedad font-weight define cómo se muestran los caracteres de texto, si más gruesos o más delgados.';
$string['line-height'] = 'Altura de línea';
$string['line-height_help'] = 'Establecer la altura de línea de {$a}';
$string['global'] = 'Global';
$string['global_help'] = 'Puedes gestionar la configuración global, como el color, la fuente, los encabezados, los botones, etc.';
$string['site'] = 'Sitio';
$string['text-color'] = 'Color del texto';
$string['welcome-text-color'] = 'Color del texto de bienvenida';
$string['text-hover-color'] = 'Color del texto al pasar el cursor';
$string['text-color_help'] = 'Establecer el color del texto de {$a}';
$string['content-color'] = 'Color del contenido';
$string['icon-color'] = 'Color del icono';
$string['icon-hover-color'] = 'Color del icono al pasar el cursor';
$string['icon-color_help'] = 'Establecer el color del icono de {$a}';
$string['link-color'] = 'Color del enlace';
$string['link-color_help'] = 'Establecer el color del enlace de {$a}';
$string['link-hover-color'] = 'Color del enlace al pasar el cursor';
$string['link-hover-color_help'] = 'Establecer el color del enlace al pasar el cursor de {$a}';
$string['typography'] = 'Tipografía';
$string['inherit'] = 'Inherit';
$string["weight-100"] = '100';
$string["weight-200"] = '200';
$string["weight-300"] = '300';
$string["weight-400"] = '400';
$string["weight-500"] = '500';
$string["weight-600"] = '600';
$string["weight-700"] = '700';
$string["weight-800"] = '800';
$string["weight-900"] = '900';
$string['text-transform'] = 'Transformación de texto';
$string['text-transform_help'] = 'La propiedad de transformación de texto controla la capitalización del texto. Establecer la transformación de texto de {$a}.';

$string['button-text-transform'] = 'Transformación de texto del botón';
$string['button-text-transform_help'] = 'La propiedad de transformación de texto controla la capitalización del texto. Establecer la transformación de texto del texto del botón.';

$string["default"] = 'Por defecto';
$string["none"] = 'Ninguno';
$string["capitalize"] = 'Capitalizar';
$string["uppercase"] = 'Mayúsculas';
$string["lowercase"] = 'Minúsculas';
$string['background-color'] = 'Color de fondo';
$string['background-hover-color'] = 'Color de fondo al pasar el cursor';
$string['background-color_help'] = 'Establecer el color de fondo de {$a}';
$string['background-hover-color'] = 'Color de fondo al pasar el cursor';
$string['background-hover-color_help'] = 'Establecer el color de fondo al pasar el cursor de {$a}';
$string['color'] = 'Color';
$string['customizing'] = 'Personalizando';
$string['savesuccess'] = 'Guardado exitosamente.';
$string['mobile'] = 'Móvil';
$string['tablet'] = 'Tableta';
$string['hide-customizer'] = 'Ocultar personalizador';
$string['customcss_help'] = 'Puede agregar CSS personalizado. Esto se aplicará en todas las páginas de su sitio.';

// Customizer Global body.
$string['body'] = 'Cuerpo';
$string['body-font-family_desc'] = 'Establecer la familia de fuente para todo el sitio. Tenga en cuenta que si se establece como "Estándar", se aplicará la fuente de la configuración de RemUI.';
$string['body-font-size_desc'] = 'Establecer el tamaño de fuente base para todo el sitio.';
$string['body-fontweight_desc'] = 'Establecer el peso de fuente para todo el sitio.';
$string['body-text-transform_desc'] = 'Establecer la transformación de texto para todo el sitio.';
$string['body-lineheight_desc'] = 'Establecer la altura de línea para todo el sitio.';
$string['faviconurl_help'] = 'URL del favicon';

// Customizer Global heading.
$string['heading'] = 'Encabezado';
$string['use-custom-color'] = 'Usar color personalizado';
$string['use-custom-color_help'] = 'Usar color personalizado para {$a}';
$string['typography-heading-all-heading'] = 'Encabezados (H1 - H6)';
$string['typography-heading-h1-heading'] = 'Encabezado 1';
$string['typography-heading-h2-heading'] = 'Encabezado 2';
$string['typography-heading-h3-heading'] = 'Encabezado 3';
$string['typography-heading-h4-heading'] = 'Encabezado 4';
$string['typography-heading-h5-heading'] = 'Encabezado 5';
$string['typography-heading-h6-heading'] = 'Encabezado 6';

// Customizer Colors.
$string['primary-color'] = 'Color primario';
$string['primary-color_help'] = 'Aplica el color primario de la marca a todo el sitio. Este color se aplicará al botón, enlaces de texto, al pasar el cursor sobre ellos y para los elementos del menú de encabezado activos, al pasar el cursor sobre ellos y para los iconos activos.
<br><b>Nota:</b> Cambiar el color primario no cambiará los colores de los botones si ha cambiado los colores de los botones a través de su configuración individual (<b>Global > Botones > Configuración de color de botón</b>). Restablezca los colores de los botones desde su configuración individual para cambiar el cambio del botón mediante la modificación global del color primario desde aquí.';

$string['secondary-color'] = 'Color de ascenso';
$string['secondary-color_help'] = 'Aplica el color de ascenso a todo el sitio. Este color se aplicará a los iconos en el bloque de estadísticas de la página del Panel de control, a las etiquetas en las tarjetas de curso y a las pancartas del encabezado del curso.';

$string['page-background'] = 'Fondo de página';
$string['page-background_help'] = 'Establece un fondo de página personalizado para el área de contenido de la página. Puede elegir un color, un degradado o una imagen. El ángulo del color degradado es de 100 grados.';

$string['page-background-color'] = 'Color de fondo de página';
$string['page-background-color_help'] = 'Establece un color de fondo para el área de contenido de la página.';

$string['page-background-image'] = 'Imagen de fondo de página';
$string['page-background-image_help'] = 'Establece una imagen como fondo para el área de contenido de la página.';

$string['gradient'] = 'Degradado';
$string['gradient-color1'] = 'Color degradado 1';
$string['gradient-color1_help'] = 'Establece el primer color del degradado.';
$string['gradient-color2'] = 'Color degradado 2';
$string['gradient-color2_help'] = 'Establece el segundo color del degradado.';
$string['gradient-color-angle'] = 'Ángulo del degradado';
$string['gradient-color-angle_help'] = 'Establece el ángulo para los colores del degradado.';

$string['page-background-imageattachment'] = 'Adjunto de imagen de fondo';
$string['page-background-imageattachment_help'] = 'La propiedad de background-attachment establece si una imagen de fondo se desplaza con el resto de la página o está fija.';

$string['image'] = 'Imagen';
$string['additional-css'] = 'CSS adicional';
$string['left-sidebar'] = 'Barra lateral izquierda';
$string['main-sidebar'] = 'Barra lateral principal';
$string['sidebar-links'] = 'Enlaces de la barra lateral';
$string['secondary-sidebar'] = 'Barra lateral secundaria';
$string['header'] = 'Encabezado';
$string['headertypography'] = 'Tipografía de encabezado';
$string['headercolors'] = 'Colores de encabezado';
$string['menu'] = 'Menú';
$string['site-identity'] = 'Identidad del sitio';
$string['primary-header'] = 'Encabezado primario';
$string['color'] = 'Color';


// Customizer Buttons.
$string['buttons'] = 'Botones';
$string['border'] = 'Borde';
$string['border-width'] = 'Ancho del borde';
$string['border-width_help'] = 'Establecer el ancho del borde de {$a}';
$string['border-color'] = 'Color del borde';
$string['border-color_help'] = 'Establecer el color del borde de {$a}';
$string['border-hover-color'] = 'Color del borde al pasar el cursor';
$string['border-hover-color_help'] = 'Establecer el color del borde al pasar el cursor de {$a}';
$string['border-radius'] = 'Radio del borde';
$string['border-radius_help'] = 'Establecer el radio del borde de {$a}';
$string['letter-spacing'] = 'Espaciado entre letras';
$string['letter-spacing_help'] = 'Establecer el espaciado entre letras de {$a}';
$string['text'] = 'Texto';
$string['padding'] = 'Padding';
$string['padding-top'] = 'Padding superior';
$string['padding-top_help'] = 'Establecer el padding superior de {$a}';
$string['padding-right'] = 'Padding derecho';
$string['padding-right_help'] = 'Establecer el padding derecho de {$a}';
$string['padding-bottom'] = 'Padding inferior';
$string['padding-bottom_help'] = 'Establecer el padding inferior de {$a}';
$string['padding-left'] = 'Padding izquierdo';
$string['padding-left_help'] = 'Establecer el padding izquierdo de {$a}';
$string['secondary'] = 'Secundario';
$string['colors'] = 'Colores';
$string['commonbuttonsettings'] = 'Configuración común';
$string['buttonsizesettings'] = 'Tamaños de botón';
$string['buttonsizesettingshead'] = '{$a}';
$string['commonfontsettings'] = 'Fuente';
$string['buttoncolorsettings'] = 'Configuración de color de botón';

// Customizer Header.
$string['header-background-color_help'] = 'Establece el color de fondo del encabezado. Esto no se aplicará si <strong>Establecer el color de fondo del encabezado igual al color de fondo del logo</strong> está habilitado.';
$string['site-logo'] = 'Logo del sitio';
$string['header-menu'] = 'Menú del encabezado';
$string['box-shadow-size'] = 'Tamaño de la sombra del cuadro';
$string['box-shadow-size_help'] = 'Establece el tamaño de la sombra del cuadro para el encabezado del sitio';
$string['box-shadow-blur'] = 'Difuminado de la sombra del cuadro';
$string['box-shadow-blur_help'] = 'Establece el difuminado de la sombra del cuadro para el encabezado del sitio';
$string['box-shadow-color'] = 'Color de la sombra del cuadro';
$string['box-shadow-color_help'] = 'Establece el color de la sombra del cuadro para el encabezado del sitio';
$string['layout-desktop'] = 'Diseño de escritorio';
$string['layout-desktop_help'] = 'Establece el diseño del encabezado para escritorio';
$string['layout-mobile'] = 'Diseño móvil';
$string['layout-mobile_help'] = 'Establece el diseño del encabezado para móvil';
$string['header-left'] = 'Icono izquierdo y menú derecho';
$string['header-right'] = 'Icono derecho y menú izquierdo';
$string['header-top'] = 'Icono superior y menú inferior';
$string['hover'] = 'Desplazamiento del ratón';
$string['logo'] = 'Logo';
$string['applynavbarcolor'] = 'Establecer el color de fondo del encabezado igual al color de fondo del logo';
$string['applynavbarcolor_help'] = 'El color de fondo del logo se aplicará a todo el encabezado. Al cambiar el color de fondo del logo, se cambiará el color de fondo del encabezado. Todavía puede aplicar un color de texto personalizado y un color de desplazamiento del ratón a los menús del encabezado.';
$string['header-background-color-warning'] = 'No se usará si <strong>Establecer el color del sitio de la barra de navegación</strong> está habilitado.';
$string['logosize'] = 'La relación de aspecto esperada es de 130:33 para la vista izquierda, 140:33 para la vista derecha.';
$string['logominisize'] = 'La relación de aspecto esperada es de 40:33.';
$string['sitenamewithlogo'] = 'Nombre del sitio con logo (Solo vista superior)';

// Customizer Sidebar.
$string['link-text'] = 'Texto del enlace';
$string['link-text_help'] = 'Establecer el color del texto del enlace de {$a}';
$string['link-icon'] = 'Icono del enlace';
$string['link-icon_help'] = 'Establecer el color del icono del enlace de {$a}';
$string['active-link-color'] = 'Color del enlace activo';
$string['active-link-color_help'] = 'Establecer un color personalizado para el enlace activo de {$a}';
$string['active-link-background'] = 'Fondo del enlace activo';
$string['active-link-background_help'] = 'Establecer un color personalizado para el fondo del enlace activo de {$a}';
$string['link-hover-background'] = 'Fondo del enlace al pasar el cursor';
$string['link-hover-background_help'] = 'Establecer el fondo del enlace al pasar el cursor a {$a}';
$string['link-hover-text'] = 'Texto del enlace al pasar el cursor';
$string['link-hover-text_help'] = 'Establecer el color del texto del enlace al pasar el cursor de {$a}';

// Customizer Footer.
$string['footer'] = 'Pie de página';
$string['basic'] = 'Diseño de pie de página';
$string['socialall'] = 'Enlaces de redes sociales';
$string['advance'] = 'Área principal de pie de página';
$string['footercolumn'] = 'Widget';
$string['footercolumnwidgetno'] = 'Seleccionar número de widgets';
$string['footercolumndesc'] = 'Número de widgets para mostrar en el pie de página.';
$string['footercolumntype'] = 'Seleccionar tipo';
$string['footercolumnsettings'] = 'Configuración de columna de pie de página';
$string['footercolumntypedesc'] = 'Puede elegir el tipo de widget de pie de página';
$string['footercolumnsocial'] = 'Enlaces de redes sociales';
$string['footercolumnsocialdesc'] = 'Seleccione los enlaces que se mostrarán. Mantenga presionada la tecla "ctrl" en el teclado para seleccionar varios enlaces';
$string['footercolumntitle'] = 'Agregar título';
$string['footercolumntitledesc'] = 'Agregar título a este widget.';
$string['footercolumncustomhtml'] = 'Contenido';
$string['footercolumncustomhtmldesc'] = 'Puede personalizar el contenido de este widget usando el editor que se proporciona a continuación.';
$string['both'] = 'Ambos';
$string['footercolumnsize'] = 'Ajustar ancho del widget';
$string['footercolumnsizenote'] = 'Arrastre la línea vertical para ajustar el tamaño del widget.';
$string['footercolumnsizedesc'] = 'Puede establecer el tamaño individual del widget.';
$string['footercolumnmenu'] = 'Menú';
$string['footercolumnmenureset'] = 'Menús de columna de pie de página';
$string['footercolumnmenudesc'] = 'Menú de enlaces';
$string['footermenu'] = 'Menú';
$string['footermenudesc'] = 'Agregar menú en widget de pie de página.';
$string['customizermenuadd'] = 'Agregar elemento de menú';
$string['customizermenuedit'] = 'Editar elemento de menú';
$string['customizermenumoveup'] = 'Mover elemento de menú hacia arriba';
$string['customizermenuemovedown'] = 'Mover elemento de menú hacia abajo';
$string['customizermenuedelete'] = 'Eliminar elemento de menú';
$string['menutext'] = 'Texto';
$string['menuaddress'] = 'Dirección';
$string['menuorientation'] = 'Orientación del menú';
$string['menuorientationdesc'] = 'Establecer la orientación del menú. La orientación puede ser vertical u horizontal.';
$string['menuorientationvertical'] = 'Vertical';
$string['menuorientationhorizontal'] = 'Horizontal';
$string['footerfacebook'] = 'Facebook';
$string['footertwitter'] = 'Twitter';
$string['footerlinkedin'] = 'Linkedin';
$string['footergplus'] = 'Google Plus';
$string['footeryoutube'] = 'Youtube';
$string['footerinstagram'] = 'Instagram';
$string['footerpinterest'] = 'Pinterest';
$string['footerquora'] = 'Quora';
$string['footershowlogo'] = 'Mostrar logo';
$string['footershowlogodesc'] = 'Mostrar el logo en el pie de página secundario.';
$string['footersecondarysocial'] = 'Mostrar enlaces de redes sociales';
$string['footersecondarysocialdesc'] = 'Mostrar los enlaces a las redes sociales en el pie de página secundario.';
$string['footertermsandconditionsshow'] = 'Mostrar Términos y Condiciones';
$string['footertermsandconditions'] = 'Enlace de Términos y Condiciones';
$string['footertermsandconditionsdesc'] = 'Puede agregar un enlace para la página de Términos y Condiciones.';
$string['footerprivacypolicyshow'] = 'Mostrar Política de privacidad';
$string['footerprivacypolicy'] = 'Enlace de la Política de privacidad';
$string['footerprivacypolicydesc'] = 'Puede agregar un enlace para la página de Política de privacidad.';
$string['footercopyrightsshow'] = 'Mostrar contenido de derechos de autor';
$string['footercopyrights'] = 'Contenido de derechos de autor';
$string['footercopyrightsdesc'] = 'Agregar contenido de derechos de autor en la parte inferior de la página.';
$string['footercopyrightstags'] = 'Etiquetas:<br>[site] - Nombre del sitio<br>[year] - Año actual';
$string['termsandconditions'] = 'Términos y Condiciones';
$string['privacypolicy'] = 'Política de privacidad';
$string['footerfont'] = 'Fuente';
$string['footerbasiccolumntitle'] = 'Título de la columna';
$string['divider-color'] = 'Color del separador';
$string['divider-color_help'] = 'Establecer el color del separador de {$a}';
$string['text-hover-color'] = 'Color de texto al pasar el cursor';
$string['text-hover-color_help'] = 'Establecer el color de texto al pasar el cursor de {$a}';
$string['link-color'] = 'Color del enlace';
$string['link-color_help'] = 'Establecer el color del enlace de {$a}';
$string['link-hover-color'] = 'Color del enlace al pasar el cursor';
$string['link-hover-color_help'] = 'Establecer el color del enlace al pasar el cursor de {$a}';
$string['icon-default-color'] = 'Color del icono';
$string['icon-default-color_help'] = 'Establecer el color del icono de {$a}';
$string['icon-hover-color'] = 'Color del icono al pasar el cursor';
$string['icon-hover-color_help'] = 'Establecer el color del icono al pasar el cursor de {$a}';
$string['footerfontsize_help'] = 'Establecer el tamaño de la fuente';
$string['footer-color-heading1'] = 'Colores del pie de página';
$string['footer-color-heading2'] = 'Enlaces del pie de página';
$string['footer-color-heading3'] = 'Iconos del pie de página';

$string['footerfontfamily'] = 'Familia de fuente';
$string['footerfontfamily_help'] = 'Familia de fuente';
$string['footerfontsize'] = 'Tamaño de fuente';
$string['footerfontsize_help'] = 'Tamaño de fuente del pie de página';
$string['footerfontweight'] = 'Grosor de fuente';
$string['footerfontweight_help'] = 'Grosor de fuente del pie de página';
$string['footerfonttext-transform'] = 'Mayúsculas y minúsculas';
$string['footerfonttext-transform_help'] = 'Mayúsculas y minúsculas';
$string['footerfontlineheight'] = 'Espaciado entre líneas';
$string['footerfontlineheight_help'] = 'Espaciado entre líneas del pie de página';
$string['footerfontltrspace'] = 'Espaciado entre letras';
$string['footerfontltrspace_help'] = 'Establecer el espaciado entre letras de {$a}';

$string['footer-columntitle-fontfamily'] = 'Familia de fuente';
$string['footer-columntitle-fontfamily_help'] = 'Familia de fuente';
$string['footer-columntitle-fontsize'] = 'Tamaño de fuente';
$string['footer-columntitle-fontsize_help'] = 'Tamaño de fuente del título de columna del pie de página';
$string['footer-columntitle-fontweight'] = 'Grosor de fuente';
$string['footer-columntitle-fontweight_help'] = 'Grosor de fuente del título de columna del pie de página';
$string['footer-columntitle-textransform'] = 'Mayúsculas y minúsculas';
$string['footer-columntitle-textransform_help'] = 'Mayúsculas y minúsculas';
$string['footer-columntitle-lineheight'] = 'Espaciado entre líneas';
$string['footer-columntitle-lineheight_help'] = 'Espaciado entre líneas del título de columna del pie de página';
$string['footer-columntitle-ltrspace'] = 'Espaciado entre letras';
$string['footer-columntitle-ltrspace_help'] = 'Espaciado entre letras del título de columna del pie de página';
$string['footer-columntitle-color'] = 'Color';
$string['footer-columntitle-color_help'] = 'Color';

$string['openinnewtab'] = 'Abrir en una nueva pestaña';
$string['useheaderlogo'] = 'Usar el mismo logotipo del encabezado';
$string['secondaryfooterlogo'] = 'Agregar un nuevo logotipo';
$string['logosettings'] = 'Configuración del logotipo';
$string['loginformsettings'] = 'Configuración del formulario de inicio de sesión';
$string['loginpagesettings'] = 'Configuración de la página de inicio de sesión';
$string['footersecondary'] = 'Área inferior del pie de página';
$string['footer-columns'] = 'Columnas del pie de página';
$string['footer-columntitle-color_help'] = 'Establecer el color del texto de {$a}';
$string['footer-logo-color'] = 'Seleccionar color del ícono o del texto';
$string['footer-logo-color_help'] = 'Seleccionar color del ícono o del texto';

// Customizer login.
$string['login'] = 'Iniciar sesión';
$string['panel'] = 'Panel';
$string['page'] = 'Página';
$string['loginbackgroundopacity'] = 'Opacidad de superposición de fondo';
$string['loginbackgroundopacity_help'] = 'Aplica una superposición a la imagen de fondo de la página de inicio de sesión.';
$string['loginpanelbackgroundcolor_help'] = 'Aplica un color de fondo al panel de inicio de sesión.';
$string['loginpaneltextcolor_help'] = 'Aplica un color de texto al panel de inicio de sesión.';
$string['loginpanelcontentcolor_help'] = 'Aplica un color de texto al contenido del panel de inicio de sesión.';
$string['loginpanellinkcolor_help'] = 'Aplica un color de enlace al panel de inicio de sesión.';
$string['loginpanellinkhovercolor_help'] = 'Aplica un color de enlace al pasar el cursor sobre el panel de inicio de sesión.';
$string['login-panel-position'] = 'Posición del panel de inicio de sesión';
$string['login-panel-position_help'] = 'Establece la posición para el panel de inicio de sesión y registro.';
$string['login-page-info'] = '<p><b>Nota: </b>La página de inicio de sesión no se puede previsualizar en el personalizador porque solo los usuarios desconectados pueden verla. Puedes probar la configuración guardando y abriendo la página de inicio de sesión en modo incógnito.</p>';
$string['login-page-setting'] = 'Estilo de fondo de la página';
$string['login-page-backgroundgradient1'] = 'Seleccionar color 1';
$string['login-page-backgroundgradient2'] = 'Seleccionar color 2';
$string['loginpanelbackgroundcolor'] = 'Color de fondo de la página';
$string['loginpagebackgroundcolor'] = 'Seleccionar color de fondo';
$string['loginpagebackgroundcolor_help'] = 'Establece el fondo de la página de inicio de sesión. Puedes elegir color, degradado o imagen.';
$string['login-page-background_help'] = 'Aplica un color de fondo al panel de inicio de sesión.';

/*Customizer Strings*/
$string['primary'] = 'Primario';

$string['dashboardsettingdesc'] = 'Configuraciones relacionadas con el tablero';
$string['dashboardsetting'] = 'Tablero';
$string['dashboardpage'] = 'Página del tablero';
$string['enabledashboardcoursestats'] = 'Habilitar estadísticas del curso en el tablero';
$string['enabledashboardcoursestatsdesc'] = 'Si está habilitado, se mostrarán las estadísticas del curso en la página del tablero';

$string['customizecontrolsclose'] = "Botón de cierre del personalizador";

// Quick setup customizer.
$string['quicksetup'] = 'Configuración rápida';
$string['pallet'] = 'Paleta';
$string['colorpallet'] = 'Paletas de color';
$string['currentpallet'] = 'Paleta actual';
$string['currentfont'] = 'Fuente actual';
$string['colorpalletdesc'] = 'Descripción de las paletas de color';
$string['preset1'] = 'Preajuste 1';
$string['preset2'] = 'Preajuste 2';
$string['sitefavicon'] = 'Favicon del sitio';

$string['themecolors'] = 'Colores del tema';
$string['brandcolors-heading'] = 'Colores de marca';
$string['border-color'] = 'Color del borde';
$string['border-hover-color'] = 'Color del borde en el puntero';
$string['smart-colors-heading'] = "Aplicar colores globales";
$string['smart-colors-info'] = "<p>Los colores globales y sus tonos se aplicarán al sitio para crear una combinación de colores visualmente impresionante</p><p><b>Nota: </b>Tiene la flexibilidad de personalizar los colores de elementos individuales en cualquier momento simplemente visitando su configuración específica.</p>";
$string['apply'] = "Aplicar";
$string['backgroundsettings'] = 'Configuración de fondo';

$string['ascent-background-color'] = 'Color de fondo ascendente';
$string['ascent-background-color_help'] = 'Establezca el color de fondo ascendente. Este color se aplicará al fondo de las etiquetas en el sitio, excepto en las etiquetas de las tarjetas y el encabezado del curso.';
$string['element-background-color'] = 'Color de fondo del elemento';
$string['element-background-color_help'] = 'Establezca el color de fondo del elemento. Este color se aplica al fondo del texto pequeño, al fondo al pasar el puntero del ratón sobre los textos desplegables, al fondo de los encabezados de sección, a los consejos, etc.';

$string['light-border-color'] = 'Color del borde claro';
$string['themecolors-lightbordercolor_help'] = 'Establezca el color del borde claro. Este color se aplica como borde a los elementos con fondos blancos como el menú desplegable de notificaciones en el encabezado, las tarjetas de curso, la búsqueda de cursos desplegable y en las líneas divisorias de los elementos de bloque, etc.';

$string['medium-border-color'] = 'Color del borde medio';
$string['themecolors-mediumbordercolor_help'] = 'Establezca el color del borde medio. Este color se aplica como el color del borde y el color del divisor. Se aplica específicamente como color del borde para los menús desplegables y la caja de búsqueda, y también como fondo del elemento para el cual se aplica el color de fondo del elemento (Puede encontrar la configuración del color de fondo del elemento en <b>Colores del tema > Configuración de fondo</b>) por ejemplo, el fondo del texto pequeño, el fondo de los encabezados de sección, los consejos, etc.';
$string['borderssettings'] = 'Configuración de bordes';

// Quick Menu settings.
$string['enablequickmenu'] = 'Habilitar menú rápido';
$string['enablequickmenudesc'] = 'Menú flotante de enlaces rápidos para un acceso más fácil a las páginas.';

// Left Navigation Drawer.
$string['createarchivepage'] = 'Página de Archivo de Curso';
$string['createanewcourse'] = 'Crear un Nuevo Curso';
$string['remuisettings'] = 'Configuración de RemUI';

$string['bodysettingslinking'] = 'Vincular configuraciones avanzadas';
$string['bodysettingslinking_help'] = 'Cuando se habilita, las configuraciones de Párrafo Pequeño e Información de Texto Pequeño se vincularán con las configuraciones de cuerpo.';
$string['bodysettingslinked'] = 'Vinculado con configuraciones de cuerpo';
$string['normal-para-font'] = "Párrafo normal";
$string['smallpara-font'] = "Párrafo pequeño";
$string['smallinfo-font'] = "Texto de información pequeño";

$string['interactiveicons'] = 'Iconos interactivos';
$string['noninteractiveicons'] = 'Iconos no interactivos';
$string['singlecolorsicon'] = "Icono de colores únicos";
$string['scicon-color'] = 'Color';
$string['scicon-color_help'] = 'Color del estado de descanso del icono de un solo color';
$string['scicon-hover'] = 'Planeado';
$string['scicon-hover_help'] = 'Color del estado de planeado del icono de un solo color';
$string['scicon-active'] = 'Activo';
$string['scicon-active_help'] = 'Color del estado activo del icono de un solo color';

$string['dualcolorsicon'] = "Icono de doble color";
$string['dcicon-color'] = 'Color';
$string['dcicon-color_help'] = 'Color de estado de reposo del icono de doble color';
$string['dcicon-hover'] = 'Desplazarse';
$string['dcicon-hover_help'] = 'Color de estado de desplazamiento del icono de doble color';
$string['dcicon-active'] = 'Activo';
$string['dcicon-active_help'] = 'Color de estado activo del icono de doble color';

$string['non-interactive-color'] = 'Color';
$string['non-interactive-color_help'] = 'Color del icono no interactivo';
$string['textlink'] = 'Enlace de texto';

$string['header-logo-setting'] = 'Configuración del logotipo del encabezado';
$string['logo-bg-color'] = 'Color de fondo del logotipo';
$string['logo-bg-color_help'] = 'Establece el color de fondo para el logotipo de la marca en el encabezado.';
$string['header-design-settings'] = 'Configuración del diseño del encabezado';
$string['hide-show-menu-item'] = 'Ocultar/Mostrar elemento del menú';
$string['hide-dashboard'] = 'Ocultar el panel';
$string['hide-dashboard_help'] = 'Al habilitar esto, el elemento del Panel del encabezado será ocultado';
$string['hide-home'] = 'Ocultar Inicio';
$string['hide-home_help'] = 'Al habilitar esto, el elemento Inicio del encabezado será ocultado';
$string['hide-my-courses'] = 'Ocultar Mis cursos';
$string['hide-my-courses_help'] = 'Al habilitar esto, los cursos propios y los elementos del curso anidados del encabezado serán ocultados';
$string['hide-site-admin'] = 'Ocultar Administración del sitio';
$string['hide-site-admin_help'] = 'Al habilitar esto, el elemento Administración del sitio del encabezado será ocultado';
$string['hide-recent-courses'] = 'Ocultar Cursos recientes';
$string['hide-recent-courses_help'] = 'Al habilitar esto, el menú desplegable Cursos recientes del encabezado será ocultado';
$string['header-menu-element-bg-color'] = 'Color de fondo del elemento del menú';
$string['header-menu-element-bg-color_help'] = 'Color de fondo del elemento del menú';
$string['header-menu-divider-bg-color'] = 'Color del divisor del elemento del menú';
$string['header-menu-divider-bg-color_help'] = 'Color del divisor del elemento del menú';
$string['hds-iconcolor'] = 'Color del icono del encabezado';
$string['hds-boxshadow'] = 'Sombra del encabezado';

$string['hds-menuitems'] = 'Elementos de menú de encabezado';
$string['hds-menu-fontsize_desc'] = 'Establecer el tamaño de fuente para los elementos de menú de encabezado';
$string['hds-menu-color'] = 'Color del elemento del menú';
$string['hds-menu-color_desc'] = 'Establecer el color del elemento del menú de encabezado';
$string['hds-menu-hover-color'] = 'Color de resaltado del elemento del menú';
$string['hds-menu-hover-color_desc'] = 'Establecer el color de resaltado del elemento del menú de encabezado';
$string['hds-menu-active-color'] = 'Color activo del elemento del menú';
$string['hds-menu-active-color_desc'] = 'Establecer el color activo del elemento del menú de encabezado';

$string['hds-icon-color'] = 'Color de los iconos';
$string['hds-icon-color_help'] = 'Color de los iconos del menú de encabezado';
$string['hds-icon-hover-color'] = 'Color de resaltado de los iconos';
$string['hds-icon-hover-color_help'] = 'Color de resaltado de los iconos del menú de encabezado';
$string['hds-icon-active-color'] = 'Color activo de los iconos';
$string['hds-icon-active-color_help'] = 'Color activo de los iconos del menú de encabezado';

$string['preset1'] = "Preconfiguración 1";
$string['preset2'] = "Preconfiguración 2";
$string['preset3'] = "Preconfiguración 3";
$string['fonts'] = "Fuentes";
$string['show'] = "Mostrar";
$string['hide'] = "Ocultar";

$string['other-bg-color'] = 'Otros colores de fondo';
$string['text-link-panel'] = 'Enlace de texto';
$string['colorpalletes'] = 'Paletas de colores';
$string['selectpallete'] = 'Seleccionar paleta';
$string['selectfont'] = 'Seleccionar fuente';

$string['socialiconspanel'] = "Panel de iconos sociales";
$string['social-icons-info'] = "<p>Para mostrar los iconos de las redes sociales en la parte inferior de cualquier columna con contenido, vaya a <b>Footer > Área principal del pie de página > Widget > Seleccionar tipo = Contenido </b> y active la configuración de mostrar los iconos de las redes sociales.</p>";
$string['social-icons-heading'] = "Iconos de redes sociales";
$string["custommenulinktext"] = 'Elementos de menú personalizados';
$string["custommenulink"] = '<h6>Elementos de menú personalizados</h6><p> Para agregar/editar/eliminar elementos de menú personalizados, vaya a Administración del sitio > Apariencia > Configuración del tema > <a href="{$a}/admin/settings.php?section=themesettings#admin-custommenuitems" target ="_blank" class="text-decoration-none">Elementos de menú personalizados</a> <p>';
$string['note'] = 'Nota';
$string['social-media-selection-note'] = "<p>Presione Ctrl para seleccionar/deseleccionar las redes sociales</p>";

$string['editmodeswitch'] = "Interruptor de modo de edición";
$string['continue'] = 'Continuar';
$string['viewcourse'] = 'Ver curso';
$string['hiddencourse'] = 'Curso oculto';
$string['openquickmenu'] = 'Abrir menú rápido';
$string['closequickmenu'] = 'Cerrar menú rápido';
$string['start'] = 'Inicio';

$string['readmore'] = 'Leer más';
$string['readless'] = 'Leer menos';
$string['setting'] = 'Configuración';
$string['lastaccess'] = 'Último acceso';
$string['certificate'] = 'Certificados';
$string['badge'] = 'Insignias';
$string['firstname'] = 'Nombre';
$string['lastname'] = 'Apellido';
$string['badgefrom'] = 'Insignias de {$a}';
$string['timelinenoevenettext'] = 'No hay actividades próximas';
$string['description'] = 'Descripción';
$string['instructorcounttitle'] = "Profesores adicionales disponibles en el curso";

$string['personalizer'] = "Personalizador visual";
$string['edwpersonalizer'] = "Personalizador visual";
$string['editinpersonalizer'] = "Editar con Personalizador";
$string['activepersonalizer'] = "Viendo en Edwiser Personalizador.";
$string['searchtotalcount'] = 'Mostrando {$a} resultados';
$string['noresutssearchmsg'] = "<h4 class ='p-p-6 text-center m-0 '>Nada que mostrar</h4>";
$string['globarsearchresult'] = "Resultados de búsqueda global";
$string['searchresultdesctext'] = 'Mostrando resultados para';
$string['noresultfoundmg'] = "<h4 class ='p-p-6 text-center m-0 '>No se encontraron resultados</h4>";

$string['enrol_relatedcourses'] = 'Cursos relacionados';
$string['enrol_latestcourses'] = 'Últimos cursos';
$string['enrol_coursecardesc'] = 'Descubre tu programa perfecto en nuestros cursos.';
$string['enrol_viewall'] = 'Ver todo';

$string['showrelatedcourse'] = "Mostrar cursos relacionados";
$string['showrelatedcoursedesc'] = "Activa esta opción para mostrar los cursos relacionados en la página de inscripción.";

$string['showlatestcourse'] = 'Mostrar los últimos cursos';
$string['showlatestcoursedesc'] = 'Activa esta opción para mostrar los últimos cursos en la página de inscripción.';

$string['latestcoursecount'] = 'Recuento de bloques de cursos más recientes';
$string['latestcoursecountdesc'] = 'Establezca un número para los últimos cursos mostrados en la página de inscripción';

$string['allcourescattext'] = 'Todas las categorías';
$string['archivecoursecounttext'] = 'Cursos';
$string['coursecardlessonstext'] = 'Lecciones';
$string['prevsectionbuttontext'] = 'Sección anterior';
$string['nextsectionbuttontext'] = 'Siguiente sección';

$string['eight'] = '8';
$string['twelve'] = '12';
$string['sixteen'] = '16';
$string['twenty'] = '20';

$string['resume'] = 'Reanudar';
$string['start'] = 'Comenzar';
$string['completed'] = 'Completado';

$string['siteannouncementheading'] = 'Anuncio de todo el sitio';
$string['siteannouncementheadingdesc'] = 'Habilitar el anuncio de todo el sitio para todos los usuarios.';
$string['seosettingsheading'] = 'Configuración de SEO';
$string['seosettingsheadingdesc'] = 'Optimizar la visibilidad de su sitio web en los motores de búsqueda.';
$string['sitecustomizationhead'] = 'Personalización del sitio';
$string['sitecustomizationheaddesc'] = 'Elija fuentes, tamaño de diseño para las páginas y puede personalizar con CSS.';
$string['advancefeatureshead'] = 'Configuración de funciones avanzadas';
$string['advancefeaturesheaddesc'] = 'Mejore su experiencia de aprendizaje con configuraciones avanzadas.';
$string['mainfooterareahead'] = 'Área de pie de página principal';
$string['mainfooterareaheaddesc'] = 'Configuración del área de pie de página principal';

// Configuración de peso de encabezado avanzado
$string['heading-adv-setting'] = 'Configuración de peso de fuente';
$string['heading-regular-fontweight'] = 'Peso de fuente regular';
$string['heading-semibold-fontweight'] = 'Peso de fuente seminegrita';
$string['heading-bold-fontweight'] = 'Peso de fuente negrita';
$string['heading-exbold-fontweight'] = 'Peso de fuente extranegrilla';

// Usage tracking.
$string["usagedatatracker"] = "Usage data tracker";
$string['enableusagetracking'] = "Habilitar tracking de uso";
$string['enableusagetrackingdesc'] = "<strong>AVISO DE SEGUIMIENTO DE USO</strong>

<hr class='text-muted' />

<p>Edwiser de ahora en adelante recopilará datos anónimos para generar estadísticas de uso del producto.</p>

<p>Esta información nos ayudará a guiar el desarrollo en la dirección correcta y la comunidad Edwiser prosperará.</p>

<p>Dicho esto, no recopilamos sus datos personales ni de sus alumnos durante este proceso. Puede desactivar esto desde el plugin siempre que desee optar por no participar en este servicio.</p>

<p>Una visión general de los datos recopilados está disponible <strong><a href='https://forums.edwiser.org/topic/67/anonymously-tracking-the-usage-of-edwiser-products' target='_blank'>aquí</a></strong>.</p>";

$string['profileinterestinfo'] = 'Para editar intereses, vaya a Configuración del perfil -> Editar perfil ->';
$string['profileinterest'] = 'Intereses';
$string['citytowntext'] = 'Ciudad/Pueblo';
$string['selectcountrystring'] = 'Seleccione un país...';
