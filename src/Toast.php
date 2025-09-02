<?php

namespace Ihxnnxs\UmbraUI;

class Toast
{
    public static function success(string $message, ?string $title = null): void
    {
        session()->flash('umbra_toast', [
            'type' => 'success',
            'message' => $message,
            'title' => $title,
        ]);
    }

    public static function error(string $message, ?string $title = null): void
    {
        session()->flash('umbra_toast', [
            'type' => 'error',
            'message' => $message,
            'title' => $title,
        ]);
    }

    public static function warning(string $message, ?string $title = null): void
    {
        session()->flash('umbra_toast', [
            'type' => 'warning',
            'message' => $message,
            'title' => $title,
        ]);
    }

    public static function info(string $message, ?string $title = null): void
    {
        session()->flash('umbra_toast', [
            'type' => 'info',
            'message' => $message,
            'title' => $title,
        ]);
    }

    public static function message(string $message, string $type = 'default', ?string $title = null): void
    {
        session()->flash('umbra_toast', [
            'type' => $type,
            'message' => $message,
            'title' => $title,
        ]);
    }
}
