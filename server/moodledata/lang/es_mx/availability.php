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
 * Strings for component 'availability', language 'es_mx', version '4.4'.
 *
 * @package     availability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessrestrictions'] = 'Restricciones de acceso';
$string['addrestriction'] = 'Añadir restricción...';
$string['and'] = 'y';
$string['condition_group'] = 'Conjunto de restricciones';
$string['condition_group_info'] = 'Añadir un conjunto de restricciones anidadas para aplicar lógica compleja.';
$string['disabled_verb'] = 'No puede cambiarse porque el conjunto de reglas incluye una regla que contiene datos privados.';
$string['editsettings'] = 'Editar restricciones';
$string['enableavailability'] = 'Habilitar restricciones de acceso';
$string['enableavailability_desc'] = 'Si se habilita, se pueden configurar condiciones (basadas en fecha, calificación, o finalización) que controlan si se puede o no acceder a una actividad o recurso.';
$string['error_list_nochildren'] = 'Los conjuntos de restricciones deben contener al menos una condición.';
$string['hidden_all'] = 'Completamente oculta si el estudiante no cumple con las condiciones';
$string['hidden_individual'] = 'Completamente oculta si el estudiante no cumple con esta condición';
$string['hidden_marker'] = '(de otra forma, oculto)';
$string['hide_verb'] = 'Elegir para ocultar';
$string['invalid'] = 'Por favor, configure';
$string['item_unknowntype'] = 'Estas restricciones usan un plugin que ya no está disponible (si Usted pudiera quitar esta restricción, elimínela debajo)';
$string['itemheading'] = 'restricción {$a->number} {$a->type}';
$string['label_multi'] = 'Restricciones requeridas';
$string['label_sign'] = 'Tipo de restricción';
$string['list_and'] = 'Todas de:';
$string['list_and_hidden'] = 'Todas de (de otra forma, ocultas):';
$string['list_or'] = 'Cualquiera de:';
$string['list_or_hidden'] = 'Cualquiera de (de otra forma, oculta):';
$string['list_root_and'] = 'No disponible, a menos que:';
$string['list_root_and_hidden'] = 'No disponible (oculta), a menos que:';
$string['list_root_or'] = 'No disponible, a menos que, cualquiera de:';
$string['list_root_or_hidden'] = 'No disponible (oculta), a menos que, cualquiera de:';
$string['listheader_multi_after'] = 'de las siguientes';
$string['listheader_multi_and'] = 'todas';
$string['listheader_multi_before'] = 'coincidir';
$string['listheader_multi_or'] = 'cualquiera';
$string['listheader_sign_before'] = 'Estudiante';
$string['listheader_sign_neg'] = 'no debe de';
$string['listheader_sign_pos'] = 'debe de';
$string['listheader_single'] = 'coincidir con lo siguiente';
$string['manageplugins'] = 'Gestionar restricciones';
$string['missingplugin'] = 'Falta plugin para restricciones';
$string['or'] = 'o';
$string['privacy:metadata'] = 'El subsistema de Restricción del acceso no almacena ningún dato personal.';
$string['restrictaccess'] = 'Restringir acceso';
$string['restrictbygroup'] = 'Añadir restricción de acceso por grupo/agrupamiento';
$string['setheading'] = '{$a->number} Conjunto de {$a->count} restricción(es)';
$string['show_verb'] = 'Elegir para mostrar';
$string['showmore'] = 'Mostrar más';
$string['shown_all'] = 'Mostrado si el estudiante no cumple con las condiciones';
$string['shown_individual'] = 'Mostrado si el estudiante no cumple con esta condición';
$string['unknowncondition'] = 'Condición desconocida (plugin de condición eliminado)';
