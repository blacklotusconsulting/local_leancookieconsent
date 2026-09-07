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
 * Output helpers for local_leancookieconsent.
 *
 * @package   local_leancookieconsent
 * @copyright 2026 Black Lotus Consulting Srl
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_leancookieconsent\local;

/**
 * Builds the minimal head HTML for the bundled runtime.
 */
class output {
    /**
     * Lean production API base URL.
     */
    public const API_BASE_URL = 'https://api.leancookieconsent.com';

    /**
     * Site Key length limit.
     */
    public const SITE_KEY_MAX_LENGTH = 64;

    /**
     * Generate the head HTML. Emits at most once per request.
     *
     * @return string HTML for the standard head, or empty string.
     */
    public static function head_html(): string {
        static $emitted = false;
        if ($emitted) {
            return '';
        }

        if (self::should_skip_request()) {
            return '';
        }

        $sitekey = self::get_valid_site_key();
        if ($sitekey === '') {
            return '';
        }

        $emitted = true;
        $config = [
            'site' => $sitekey,
            'api' => self::API_BASE_URL,
        ];

        $json = json_encode($config, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
        if ($json === false) {
            return '';
        }

        $scripturl = new \moodle_url('/local/leancookieconsent/assets/lean-cookie-consent.js');

        return \html_writer::tag(
            'script',
            $json,
            [
                'type' => 'application/json',
                'id' => 'local-leancookieconsent-config',
            ]
        ) . "\n" . \html_writer::tag(
            'script',
            '',
            [
                'src' => $scripturl->out(false),
                'data-local-leancookieconsent' => 'runtime',
            ]
        );
    }

    /**
     * Return the Site Key if the plugin is enabled and the key is valid.
     *
     * @return string Valid Site Key, or empty string.
     */
    public static function get_valid_site_key(): string {
        $config = get_config('local_leancookieconsent');
        if (!is_object($config)) {
            return '';
        }

        if (empty($config->enabled) || (int)$config->enabled !== 1) {
            return '';
        }

        $sitekey = isset($config->sitekey) ? trim((string)$config->sitekey) : '';
        if ($sitekey === '') {
            return '';
        }

        $sitekey = strtolower($sitekey);
        if (strlen($sitekey) > self::SITE_KEY_MAX_LENGTH) {
            return '';
        }

        if (!preg_match('/^[a-z0-9_-]+$/', $sitekey)) {
            return '';
        }

        return $sitekey;
    }

    /**
     * Whether the current request should not receive frontend runtime output.
     *
     * @return bool
     */
    private static function should_skip_request(): bool {
        global $CFG;

        if (defined('CLI_SCRIPT') && CLI_SCRIPT) {
            return true;
        }

        if (defined('AJAX_SCRIPT') && AJAX_SCRIPT) {
            return true;
        }

        if (defined('WS_SERVER') && WS_SERVER) {
            return true;
        }

        if (function_exists('during_initial_install') && during_initial_install()) {
            return true;
        }

        if (!empty($CFG->upgraderunning)) {
            return true;
        }

        return false;
    }
}
