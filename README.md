RUN composer install 
RUN cp .env.example .env
RUN php artisan key:generate
RUN php artisan migrate:fresh --seed
RUN php artisan serve
