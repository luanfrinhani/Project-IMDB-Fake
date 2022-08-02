<?php

namespace App\Model\Core;

use App\Model\System\Movie;
use App\Traits\Core\Uuid;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 * @property string originalName
 * @property string mimeType
 * @property string url
 * @property string path
 * @property string size
 */
class File extends Model
{
    use Uuid;

    protected $fillable = [
        'name', 'originalName', 'mimeType', 'url', 'path', 'size',
    ];

    /**
     * @return string
     */
    public static function path(): string
    {
        return '/file';
    }
}
