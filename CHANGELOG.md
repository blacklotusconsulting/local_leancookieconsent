# Changelog

All notable changes to **Lean Cookie Consent for Moodle** are documented here.
The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/).

## [1.0.1] - 2026-09-04

### Changed
- Point the admin dashboard link to `https://app.leancookieconsent.com/admin`.

## [1.0.0] - 2026-08-24

### Added
- Initial MVP release as a minimal Lean Cookie Consent SaaS connector.
- Admin settings page with enable/disable, manual Site Key, connection status and dashboard link.
- Bundled local JavaScript runtime loaded from the Moodle plugin; no remote executable JavaScript.
- Non-executable JSON bootstrap tag for Site Key/API configuration, so the runtime asset remains static and does not need query parameters.
- Runtime integration with `https://api.leancookieconsent.com/v1/config` for JSON configuration.
- Runtime consent logging to `https://api.leancookieconsent.com/api/consent`.
- Moodle 4.1-4.3 legacy output callback and Moodle 4.4+/5.x PSR-14 output hook, guarded to emit once.
- Privacy API metadata for the Lean Cookie Consent external service.
- English (`en`) and Italian (`it`) language packs.
- README, LICENSE and CHANGELOG.
