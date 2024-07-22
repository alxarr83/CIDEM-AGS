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
 * Strings for component 'tool_heartbeat', language 'es_mx', version '4.4'.
 *
 * @package     tool_heartbeat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmute'] = 'Añadir mudo';
$string['allowedips'] = 'Config de IPs permitidas';
$string['allowedipsdescription'] = 'Caja para ingresar direcciones IP seguras para que el latido cardíaco responda a ellas.';
$string['allowedipsempty'] = 'Cuando la lista de IPs permitidas está vacía nosotros no bloqueamos a nadie. Usted puede añadir su propia dirección IP (<i>{$a->ip}</i>) y bloquear a todas las demás IPs.';
$string['allowedipshasmyip'] = 'Su IP (<i>{$a->ip}</i>) está en la lista y no será bloqueada de comprobar el latido cardíaco.';
$string['allowedipshasntmyip'] = 'Su IP (<i>{$a->ip}</i>) NO está en la lista y será bloqueada de comprobar el latido cardíaco.';
$string['allowedipsnoconfig'] = 'Su archivo config.php no tiene la configuración adicional para permitir bloquear vía IP.<br />Por favor refiérase a nuestro archivo <a href="https://github.com/catalyst/moodle-auth_outage#installation" target="_blank">README.md</a> para más información.';
$string['allowedipstitle'] = 'Configuración de Bloqueo de IP';
$string['authcorrect'] = 'Métodos de autenticación correctamente configurados.';
$string['builtinallowediplist'] = 'Configuración de bloqueo integrada';
$string['builtinallowediplist_desc'] = 'La lista de IP permitidas permitiría que algunas IPs sean editables en la Interfase del Usuario además de aquellas aplicadas en config.php.';
$string['checkauthcheck'] = 'Métodos de autenticación';
$string['checkcachecheck'] = 'Comprobación de consistencia del caché';
$string['checkcachecronmissing'] = 'La comprobación del caché del cron no ha tenido éxito aun o está faltando';
$string['checkcachedetails'] = 'Se detectó una caché de cerebro dividido. El valor almacenado en la tabla de la base de datos config_plugins no era la misma que el valor cacheado regresado de get_config. Si usted purga la caché y esta comprobación pasa y después falla nuevamente después de unas pocas horas, entonces eso sugiere fuertemente una mala configuración del caché.';
$string['checkcacheerrorsplit'] = 'Los cachés NO son consistentes: {$a}';
$string['checkcachenotsplit'] = 'Los cachés aparecen consistentes entre web y cron';
$string['checkcachewebmissing'] = 'La comprobación del caché web aun no ha tenido éxito';
$string['checkdirsizes'] = 'CFG->tamaño de dataroot';
$string['checkdnscheck'] = 'Comprobación de DNS wwwroot';
$string['checkfailingtaskcheck'] = 'Trabajos fallando';
$string['checkfailingtaskchecktask'] = 'Trabajo fallando: {$a}';
$string['checkfailingtaskok'] = '{$a} trabajos ejecutando OK.';
$string['checklogstorebad'] = '¡Las comprobaciones de almacén de bitácoras están mal! Por favor asegúrese de que al menos un almacén de bitácora haya sido configurado y habilitado.';
$string['checklogstorecheck'] = 'Comprobación de almacén de bitácoras';
$string['checklogstoreok'] = 'Las comprobaciones de almacén de bitácoras están OK. Una o más almacén de bitácora están activas.';
$string['checkrangerequestbad'] = '¡Las solicitudes de rango están mal! Respuesta HTTP {$a->code}con solamente {$a->bytes} bytes de datos para {$a->url}';
$string['checkrangerequestcheck'] = 'Comprobación de solicitudes de rango';
$string['checkrangerequestok'] = 'Comprobación de solicitudes de rango están trabajando, respuesta 206 con solamente 10 bytes de datos';
$string['checktasklatencycheck'] = 'Comprobación de latencia de trabajo';
$string['configauthmissing'] = 'Los métodos de autenticación configurados no están actualmente habilitados.';
$string['configuredauths'] = 'Comprobar métodos de autenticación';
$string['configuredauthsdesc'] = 'Los métodos de autenticación a comprobar están habilitados en la Check API. Una advertencia será emitida si ellos no están habilitados.';
$string['editmute'] = 'Editar mudo';
$string['emptyautherror'] = 'Métodos de autenticación vacíos, configuración perdida. Valor anterior: {$a}';
$string['error_critical'] = 'CRÍTICO';
$string['error_critical_business'] = 'CRÍTICO durante horas de negocio';
$string['error_warning'] = 'ADVERTENCIA';
$string['errorascritical'] = 'Reportar errores de comprobación como:';
$string['errorascritical_desc'] = 'Esta configuración controla cuales comprobaciones de errores de API son reportados como en Nagios. "CRÍTICO" es el más ruidoso, y "ADVERTENCIA" es el menos ruidoso para monitorear endpoints. Las horas comerciales son de 9AM a 5PM en la zona horaria del servidor ({$a}).';
$string['errorlog'] = 'Período de bitácora de error';
$string['errorlogdesc'] = 'Para ayudar a asegurar que todos los registros en bitácoras del servidor web estén funcionando nosotros podemos emitir un mensaje intermitente a error_log. Configure esto a 0 para desactivarlo.';
$string['expiresat'] = 'Mudo hasta';
$string['ips_combine'] = 'Las IPs enlistadas arriba serán combinadas con las IPs enlistadas debajo.';
$string['latencydelayedstart'] = 'El inicio del trabajo {$a->task} está retrasado más allá del umbral configurado: {$a->mins}.';
$string['latencynotrun'] = 'El trabajo {$a->task} no se ha ejecutado dentro del período del umbral de latencia configurado: {$a->mins}.';
$string['latencyruntime'] = 'El trabajo {$a->task} fue ejecutado por última vez con un tiempo de ejecución más largo que el umbral configurado: {$a->mins}.';
$string['mute'] = 'Mudo';
$string['normal'] = 'Monitoreo normal';
$string['noterequired'] = 'Por favor añada algunas anotaciones';
$string['override'] = 'Mostrar estado';
$string['overriderestore'] = 'Campos que han sido pre-llenados con información de una anulación aanterior.';
$string['pluginname'] = 'Latido_cardiaco (Heartbeat)';
$string['privacy:metadata:tool_heartbeat_overrides'] = 'Anulaciones de Latido Cardíaco';
$string['privacy:metadata:tool_heartbeat_overrides:note'] = 'Nota de anulación añadida por usuario';
$string['privacy:metadata:tool_heartbeat_overrides:timecreated'] = 'Sello de tiempo de cuando la anulación fue creada';
$string['privacy:metadata:tool_heartbeat_overrides:timemodified'] = 'Sello de tiempo de cuando la anulación fue modificada';
$string['privacy:metadata:tool_heartbeat_overrides:url'] = 'Anular URL añadida por usuario';
$string['privacy:metadata:tool_heartbeat_overrides:userid'] = 'Usuario que creó la anulación';
$string['privacy:metadata:tool_heartbeat_overrides:usermodified'] = 'Usuario que modificó la anulación';
$string['progress'] = 'Prueba de barra de progreso';
$string['progresshelp'] = 'Esto prueba que todos los \'\'buffers\'\' de salida en todo el \'\'stack\'\' estén al corriente, incluyendo, pero no limitado a,  php, ob, gzip/deflat, varnish, nginx etc';
$string['setinitialauthstate'] = 'Estado de autenticación inicial para comprobación de autenticación de Latido Cardíaco configurado.';
$string['settings:cachecheckheading'] = 'Comprobación de consistencia del caché';
$string['settings:mutedefault'] = 'Duración de mudo promedio';
$string['settings:mutedefault:desc'] = 'Ajustar la duración predeterminada de una comprobación muda.';
$string['settings:shouldlogcachecheck:desc'] = 'Si se habilita, cuando el ping de caché sea comprobado (cuando la comprobación <code>cachecheck</code> es ejecutada) un evento  <code>cache_check</code> será disparado.';
$string['settings:shouldlogcachecheck:heading'] = 'Comprobación de caché de bitácora';
$string['settings:shouldlogcacheping:desc'] = 'Si se habilita, cuando el ping de caché sea actualizado (usualmenteuna vez cada 24 horas), un evento <code>cache_ping</code> será disparado';
$string['settings:shouldlogcacheping:heading'] = 'Ping a caché de bitácora';
$string['taskconfigbad'] = 'Configuraciones malas {$a}';
$string['tasklatencymonitoring'] = 'Monitoreo de trabajos';
$string['tasklatencyok'] = 'Latencia de trabajo OK';
$string['testabort'] = 'Prueba aborta';
$string['testerror'] = 'Simular una condición crítica';
$string['testing'] = 'Probar latido_cardíaco';
$string['testingdesc'] = 'Usted puede usar esto para simular temporalmente una condición de advertencia o error, para probar que su monitoreo está trabajando correctamente de punta a punta.';
$string['testwarning'] = 'Simular una advertencia';
$string['unmute'] = 'Quitar mudo';
