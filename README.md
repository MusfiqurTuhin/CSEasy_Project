# CSEasy_Project

CSEasy is a PHP and HTML learning website for computer science students, with a members area, a Bangla-language content blog and online book reading.

## What it does

- Landing page (`index.php`) with navigation to CSE Bangla content, Bangla courses, a library, practice and Q&A. Library, Practice and Q&A links are empty in the current navigation.
- Member registration and login (`login.php`, `logout.php`) backed by a MySQL table named `registered_member` in a database named `cseasy` (see `connection.php`). The repo contains no SQL for this table.
- `subjects/computer_courses.html`: a page listing computer courses.
- `books/`: HTML chapter pages for a few books (Northanger Abbey, The Adventures of Sherlock Holmes, Programming in C), plus `read.html` and `Download_Books/` for browsing and downloading. A few PDFs sit at the repo root.
- `BanglaContent_QA/`: a separate PHP blog application with user registration, posts, post details, profile editing, a categories and comments model, and an admin panel (`admin/`) built on a Bootstrap admin template. Its schema is in `BanglaContent_QA/sql/perosnal_blog.sql` (tables: admin, categories, comments, contactusquery, pages, posts, users). It has its own README and licence file.

## Tech stack

PHP with mysqli (main site) and PDO (blog), MySQL, HTML, CSS and JavaScript with jQuery.

## Folder layout

- Repo root - main site pages (`index.php`, `login.php`, `connection.php`, styles and scripts)
- `BanglaContent_QA/` - blog app and `admin/` panel
- `books/`, `Download_Books/` - book content
- `subjects/` - course listing
- `images/`, `resources/`, `vendors/` - static assets

## Install and run

There is no package manager or build step. Use a PHP and MySQL stack such as XAMPP:

1. Place the project in the web server's document root.
2. Create a MySQL database named `cseasy` with a `registered_member` table (columns used by the code: Fullname, Email, Password, rewrite_password) and update `connection.php` if your MySQL settings differ.
3. For the blog, import `BanglaContent_QA/sql/perosnal_blog.sql` into a database and match the settings in `BanglaContent_QA/includes/config.php`.
4. Open the site in a browser.

## Environment variables

None. Database settings are set directly in `connection.php` and `BanglaContent_QA/includes/config.php`.

## Status

Student-style project. Some navigation links are placeholders, and the database setup for the main site is not included in the repo.
