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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.
// Project implemented by the \"Recovery, Transformation and Resilience Plan.
// Funded by the European Union - Next GenerationEU\".
//
// Produced by the UNIMOODLE University Group: Universities of
// Valladolid, Complutense de Madrid, UPV/EHU, León, Salamanca,
// Illes Balears, Valencia, Rey Juan Carlos, La Laguna, Zaragoza, Málaga,
// Córdoba, Extremadura, Vigo, Las Palmas de Gran Canaria y Burgos.

/**
 * Version details
 *
 * @package    quizaccess_sebprogram
 * @copyright  2023 Proyecto UNIMOODLE
 * @author     UNIMOODLE Group (Coordinator) <direccion.area.estrategia.digital@uva.es>
 * @author     ISYC <soporte@isyc.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

global $ADMIN;

if (has_capability('quizaccess/sebprogram:manageprograms', context_system::instance())) {
    if ($ADMIN->fulltree) {

        $settings->add(new admin_setting_heading(
            'quizaccess_sebprogram/programs_heading',
            new lang_string('managetemplates', 'quizaccess_sebprogram'),
            new lang_string('managetemplates_heading', 'quizaccess_sebprogram')
        ));
        $settings->add(new quizaccess_sebprogram_admin_setting_display_programs());

        $settings->add(new admin_setting_heading(
            'quizaccess_sebprogram/urls_heading',
            new lang_string('seb_activateurlfiltering', 'quizaccess_seb'),
            new lang_string('urlsfilter_heading', 'quizaccess_sebprogram')
        ));

        // --- 1. Expresiones Permitidas (Simples) ---
        $settings->add(new admin_setting_configtextarea(
            'quizaccess_sebprogram/allowed_urls',
            new lang_string('seb_expressionsallowed', 'quizaccess_seb'),
            new lang_string('seb_expressionsallowed_help', 'quizaccess_seb'),
            ''
        ));

        // --- 2. Expresiones Regulares Permitidas (Regex) ---
        $settings->add(new admin_setting_configtextarea(
            'quizaccess_sebprogram/allowed_urls_regex',
            new lang_string('seb_regexallowed', 'quizaccess_seb'),
            new lang_string('seb_regexallowed_help', 'quizaccess_seb'),
            ''
        ));

        // --- 3. Expresiones Bloqueadas (Simples) ---
        $settings->add(new admin_setting_configtextarea(
            'quizaccess_sebprogram/blocked_urls',
            new lang_string('seb_expressionsblocked', 'quizaccess_seb'),
            new lang_string('seb_expressionsblocked_help', 'quizaccess_seb'),
            ''
        ));

        // --- 4. Expresiones Regulares Bloqueadas (Regex) ---
        $settings->add(new admin_setting_configtextarea(
            'quizaccess_sebprogram/blocked_urls_regex',
            new lang_string('seb_regexblocked', 'quizaccess_seb'),
            new lang_string('seb_regexblocked_help', 'quizaccess_seb'),
            ''
        ));
    }
}
