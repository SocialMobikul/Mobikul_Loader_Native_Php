# Changelog

All notable changes to this project will be documented in this file.

## [1.0.1] - 2026-05-06

### Changed
- Refined the package description for clearer marketplace positioning.
- Rewrote the README to use a cleaner NativePHP plugin documentation structure.
- Clarified that the current implementation exposes loader state bridge methods and optional web view helpers.
- Added explicit requirements, asset publishing, quick-start, and JS helper usage guidance.
- Added package asset publishing support for Blade and web view helper files.
- Added an explicit `nativephp/mobile` `^3.0` dependency and aligned the documented PHP requirement to `^8.2`.
- Added `android.min_version` and `ios.min_version` to `nativephp.json` for NativePHP review compliance.
- Updated the iOS minimum supported version to `16.0`.

## [1.0.0] - 2026-05-06

### Added
- Converted package to NativePHP Mobile plugin skeleton (`type: nativephp-plugin`).
- Added `nativephp.json` manifest with bridge methods:
  - `MobikulLoader.Show`
  - `MobikulLoader.Hide`
- Added Laravel provider and facade wiring.
- Added Android and iOS bridge function stubs.
- Kept HTML/CSS/JS loader helper for web/blade fallback usage.
- Added plugin usage documentation for local demo app testing.

### Changed
- Updated repository commit identity configuration to `SocialMobikul <social.mobikul@webkul.com>` for future releases.
