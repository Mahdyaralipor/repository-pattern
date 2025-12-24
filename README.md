# یادگیری Repository Pattern در Laravel

این فایل README برای یک پروژه نمونه در GitHub است که پیاده‌سازی **Repository Design Pattern** در Laravel را نشان می‌دهد. این پترن کمک می‌کند تا منطق دسترسی به داده‌ها (Data Access Logic) از کنترلرها و مدل‌ها جدا شود، کد تمیزتر، قابل تست‌تر و نگهداری آسان‌تری داشته باشید.

## چرا Repository Pattern؟
- **جداسازی مسئولیت‌ها**: مدل‌های Eloquent مستقیماً در کنترلرها استفاده نمی‌شوند.
- **تست‌پذیری بهتر**: می‌توانید ریپازیتوری‌ها را mock کنید.
- **تغییر آسان منبع داده**: اگر بخواهید از Eloquent به چیز دیگری (مثل API خارجی) سوئیچ کنید، فقط ریپازیتوری تغییر می‌کند.
- **کد تکراری کمتر**: متدهای CRUD مشترک در یک جا قرار می‌گیرند.

> توجه: در جامعه Laravel نظرات متفاوتی وجود دارد (بعضی می‌گویند Eloquent خودش مثل ریپازیتوری عمل می‌کند)، اما برای پروژه‌های بزرگ مفید است.

## منابع پیشنهادی برای یادگیری

### مقالات Medium :
1. **Mastering the Repository Design Pattern in Laravel**  
   لینک: https://medium.com/@shaunthornburgh/mastering-the-repository-design-pattern-in-laravel-67ed3805addd

2. **A Practical Guide to the Repository Pattern in Laravel**  
   لینک: https://medium.com/@binumathew1988/a-practical-guide-to-the-repository-pattern-in-laravel-ddafad8bc034

3. **Best Way to Implement Repository Pattern in Laravel**  
   لینک: https://medium.com/@habibur.rahman.0927/best-way-to-implement-repository-pattern-in-laravel-c3da491a63e0

### ویدیوهای یوتیوب :
- **Laravel Repository Pattern: "Good" vs "Bad" Examples** (اکتبر ۲۰۲۵ - خیلی به‌روز و عملی)  
  کانال: Laravel Daily  
  لینک: https://www.youtube.com/watch?v=kc584MVcvmI

- **Laravel: Repository Pattern in practice** (۲۰۲۳)  
  لینک: https://www.youtube.com/watch?v=4k1gQ2qlQvY

- **Laravel Repository Pattern with Example** (۲۰۲۱)  
  لینک: https://www.youtube.com/watch?v=qwMQPgdgwYI

## مثال‌های کد روی GitHub
اگر می‌خواهید کد واقعی ببینید:
- https://github.com/tridibdawn/Repository-Pattern
- https://github.com/imgrasooldev/repository-pattern-in-laravel
- https://github.com/hellodit/laravel-repository-pattern (با پروژه Todolist)

## نحوه پیاده‌سازی ساده
1. اینترفیس بسازید (مثل `UserRepositoryInterface`).
2. کلاس ریپازیتوری بسازید که اینترفیس را implement کند و از مدل Eloquent استفاده کند.
3. در `AppServiceProvider` bind کنید:  
   ```php
   $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
4. در کنترلر inject کنید و استفاده کنید.
