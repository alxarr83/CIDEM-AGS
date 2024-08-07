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
 * Strings for component 'quizaccess_onesession', language 'es_mx', version '4.4'.
 *
 * @package     quizaccess_onesession
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'Usted está intentando acceder a un intento de examen desde una computadora, dispositivo o navegador diferente del que usó para iniciar el examen. Si Usted cerró accidentalmente su navegador, por favor póngase en contacto con su profesor.';
$string['eventattemptblocked'] = 'Se bloqueó el intento del estudiante  para continuar el examen usando otro dispositivo';
$string['eventattemptunlocked'] = 'Al estudiante se le permitió continuar el intento del examen usando otro dispositivo';
$string['onesession'] = 'Bloquear conexiones concurrentes';
$string['onesession:unlockattempt'] = 'Desbloquear intento de examen';
$string['onesession_help'] = 'Si se habilita, los estudiantes pueden continuar un intento del examen solamente en la misma sesión del navegador. Cualquier intento para abrir el mismo examen usando otra computadora, dispositivo o navegador, será bloqueado. Esto puede ser útil para asegurar que nadie le ayude al estudiante abriendo el mismo intento del examen en otra computadora.';
$string['pluginname'] = 'Regla de acceso Bloquear sesiones concurrentes de acceso al examen';
$string['privacy:metadata'] = 'Este plugin almacena el \'hash\' de la cadena de caracteres usada para identificar la sesión del dispositivo del cliente. Aunque la cadena de caracteres original contiene la dirección IP del usuario y el encabezado del Usuario-Agente enviado por el navegador  del cliente, el \'hash\' no permite extraer esta información.El \'hash\' es eliminado automáticamente después de terminar la sesión del examen.';
$string['studentinfo'] = '¡Atención! Está prohibido el cambiar de dispositivo al intentar este examen. Por favor tenga en cuenta que después de iniciar el intento del examen, cualquier conexión a este examen usando otras computadoras, dispositivos o navegadores, será bloqueado. No cierre la ventana del navegador hasta que finalice el examen, pues de lo contrario Usted no podrá completar este examen.';
$string['unlockthisattempt'] = 'Permitirles al estudiante continuar este intento usando un dispositivo diferente';
$string['unlockthisattempt_header'] = 'Desbloquear intentos';
$string['whitelist'] = 'Redes sin revisión de IP';
$string['whitelist_desc'] = 'Esta opción está pensada para disminuir los positivos falsos cuando los usuarios hacen exámenes sobre redes móviles, donde la IP puede ser cambiada durante el examen. No es necesaria en la mayoría de las situaciones. Usted puede proporcionar una lista separada por comas de sub-redes (por ejemplo 88.0.0.0/8, 77.77.0.0/16). Si la dirección IP está dentro de dichas sub-redes, no es revidada.Para deshabilitar completamente la revisión de IP, puede configurarla al valor de  0.0.0.0/0 .';
