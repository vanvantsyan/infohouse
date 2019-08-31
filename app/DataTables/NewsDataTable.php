<?php

namespace App\DataTables;

use App\Models\News;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class NewsDataTable extends Datatable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'admin.pages.news.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\News $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(News $model)
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
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px',   'title'=> 'Գործողություն'])
            ->parameters([
                'dom' => 'Bfrtip',
                'order' => [[0, 'desc']],
                'lengthMenu' => [[15, 50], [15, 50]],
                'buttons' => [
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner', 'text'=>'<i class="fas fa-sync"></i> Refresh'],
                ],
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

            [
                "name" => "id",
                "title" => "ID",
                "data" => "id"
            ],
            [
                "name" => "title",
                "title" => "Վերնագիր",
                "data" => "title"
            ],
            [
                "name" => "slug",
                "title" => "Slug",
                "data" => "slug"
            ]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'newssdatatable_' . time();
    }
}
