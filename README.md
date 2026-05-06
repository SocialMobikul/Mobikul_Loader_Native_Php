# mobikul_loader

NativePHP Mobile plugin that exposes loader bridge methods and includes optional web/blade loader UI helpers.

## Package Metadata

- Name: `mobikul/mobikul_loader`
- Type: `nativephp-plugin`
- NativePHP manifest: `nativephp.json`
- Laravel provider: `MobikulLoader\\MobikulLoaderServiceProvider`
- Current version: `1.0.0`

## Install (Live Plugin)

Install from Composer:

```bash
composer require mobikul/mobikul_loader
```

If distributed through NativePHP paid/private marketplace, configure repository and credentials first:

```bash
composer config repositories.nativephp-plugins composer https://plugins.nativephp.com
composer config http-basic.plugins.nativephp.com <your-email> <your-license-key>
composer require mobikul/mobikul_loader
```

## Register Plugin in NativePHP

First time in your app:

```bash
php artisan vendor:publish --tag=nativephp-plugins-provider
```

Register plugin:

```bash
php artisan native:plugin:register mobikul/mobikul_loader
```

Verify installation:

```bash
php artisan native:plugin:list
```

Build/run app:

```bash
php artisan native:run
```

## Methods (Bridge Functions)

Defined in `nativephp.json`:

1. `MobikulLoader.Show`
- iOS target: `MobikulLoaderFunctions.Show`
- Android target: `com.mobikul.plugins.loader.MobikulLoaderFunctions.Show`
- Params: optional `message` (string)

2. `MobikulLoader.Hide`
- iOS target: `MobikulLoaderFunctions.Hide`
- Android target: `com.mobikul.plugins.loader.MobikulLoaderFunctions.Hide`
- Params: none required

## JavaScript Usage

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

## PHP/Web Loader Helper Usage (Optional)

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
  setTimeout(() => window.MobikulNativeLoader.hide('mobikul-native-loader'), 1200);
</script>
```

## Permissions

Current version requests no special platform permissions.

- Android permissions: none
- iOS Info.plist permissions: none

## Events

Current version dispatches no NativePHP plugin events.

## Validation

Run from your NativePHP app root:

```bash
php artisan native:plugin:validate
```

If you change native code or manifest and need a clean rebuild:

```bash
php artisan native:install --force
php artisan native:run
```

## Versioning

This plugin follows semantic versioning.

- `MAJOR`: breaking API/manifest changes
- `MINOR`: backward-compatible feature additions
- `PATCH`: bug fixes only

Release workflow:

1. Update `CHANGELOG.md`
2. Commit changes
3. Create git tag (example): `v1.0.0`
4. Push tags to GitHub
# Mobikul_Loader_Native_Php
