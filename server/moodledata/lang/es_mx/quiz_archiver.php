<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'quiz_archiver', language 'es_mx', version '4.4'.
 *
 * @package     quiz_archiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archive_already_signed'] = 'El archivo ya está firmado';
$string['archive_autodelete'] = 'Eliminación automática';
$string['archive_autodelete_deleted'] = 'El archivo fue eliminado automáticamente';
$string['archive_autodelete_disabled'] = 'Deshabilitado';
$string['archive_autodelete_help'] = 'Elimina automáticamente el archivo después de un cierto tiempo. El tiempo de retención puede ser configurado abajo, una vez que la eliminación automática es activada.';
$string['archive_autodelete_in'] = 'Archivo será eliminado en {$a}';
$string['archive_autodelete_now'] = 'El archivo está agendado para ser eliminado';
$string['archive_autodelete_short'] = 'Eliminación';
$string['archive_deleted'] = 'Archivo fue eliminado';
$string['archive_filename_pattern'] = 'Nombre del archivo';
$string['archive_filename_pattern_help'] = 'Nombre del archivo de examen generado. Variables <b>deben</b> seguir el patrón <code>${variablename}</code>. La extensión del archivo será añadida automáticamente .<br><br><b>Variables disponibles</b>: <ul>{$a->variables}</ul><b>Caracteres prohibidos</b>: <code>{$a->forbiddenchars}</code>';
$string['archive_filename_pattern_moodle42'] = 'Nombre del archivo';
$string['archive_filename_pattern_variable_cmid'] = 'ID de módulo de curso';
$string['archive_filename_pattern_variable_courseid'] = 'ID del curso';
$string['archive_filename_pattern_variable_coursename'] = 'Nombre del curso';
$string['archive_filename_pattern_variable_courseshortname'] = 'Nombre corto del curso';
$string['archive_filename_pattern_variable_date'] = 'Fecha actuale <small>(AAAA-MM-DD)</small>';
$string['archive_filename_pattern_variable_quizid'] = 'ID del examen';
$string['archive_filename_pattern_variable_quizname'] = 'Nombre del examen';
$string['archive_filename_pattern_variable_time'] = 'Hora actual <small>(HH-MM-SS)</small>';
$string['archive_filename_pattern_variable_timestamp'] = 'Sello de tiempo actual UNIX';
$string['archive_not_signed'] = 'El archivo NO está firmado';
$string['archive_quiz'] = 'Archivar examen';
$string['archive_quiz_form_desc'] = 'Disparar la creación de un nuevo archivo de examen al enviar este formato. Esto estimulará un trabajo asincrónico que tomará algún tiempo para completarse. Usted siempre puede comprobar el estado actual en esta página.';
$string['archive_retention_time'] = 'Tiempo de retención';
$string['archive_retention_time_help'] = 'LA cantidad de tiempo que este archivo debería de ser conservado antes de que sea eliminado automáticamente. Esta configuración solamente tiene efecto si la eliminación automática está activada.';
$string['archive_signature'] = 'Firma';
$string['archive_signed_successfully'] = 'Archivo firmado exitosamente';
$string['archive_signing_failed'] = 'Falló la firma del archivo';
$string['archive_signing_failed_no_artifact'] = 'No se encontró archivo de artefacto válido';
$string['archive_signing_failed_tsp_disabled'] = 'Firmado de TSP está deshabilitado globalmente';
$string['archived'] = 'Archivado';
$string['archiver'] = 'Archivador de examen';
$string['archiverreport'] = 'Archivador de examen';
$string['autoinstall_already_configured'] = 'El plugin ya está configurado';
$string['autoinstall_already_configured_long'] = 'El plugin Quiz Archiver ya está configurado. No es posible la configuración automática dos veces.';
$string['autoinstall_cancelled'] = 'La configuración automática del plugin Quiz Archiver fue cancelada. No se hicieron cambios.';
$string['autoinstall_explanation_details'] = 'La funcionalidad de configuración automática se encargará de los siguientes pasos:<ul><li>Configurar todas las configuraciones del plugin a sus valores predeterminados</li><li>Habilitar servicios web y protocolo REST</li><li>Crear un rol de servicio archivador de examen y un usuario correspondiente</li><li>Crear un nuevo servicio web con todas las funciones de servicio web requeridas</li><li>Autorizar al usuario para usar el servicio web</li></ul>';
$string['autoinstall_failure'] = 'La configuración automática del plugin Quiz Archiver <b>falló</b>.';
$string['autoinstall_plugin'] = 'Quiz Archiver: Configuración Automática';
$string['autoinstall_rolename'] = 'Nombre del rol';
$string['autoinstall_rolename_help'] = 'Nombre del rol que es creado para el usuario del servicio de Quiz Archiver.';
$string['autoinstall_start_now'] = 'Iniciar ahorita configuración automática';
$string['autoinstall_started'] = 'Configuración automática iniciada...';
$string['autoinstall_success'] = 'La configuración automática del plugin Quiz Archiver fue <b>exitosa</b>.';
$string['autoinstall_username'] = 'Usuario';
$string['autoinstall_username_help'] = 'Nombre del usuario del servicio que es creado para acceder al servicio web del Quiz Archiver.';
$string['autoinstall_wsname'] = 'Nombre del servicio web';
$string['autoinstall_wsname_help'] = 'Nombre del servicio web que es creado para el trabajador del Quiz Archiver.';
$string['beta_version_warning'] = 'Este plugin actualmente está en etapa BETA. Por favor reporte cualquier problema que experimente al administrador del sitio.';
$string['checksum'] = 'Suma de verificación';
$string['create_quiz_archive'] = 'Crear nuevo archivo de examen';
$string['delete_artifact'] = 'Eliminar archivo de examen';
$string['delete_artifact_warning'] = '¿Está seguro de querer eliminar este archivo de examen y por lo tanto  <b>todos los datos archivados?</b>. Los metadatos del trabajo serán conservados.';
$string['delete_job'] = 'Trabajo de eliminar archivo';
$string['delete_job_warning'] = '¿Está seguro de querer eliminar este trabajo de archivo <b>incluyendo todos los datos archivados?</b>';
$string['delete_job_warning_retention'] = '<b>Atención:</b> Este trabajo de archivar está agendado para la eliminación automática en <code>{$a}</code>. ¿Está usted absolutamente seguro de querer eliminarlo <b>antes de que expire su tiempo de vida agendado</b>?';
$string['error_archive_quiz_form_validation_failed'] = 'Falló validación de datos del formato. Por favor corrija su entrada e inténtelo de nuevo.';
$string['error_invalid_archive_filename_pattern'] = 'Patrón del nombre de archivo del  archivo inválido. Por favor corrija su entrada e inténtelo de nuevo.';
$string['error_invalid_attempt_filename_pattern'] = 'Patrón del nombre de archivo del  reporte del intento inválido. Por favor corrija su entrada e inténtelo de nuevo.';
$string['error_plugin_is_not_configured'] = 'Error: El plugin quiz archiver aun no está configurado. Por favor póngase en contacto con su administrador del sitio.';
$string['error_worker_connection_failed'] = 'Falló el establecer una conexión al trabajador del archivo.';
$string['error_worker_reported_error'] = 'el trabajador del archivo reportó un error: {$a}';
$string['error_worker_unknown'] = 'Ocurrió un error mientras se ponía en cola de espera el trabajo en el trabajador de archivo remoto.';
$string['export_attempts'] = 'Exportar intentos del examen';
$string['export_attempts_filename_pattern'] = 'Nombre del reporte';
$string['export_attempts_filename_pattern_moodle42'] = 'Nombre del reporte';
$string['export_attempts_filename_pattern_variable_attemptid'] = 'ID del intento';
$string['export_attempts_filename_pattern_variable_cmid'] = 'ID del módulo del curso';
$string['export_attempts_filename_pattern_variable_courseid'] = 'ID del curso';
$string['export_attempts_filename_pattern_variable_coursename'] = 'Nombre del curso';
$string['export_attempts_filename_pattern_variable_courseshortname'] = 'Nombre corto del curso';
$string['export_attempts_filename_pattern_variable_date'] = 'Fecha actual <small>(YYYY-MM-DD)</small>';
$string['export_attempts_filename_pattern_variable_firstname'] = 'Nombre del estudiante';
$string['export_attempts_filename_pattern_variable_lastname'] = 'Apellido(s) del estudiante';
$string['export_attempts_filename_pattern_variable_quizid'] = 'ID del examen';
$string['export_attempts_filename_pattern_variable_quizname'] = 'Nombre del examen';
$string['export_attempts_filename_pattern_variable_time'] = 'Hora actual <small>(HH-MM-SS)</small>';
$string['export_attempts_filename_pattern_variable_timefinish'] = 'Sello de tiempo UNIX del intento terminado';
$string['export_attempts_filename_pattern_variable_timestamp'] = 'Sello de tiempo UNIX actual';
$string['export_attempts_filename_pattern_variable_timestart'] = 'Sello de tiempo UNIX del inicio del intento';
$string['export_attempts_filename_pattern_variable_username'] = 'Nombre de usuario del estudiante';
$string['export_attempts_help'] = 'Los intentos de examen siempre serán exportados';
$string['export_attempts_keep_html_files'] = 'Archivos HTML';
$string['export_attempts_keep_html_files_desc'] = 'Conservar archivos fuente HTML';
$string['export_attempts_keep_html_files_help'] = 'Guardar los archivos fuente HTML además de los PDFs generados durante el proceso de exportación. Esto puede ser útil si usted quiere acceder al DOM HTML desde donde fueron generados los PDFs. Deshabilitar esta opción puede reducir significativamente el tamaño del archivo.';
$string['export_attempts_num'] = 'Exportar intentos de examen ({$a})';
$string['export_attempts_num_help'] = 'Los intentos de examen siempre serán exportados';
$string['export_attempts_paper_format'] = 'Tamaño del papel';
$string['export_attempts_paper_format_help'] = 'El tamaño dle papel a usar para exportar PDF. esto no afect exportaciones HTML.';
$string['export_course_backup'] = 'Exportar respaldo de curso completo Moodle (.mbz)';
$string['export_course_backup_help'] = 'Esto exportará un respaldo completo del curso Moodle (.mbz) incluyendo todo lo de adentro de este curso. Esto puede ser útil si usted quiere importar este curso adentro de otra instancia Moodle.';
$string['export_quiz_backup'] = 'Exportar respaldo del examen Moodle (.mbz)';
$string['export_quiz_backup_help'] = 'Esto exportará un respaldo de examen de Moodle (.mbz) incluyendo preguntas usadas dentro del examen. Esto puede ser útil si usted quiere importar este examen independiente del curso, dentro de otra instancia Moodle.';
$string['export_report_section_attachments'] = 'Incluir archivos anexos';
$string['export_report_section_attachments_help'] = 'Incluir todos los archivos anexos (por ejemplo envíos de archivo de ensayos) dentro del archivo. Advertencia: Esto puede incrementar significativamente el tamaño del archivo.';
$string['export_report_section_general_feedback'] = 'Incluir retroalimentación general de preguntas';
$string['export_report_section_general_feedback_help'] = 'Mostrar la retroalimentación general para cada pregunta dentro del reporte.';
$string['export_report_section_header'] = 'Incluir encabezado del examen';
$string['export_report_section_header_help'] = 'Mostrar metadatos del examen (por ejemplo usuario, tiempo usado, calificación, ...) dentro del reporte.';
$string['export_report_section_history'] = 'Incluir historia del examen';
$string['export_report_section_history_help'] = 'Mostrar la historia de respuesta para cada pregunta dentro del reporte.';
$string['export_report_section_question'] = 'Incluir preguntas';
$string['export_report_section_question_feedback'] = 'Incluir retroalimentación de pregunta individual';
$string['export_report_section_question_feedback_help'] = 'Mostrar la retroalimentación individual para cada pregunta dentro del reporte.';
$string['export_report_section_question_help'] = 'Mostrar todas las preguntas que son parte de este intento dentro del reporte.';
$string['export_report_section_quiz_feedback'] = 'Incluir retroalimentación global del examen';
$string['export_report_section_quiz_feedback_help'] = 'Mostrar la retroalimentación global del examen dentro del encabezado del reporte.';
$string['export_report_section_rightanswer'] = 'Incluir respuestas correctas';
$string['export_report_section_rightanswer_help'] = 'Mostrar las respuestas correctas para cada pregunta dentro del reporte.';
$string['go_to_plugin_settings'] = 'Ir a configuraciones del plugin';
$string['job_created_successfully'] = 'Nuevo trabajo de archivo creado exitosamente: {$a}';
$string['job_overview'] = 'Archivos';
$string['job_status_AWAITING_PROCESSING'] = 'En cola';
$string['job_status_DELETED'] = 'Eliminado';
$string['job_status_FAILED'] = 'Fallido';
$string['job_status_FINISHED'] = 'Terminado';
$string['job_status_RUNNING'] = 'Ejecutándose';
$string['job_status_TIMEOUT'] = 'Tiempo agotado';
$string['job_status_UNINITIALIZED'] = 'NO inicializado';
$string['job_status_UNKNOWN'] = 'Desconocido';
$string['jobid'] = 'ID del trabajo';
$string['manual_configuration_continue'] = 'Para configurar manualmente todas las configuraciones del plugin use el botón "Continuar" al fondo de esta página.';
$string['num_attempts'] = 'Número de intentos';
$string['pluginname'] = 'Archivador de Examen';
$string['privacy:metadata:core_files'] = 'El plugin quiz archiver almacena archivos de examen creados dentro del sistema de archivos de Moodle.';
$string['privacy:metadata:quiz_archiver_job_settings'] = 'Configuraciones del trabajo durante la creación del archivo del examen  (por ejemplo, secciones incluidas, número de intentos, ...).';
$string['privacy:metadata:quiz_archiver_job_settings:key'] = 'La clave / nombre de una configuración respectiva (por ejemplo número de intentos).';
$string['privacy:metadata:quiz_archiver_job_settings:value'] = 'El valor de una configuración respectiva (por ejemplo 42).';
$string['privacy:metadata:quiz_archiver_jobs'] = 'Metadatos acerca de archivos de examen creados.';
$string['privacy:metadata:quiz_archiver_jobs:cmid'] = 'La ID del módulo de curso del examen al que pertenece este archivo de examen.';
$string['privacy:metadata:quiz_archiver_jobs:courseid'] = 'La ID del  curso al que pertenece este archivo de examen.';
$string['privacy:metadata:quiz_archiver_jobs:quizid'] = 'La ID del  examen al que pertenece este archivo de examen.';
$string['privacy:metadata:quiz_archiver_jobs:timecreated'] = 'La hora de cuando fue creado el archivo del examen.';
$string['privacy:metadata:quiz_archiver_jobs:timemodified'] = 'La hora de cuando fue modificado por última vez el archivo del examen (por ejemplo, estado del trabajo actualizado).';
$string['privacy:metadata:quiz_archiver_jobs:userid'] = 'LA ID del usuario que creó el archivo del curso.';
$string['privacy:metadata:quiz_archiver_tsp'] = 'Datos del Protocolo de Sello de Tiempo (TSP) para archivos de examen.';
$string['privacy:metadata:quiz_archiver_tsp:server'] = 'La URL del servidor TSP que fue usado para firmar el archivo del examen.';
$string['privacy:metadata:quiz_archiver_tsp:timecreated'] = 'La hora de cuando el archivo del examen fue firmado.';
$string['privacy:metadata:quiz_archiver_tsp:timestampquery'] = 'La consulta del sello de tiempo que fue enviado al servidor TSP.';
$string['privacy:metadata:quiz_archiver_tsp:timestampreply'] = 'La respuesta del sello de tiempo que fue recibida del servidor TSP.';
$string['quiz_archive'] = 'Archivo del examen';
$string['quiz_archive_details'] = 'Detalles del archivo del examen';
$string['quiz_archive_not_found'] = 'Archivo del examen no encontrado';
$string['quiz_archive_not_ready'] = 'Archivo del examen aun no está listo';
$string['quiz_archiver:archive'] = 'Crear y eliminar archivos de examen';
$string['quiz_archiver:use_webservice'] = 'Usar el servicio web de archivador del examen (leer y escribir)';
$string['quiz_archiver:view'] = 'Ver página de reporte de archivador de examen';
$string['setting_autoconfigure'] = 'Configuración automática';
$string['setting_header_archive_worker'] = 'Servicio Trabajador de Archivo';
$string['setting_header_archive_worker_desc'] = 'Configuración del servicio del trabajador de archivo y del servicio web Moodle que usa.';
$string['setting_header_docs_desc'] = 'Este plugin archiva intentos de exámenes como archivos PDF y HTML para almacenamiento a largo plazo, independiente de Moodle. <b>Requiere que un <a href="https://github.com/ngandrass/moodle-quiz-archive-worker" target="_blank">servicio trabajador</a></b> sea instalado para que funcione el proceso real de archivado. Por favor refiérase a la <a href="https://github.com/ngandrass/moodle-quiz_archiver#readme" target="_blank">documentación</a>para más detalles y las instrucciones de configuración.';
$string['setting_header_job_presets'] = 'Pre-configuraciones del archivo';
$string['setting_header_tsp'] = 'Firma del Archivo';
$string['setting_internal_wwwroot'] = 'URL base de Moodle personalizado';
$string['setting_job_timeout_min'] = 'Timeout del tarabajo (minutos)';
$string['setting_job_timeout_min_desc'] = 'El número de minutos que un solo trabajo de archivo es ejecutado antes de que sea abortado por Moodle. Los tokens de acceso al servicio web se vuelven inválidos después de este timeout.';
$string['setting_tsp_automatic_signing'] = 'Firmar automáticamente archivos de examen';
$string['setting_tsp_automatic_signing_desc'] = 'Firmar automáticamente archivos de examen cuando son creados.';
$string['setting_tsp_enable'] = 'Habilitar firma de archivos de examen';
$string['setting_tsp_enable_desc'] = 'Permitir que los archivos de examen sean firmados usando el Protocolo de Sello de Tiempo (TSP). Si esta opción está deshabilitada, los archivos de examen NO pueden ser firmados manualmente ni tampoco automáticamente.';
$string['setting_tsp_server_url'] = 'URL de servidor TSP';
$string['setting_webservice_userid'] = 'ID del usuario del servicio web';
$string['setting_worker_url'] = 'URL de trabajador del archivo';
$string['sign_archive'] = 'Firmar archivo ahorita';
$string['sign_archive_warning'] = '¿está seguro de querer firmar este archivo ahorita?';
$string['signed_by'] = 'por';
$string['signed_on'] = 'Firmado en';
$string['task_autodelete_job_artifacts'] = 'Eliminar archivos de examen expirados';
$string['task_autodelete_job_artifacts_report'] = 'Eliminados {$a} archivos de examen.';
$string['task_autodelete_job_artifacts_start'] = 'Eliminando archivos expirados de examen ...';
$string['task_cleanup_temp_files'] = 'Limpieza de archivos temporales';
$string['task_cleanup_temp_files_report'] = 'Eliminados {$a} archivos temporales.';
$string['task_cleanup_temp_files_start'] = 'Limpiando archivos temporales expirados ...';
$string['thanks_for_installing'] = '¡Gracias por instalar el plugin Quiz Archiver!';
$string['tsp_client_error_content_type'] = 'Servidor TSP regresó un tipo de contenido inesperado {$a}';
$string['tsp_client_error_curl'] = 'Error al enviar solicitud TSP: {$a}';
$string['tsp_client_error_http_code'] = 'Servidor TSP regresó código de estado de HTTP {$a}';
$string['tsp_query_filename'] = 'query.tsq';
$string['tsp_reply_filename'] = 'reply.tsr';
$string['users_with_attempts'] = 'Usuarios con intentos de examen';
