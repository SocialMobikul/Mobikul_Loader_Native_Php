# Mobikul Loader for NativePHP Mobile

Loader state bridge for NativePHP Mobile with optional Blade and web view helpers.

## What this plugin does

`mobikul_loader` provides a simple bridge for showing and hiding loader state inside a NativePHP Mobile app. It exposes two bridge methods, `MobikulLoader.Show` and `MobikulLoader.Hide`, so your app can trigger loading UI consistently from JavaScript or PHP-driven web views.

The package also includes an optional HTML, CSS, and JavaScript helper for Blade-based screens or hybrid web views where you want a ready-made overlay spinner.

## Installation

```bash
composer require mobikul/mobikul_loader
php artisan native:plugin:register mobikul/mobikul_loader
```

If you install the plugin from the NativePHP marketplace, configure the NativePHP Composer repository and your marketplace credentials first:

```bash
composer config repositories.nativephp-plugins composer https://plugins.nativephp.com
composer config http-basic.plugins.nativephp.com <your-email> <your-license-key>
composer require mobikul/mobikul_loader
php artisan native:plugin:register mobikul/mobikul_loader
```

## Usage

Trigger loader state from your NativePHP app by calling the bridge endpoint:

```js
await fetch('/_native/api/call', {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({
    method: 'MobikulLoader.Show',
    params: { message: 'Loading...' }
  })
});

await fetch('/_native/api/call', {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({
    method: 'MobikulLoader.Hide',
    params: {}
  })
});
```

## Bridge Methods

### `MobikulLoader.Show`

Marks the loader as visible and returns the resolved loader state.

Parameters:

- `message` optional string shown in the response payload

Returns:

```json
{
  "visible": true,
  "message": "Loading..."
}
```

### `MobikulLoader.Hide`

Marks the loader as hidden and returns the resolved loader state.

Returns:

```json
{
  "visible": false
}
```

## Blade and Web View Helper

If your NativePHP app renders Blade or hybrid web views, you can use the included helper to render a loader overlay:

```php
<?php

use MobikulLoader\HtmlLoader;

$loader = new HtmlLoader('mobikul-native-loader', 'Please wait...');
?>

<link rel="stylesheet" href="/vendor/mobikul/mobikul_loader/assets/css/loader.css">

<?= $loader->render(); ?>

<script src="/vendor/mobikul/mobikul_loader/assets/js/loader.js"></script>
<script>
  window.MobikulNativeLoader.show('mobikul-native-loader');

  setTimeout(() => {
    window.MobikulNativeLoader.hide('mobikul-native-loader');
  }, 1200);
</script>
```

## Important Behavior

This plugin currently provides loader state bridge responses and optional web-based loader UI helpers. The included native bridge implementations return a success payload that your app can use to coordinate loading behavior on Android and iOS.

If your app needs a fully rendered platform-native overlay component, extend the native bridge implementations in:

- `resources/android/src/MobikulLoaderFunctions.kt`
- `resources/ios/Sources/MobikulLoaderFunctions.swift`

## Permissions

This plugin does not require any special permissions.

- Android permissions: none
- iOS Info.plist permissions: none

## Events

This plugin does not dispatch any custom NativePHP events in the current version.

## Validation

Run validation from your NativePHP app root:

```bash
php artisan native:plugin:validate
```

If you change native bridge code or the plugin manifest, rebuild the native layer:

```bash
php artisan native:install --force
php artisan native:run
```

## Versioning

This plugin follows semantic versioning.

- `MAJOR` for breaking API or manifest changes
- `MINOR` for backward-compatible features
- `PATCH` for fixes and documentation updates
