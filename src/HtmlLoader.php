<?php

declare(strict_types=1);

namespace MobikulLoader;

final class HtmlLoader
{
    private string $id;
    private string $message;

    public function __construct(string $id = 'mobikul-native-loader', string $message = 'Loading...')
    {
        $this->id = $id;
        $this->message = $message;
    }

    public function render(): string
    {
        $safeId = htmlspecialchars($this->id, ENT_QUOTES, 'UTF-8');
        $safeMessage = htmlspecialchars($this->message, ENT_QUOTES, 'UTF-8');

        return <<<HTML
<div id="{$safeId}" class="mobikul-loader-overlay" aria-live="polite" aria-busy="true">
    <div class="mobikul-loader-box">
        <span class="mobikul-loader-spinner" aria-hidden="true"></span>
        <p class="mobikul-loader-message">{$safeMessage}</p>
    </div>
</div>
HTML;
    }
}
