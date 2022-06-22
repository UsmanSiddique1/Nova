<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;

class Agency extends Resource
{
   
    public static $model = \App\Models\Agency::class;

    public static $title = 'name';

    public static $search = [
        'user_id', 'name'
    ];

 
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('name')
                ->sortable()
                ->rules('required', 'max:255'),
            BelongsTo::make('User'),

        ];
    }

 
    public function cards(NovaRequest $request)
    {
        return [];
    }

    public function filters(NovaRequest $request)
    {
        return [];
    }

    public function lenses(NovaRequest $request)
    {
        return [];
    }

    public function actions(NovaRequest $request)
    {
        return [];
    }
}
