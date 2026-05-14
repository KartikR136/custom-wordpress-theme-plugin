# 🚀 Custom WordPress Theme & Lead Manager Plugin

> A production-style WordPress engineering project showcasing custom theme development, modular plugin architecture, secure backend workflows, and scalable frontend implementation.

![WordPress](https://img.shields.io/badge/WordPress-Custom-blue)
![PHP](https://img.shields.io/badge/PHP-Backend-purple)
![JavaScript](https://img.shields.io/badge/JavaScript-Frontend-yellow)
![REST API](https://img.shields.io/badge/API-WP%20REST-success)
![Security](https://img.shields.io/badge/Security-Nonce%20%7C%20CSRF-red)

---

## 📌 Project Story

This project simulates a real-world enterprise WordPress implementation where a business requires:

- a completely custom responsive website
- reusable content management workflows
- dynamic Gutenberg-powered page building
- lead generation capability
- admin-side lead management
- secure API access for integrations

Instead of relying on prebuilt themes or page builders, this solution was engineered from scratch to demonstrate full ownership of the WordPress stack.

---

# ✨ Highlights

## 🎨 Custom Theme Engineering
Built a bespoke WordPress theme using native PHP template hierarchy.

Includes:

✅ custom homepage architecture  
✅ reusable template parts  
✅ responsive layouts  
✅ custom navigation menus  
✅ editor styling support  
✅ theme support configuration  
✅ component-based asset organization  

---

## 🧱 Gutenberg Custom Blocks
Implemented custom dynamic Gutenberg blocks for modern content editing.

Blocks included:

- Testimonial Block
- Service Card Block

Capabilities:

✅ block registration  
✅ editor assets  
✅ dynamic rendering callbacks  
✅ block styling separation  

---

## 🗂 Content Modeling
Structured custom content architecture using WordPress-native systems.

Includes:

- Custom Post Types
  - Services
  - Testimonials

- Custom Taxonomy
  - Service Categories

- ACF field groups
  - service icon
  - subtitle metadata

---

## 🔌 Custom Plugin Architecture
Designed a modular plugin for lead management functionality.

Plugin modules:

```bash
includes/
admin/
public/
templates/
```

Features:

✅ shortcode rendering  
✅ AJAX lead capture  
✅ database persistence  
✅ admin dashboard  
✅ settings interface  
✅ custom post type support  
✅ helper utilities  

---

## 🔐 Security Implementation

Security controls included:

- nonce verification
- CSRF protection
- input sanitization
- escaped output
- capability-based access control
- XML-RPC hardening
- protected REST endpoints

---

## 🌐 REST API

Custom endpoint:

```bash
/wp-json/lmp/v1/leads
```

Method:

```bash
GET
```

Access:

```bash
Admin only
```

Use cases:

- CRM integrations
- dashboard analytics
- internal tooling
- external admin consumers

---

## ⚡ Lead Capture Workflow

System flow:

```text
Visitor
   ↓
Shortcode Form
   ↓
AJAX Submission
   ↓
Nonce Verification
   ↓
Input Sanitization
   ↓
Database Persistence
   ↓
Admin Dashboard
   ↓
REST API Retrieval
```

---

# 🏗 Architecture

## Theme Layer

```bash
theme/custom-corporate-theme/
```

Responsibilities:

- presentation
- templates
- Gutenberg blocks
- ACF integration
- frontend assets

---

## Plugin Layer

```bash
plugin/lead-manager-plugin/
```

Responsibilities:

- business logic
- lead management
- API access
- admin controls
- database interactions

---

# 🛠 Tech Stack

### Backend
- PHP
- WordPress
- MySQL
- WP Hooks API
- WP REST API
- ACF

### Frontend
- HTML5
- CSS3
- JavaScript
- jQuery
- Gutenberg Blocks

### Architecture
- Modular PHP
- OOP plugin design
- Template hierarchy
- component-based frontend structure

---

# 📂 Project Structure

```bash
custom-wordpress-theme-plugin/
│
├── theme/
│   └── custom-corporate-theme/
│
├── plugin/
│   └── lead-manager-plugin/
│
├── docs/
│
└── screenshots/
```

---

# 📸 Screenshots

### Homepage
Responsive corporate landing page

### Admin Dashboard
Lead management backend UI

### Plugin Settings
Custom admin configuration panel

### Mobile View
Responsive cross-device implementation

---

# 🎯 Engineering Focus

This repository demonstrates practical understanding of:

- custom WordPress theme development
- plugin engineering
- WordPress security practices
- Gutenberg development
- REST API design
- AJAX workflows
- admin-side tooling
- scalable code organization

---

# 📖 Setup (Portfolio Demo)

Clone:

```bash
git clone https://github.com/YOUR_USERNAME/custom-wordpress-theme-plugin.git
```

Theme:

```bash
wp-content/themes/custom-corporate-theme
```

Plugin:

```bash
wp-content/plugins/lead-manager-plugin
```

Activate in WordPress admin.

---

# ⚠ Note

This repository is structured as a portfolio engineering showcase demonstrating architecture, implementation patterns, and full-stack WordPress development concepts.

---

# 👨‍💻 Author

**Karthik Ram**

Built to showcase production-style WordPress engineering and full-stack CMS architecture.