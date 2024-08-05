<?php
class ApplicationLoader
{
    public function register()
    {
        spl_autoload_register([$this, 'loadClasses']);
    }

    public function loadClasses($class)
    {
        $filePath = $class;
        $filePath = str_replace(['\\'], ['/'], $filePath);
        $filePath = trim($filePath);
        $filePath = __DIR__ . '/../' . $filePath . '.php';
        if (file_exists($filePath)) {
            require_once $filePath;
            return TRUE;
        }

        return FALSE;
    }
}
