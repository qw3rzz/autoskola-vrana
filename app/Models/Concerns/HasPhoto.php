<?php

namespace App\Models\Concerns;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * Pro modely se sloupcem `photo_path`.
 * Ukládá fotku, maže starou při výměně a smaže soubor, když se smaže záznam.
 */
trait HasPhoto
{
    public static function bootHasPhoto(): void
    {
        static::deleted(function ($model) {
            $model->deletePhotoFile($model->photo_path);
        });
    }

    /** Uloží novou fotku a smaže starou. Model je potřeba po zavolání uložit (->save()). */
    public function setPhoto(UploadedFile $file): void
    {
        $this->deletePhotoFile($this->getOriginal('photo_path'));

        $this->photo_path = $file->store($this->getTable(), 'public');
    }

    protected function deletePhotoFile(?string $path): void
    {
        if ($path) {
            Storage::disk('public')->delete($path);
        }
    }
}
