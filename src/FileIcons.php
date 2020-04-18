<?php

namespace Guym4c\FontAwesomeFileIcons;

use voku\helper\UTF8;

class FileIcons {

    private const EXTENSIONS = [
        'gif'  => Icons::image,
        'jpeg' => Icons::image,
        'jpg'  => Icons::image,
        'png'  => Icons::image,

        'pdf' => Icons::pdf,

        'doc'  => Icons::word,
        'docx' => Icons::word,

        'ppt'  => Icons::powerpoint,
        'pptx' => Icons::powerpoint,

        'xls'  => Icons::excel,
        'xlsx' => Icons::excel,

        'csv' => Icons::csv,

        'aac' => Icons::audio,
        'mp3' => Icons::audio,
        'ogg' => Icons::audio,

        'avi' => Icons::video,
        'flv' => Icons::video,
        'mkv' => Icons::video,
        'mp4' => Icons::video,
        'wmv' => Icons::video,

        'gz'  => Icons::archive,
        'zip' => Icons::archive,

        'css'  => Icons::code,
        'html' => Icons::code,
        'js'   => Icons::code,
        'php' => Icons::code,

        'txt' => Icons::text,
    ];

    /**
     * @param string $extension
     * @param string $default
     * @return string FontAwesome icon classname. You will need to add 'fas' or similar where appropriate.
     */
    public static function byExtension(string $extension, string $default = Icons::default): string {
        return self::EXTENSIONS[$extension] ?? $default;
    }

    /**
     * You must have ext-fileinfo installed and enabled to use this method.
     *
     * @param string $filename
     * @param string $default
     * @return string FontAwesome icon classname. You will need to add 'fas' or similar where appropriate.
     */
    public static function byFilename(string $filename, string $default = Icons::default): string {
        return self::EXTENSIONS[UTF8::strtolower(pathinfo($filename, PATHINFO_EXTENSION))] ?? $default;
    }
}
