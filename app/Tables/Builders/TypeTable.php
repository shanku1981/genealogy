<?php

namespace App\Tables\Builders;

use App\Type;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\App\Contracts\Table;

class TypeTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/types.json';

    public function query(): Builder
    {
        return Type::selectRaw('
            types.id
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
