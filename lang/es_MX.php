<?php

/**
 * Spanish (Mexico) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('es_MX', $lang) && is_array($lang['es_MX'])) {
	$lang['es_MX'] = array_merge($lang['en_US'], $lang['es_MX']);
} else {
	$lang['es_MX'] = $lang['en_US'];
}

$lang['es_MX']['AdvancedSearchForm']['ALLWORDS'] = 'Todas las Palabras';
$lang['es_MX']['AdvancedSearchForm']['ATLEAST'] = 'Al menos Una de las Palabras';
$lang['es_MX']['AdvancedSearchForm']['EXACT'] = 'Frase Exacta';
$lang['es_MX']['AdvancedSearchForm']['FROM'] = 'Desde';
$lang['es_MX']['AdvancedSearchForm']['GO'] = 'Ir';
$lang['es_MX']['AdvancedSearchForm']['LASTUPDATED'] = 'Último actualizado';
$lang['es_MX']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'ÚLTIMO ACTUALIZADO';
$lang['es_MX']['AdvancedSearchForm']['PAGETITLE'] = 'Título de Página';
$lang['es_MX']['AdvancedSearchForm']['RELEVANCE'] = 'Reelevancia';
$lang['es_MX']['AdvancedSearchForm']['SEARCHBY'] = 'BUSCAR POR';
$lang['es_MX']['AdvancedSearchForm']['SORTBY'] = 'ORDENAR RESULTADOS POR';
$lang['es_MX']['AdvancedSearchForm']['TO'] = 'Hasta';
$lang['es_MX']['AdvancedSearchForm']['WITHOUT'] = 'Sin las Palabras';
$lang['es_MX']['BankAccountField']['VALIDATIONJS'] = 'Por favor ingresa un número de cuenta bancaria válido';
$lang['es_MX']['BasicAuth']['ENTERINFO'] = 'Por favor ingresa tu nombre de usuario y contraseña.';
$lang['es_MX']['BasicAuth']['ERRORNOTADMIN'] = 'El usuario no es administrador.';
$lang['es_MX']['BasicAuth']['ERRORNOTREC'] = 'No se reconoce el nombre de usuario / contraseña';
$lang['es_MX']['BBCodeParser']['ALIGNEMENT'] = 'Alineación';
$lang['es_MX']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'alineado a la derecha';
$lang['es_MX']['BBCodeParser']['BOLD'] = 'Texto en negrita';
$lang['es_MX']['BBCodeParser']['BOLDEXAMPLE'] = 'Negrita';
$lang['es_MX']['BBCodeParser']['CODE'] = 'Bloque de Código';
$lang['es_MX']['BBCodeParser']['CODEDESCRIPTION'] = 'Bloque de código sin formato';
$lang['es_MX']['BBCodeParser']['CODEEXAMPLE'] = 'Bloque de código';
$lang['es_MX']['BBCodeParser']['COLORED'] = 'Texto coloreado';
$lang['es_MX']['BBCodeParser']['COLOREDEXAMPLE'] = 'texto azul';
$lang['es_MX']['BBCodeParser']['EMAILLINK'] = 'Vínculo a correo-e';
$lang['es_MX']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Crea un vínculo a una dirección de correo-e';
$lang['es_MX']['BBCodeParser']['IMAGE'] = 'Imagen';
$lang['es_MX']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Mostrar imagen en tu mensaje';
$lang['es_MX']['BBCodeParser']['ITALIC'] = 'Texto en itálica';
$lang['es_MX']['BBCodeParser']['ITALICEXAMPLE'] = 'itálicas';
$lang['es_MX']['BBCodeParser']['LINK'] = 'Vínculo a sitio ewb';
$lang['es_MX']['BBCodeParser']['LINKDESCRIPTION'] = 'Vínculo a otra URL o sitio web';
$lang['es_MX']['BBCodeParser']['STRUCK'] = 'Texto tachado';
$lang['es_MX']['BBCodeParser']['STRUCKEXAMPLE'] = 'Tachado';
$lang['es_MX']['BBCodeParser']['UNDERLINE'] = 'Texto subrayado';
$lang['es_MX']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Texto simple';
$lang['es_MX']['BBCodeParser']['UNORDERED'] = 'Lista desordenada';
$lang['es_MX']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Lista desordenada';
$lang['es_MX']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'elemento 1 desordenado';
$lang['es_MX']['BBCodeParser']['UNORDEREDEXAMPLE2'] = 'elemento 2 desordenado';
$lang['es_MX']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Haz cambiado tu contraseña';
$lang['es_MX']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Ahora puedes utilizar las siguientes credenciales para ingresar:';
$lang['es_MX']['ChangePasswordEmail.ss']['HELLO'] = 'Hey';
$lang['es_MX']['ComplexTableField.ss']['ADDITEM'] = 'Agregar';
$lang['es_MX']['ComplexTableField.ss']['NOITEMSFOUND'] = 'No se encontraron elementos';
$lang['es_MX']['ComplexTableField.ss']['SORTASC'] = 'Orden ascendente';
$lang['es_MX']['ComplexTableField.ss']['SORTDESC'] = 'Orden descendente';
$lang['es_MX']['ComplexTableField_popup.ss']['NEXT'] = 'Siguiente';
$lang['es_MX']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Anterior';
$lang['es_MX']['CompositeDateField']['DAY'] = 'Día';
$lang['es_MX']['CompositeDateField']['DAYJS'] = 'día';
$lang['es_MX']['CompositeDateField']['MONTH'] = 'Mes';
$lang['es_MX']['CompositeDateField']['MONTHJS'] = 'mes';
$lang['es_MX']['CompositeDateField']['VALIDATIONJS1'] = 'Por favor asegúrate que has establecido el';
$lang['es_MX']['CompositeDateField']['VALIDATIONJS2'] = 'correctamente.';
$lang['es_MX']['CompositeDateField']['YEARJS'] = 'año';
$lang['es_MX']['ConfirmedPasswordField']['ATLEAST'] = 'Las contraseñas deben ser al menos de %s caracteres de largo.';
$lang['es_MX']['ConfirmedPasswordField']['BETWEEN'] = 'Las contraseñas deben ser de %s a %s caracteres de largo.';
$lang['es_MX']['ConfirmedPasswordField']['HAVETOMATCH'] = 'La contraseña tiene que coincidir.';
$lang['es_MX']['ConfirmedPasswordField']['LEASTONE'] = 'Las contraseñas deben tener al menos un dígito y un caracter alfanumérico.';
$lang['es_MX']['ConfirmedPasswordField']['MAXIMUM'] = 'Las contraseñas deben ser de al menos %s caracteres de largo.';
$lang['es_MX']['ConfirmedPasswordField']['NOEMPTY'] = 'La contraseña no puede estar vacía.';
$lang['es_MX']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Debes iniciar sesión con tu contraseña CMS para poder ver el contenido del boceto archivado . <a href="%s">Haz click aquí para regresar al sitio publicado.</a>';
$lang['es_MX']['Controller']['FILE'] = 'Archivo';
$lang['es_MX']['Controller']['IMAGE'] = 'Imagen';
$lang['es_MX']['CreditCardField']['FIRST'] = 'primero';
$lang['es_MX']['CreditCardField']['FOURTH'] = 'cuarto';
$lang['es_MX']['CreditCardField']['SECOND'] = 'segundo';
$lang['es_MX']['CreditCardField']['THIRD'] = 'tercero';
$lang['es_MX']['CreditCardField']['VALIDATIONJS1'] = 'Por favor asegúrate que has ingresado el';
$lang['es_MX']['CreditCardField']['VALIDATIONJS2'] = 'número de tarjeta de crédito correctamente.';
$lang['es_MX']['CurrencyField']['CURRENCYSYMBOL'] = '$';
$lang['es_MX']['CurrencyField']['VALIDATIONJS'] = 'Por favor ingresa una moneda válida.';
$lang['es_MX']['Date']['AGO'] = 'hace';
$lang['es_MX']['Date']['AWAY'] = 'última';
$lang['es_MX']['Date']['DAY'] = 'día';
$lang['es_MX']['Date']['DAYS'] = 'días';
$lang['es_MX']['Date']['HOUR'] = 'hora';
$lang['es_MX']['Date']['HOURS'] = 'horas';
$lang['es_MX']['Date']['MIN'] = 'minuto';
$lang['es_MX']['Date']['MINS'] = 'minutos';
$lang['es_MX']['Date']['MONTH'] = 'mes';
$lang['es_MX']['Date']['MONTHS'] = 'meses';
$lang['es_MX']['Date']['SEC'] = 'segundo';
$lang['es_MX']['Date']['SECS'] = 'segundos';
$lang['es_MX']['Date']['YEAR'] = 'año';
$lang['es_MX']['Date']['YEARS'] = 'años';
$lang['es_MX']['DateField']['NODATESET'] = 'No se ha especificado la fecha';
$lang['es_MX']['DateField']['NOTSET'] = 'no especificada';
$lang['es_MX']['DateField']['TODAY'] = 'ahora';
$lang['es_MX']['DateField']['VALIDATIONJS'] = 'Por favor ingresa un formato de fecha válido (DD/MM/AAAA).';
$lang['es_MX']['DateField']['VALIDDATEFORMAT'] = 'Por favor ingresa una fecha en formato válido (DD/MM/YYYY).';
$lang['es_MX']['DMYDateField']['VALIDDATEFORMAT'] = 'Por favor ingresa un formato de fecha válido (DD-MM-AAAA).';
$lang['es_MX']['DropdownField']['CHOOSE'] = '(Selecciona)';
$lang['es_MX']['EmailField']['VALIDATION'] = 'Por favor ingresa una dirección de correo-e';
$lang['es_MX']['EmailField']['VALIDATIONJS'] = 'Por favor ingresa una dirección de correo electrónico.';
$lang['es_MX']['ErrorPage']['400'] = '400 - Petición Incorrecta';
$lang['es_MX']['ErrorPage']['401'] = '401 - No estás autorizado';
$lang['es_MX']['ErrorPage']['403'] = '403 - Acceso Restringido';
$lang['es_MX']['ErrorPage']['404'] = '404 - No se encuentra';
$lang['es_MX']['ErrorPage']['405'] = '405 - Método No Permitido';
$lang['es_MX']['ErrorPage']['406'] = '406 - No es Aceptable';
$lang['es_MX']['ErrorPage']['407'] = '407 - Se Requiere Autentificación del Proxy';
$lang['es_MX']['ErrorPage']['408'] = '408 - La Petición Excede Del Tiempo Autorizado';
$lang['es_MX']['ErrorPage']['409'] = '409 - Existe Un Conflicto';
$lang['es_MX']['ErrorPage']['410'] = '410 - Reubicado';
$lang['es_MX']['ErrorPage']['411'] = '411 - Requiere Longitud';
$lang['es_MX']['ErrorPage']['412'] = '412 - Falló la precondición';
$lang['es_MX']['ErrorPage']['413'] = '413 - Elemento solicitado muy largo';
$lang['es_MX']['ErrorPage']['414'] = '414 - La URI solicitada es muy larga';
$lang['es_MX']['ErrorPage']['415'] = '415 - Tipo de medio sin soporte';
$lang['es_MX']['ErrorPage']['416'] = '416 - No Satisface el Rango de Petición';
$lang['es_MX']['ErrorPage']['417'] = '417 - Esperaba otra cosa';
$lang['es_MX']['ErrorPage']['500'] = '500 - Error Interno del Servidor';
$lang['es_MX']['ErrorPage']['501'] = '501 - No Implementado';
$lang['es_MX']['ErrorPage']['502'] = '502 - Puerta de acceso equivocada';
$lang['es_MX']['ErrorPage']['503'] = '503 - Fuera de Servicio';
$lang['es_MX']['ErrorPage']['504'] = '504 - Excesivo Tiempo en la Puerta de Acceso';
$lang['es_MX']['ErrorPage']['505'] = '505 - Versión HTTP Sin Soporte';
$lang['es_MX']['ErrorPage']['CODE'] = 'Código de Error';
$lang['es_MX']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Disculpa, parece que estás tratando de ingresar a una página que no existe.</p><p>Por favor verifica la URL que deseas visitar e inténtalo de nuevo.</p>';
$lang['es_MX']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Página inexistente';
$lang['es_MX']['File']['NOFILESIZE'] = 'El tamaño del fichero es de cero bytes.';
$lang['es_MX']['FileIframeField']['NOTEADDFILES'] = 'Puedes agregar archivos una vez que hayas guardado por primer vez.';
$lang['es_MX']['Folder']['CREATED'] = 'El Primero';
$lang['es_MX']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Eliminar  miniaturas de imágenes sin utilizar';
$lang['es_MX']['Folder']['DELSELECTED'] = 'Eliminar ficheros seleccionados';
$lang['es_MX']['Folder']['DETAILSTAB'] = 'Detalles';
$lang['es_MX']['Folder']['FILENAME'] = 'Nombre de fichero';
$lang['es_MX']['Folder']['FILESTAB'] = 'Ficheros';
$lang['es_MX']['Folder']['LASTEDITED'] = 'El Último Actualizado';
$lang['es_MX']['Folder']['TITLE'] = 'Título';
$lang['es_MX']['Folder']['TYPE'] = 'Tipo';
$lang['es_MX']['Folder']['UNUSEDFILESTAB'] = 'Ficheros sin utilizar';
$lang['es_MX']['Folder']['UNUSEDFILESTITLE'] = 'Ficheros sin utilizar';
$lang['es_MX']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Miniaturas de imágenes sin utilizar';
$lang['es_MX']['Folder']['UPLOADTAB'] = 'Subido';
$lang['es_MX']['Folder']['URL'] = 'URL';
$lang['es_MX']['Folder']['VIEWASSET'] = 'Ver activo';
$lang['es_MX']['Folder']['VIEWEDITASSET'] = 'Ver/Editar Activo';
$lang['es_MX']['ForgotPasswordEmail.ss']['HELLO'] = 'Hey';
$lang['es_MX']['ForgotPasswordEmail.ss']['TEXT1'] = 'Aquí estás';
$lang['es_MX']['ForgotPasswordEmail.ss']['TEXT2'] = 'vínculo para restablecer la contraseña';
$lang['es_MX']['ForgotPasswordEmail.ss']['TEXT3'] = 'para';
$lang['es_MX']['Form']['DATENOTSET'] = '(Ninguna fecha ingresada)';
$lang['es_MX']['Form']['FIELDISREQUIRED'] = '%s es obligatorio';
$lang['es_MX']['Form']['LANGAOTHER'] = 'Otros lenguajes';
$lang['es_MX']['Form']['LANGAVAIL'] = 'Lenguajes disponibles';
$lang['es_MX']['Form']['NOTSET'] = '(no ingresado)';
$lang['es_MX']['Form']['SAVECHANGES'] = 'Guardar Cambios';
$lang['es_MX']['Form']['VALIDATIONALLDATEVALUES'] = 'Por favor asegúrate de ingresar todos los valores de fecha';
$lang['es_MX']['Form']['VALIDATIONBANKACC'] = 'Por favor ingresa un número bancario válido';
$lang['es_MX']['Form']['VALIDATIONCREDITNUMBER'] = 'Por favor asegúrate de ingresar correctamente el número de la tarjeta de crédito %s ';
$lang['es_MX']['Form']['VALIDATIONFAILED'] = 'Falló la validación';
$lang['es_MX']['Form']['VALIDATIONNOTUNIQUE'] = 'El valor ingresado no es único';
$lang['es_MX']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Las contraeñas no son iguales';
$lang['es_MX']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Las contraseñas no pueden estar vacías';
$lang['es_MX']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Las contraseñas deben tener al menos un dígito y una letra.';
$lang['es_MX']['Form']['VALIDATOR'] = 'Verificador';
$lang['es_MX']['Form']['VALIDCURRENCY'] = 'Por favor ingresa un valor monetario válido.';
$lang['es_MX']['FormField']['NONE'] = 'ninguno';
$lang['es_MX']['GhostPage']['NOLINKED'] = 'Esta página virtual no tiene página ligada.';
$lang['es_MX']['GSTNumberField']['VALIDATION'] = 'Por favor ingresa un Número GST válido';
$lang['es_MX']['GSTNumberField']['VALIDATIONJS'] = 'Por favor ingresa un número GST válido';
$lang['es_MX']['HtmlEditorField']['ALTTEXT'] = 'Descripción';
$lang['es_MX']['HtmlEditorField']['ANCHOR'] = 'Insertar/Editar ancla';
$lang['es_MX']['HtmlEditorField']['ANCHORVALUE'] = 'Anclar';
$lang['es_MX']['HtmlEditorField']['BULLETLIST'] = 'Lista de viñetas';
$lang['es_MX']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Alinear al centro';
$lang['es_MX']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Justificar';
$lang['es_MX']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Alinear a la izquierda';
$lang['es_MX']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Alinear a la derecha';
$lang['es_MX']['HtmlEditorField']['BUTTONBOLD'] = 'Negrita (Ctrl+B)';
$lang['es_MX']['HtmlEditorField']['BUTTONEDITIMAGE'] = 'Modificar imagen';
$lang['es_MX']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Insertar Flash';
$lang['es_MX']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Insertar imagen';
$lang['es_MX']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Insertar enlace';
$lang['es_MX']['HtmlEditorField']['BUTTONITALIC'] = 'Cursiva (Ctrl-I)';
$lang['es_MX']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Quitar enlace';
$lang['es_MX']['HtmlEditorField']['BUTTONSTRIKE'] = 'tachado';
$lang['es_MX']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Subrayado (Ctrl+U)';
$lang['es_MX']['HtmlEditorField']['CHARMAP'] = 'Insertar símbolo';
$lang['es_MX']['HtmlEditorField']['CLOSE'] = 'cerrar';
$lang['es_MX']['HtmlEditorField']['COPY'] = 'Copiar (Ctrl+C)';
$lang['es_MX']['HtmlEditorField']['CREATEFOLDER'] = 'crear carpeta';
$lang['es_MX']['HtmlEditorField']['CSSCLASS'] = 'Alineación / estilo';
$lang['es_MX']['HtmlEditorField']['CSSCLASSCENTER'] = 'Centrado';
$lang['es_MX']['HtmlEditorField']['CSSCLASSLEFT'] = 'A la izquierda, justificando texto.';
$lang['es_MX']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'A la izquierda, en él mismo.';
$lang['es_MX']['HtmlEditorField']['CSSCLASSRIGHT'] = 'A la derecha, justificando texto.';
$lang['es_MX']['HtmlEditorField']['CUT'] = 'Cortar (Ctrl+X)';
$lang['es_MX']['HtmlEditorField']['DELETECOL'] = 'Eliminar columna';
$lang['es_MX']['HtmlEditorField']['DELETEROW'] = 'Eliminar renglón';
$lang['es_MX']['HtmlEditorField']['EDITCODE'] = 'Modificar Código HTML';
$lang['es_MX']['HtmlEditorField']['EMAIL'] = 'Dirección de correo-e';
$lang['es_MX']['HtmlEditorField']['FILE'] = 'Archivo';
$lang['es_MX']['HtmlEditorField']['FLASH'] = 'Flash';
$lang['es_MX']['HtmlEditorField']['FOLDER'] = 'Carpeta';
$lang['es_MX']['HtmlEditorField']['FOLDERCANCEL'] = 'cancelar';
$lang['es_MX']['HtmlEditorField']['FORMATADDR'] = 'Domicilio';
$lang['es_MX']['HtmlEditorField']['FORMATH1'] = 'Encabezado 1';
$lang['es_MX']['HtmlEditorField']['FORMATH2'] = 'Encabezado 2';
$lang['es_MX']['HtmlEditorField']['FORMATH3'] = 'Encabezado 3';
$lang['es_MX']['HtmlEditorField']['FORMATH4'] = 'Encabezado 4';
$lang['es_MX']['HtmlEditorField']['FORMATH5'] = 'Encabezado 5';
$lang['es_MX']['HtmlEditorField']['FORMATH6'] = 'Encabezado 6';
$lang['es_MX']['HtmlEditorField']['FORMATP'] = 'Párrafo';
$lang['es_MX']['HtmlEditorField']['HR'] = 'Insertar línea horizontal';
$lang['es_MX']['HtmlEditorField']['IMAGE'] = 'Imagen';
$lang['es_MX']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Dimensiones';
$lang['es_MX']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Alto';
$lang['es_MX']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Ancho';
$lang['es_MX']['HtmlEditorField']['INDENT'] = 'Aumentar sangría';
$lang['es_MX']['HtmlEditorField']['INSERTCOLAFTER'] = 'Insertar columna después';
$lang['es_MX']['HtmlEditorField']['INSERTCOLBEF'] = 'Insertar columna antes';
$lang['es_MX']['HtmlEditorField']['INSERTROWAFTER'] = 'Insertar renglón abajo';
$lang['es_MX']['HtmlEditorField']['INSERTROWBEF'] = 'Insertar renglón arriba';
$lang['es_MX']['HtmlEditorField']['INSERTTABLE'] = 'Insertar tabla';
$lang['es_MX']['HtmlEditorField']['LINK'] = 'Enlace';
$lang['es_MX']['HtmlEditorField']['LINKANCHOR'] = 'Anclar en ésta página';
$lang['es_MX']['HtmlEditorField']['LINKDESCR'] = 'Descripción del enlace';
$lang['es_MX']['HtmlEditorField']['LINKEMAIL'] = 'Dirección de correo-e';
$lang['es_MX']['HtmlEditorField']['LINKEXTERNAL'] = 'Otro sitio web';
$lang['es_MX']['HtmlEditorField']['LINKFILE'] = 'Descargar archivo';
$lang['es_MX']['HtmlEditorField']['LINKINTERNAL'] = 'Página en el sitio';
$lang['es_MX']['HtmlEditorField']['LINKOPENNEWWIN'] = '¿Abrir enlace en una nueva ventana?';
$lang['es_MX']['HtmlEditorField']['LINKTO'] = 'Enlazar a';
$lang['es_MX']['HtmlEditorField']['OK'] = 'Bien';
$lang['es_MX']['HtmlEditorField']['OL'] = 'Lista numerada';
$lang['es_MX']['HtmlEditorField']['OUTDENT'] = 'Disminuir sangría';
$lang['es_MX']['HtmlEditorField']['PAGE'] = 'Página';
$lang['es_MX']['HtmlEditorField']['PASTE'] = 'Pegar (Ctrl+V)';
$lang['es_MX']['HtmlEditorField']['PASTETEXT'] = 'Pegar texto plano';
$lang['es_MX']['HtmlEditorField']['PASTEWORD'] = 'Pegar desde Word';
$lang['es_MX']['HtmlEditorField']['REDO'] = 'Rehacer (Ctrl+Y)';
$lang['es_MX']['HtmlEditorField']['SELECTALL'] = 'Seleccionar Todo (Ctrl+A)';
$lang['es_MX']['HtmlEditorField']['UNDO'] = 'Deshacer (Ctrl+Z)';
$lang['es_MX']['HtmlEditorField']['UNLINK'] = 'Remover enlace';
$lang['es_MX']['HtmlEditorField']['UPLOAD'] = 'subir';
$lang['es_MX']['HtmlEditorField']['URL'] = 'URL';
$lang['es_MX']['HtmlEditorField']['VISUALAID'] = 'Muestra/Oculta pautas';
$lang['es_MX']['ImageField']['NOTEADDIMAGES'] = 'Puedes agregar imágenes después de guardarlo la primer vez.';
$lang['es_MX']['ImageUplaoder']['ONEFROMFILESTORE'] = 'Con uno del almacén de archivos';
$lang['es_MX']['ImageUploader']['ATTACH'] = 'Adjuntar %s';
$lang['es_MX']['ImageUploader']['DELETE'] = 'Eliminar %s';
$lang['es_MX']['ImageUploader']['FROMCOMPUTER'] = 'Desde tu computadora';
$lang['es_MX']['ImageUploader']['FROMFILESTORE'] = 'Del almacén de archivos';
$lang['es_MX']['ImageUploader']['ONEFROMCOMPUTER'] = 'Con uno de tu computadora';
$lang['es_MX']['ImageUploader']['REALLYDELETE'] = '¿Realmente deseas remover este %s?';
$lang['es_MX']['ImageUploader']['REPLACE'] = 'Reemplazar %s';
$lang['es_MX']['Image_iframe.ss']['TITLE'] = 'Subiendo Imagen Iframe';
$lang['es_MX']['Member']['ADDRESS'] = 'Dirección';
$lang['es_MX']['Member']['BUTTONCHANGEPASSWORD'] = 'Cambiar Contraseña';
$lang['es_MX']['Member']['BUTTONLOGIN'] = 'Ingresar';
$lang['es_MX']['Member']['BUTTONLOGINOTHER'] = 'Ingresar como alguien más';
$lang['es_MX']['Member']['BUTTONLOSTPASSWORD'] = 'Olvidé mi contraseña';
$lang['es_MX']['Member']['CONFIRMNEWPASSWORD'] = 'Confirmar Nueva Contraseña';
$lang['es_MX']['Member']['CONFIRMPASSWORD'] = 'Confirmar contraseña';
$lang['es_MX']['Member']['CONTACTINFO'] = 'Información de Contacto';
$lang['es_MX']['Member']['EMAIL'] = 'Correo-e';
$lang['es_MX']['Member']['EMAILPASSWORDAPPENDIX'] = 'Tu contraseña ha sido cambiada. Por favor guarda este correo, para referencia futura.';
$lang['es_MX']['Member']['EMAILPASSWORDINTRO'] = 'Aquí está tu nueva contraseña';
$lang['es_MX']['Member']['EMAILSIGNUPINTRO1'] = 'Gracias por registrarte como nuevo miembro, abajo se enumeran en detalle tus datos para futura referencia.';
$lang['es_MX']['Member']['EMAILSIGNUPINTRO2'] = 'Puedes ingresar al sitio web utilizando las credenciales listadas en seguida';
$lang['es_MX']['Member']['EMAILSIGNUPSUBJECT'] = 'Gracias por registrarte';
$lang['es_MX']['Member']['ERRORLOCKEDOUT'] = 'Tu cuenta se ha deshabilitado temporalmente debido a varios intentos de ingresar infructuosos. Por favor inténtalo de nuevo en 20 minutos.';
$lang['es_MX']['Member']['ERRORNEWPASSWORD'] = 'Has ingresado tu nueva contraseña diferentemente, intenta de nuevo';
$lang['es_MX']['Member']['ERRORPASSWORDNOTMATCH'] = 'Tu contraseña actual no encaja, por favor inténtalo de nuevo';
$lang['es_MX']['Member']['ERRORWRONGCRED'] = 'No parece correcta la dirección de correo-e o la contraseña. Por favor inténtalo de nuevo.';
$lang['es_MX']['Member']['FIRSTNAME'] = 'Primer Nombre';
$lang['es_MX']['Member']['GREETING'] = 'Bienvenido';
$lang['es_MX']['Member']['INTERFACELANG'] = 'Lenguaje de interfaz';
$lang['es_MX']['Member']['LOGGEDINAS'] = 'Estás registrado como %s.';
$lang['es_MX']['Member']['MOBILE'] = 'Celular';
$lang['es_MX']['Member']['NAME'] = 'Nombre';
$lang['es_MX']['Member']['NEWPASSWORD'] = 'Nueva contraseña';
$lang['es_MX']['Member']['PASSWORD'] = 'Contraseña';
$lang['es_MX']['Member']['PASSWORDCHANGED'] = 'Se ha cambiado tu contraseña y, se ha enviado una copia a tu correo-e';
$lang['es_MX']['Member']['PERSONALDETAILS'] = 'Detalles Personales';
$lang['es_MX']['Member']['PHONE'] = 'Teléfono';
$lang['es_MX']['Member']['REMEMBERME'] = '¿Recordarme la siguiente vez?';
$lang['es_MX']['Member']['SUBJECTPASSWORDCHANGED'] = 'Tu contraseña ha sido cambiada';
$lang['es_MX']['Member']['SUBJECTPASSWORDRESET'] = 'Enlace para reasignar tu contraseña';
$lang['es_MX']['Member']['SURNAME'] = 'Apellido';
$lang['es_MX']['Member']['USERDETAILS'] = 'Detalles de Usuario';
$lang['es_MX']['Member']['VALIDATIONMEMBEREXISTS'] = 'Ya existe un miembro con este correo-e';
$lang['es_MX']['Member']['WELCOMEBACK'] = 'Bienvenido de nuevo, %s';
$lang['es_MX']['Member']['YOUROLDPASSWORD'] = 'Contraseña anterior';
$lang['es_MX']['MemberAuthenticator']['TITLE'] = 'Correo-e y Contraseña';
$lang['es_MX']['NumericField']['VALIDATION'] = '\'%s\' no es un número, este campo únicamente acepta números';
$lang['es_MX']['NumericField']['VALIDATIONJS'] = 'no es un número, únicamente se pueden ingresar números en éste campo.';
$lang['es_MX']['Permission']['FULLADMINRIGHTS'] = 'Privilegios administrativos completos';
$lang['es_MX']['Permission']['PERMSDEFINED'] = 'Están definidos los siguientes códigos de permiso';
$lang['es_MX']['PhoneNumberField']['VALIDATION'] = 'Por favor ingresa un número telefónico válido';
$lang['es_MX']['RedirectorPage']['HASBEENSETUP'] = 'Se ha instalado una página de redirección  sin algún lugar a donde redireccionar.';
$lang['es_MX']['RedirectorPage']['HEADER'] = 'Esta página dirigirá al usuarios a otra página';
$lang['es_MX']['RedirectorPage']['OTHERURL'] = 'Otro URL del sitio web';
$lang['es_MX']['RedirectorPage']['REDIRECTTO'] = 'Redirigir a';
$lang['es_MX']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Otro sitio web';
$lang['es_MX']['RedirectorPage']['REDIRECTTOPAGE'] = 'Una página en tu sitio web';
$lang['es_MX']['RedirectorPage']['YOURPAGE'] = 'Página en tu sitio web';
$lang['es_MX']['RelationComplexTableField.ss']['ADD'] = 'Agregar';
$lang['es_MX']['RelationComplexTableField.ss']['DELETE'] = 'eliminar';
$lang['es_MX']['RelationComplexTableField.ss']['EDIT'] = 'editar';
$lang['es_MX']['RelationComplexTableField.ss']['NOTFOUND'] = 'No encontré elementos';
$lang['es_MX']['RelationComplexTableField.ss']['SHOW'] = 'mostrar';
$lang['es_MX']['SearchForm']['GO'] = 'Ir';
$lang['es_MX']['SearchForm']['SEARCH'] = 'Buscar';
$lang['es_MX']['Security']['ALREADYLOGGEDIN'] = 'No tienes acceso a esta página. Si tienes otra cuenta que pueda tener acceso a ésta página, puedes abrir una sesión abajo.';
$lang['es_MX']['Security']['BUTTONSEND'] = 'Envíame enlace para restablecer contraseña';
$lang['es_MX']['Security']['CHANGEPASSWORDBELOW'] = 'Puedes cambiar tu contraseña abajo.';
$lang['es_MX']['Security']['CHANGEPASSWORDHEADER'] = 'Cambia tu contraseña';
$lang['es_MX']['Security']['EMAIL'] = 'Correo-E';
$lang['es_MX']['Security']['ENCDISABLED1'] = '¡El cifrado de contraseñas está deshabilitado!';
$lang['es_MX']['Security']['ENCDISABLED2'] = 'Para cifrar tus contraseñas cambia la configuración de tu clave agregando';
$lang['es_MX']['Security']['ENCDISABLED3'] = 'a mysite/_config.php';
$lang['es_MX']['Security']['ENCRYPT'] = 'Cifrando todas las contraseñas';
$lang['es_MX']['Security']['ENCRYPTEDMEMBERS'] = 'Credenciales cifradas para el miembro &quot;';
$lang['es_MX']['Security']['ENCRYPTWITH'] = 'Las contraseñas se deben cifrar utilizando el algoritmo &quot;%s&quot;';
$lang['es_MX']['Security']['ENCRYPTWITHOUTSALT'] = 'sin utilizar chispa para incrementar la seguridad.';
$lang['es_MX']['Security']['ENCRYPTWITHSALT'] = 'con una chispa para incrementar la seguridad.';
$lang['es_MX']['Security']['ENTERNEWPASSWORD'] = 'Por favor incorpora la nueva contraseña';
$lang['es_MX']['Security']['ERRORPASSWORDPERMISSION'] = '¡Debes haber firmado para cambiar la contraseña!';
$lang['es_MX']['Security']['ID'] = 'ID:';
$lang['es_MX']['Security']['IPADDRESSES'] = 'Dirección IP';
$lang['es_MX']['Security']['LOGGEDOUT'] = 'Haz cerrado sesión. Si deseas ingresar de nuevo, incorpora tus credenciales abajo.';
$lang['es_MX']['Security']['LOGIN'] = 'Ingresar';
$lang['es_MX']['Security']['LOSTPASSWORDHEADER'] = 'Olvidé mi Contraseña';
$lang['es_MX']['Security']['NOTEPAGESECURED'] = 'Se ha asegurado la página. Ingresa tus credenciales abajo y en seguida enviaremos tu autorización.';
$lang['es_MX']['Security']['NOTERESETPASSWORD'] = 'Ingresa tu dirección de correo-e y te enviaremos un enlace con el cual podrás restablecer la contraseña';
$lang['es_MX']['Security']['NOTHINGTOENCRYPT1'] = 'No hay contraseñas por cifrar';
$lang['es_MX']['Security']['NOTHINGTOENCRYPT2'] = 'No hay miembros con contraseñas en texto plano que se puedan';
$lang['es_MX']['Security']['PASSWORDSENTHEADER'] = 'Enlace para restablecer contraseña enviado a \'%s\'';
$lang['es_MX']['Security']['PASSWORDSENTTEXT'] = '¡Gracias!. Se ha enviado el enlace para restablecer contraseña a \'%s\'.';
$lang['es_MX']['Security']['PERMFAILURE'] = 'Esta página está asegurada y necesitas privilegios de administrador para ingresar. Escribe tus credenciales abajo y te los enviaremos junto con los privilegios.';
$lang['es_MX']['SecurityAdmin']['ADVANCEDONLY'] = 'Esta sección es únicamente para usuarios avanzados. Véase <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank"> esta página</a> para mayor información.';
$lang['es_MX']['SecurityAdmin']['CODE'] = 'Código';
$lang['es_MX']['SecurityAdmin']['GROUPNAME'] = 'Nombre de grupo';
$lang['es_MX']['SecurityAdmin']['IPADDRESSESHELP'] = '<p>Puedes restringir este grupo a un rango de direcciones IP particular. Ingresa 1 rango por línea. Los rangos se pueden especificar en cualquiera de las siguientes formas: <br />
203.96.152.12<br />
203.96.152/24<br />
203.96/16<br />
203/8<br /><br /> Si incorporas uno o más rangos de direcciones IP en esta caja, entonces los miembros solamente obtendrán los derechos de este grupo, si alguno de ellos inicia sesión desde una de las direcciones IP válidas. Esto no evita que los miembros inicien una sesión. Esto es porque el mismo usuario pudo tener que iniciar una sesión para tener acceso a partes del sistema sin restricción de direcciones IP.';
$lang['es_MX']['SecurityAdmin']['MEMBERS'] = 'Miembros';
$lang['es_MX']['SecurityAdmin']['OPTIONALID'] = 'ID Opcional';
$lang['es_MX']['SecurityAdmin']['PERMISSIONS'] = 'Permisos';
$lang['es_MX']['SecurityAdmin']['VIEWUSER'] = 'Ver usuario';
$lang['es_MX']['SimpleImageField']['NOUPLOAD'] = 'No subió la Imagen';
$lang['es_MX']['SiteTree']['ACCESSANYONE'] = 'Cualquiera';
$lang['es_MX']['SiteTree']['ACCESSHEADER'] = '¿Quién puede ver ésta página en mi sitio?';
$lang['es_MX']['SiteTree']['ACCESSLOGGEDIN'] = 'Usuarios registrados';
$lang['es_MX']['SiteTree']['ACCESSONLYTHESE'] = 'Únicamente estas personas (selecciona de la lista)';
$lang['es_MX']['SiteTree']['ADDEDTODRAFT'] = 'Agregado al boceto del sitio';
$lang['es_MX']['SiteTree']['ALLOWCOMMENTS'] = '¿Permitir comentarios en ésta página?';
$lang['es_MX']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Este contenido además aparece en páginas virtuales en las secciones %s.';
$lang['es_MX']['SiteTree']['BUTTONCANCELDRAFT'] = 'Cancelar cambios al boceto';
$lang['es_MX']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Eliminar el boceto y regresar a la página actualmente publicada';
$lang['es_MX']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Guardar y Publicar';
$lang['es_MX']['SiteTree']['BUTTONUNPUBLISH'] = 'Ocultar al público';
$lang['es_MX']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Quitar ésta página del sitio público';
$lang['es_MX']['SiteTree']['CHANGETO'] = 'Cambiar a';
$lang['es_MX']['SiteTree']['CURRENT'] = 'actual';
$lang['es_MX']['SiteTree']['CURRENTLY'] = 'Actualmente';
$lang['es_MX']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Puedes llenar esta págna con tu propio contenido, o eliminarla y crear tus propias páginas.<br /></p>';
$lang['es_MX']['SiteTree']['DEFAULTABOUTTITLE'] = 'Sobre nosotros';
$lang['es_MX']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>Puedes llenar esta págna con tu propio contenido, o eliminarla y crear tus propias páginas.<br /></p>';
$lang['es_MX']['SiteTree']['DEFAULTCONTACTTITLE'] = 'Contacto';
$lang['es_MX']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>¡Bienvenido a SilverStripe! Éste es el homepage predefinido. Puedes modificar esta página abriendo el <a href="admin/">CMS</a>. Ahora puedes navegar por la
<a href="http://doc.silverstripe.com">documentación del desarrollador</a>, o comenzar los <a href="href="http://doc.silverstripe.com/doku.php?id=tutorials">tutoriales</a></p>.';
$lang['es_MX']['SiteTree']['DEFAULTHOMETITLE'] = 'Inicio';
$lang['es_MX']['SiteTree']['EDITANYONE'] = 'Cualquiera que pueda ingresar al CMS';
$lang['es_MX']['SiteTree']['EDITHEADER'] = '¿Quién puede modificar esta en el CMS?';
$lang['es_MX']['SiteTree']['EDITONLYTHESE'] = 'Únicamente éstas personas (selecciona de la lista)';
$lang['es_MX']['SiteTree']['GROUP'] = 'Grupo';
$lang['es_MX']['SiteTree']['HASBROKENLINKS'] = 'Esta página tiene enlaces rotos.';
$lang['es_MX']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Dominio(s)';
$lang['es_MX']['SiteTree']['HTMLEDITORTITLE'] = 'Contenido';
$lang['es_MX']['SiteTree']['LINKSALREADYUNIQUE'] = '%s ya es único';
$lang['es_MX']['SiteTree']['LINKSCHANGEDTO'] = 'cambiado %s -> %s';
$lang['es_MX']['SiteTree']['MENUTITLE'] = 'Etiqueta de navegación';
$lang['es_MX']['SiteTree']['METAADVANCEDHEADER'] = 'Opciones Avanzadas...';
$lang['es_MX']['SiteTree']['METADESC'] = 'Descripción';
$lang['es_MX']['SiteTree']['METAEXTRA'] = 'Etiquetas Meta Personalizadas';
$lang['es_MX']['SiteTree']['METAHEADER'] = 'Etiquetas Meta para Motores de Búsqueda';
$lang['es_MX']['SiteTree']['METAKEYWORDS'] = 'Palabras Clave (Keywords)';
$lang['es_MX']['SiteTree']['METANOTEPRIORITY'] = 'Especifica manualmente la prioridad de esta página (%s) para Google Sitemaps ';
$lang['es_MX']['SiteTree']['METAPAGEPRIO'] = 'Prioridad de Página';
$lang['es_MX']['SiteTree']['METATITLE'] = 'Título';
$lang['es_MX']['SiteTree']['MODIFIEDONDRAFT'] = 'Modificado en el boceto del sitio';
$lang['es_MX']['SiteTree']['NOBACKLINKS'] = 'Esta página no ha sido enlazada desde ninguna página';
$lang['es_MX']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Usar ésta página como \'página de inicio\' para los siguientes dominios:
(separa múltiples dominios con comas)';
$lang['es_MX']['SiteTree']['PAGESLINKING'] = 'Las siguientes páginas enlazan a ésta página:';
$lang['es_MX']['SiteTree']['PAGETITLE'] = 'Nombre de página';
$lang['es_MX']['SiteTree']['PAGETYPE'] = 'Tipo de Página';
$lang['es_MX']['SiteTree']['PRIORITYLEASTIMPORTANT'] = 'Menos importante';
$lang['es_MX']['SiteTree']['PRIORITYMOSTIMPORTANT'] = 'Muy importante';
$lang['es_MX']['SiteTree']['PRIORITYNOTINDEXED'] = 'No indexado';
$lang['es_MX']['SiteTree']['REMOVEDFROMDRAFT'] = 'Boceto eliminado del sitio';
$lang['es_MX']['SiteTree']['SHOWINMENUS'] = '¿Mostrar en menús?';
$lang['es_MX']['SiteTree']['SHOWINSEARCH'] = '¿Mostrar en búsqueda?';
$lang['es_MX']['SiteTree']['TABACCESS'] = 'Acceso';
$lang['es_MX']['SiteTree']['TABBACKLINKS'] = 'Enlaces anteriores';
$lang['es_MX']['SiteTree']['TABBEHAVIOUR'] = 'Compotamiento';
$lang['es_MX']['SiteTree']['TABCONTENT'] = 'Contenido';
$lang['es_MX']['SiteTree']['TABMAIN'] = 'Principal';
$lang['es_MX']['SiteTree']['TABMETA'] = 'Meta datos';
$lang['es_MX']['SiteTree']['TABREPORTS'] = 'Reportes';
$lang['es_MX']['SiteTree']['TODOHELP'] = '<p>Puedes utilizar este para guardar la pista del trabajo que necesitas realizar en el contenido de tu sitio. Para ver todas tus páginas con información de trabajos pendientes, abre la ventana \'Reportes del Sitio\' en el panel de la izquierda y selecciona \'Pendientes\'</p>';
$lang['es_MX']['SiteTree']['TOPLEVEL'] = 'Contenido del sitio (Nivel Superior)';
$lang['es_MX']['SiteTree']['URL'] = 'URL';
$lang['es_MX']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Otra página está usando esta URL. La URL debe ser única para cada página';
$lang['es_MX']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'Las URLs solamente se pueden componer de letras, dígitos y guiones.';
$lang['es_MX']['TableField']['ISREQUIRED'] = 'En %s \'%s\' es obligatorio.';
$lang['es_MX']['TableField.ss']['ADD'] = 'Agregar un nuevo renglón';
$lang['es_MX']['TableField.ss']['CSVEXPORT'] = 'Exportar a CSV';
$lang['es_MX']['TableListField']['CSVEXPORT'] = 'Exportar a CSV';
$lang['es_MX']['TableListField']['PRINT'] = 'Imprimir';
$lang['es_MX']['TableListField_PageControls.ss']['DISPLAYING'] = 'Mostrando';
$lang['es_MX']['TableListField_PageControls.ss']['OF'] = 'de';
$lang['es_MX']['TableListField_PageControls.ss']['TO'] = 'a';
$lang['es_MX']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Ver primero';
$lang['es_MX']['TableListField_PageControls.ss']['VIEWLAST'] = 'Ver último';
$lang['es_MX']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Ver siguiente';
$lang['es_MX']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Ver anterior';
$lang['es_MX']['ToggleCompositeField.ss']['HIDE'] = 'Ocultar';
$lang['es_MX']['ToggleCompositeField.ss']['SHOW'] = 'Mostrar';
$lang['es_MX']['ToggleField']['LESS'] = 'menos';
$lang['es_MX']['ToggleField']['MORE'] = 'más';
$lang['es_MX']['Translatable']['CREATE'] = 'Crear una nueva traducción';
$lang['es_MX']['Translatable']['CREATEBUTTON'] = 'Crear';
$lang['es_MX']['Translatable']['EXISTING'] = 'Traducciones existentes:';
$lang['es_MX']['Translatable']['NEWLANGUAGE'] = 'Nuevo Idioma';
$lang['es_MX']['Translatable']['TRANSLATIONS'] = 'Traducciones';
$lang['es_MX']['TreeSelectorField']['CANCEL'] = 'cancelar';
$lang['es_MX']['TreeSelectorField']['SAVE'] = 'guardar';
$lang['es_MX']['TypeDropdown']['NONE'] = 'Ninguno';
$lang['es_MX']['VirtualPage']['CHOOSE'] = 'Selecciona una página con la que enlazar';
$lang['es_MX']['VirtualPage']['EDITCONTENT'] = 'haz click aquí para modificar el contenido';
$lang['es_MX']['VirtualPage']['HEADER'] = 'Esta es una página virtual';

?>