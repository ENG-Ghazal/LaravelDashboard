# Railway Deployment Guide for Laravel Dashboard

## Prerequisites
- Railway account connected to your GitHub repository
- PostgreSQL database service added to your Railway project

## Environment Variables Setup

In your Railway project dashboard, add these environment variables:

### Required Variables:
```
APP_NAME=LaravelDashboard
APP_ENV=production
APP_DEBUG=false
APP_URL=laraveldashboard-production-8b0c.up.railway.app
APP_KEY=base64:IR8ZXDVb0rYICQRnBBoYHTMxPeZE0zC5FNWnCUq1DLg=

DB_CONNECTION=pgsql
DB_HOST=your-postgres-host
DB_PORT=5432
DB_DATABASE=your-database-name
DB_USERNAME=your-username
DB_PASSWORD=your-password

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

### Database Setup:
1. Add a PostgreSQL service to your Railway project
2. Railway will automatically provide `DATABASE_URL` environment variable
3. The application will use this URL to connect to the database

### File Storage:
- The application uses local file storage by default
- For production, consider using AWS S3 or similar cloud storage
- Update `FILESYSTEM_DRIVER` to `s3` if using cloud storage

## Deployment Steps:

1. **Push your code** to the connected GitHub repository
2. **Railway will automatically**:
   - Install PHP dependencies via Composer
   - Install Node.js dependencies via npm
   - Build frontend assets
   - Run database migrations
   - Start the application

3. **Manual steps** (if needed):
   - Generate application key: `php artisan key:generate`
   - Run migrations: `php artisan migrate`
   - Create storage link: `php artisan storage:link`

## Troubleshooting:

### Common Issues:
1. **Database Connection Error**: Ensure PostgreSQL service is running and environment variables are set
2. **Permission Errors**: Check file permissions in storage directory
3. **Memory Issues**: Railway provides limited memory, optimize your application
4. **Build Failures**: Check PHP version compatibility (8.0+ required)

### Logs:
- Check Railway deployment logs for detailed error messages
- Laravel logs are available in `storage/logs/laravel.log`

## Performance Optimization:
- Enable caching: `php artisan config:cache`
- Optimize routes: `php artisan route:cache`
- Cache views: `php artisan view:cache`
- Use Redis for sessions and cache in production

## Security:
- Set `APP_DEBUG=false` in production
- Use strong `APP_KEY`
- Configure proper CORS settings
- Use HTTPS in production
