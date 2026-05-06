<?php

declare(strict_types=1);

namespace MobikulLoader;

final class MobikulLoaderPlugin
{
    public const VERSION = '1.0.0';
    public const SHOW_METHOD = 'MobikulLoader.Show';
    public const HIDE_METHOD = 'MobikulLoader.Hide';

    public function method(string $name, array $params = []): array
    {
        return [
            'method' => $name,
            'params' => $params,
        ];
    }
}
