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
 * Hook listener for local_leancookieconsent.
 *
 * @package   local_leancookieconsent
 * @copyright 2026 Black Lotus Consulting Srl
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_leancookieconsent;

/**
 * Hook listener class.
 */
class hook_listener {
    /**
     * Add the bundled Lean Cookie Consent runtime to the HTML head.
     *
     * @param \core\hook\output\before_standard_head_html_generation $hook Hook payload.
     * @return void
     */
    public static function before_standard_head_html_generation(
        \core\hook\output\before_standard_head_html_generation $hook
    ): void {
        $hook->add_html(\local_leancookieconsent\local\output::head_html());
    }
}
