# base
### Laravel 5.1 || Custom Starter Kit

#### Includes:
* Multilingual Capability
* Working Forms
* Newsletter Subscription with Database Integration
* Backoffice Newsletter Membership Management

#### Intructions:
* Download / Clone
* Run `composer update`
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
		 
		MAILGUN_DOMAIN=domain.com
		MAILGUN_SECRET=key-????????????????
		
* Run `php artisan key:generate`
* Run `npm install`
* Create Database named after  `DB_NAME` on the `.env` file, with the following Schema:
	 
		|-_DB_NAME
		  |--_members
		  |--_migrations
		  |--_users
		
* Create the DB Admin User with tinker:
	
		Creating a user using tinker
		/project/directory/ php artisan tinker
		Psy Shell v0.4.3  by Justin Hileman
		>>> $user = new App\User;
		=> <App\User #000000007543b78f0000000009f4a1ca> {}
		>>> $user->name = 'Your Name';
		=> "Your Name"
		>>> $user->email = 'YOUR@email.com';
		=> "YOUR@email.com"
		>>> $user->password = bcrypt('YOUR PASSWORD');
		=> "$BC0/c0P6qzZ011MMwOVgC"
		>>> $user->save();
		=> true
		>>> exit;

#### Usage:
* Configure `Gruntfile.js`
* Run `Gruntfile.js` tasks (_e.g_ __watch__)
* Edit from `/src`