<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('楷懿國際')
            ->description('後台管理系統...')
            ->body(function (Row $row) {
                // $row->column(6, function (Column $column) {
                //     $column->row(Dashboard::title());
                //     $column->row(new Examples\Tickets());
                // });

                // $row->column(6, function (Column $column) {
                //     $column->row(function (Row $row) {
                //         $row->column(6, new Examples\NewUsers());
                //         $row->column(6, new Examples\NewDevices());
                //     });

                //     $column->row(new Examples\Sessions());
                //     $column->row(new Examples\ProductOrders());
                // });
                $row->column(3, function (Column $column) {
                    // $column->append(Dashboard::environment());
                });

                $row->column(6, function (Column $column) {
                    $column->append('<div class="text-center" style="margin-top: 30%;margin-bottom: 30%;"><h1>歡迎使用楷懿國際後台管理系統</h1></div>');
                });

                $row->column(3, function (Column $column) {
                    // $column->append(Dashboard::dependencies());
                });
            });
    }
}
