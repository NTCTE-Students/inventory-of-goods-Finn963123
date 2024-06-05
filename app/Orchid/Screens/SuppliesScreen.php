<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Supplie;
use Orchid\Support\Facades\Layout;

class SuppliesScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'supplies' => Supplie::paginate(10),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Товары';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            \Orchid\Screen\Actions\Link::make('Создать товар')
                ->icon('bs.plus')
                ->route('platform.supplie'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            layout::table('supplies', [

            ]),
        ];
    }
}
