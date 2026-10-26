<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Halaman dashboard admin.
     */
    public function index(): View
    {
        return view('admin.dashboard');
    }

    /**
     * Alias dashboard pada /admin/dashboard.
     */
    public function dashboard(): View
    {
        return view('admin.dashboard');
    }

    /**
     * Halaman kalender.
     */
    public function calendar(): View
    {
        return view('admin.calendar');
    }

    /**
     * Halaman form elements.
     */
    public function formElements(): View
    {
        return view('admin.form_elements');
    }

    /**
     * Halaman table plugins.
     */
    public function tablePlugins(): View
    {
        return view('admin.table_plugins');
    }

    /**
     * Halaman modal & notification.
     */
    public function uiModal(): View
    {
        return view('admin.ui_modal_notification');
    }

    /**
     * Halaman login admin.
     */
    public function login(): View
    {
        return view('admin.page_login');
    }
}
