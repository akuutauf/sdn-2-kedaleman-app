<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentPages extends Controller
{
    public function buttons()
    {
        return view('admin.component-pages.ui-features.buttons');
    }

    public function dropdowns()
    {
        return view('admin.component-pages.ui-features.dropdowns');
    }

    public function typography()
    {
        return view('admin.component-pages.ui-features.typography');
    }

    public function basic_elements()
    {
        return view('admin.component-pages.forms.basic_elements');
    }

    public function chart_js()
    {
        return view('admin.component-pages.charts.chartjs');
    }

    public function basic_table()
    {
        return view('admin.component-pages.tables.basic-table');
    }

    public function mdi_icons()
    {
        return view('admin.component-pages.icons.mdi');
    }

    public function sample_login()
    {
        return view('admin.component-pages.samples.login');
    }

    public function sample_register()
    {
        return view('admin.component-pages.samples.register');
    }

    public function error_404()
    {
        return view('admin.component-pages.samples.error-404');
    }

    public function error_500()
    {
        return view('admin.component-pages.samples.error-500');
    }

    public function documentation()
    {
        return view('admin.component-pages.documentation.documentation');
    }
}
