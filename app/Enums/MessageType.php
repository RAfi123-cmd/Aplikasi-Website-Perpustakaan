<?php

namespace App\Enums;

enum MessageType: string
{
    case CREATED = "Berhasil menambahkan";

    case UPDATED = "Berhasil memperbarui";

    case DELETED = "Berhasil menghapus";
    
    case ERRROR = "Terjadi kesalahan. Silahkan coba lagi nanti";

    public function message(string $entity = '', ?string $error = null): string
    {
        if ($this === MessageType::ERRROR && $error) {
            return "{$this->value} {$error}";
        }

        return "{$this->value} {$entity}";
    }
}