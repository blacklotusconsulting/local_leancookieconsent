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
 * English language strings for local_leancookieconsent.
 *
 * @package   local_leancookieconsent
 * @copyright 2026 Black Lotus Consulting Srl
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dashboardlink'] = 'Open Lean Cookie Consent dashboard';
$string['pluginname'] = 'Lean Cookie Consent';

$string['privacy:metadata'] = 'The Lean Cookie Consent Moodle plugin stores only administrator configuration in Moodle: an enable/disable flag and the public Site Key. It does not store Moodle user data, course data, plugin lists, theme lists or consent records in Moodle.';
$string['privacy:metadata:externalpurpose'] = 'When enabled and configured, the bundled local runtime contacts the Lean Cookie Consent SaaS to fetch public JSON banner configuration and to record visitor consent choices.';
$string['privacy:metadata:sitekey'] = 'The configured public Site Key is sent to the Lean Cookie Consent API so the SaaS can return the correct banner configuration and store consent records for this Moodle site.';

$string['setting:disconnect_desc'] = 'To change Site Key, replace the value and save changes. To disconnect, disable Lean Cookie Consent or clear the Site Key and save changes.';
$string['setting:enabled'] = 'Enable Lean Cookie Consent';
$string['setting:enabled_desc'] = 'When enabled and configured with a valid Site Key, the bundled local Lean Cookie Consent runtime is loaded on Moodle pages.';
$string['setting:sitekey'] = 'Site Key';
$string['setting:sitekey_desc'] = 'Paste the Site Key from your Lean Cookie Consent dashboard. Allowed characters: lowercase letters, digits, underscores and hyphens, max 64 characters. Clear this field or disable the plugin to disconnect.';
$string['setting:status'] = 'Connection status';

$string['status:connected'] = 'Connected - the bundled local runtime will load on Moodle pages.';
$string['status:notconfigured'] = 'Not configured - no Lean Cookie Consent runtime or API request will be loaded.';
