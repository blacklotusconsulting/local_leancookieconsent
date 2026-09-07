<?php
// This file is part of the local_leancookieconsent plugin for Moodle.
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
 * Admin settings for local_leancookieconsent.
 *
 * @package   local_leancookieconsent
 * @copyright 2026 Black Lotus Consulting Srl
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage(
        'local_leancookieconsent',
        get_string('pluginname', 'local_leancookieconsent')
    );

    $ADMIN->add('localplugins', $settings);

    $settings->add(new admin_setting_configcheckbox(
        'local_leancookieconsent/enabled',
        get_string('setting:enabled', 'local_leancookieconsent'),
        get_string('setting:enabled_desc', 'local_leancookieconsent'),
        0
    ));

    $settings->add(new admin_setting_configtext(
        'local_leancookieconsent/sitekey',
        get_string('setting:sitekey', 'local_leancookieconsent'),
        get_string('setting:sitekey_desc', 'local_leancookieconsent'),
        '',
        PARAM_ALPHANUMEXT,
        64
    ));

    $sitekey = \local_leancookieconsent\local\output::get_valid_site_key();
    if ($sitekey === '') {
        $status = get_string('status:notconfigured', 'local_leancookieconsent');
    } else {
        $status = get_string('status:connected', 'local_leancookieconsent');
    }

    $dashboard = \html_writer::link(
        new \moodle_url('https://app.leancookieconsent.com/admin'),
        get_string('dashboardlink', 'local_leancookieconsent'),
        [
            'target' => '_blank',
            'rel' => 'noopener noreferrer',
        ]
    );

    $settings->add(new admin_setting_heading(
        'local_leancookieconsent/status',
        get_string('setting:status', 'local_leancookieconsent'),
        \html_writer::tag('p', $status) .
            \html_writer::tag('p', $dashboard) .
            \html_writer::tag('p', get_string('setting:disconnect_desc', 'local_leancookieconsent'))
    ));
}
