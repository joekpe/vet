<?php

namespace Filament\Panel\Concerns;

use Filament\Support\Assets\Theme;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Foundation\Vite;

trait HasTheme
{
    protected string | Htmlable | Theme | null $theme = null;

    /**
     * @param  string | array<string>  $theme
     */
    public function viteTheme(string | array $theme, ?string $buildDirectory = null): static
    {
        $this->theme(app(Vite::class)($theme, $buildDirectory));

        return $this;
    }

    public function theme(string | Htmlable | Theme $theme): static
    {
        $this->theme = $theme;

        return $this;
    }

    public function getTheme(): Theme
    {
        if (blank($this->theme)) {
            return $this->getDefaultTheme();
        }

        if ($this->theme instanceof Theme) {
            return $this->theme;
        }

        if ($this->theme instanceof Htmlable) {
            return Theme::make('app')->html($this->theme);
        }

        $theme = FilamentAsset::getTheme($this->theme);

        return $theme ?? Theme::make('app', path: $this->theme);
    }

    public function getDefaultTheme(): Theme
    {
        return FilamentAsset::getTheme('app');
    }
}
