# base
### Laravel 5.1 || Custom Starter Kit

#### Includes:
* Multilingual Capability
* Working Forms
* Newsletter Subscription with Database Integration
* Backoffice Newsletter Membership Management

####Intructions:
* Download / Clone
* Run `composer install`
* Run `php artisan env:gen`
* Config `.env.gen` according to the example below and change the name of the file to `.env`:
	
		APP_ENV=local
		APP_DEBUG=true 
		APP_KEY=
		 
		DB_CONNECTION=mysql 
		DB_HOST=127.0.0.1 
		DB_DATABASE=DB_NAME 
		DB_USERNAME=DB_USERNAME
		DB_PASSWORD=DB_PASSWORD
		 
		CACHE_DRIVER=file
		SESSION_DRIVER=file
		QUEUE_DRIVER=sync
		 
		REDIS_HOST=127.0.0.1
		REDIS_PASSWORD=null
		REDIS_PORT=6379
		 
		MAIL_DRIVER=mailgun
		MAIL_HOST=smtp.mailgun.org
		MAIL_PORT=587
		MAIL_USERNAME=null
		MAIL_PASSWORD=null
		MAIL_ENCRYPTION=tls
		 
		MAILGUN_DOMAIN=DOMAIN
		MAILGUN_SECRET=key-????????????????
		
* Run `php artisan key:generate`
* Run `npm install`

#### Usage:
* Configure `Gruntfile.js`
* Run `Gruntfile.js` tasks (_e.g_ __watch__)
* Edit from `/src`