# Content Approval Platform

A simple Laravel-based content management system where users can submit posts with images, and admins can approve or reject them. The application features automated email notifications, scheduled archival of pending posts, and an image upload helper with thumbnail generation.

## 🚀 Features

- User post submissions with image uploads,
- Admin review system: Approve or Reject posts,
- Email notifications on approval/rejection via queued jobs,
- Scheduled archival of unreviewed posts after 3 days,
- Custom image helper with thumbnail generation,
- Many-to-many category system,
- Polymorphic tag system,
- Soft deletes for posts,

---

## 🛠️ Technologies Used

- **Laravel 11**
- **MySQL**
- **Queue System** (Database)
- **Laravel Scheduler**
- **Gmail SMTP** for email
- **Laravel Storage** for file uploads
- **Blade/Markdown Emails**

---

## 📦 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/content-approval-platform.git
   cd content-approval-platform

2. **Install Dependencies**
   ```bash
   composer install
   npm install && npm run dev

3. **Setup env**
   ```bash
   cp .env.example .env
   php artisan key:generate

4. **Configuring the following in .env**
   ```bash
   DB_DATABASE=your_db
   DB_USERNAME=your_user
   DB_PASSWORD=your_pass
    
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=your_email@gmail.com
   MAIL_PASSWORD=your_app_password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=your_email@gmail.com
   MAIL_FROM_NAME="${APP_NAME}"

5. **Run Migration**
   ```bash
   php artisan migrate
   
6. **Rub Database Seeder**
   ```bash
   php artisan db:seed
   
7. **Setup Storage**
   ```bash
   php artisan storage:link

8. **Start the Queue work**
   ```bash
   php artisan queue:work

Author: Md Askar Ibne Saikh Sagor. 
