# Customer Enquiry System - Setup Instructions

## 🚀 Quick Setup

1. **Create Database Table**: Visit this URL in your browser to create the enquiries table:

   ```
   http://localhost/sling-website/sling-assets/admin-panel/create_table.php
   ```

2. **Access Customer Enquiries**: View and manage enquiries at:
   ```
   http://localhost/sling-website/customer-enquiry.php
   ```

## ✨ Features Implemented

### 📧 **Email + Database Storage**

- All form submissions are saved to database AND sent via email to `slinggroups@gmail.com`
- Professional HTML email templates with company branding
- Form validation and error handling

### 🎯 **Customer Enquiry Management**

- **Statistics Dashboard**: Total, New, Contacted, Closed enquiries
- **Filtering**: Filter by status (New/Contacted/Closed) and service type
- **Status Management**: Update enquiry status with dropdown
- **Contact Actions**: Direct email and WhatsApp buttons for each enquiry

### 📱 **Contact Integration**

- **Email Button**: Pre-fills subject and greeting for professional responses
- **WhatsApp Button**: Opens WhatsApp with pre-written message including customer name and service
- **Phone numbers**: Automatically formatted for WhatsApp

### 🎨 **Professional Design**

- Responsive design works on desktop, tablet, and mobile
- Modern card-based layout with hover effects
- Color-coded status badges (New=Blue, Contacted=Orange, Closed=Green)
- Bootstrap-based UI with custom styling

## 📊 Database Structure

**Table: `enquiries`**

- `id` - Auto-increment primary key
- `name` - Customer name (required)
- `email` - Work email (required, validated)
- `phone` - Phone number (required)
- `company` - Company name (optional)
- `service` - Selected service (required)
- `message` - Project details (required)
- `status` - Enum: 'new', 'contacted', 'closed' (default: 'new')
- `created_at` - Auto timestamp
- `updated_at` - Auto update timestamp

## 🔧 Navigation

- **Admin Panel**: Added "View Customer Enquiries" button in admin panel
- **Back to Website**: Link from enquiry page back to main site

## 📄 Files Created/Modified

### New Files:

- `customer-enquiry.php` - Main enquiry management page
- `sling-assets/admin-panel/create_table.php` - Database setup
- `sling-assets/admin-panel/fetch_enquiries.php` - API to fetch enquiries
- `sling-assets/admin-panel/update_status.php` - API to update status

### Modified Files:

- `sling-assets/admin-panel/enquiry_handler.php` - Added database storage
- `sling-assets/admin-panel/index.php` - Added navigation link

## 🔗 Access URLs

1. **Website**: `http://localhost/sling-website/`
2. **Customer Enquiries**: `http://localhost/sling-website/customer-enquiry.php`
3. **Admin Panel**: `http://localhost/sling-website/sling-assets/admin-panel/`
4. **Setup Database**: `http://localhost/sling-website/sling-assets/admin-panel/create_table.php`

The system is now ready to use! All enquiries will be stored in the database and can be managed through the professional interface.
