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
 * Legacy output callback for local_leancookieconsent.
 *
 * Moodle 4.1-4.3 call this function while building the standard HTML head.
 * Moodle 4.4+ should use the PSR-14 hook registered in db/hooks.php. Both
 * paths delegate to the same output helper, which emits at most once.
 *
 * @package   local_leancookieconsent
 * @copyright 2026 Black Lotus Consulting Srl
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Add the bundled Lean Cookie Consent runtime to the HTML head.
 *
 * @return string HTML to add to the page head, or an empty string.
 */
function local_leancookieconsent_before_standard_html_head(): string {
    if (class_exists('\\core\\hook\\output\\before_standard_head_html_generation')) {
        return '';
    }

    return \local_leancookieconsent\local\output::head_html();
}
