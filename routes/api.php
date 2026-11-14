<?php

// ERP API routes are registered by the accounting-erp-http module.

\Illuminate\Support\Facades\Route::middleware('auth:sanctum')->get('/user', fn (\Illuminate\Http\Request $request) => $request->user());
