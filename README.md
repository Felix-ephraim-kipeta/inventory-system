<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About inventory-system

# Inventory Management System (Diploma Final Year Project)

## Table of Contents
- [Project Overview](#project-overview)  
- [Features](#features)  
- [Tech Stack](#tech-stack)  
- [Database Schema](#database-schema)  
- [Installation & Setup](#installation--setup)  
- [Usage](#usage)  
- [User Roles & Permissions](#user-roles--permissions)  
- [Folder Structure](#folder-structure)  
- [Testing](#testing)  
- [Contributing](#contributing)  
- [License](#license)  

## Project Overview  
This Inventory Management System is my diploma final‑year project, built with Laravel. It enables an organization to track, allocate, and audit hardware assets—such as computers, printers, archived or returned devices—across multiple locations. The system features a relational database schema, Eloquent models, RESTful controllers, Blade views, responsive UI/UX enhancements, and automated tests to ensure reliability. It demonstrates proficiency in database design, MVC architecture, Laravel development, and software testing.

## Features  
- **Asset Tracking**: Create, read, update, delete (CRUD) operations for devices and locations.  
- **Assignments & History**: Record which user a device is assigned to, location history, and archived/returned status.  
- **Role‑Based Access Control**: Three roles—Super‑Admin (full access), Admin (most actions), Visitor (read‑only, report printing).  
- **Responsive UI**: Mobile‑friendly layouts, alerts, and status indicators.  
- **Automated Testing**: Unit, feature, and integration tests via PHPUnit/Pest.  
- **Reporting**: Export device lists and assignment history as PDF/CSV.  
- **Scheduler**: Automated daily summary reports using Laravel’s task scheduler.

## Tech Stack  
- **Framework**: Laravel 10 (PHP 8)  
- **Frontend**: Blade templates, Tailwind CSS (or Bootstrap)  
- **Database**: MySQL (or MariaDB)  
- **Authentication**: Laravel Breeze  
- **Testing**: PHPUnit / Pest  
- **Version Control**: Git & GitHub  

## Database Schema  
- **Devices**: `id, name, serial_number, status, location_id, assigned_to, archived_at, created_at, updated_at`  
- **Users**: `id, name, email, password, role_id, created_at, updated_at`  
- **Roles**: `id, name` (super‑admin, admin, visitor)  
- **Locations**: `id, name, description`  
- **Assignments** (pivot): `id, device_id, user_id, assigned_at, returned_at`  

