<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Pdmfc\NovaCards\Info;

class Edition extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Edition::class;


    public static function label() {
        return ' Editions';
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'edition_number';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'edition_number',
        'edition_date'
    ];


    public static $group = ' Editions';


    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            //ID::make(__('ID'), 'id')->sortable(),
            Text::make('Numéro de l\'édition', 'edition_number')->rules('required'), 
            Text::make('Année de l\'edition', 'edition_date')->rules('required', 'max:4'), 

            Text::make('Prix', 'price')->hideFromIndex(), 
            Text::make('Prix Enfant', 'kids_price')->hideFromIndex(), 
            Text::make('Lieu', 'adress')->hideFromIndex(), 
            DateTime::make('Date de début', 'bigining_date'), 
            DateTime::make('Date de fin', 'ending_date'), 
            Trix::make('Desciption rapide', 'catch'),
            Textarea::make('Présenation de l\'édition','presentation'), 

            HasOne::make('archive'), 
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {

            return [
                (new Info())
                    ->info('Ci-dessous vous trouverez la liste des editions du marché des Gourmets. Vous pouvez en ajouter une nouvelle à chaque nouvelle édition, cela mettra automatiquement le site à jour avec les nouvelles informations.'),
                (new Info())
                    ->danger('Seul les informations de la derrnére édition crée seront affichées sur le site. Si vous en avez créé une nouvelle sans le vouloir, vous pouvez toujours la suprimer.')
            
                ];

    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
