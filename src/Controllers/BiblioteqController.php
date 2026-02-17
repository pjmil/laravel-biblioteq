<?php

namespace Pjmil\Biblioteq\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;

class BiblioteqController
{
    public static $components_path;
    public static $valid_exts;
    public static $exclude_dirs;
    public static $files;
    public static $options;

    public function __construct()
    {
        self::$components_path = resource_path('views/components');
        self::$valid_exts = ['.blade.php'];
        self::$exclude_dirs = ['/cms'];
        self::$files = collect(File::files(self::$components_path . '/**'));
        self::$options = null;
    }

    public function show(Request $request, $item = null)
    {
        $options = null;

        $links = self::$files
            ->filter(
                fn($f) => str($f->getPathname())
                    ->unless(fn($s) => $s->contains(self::$exclude_dirs))
                    ->unless(fn($s) => $s->endsWith(self::$valid_exts))
                    ->isNotEmpty(),
            )
            ->map(
                fn($f) => (string) str($f->getPathname())
                    ->after('components/')
                    ->replace('/', '.')
                    ->replace('.blade.php', ''),
            )
            ->groupBy(fn($f) => str($f)->contains('.') ? str($f)->before('.') : 'default');

        if ($item) {
            $file = str($item)->replace('.', '/')->append('.blade.php')->toString();
            $content = File::get(resource_path("views/components/$file"));

            if (preg_match('/@props\s*\(\s*(\[[^\]]+\])\s*\)/s', $content, $matches)) {
                self::$options = $matches[1]; // Result: "[ 'type' => 'primary', 'size' => 'md' ]"
            }
        }

        return view('biblioteq::index', [
            'links' => $links,
            'item' => $item,
            'options' => self::$options,
        ]);
    }
}
