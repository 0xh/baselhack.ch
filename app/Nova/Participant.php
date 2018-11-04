<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use App\Nova\Actions\ResendConfirmationEmail;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class Participant extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = '\App\Domain\Models\Participant';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'firstname', 'lastname', 'email',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function fields(Request $request)
    {
        return [

            Text::make('Company','company')
                ->sortable()
                ->rules('nullable', 'max:255'),

            Text::make('Firstname','firstname')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Lastname','lastname')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('E-Mail','email')
                ->sortable()
                ->hideFromIndex()
                ->creationRules('required', 'email', 'unique:participants,email', 'max:255')
                ->updateRules('required', 'email', 'max:255'),

            Boolean::make('Confirmed E-Mail','confirmed_email')
                ->sortable()
                ->exceptOnForms()
                ->rules('nullable','boolean'),

            Boolean::make('18+','over_eighteen')
                ->sortable()
                ->rules('nullable','boolean'),

            Boolean::make('Accepted Policy','accepted_policy')
                ->sortable()
                ->exceptOnForms()
                ->rules('required','boolean'),

            DateTime::make('Created at','created_at')
                ->sortable()
                ->onlyOnDetail(),

        ];
    }

    public function title()
    {
        return $this->firstname.' '.$this->lastname;
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function cards(Request $request)
    {
        return [

        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
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
     *
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
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            (new DownloadExcel)->withHeadings(),
            new ResendConfirmationEmail(),
        ];
    }
}
