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
 * Strings for component 'kanban', language 'es_mx', version '4.4'.
 *
 * @package     kanban
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcard'] = 'Añadir una tarjeta a esta columna';
$string['addcolumn'] = 'Añadir una columna a este tablero';
$string['assignee'] = 'Asignado a';
$string['assignees'] = 'Asignado a los';
$string['assignme'] = 'Asignarme a mi';
$string['attachments'] = 'Anexos';
$string['autoclose'] = 'Auto cerrar tarjetas';
$string['autohide'] = 'Auto ocultar tarjetas cerradas';
$string['cachedef_board'] = 'Caché para una instancia de tablero';
$string['cachedef_timestamp'] = 'Sello de tiempo de última modificación de tarjeta, columna o instancia de tablero';
$string['cardtitle'] = 'Título de tarjeta';
$string['changegroup'] = 'Cambiar tablero de grupo';
$string['changeuser'] = 'Cambiar tablero de usuario';
$string['closecard'] = 'Cerrar tarjeta';
$string['color'] = 'Color';
$string['column'] = 'Columna';
$string['columntitle'] = 'Título de columna';
$string['completioncomplete'] = 'Completar este número de tarjetas';
$string['completioncreate'] = 'Crear este número de tarjetas';
$string['completiondetail:complete'] = 'Completar tarjetas : {$a}';
$string['completiondetail:create'] = 'Crear tarjetas: {$a}';
$string['courseboard'] = 'Tablero compartido';
$string['createtemplate'] = 'Crear plantilla';
$string['deleteboard'] = 'Eliminar tablero';
$string['deleteboardconfirm'] = '¿Está seguro de querer eliminar este tablero? Un nuevo tablero será creado basado en la plantilla.';
$string['deletecard'] = 'Eliminar tarjeta';
$string['deletecardconfirm'] = '¿Realmente desea eliminar esta tarjeta?';
$string['deletecolumn'] = 'Eliminar columna';
$string['deletecolumnconfirm'] = '¿Realmente desea eliminar esta columna?';
$string['deletemessage'] = 'Eliminar mensaje';
$string['deletemessageconfirm'] = '¿Realmente desea eliminar este mensaje?';
$string['deletetemplate'] = 'Eliminar plantilla';
$string['deletetemplateconfirm'] = '¿Realmente desea eliminar esta plantilla?';
$string['doing'] = 'Haciendo';
$string['done'] = 'Hecho';
$string['due'] = 'Pendiente';
$string['duedate'] = 'Fecha esperada';
$string['editboard'] = 'Editar tablero';
$string['editcard'] = 'Editar tarjeta';
$string['editcolumn'] = 'Editar columna';
$string['editdetails'] = 'Editar detalles';
$string['editing_this_card_is_not_allowed'] = 'No está permitido editar esta tarjeta';
$string['enablehistory'] = 'Habilitar historia';
$string['enablehistory_help'] = 'Habilitar grabar historia de tarjetas en este tablero (por ejemplo, cuand la tarjeta fue movida / renombrada / completada)';
$string['enablehistorydescription'] = 'Habilitar esta opción hará la historia de los cambios disponible para los tableros.';
$string['groupboard'] = 'Tablero de grupo para el grupo "{$a}"';
$string['hidehidden'] = 'Ocultar tarjetas ocultas';
$string['history'] = 'Historia';
$string['history_card_added'] = '{$a->username} añadió tarjeta "{$a->title}" a columna "{$a->columnname}"';
$string['history_card_assigned'] = '{$a->username} asignó tarjeta a usuario {$a->affectedusername}';
$string['history_card_completed'] = '{$a->username} completó la terjeta';
$string['history_card_deleted'] = '{$a->username} eliminó tarjeta de columna "{$a->columnname}"';
$string['history_card_moved'] = '{$a->username} movió tarjeta a columna "{$a->columnname}"';
$string['history_card_reopened'] = '{$a->username} reabrió la tarjeta';
$string['history_card_unassigned'] = '{$a->username} des-asignó tarjeta del usuario {$a->affectedusername}';
$string['history_card_updated'] = '{$a->username} cambió el título de tarjeta a "{$a->title}"';
$string['history_discussion_added'] = '{$a->username} añadió mensaje de discusión';
$string['history_discussion_deleted'] = '{$a->username} eliminó mensaje de discusión';
$string['kanban:addcard'] = 'Añadir una tarjeta a un tablero Kanban';
$string['kanban:addinstance'] = 'Añadir un tablero Kanban';
$string['kanban:assignothers'] = 'Asignar otros a una tarjeta';
$string['kanban:assignself'] = 'Asignarme a mi mismo a una tarjeta';
$string['kanban:editallboards'] = 'Editar todos los tableros';
$string['kanban:manageallcards'] = 'Editar / mover todas las tarjetas';
$string['kanban:manageassignedcards'] = 'Editar / mover tarjetas asignadas a uno mismo';
$string['kanban:manageboard'] = 'Gestionar el tablero (plantillas, eliminar el tablero)';
$string['kanban:managecolumns'] = 'Editar las columnas del tablero';
$string['kanban:view'] = 'Ver un tablero Kanban';
$string['kanban:viewallboards'] = 'Ver todos los tableros';
$string['kanban:viewhistory'] = 'Ver la historia del tablero';
$string['liveupdatetime'] = 'Intervalo para la actualización en vivo en segundos';
$string['liveupdatetimedescription'] = 'Los tableros buscarán actualizaciones después de este intervalo. Configurar a 0 para deshabilitar la actualización en vivo.';
$string['loading'] = 'Cargando tablero Kanban';
$string['loadingdiscussion'] = 'Cargando discusión';
$string['lock'] = 'Bloquear';
$string['lockboardcolumns'] = 'Bloquear columnas del tablero';
$string['message_assigned_fullmessage'] = 'Tarjeta "{$a->title}" en tablero "{$a->boardname}" fue asignada a usted por {$a->username}';
$string['message_assigned_smallmessage'] = 'Tarjeta "{$a->title}" fue asignada a usted';
$string['message_closed_fullmessage'] = 'Tarjeta "{$a->title}" fue cerrada por {$a->username}';
$string['message_closed_smallmessage'] = 'Tarjeta "{$a->title}" fue cerrada';
$string['message_discussion_fullmessage'] = 'Hay un nuevo mensaje en discusión para tarjeta "{$a->title}" en tablero "{$a->boardname}":
{$a->username}
{$a->content}';
$string['message_discussion_smallmessage'] = 'Tarjeta "{$a->title}" fue discutida';
$string['message_due_fullmessage'] = 'Tarjeta "{$a->title}" en tablero "{$a->boardname}" está pendiente para {$a->duedate}';
$string['message_due_smallmessage'] = 'Tarjeta "{$a->title}" está pendiente';
$string['message_moved_fullmessage'] = 'Tarjeta "{$a->title}" fue movida a columna "{$a->columnname}" por {$a->username}';
$string['message_moved_smallmessage'] = 'Tarjeta "{$a->title}" fue movida';
$string['message_reopened_fullmessage'] = 'Tarjeta "{$a->title}" en tablero "{$a->boardname}" fue reabierta por {$a->username}';
$string['message_reopened_smallmessage'] = 'Tarjeta "{$a->title}" fue re-abierta';
$string['message_unassigned_fullmessage'] = 'Tarjeta "{$a->title}" en tablero "{$a->boardname}" fue des-asignada a usted por {$a->username}';
$string['message_unassigned_smallmessage'] = 'Tarjeta "{$a->title}" fue des-asignada a usted';
$string['messageprovider:assigned'] = 'Tarjeta asignada / des-asignada';
$string['messageprovider:closed'] = 'Tarjeta cerrada / re-abierta';
$string['messageprovider:discussion'] = 'Discusión de tarjeta';
$string['messageprovider:due'] = 'Tarjeta pendiente esperada';
$string['messageprovider:moved'] = 'Tarjeta movida';
$string['modulename'] = 'Tablero Kanban';
$string['modulenameplural'] = 'Tableros Kanban';
$string['moveaftercard'] = 'Mover después de';
$string['movecard'] = 'Mover tarjeta';
$string['movecolumn'] = 'Mover columna';
$string['myuserboard'] = 'Mi tablero personal';
$string['name'] = 'Nombre del tablero';
$string['name_help'] = 'Este nombre será visible en la vista general del curso y como un título del tablero';
$string['newcard'] = 'Tarjeta nueva';
$string['newcolumn'] = 'Columna nueva';
$string['nogroupavailable'] = 'Sin grupos disponibles';
$string['nouser'] = 'Sin usuario';
$string['nouserboards'] = 'Sin tableros personales';
$string['pluginadministration'] = 'Administración de Kanban';
$string['pluginname'] = 'Tablero Kanban';
$string['privacy:metadata:action'] = 'Acción';
$string['privacy:metadata:affected_userid'] = 'Usuario afectado';
$string['privacy:metadata:content'] = 'Contenido';
$string['privacy:metadata:createdby'] = 'Usuario que creó la tarjeta';
$string['privacy:metadata:groupid'] = 'ID del grupo';
$string['privacy:metadata:kanban_assignee'] = 'Asignado a';
$string['privacy:metadata:kanban_board'] = 'Tablero';
$string['privacy:metadata:kanban_card'] = 'Tarjeta';
$string['privacy:metadata:kanban_column'] = 'Columna';
$string['privacy:metadata:kanban_discussion_comment'] = 'Comentario';
$string['privacy:metadata:kanban_history'] = 'Historia';
$string['privacy:metadata:parameters'] = 'Información acerca de la acción';
$string['privacy:metadata:timecreated'] = 'Hora de creación';
$string['privacy:metadata:timemodified'] = 'Hora de última modificación';
$string['privacy:metadata:timestamp'] = 'Hora de la acción';
$string['privacy:metadata:userid'] = 'ID del usuario';
$string['pushcard'] = 'Empujar tarjeta a todos los tableros';
$string['pushcardconfirm'] = 'Esto enviará una copia de esta tarjeta a todos los tablero dentro de esta actividad Kanban incluyendo plantillas. Las copias existentes serán reemplazadas.';
$string['reminderdate'] = 'Fecha de recordatorio';
$string['remindertask'] = 'Enviar notificaciones de recordatorio';
$string['reset_group'] = 'Reiniciar tableros del grupo';
$string['reset_kanban'] = 'Reiniciar tableros compartidos';
$string['reset_personal'] = 'Reiniciar tableros personales';
$string['saveastemplate'] = 'Guardar como plantilla';
$string['saveastemplateconfirm'] = '¿Está seguro de querer guardar este tablero como una plantilla? Reemplazará a la plantilla actual si hubiera una.';
$string['senddiscussion'] = 'Enviar mensaje de discusión';
$string['showattachment'] = 'Mostrar anexos';
$string['showboard'] = 'Mostrar tablero compartido';
$string['showdescription'] = 'Mostrar descripción';
$string['showdiscussion'] = 'Mostrar discusión';
$string['showhidden'] = 'Mostrar tarjetas ocultas';
$string['showtemplate'] = 'Mostrar plantilla';
$string['startdiscussion'] = 'Iniciar discusión';
$string['template'] = 'Plantilla';
$string['toboard'] = 'Tablero "{$a->boardname}"';
$string['todo'] = 'PorHacer';
$string['topofcolumn'] = 'Superior de columna';
$string['unassign'] = 'Des-asignar este usuario';
$string['unassignme'] = 'Des-asignarme a mi';
$string['uncomplete'] = 'Re-abrir';
$string['unlock'] = 'Desbloquear';
$string['unlockboardcolumns'] = 'Desbloquear columnas de tablero';
$string['userboard'] = 'Tablero personal para {$a}';
$string['userboards'] = 'Tableros personales';
$string['userboards_help'] = 'Habilita tableros personales para los participantes (solamente visible para ellos y ara los entrenadores)';
$string['userboardsenabled'] = 'Tablero personal habilitado';
$string['userboardsonly'] = 'Tablero personal solamente';
