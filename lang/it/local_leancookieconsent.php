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
 * Italian language strings for local_leancookieconsent.
 *
 * @package   local_leancookieconsent
 * @copyright 2026 Black Lotus Consulting Srl
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dashboardlink'] = 'Apri dashboard Lean Cookie Consent';
$string['pluginname'] = 'Lean Cookie Consent';

$string['privacy:metadata'] = 'Il plugin Moodle Lean Cookie Consent memorizza in Moodle solo la configurazione amministrativa: flag enable/disable e Site Key pubblico. Non memorizza dati utenti Moodle, dati corsi, liste plugin, liste temi o registri di consenso in Moodle.';
$string['privacy:metadata:externalpurpose'] = 'Quando e abilitato e configurato, il runtime locale bundled contatta il SaaS Lean Cookie Consent per recuperare la configurazione pubblica JSON del banner e registrare le scelte di consenso dei visitatori.';
$string['privacy:metadata:sitekey'] = 'Il Site Key pubblico configurato viene inviato alla API Lean Cookie Consent affinche il SaaS possa restituire la configurazione corretta del banner e salvare i registri di consenso per questo sito Moodle.';

$string['setting:disconnect_desc'] = 'Per cambiare Site Key, sostituisci il valore e salva. Per scollegare, disabilita Lean Cookie Consent oppure svuota il Site Key e salva.';
$string['setting:enabled'] = 'Abilita Lean Cookie Consent';
$string['setting:enabled_desc'] = 'Se abilitato e configurato con un Site Key valido, il runtime locale bundled di Lean Cookie Consent viene caricato sulle pagine Moodle.';
$string['setting:sitekey'] = 'Site Key';
$string['setting:sitekey_desc'] = 'Incolla il Site Key dalla dashboard Lean Cookie Consent. Caratteri consentiti: lettere minuscole, cifre, underscore e trattini, massimo 64 caratteri. Svuota questo campo o disabilita il plugin per scollegarlo.';
$string['setting:status'] = 'Stato connessione';

$string['status:connected'] = 'Connected - il runtime locale bundled verra caricato sulle pagine Moodle.';
$string['status:notconfigured'] = 'Not configured - nessun runtime Lean Cookie Consent e nessuna richiesta API verranno caricati.';
