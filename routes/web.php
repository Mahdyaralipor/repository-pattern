<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): JsonResponse {
    return response()->json([
        'message' => 'خوش آمدید به پروژه نمونه Repository Pattern در Laravel!',
        'description' => 'این پروژه بر اساس مقاله عالی "Mastering the Repository Design Pattern in Laravel" نوشته Shaun Thornburgh پیاده‌سازی شده است.',
        'what_to_do' => [
            '1. کدهای داخل app/Repositories رو بررسی کنید (اینترفیس و پیاده‌سازی ریپازیتوری).',
            '2. به RepositoryServiceProvider نگاه کنید تا ببینید چطور binding انجام شده.',
            '3. کنترلرها (مثل ProductController) رو چک کنید تا ببینید چطور ریپازیتوری inject و استفاده می‌شه.',
            '4. روت‌های api.php رو تست کنید (مثلاً با Postman): GET /api/product برای لیست محصولات.',
            '5. اگر می‌خواید تست بزنید، unit testهای احتمالی یا خودتون mock کنید.'
        ],
        'original_article' => 'https://medium.com/@shaunthornburgh/mastering-the-repository-design-pattern-in-laravel-67ed3805addd',
        'original_github_repo' => 'https://github.com/shaunthornburgh/laravel-repository-design-pattern',
        'tip' => 'این پترن برای پروژه‌های بزرگ عالیه – کد تمیز، تست‌پذیر و قابل نگهداری!'
    ], 200);
});
