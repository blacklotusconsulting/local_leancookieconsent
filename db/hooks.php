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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Hook listener registration for local_leancookieconsent.
 *
 * Registers the runtime callback on the official Moodle 4.4+ hook
 * `core\hook\output\before_standard_head_html_generation`.
 *
 * @package   local_leancookieconsent
 * @copyright 2026 Black Lotus Consulting Srl
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$callbacks = [
    [
        'hook'     => \core\hook\output\before_standard_head_html_generation::class,
        'callback' => \local_leancookieconsent\hook_listener::class . '::before_standard_head_html_generation',
        'priority' => 1000,
    ],
];
