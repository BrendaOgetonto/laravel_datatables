<?php

namespace App\DataTables;

use App\Models\Stock_mobile;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class Stock_mobileDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'stock_mobile.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Stock_mobile $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Stock_mobile $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('stock_mobile-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    )
                    ->parameters([
                        'dom'          => 'Bfrtip',
                        'buttons'      => ['csv', 'excel'],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(true)
                  ->printable(true)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make('store_owner'),
            Column::make('product'),
            Column::make('quantity_available'),
            Column::make('sold'),
            Column::make('created_at'),
            Column::make('clear_status'),
            // Column::make('updated_at'),
        ];
    }
    protected function getBuilderParameters()
    {
        return [
            'dom'     => 'Bfrtip',
            'order'   => [[0, 'desc']],
            'buttons' => [
                'create',
                'export',
                'print',
                'reset',
                'reload',
            ],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Stock_mobile_' . date('YmdHis');
    }
}
