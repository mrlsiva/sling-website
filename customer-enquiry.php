<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>Customer Enquiries - Sling Software Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="sling-assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="sling-assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background: #f8f9fa;
        }
        
        .header {
            background: linear-gradient(135deg, #19ad9f 0%, #17a085 100%);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }
        
        .enquiry-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.2s;
        }
        
        .enquiry-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.15);
        }
        
        .enquiry-header {
            background: #f8931d;
            color: white;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
        }
        
        .enquiry-body {
            padding: 20px;
        }
        
        .enquiry-footer {
            background: #f8f9fa;
            padding: 15px 20px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .status-new {
            background: #e3f2fd;
            color: #1976d2;
        }
        
        .status-contacted {
            background: #fff3e0;
            color: #f57c00;
        }
        
        .status-closed {
            background: #e8f5e8;
            color: #388e3c;
        }
        
        .action-buttons .btn {
            margin: 5px;
            border-radius: 25px;
            font-weight: 600;
            padding: 8px 20px;
        }
        
        .btn-email {
            background: #19ad9f;
            color: white;
            border: none;
        }
        
        .btn-email:hover {
            background: #17a085;
            color: white;
        }
        
        .btn-whatsapp {
            background: #25d366;
            color: white;
            border: none;
        }
        
        .btn-whatsapp:hover {
            background: #128c7e;
            color: white;
        }
        
        .field-label {
            font-weight: 600;
            color: #19ad9f;
            margin-bottom: 5px;
        }
        
        .field-value {
            color: #333;
            margin-bottom: 15px;
        }
        
        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #19ad9f;
        }
        
        .stats-label {
            color: #666;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        @media (max-width: 768px) {
            .enquiry-footer {
                flex-direction: column;
                text-align: center;
            }
            
            .action-buttons {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fa fa-envelope"></i> Customer Enquiries</h1>
                    <p>Manage and respond to customer enquiries</p>
                </div>
                <div class="col-md-6 text-right">
                    <a href="index.php" class="btn btn-outline-light">
                        <i class="fa fa-home"></i> Back to Website
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Statistics Row -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-number" id="total-enquiries">0</div>
                    <div class="stats-label">Total Enquiries</div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-number" id="new-enquiries">0</div>
                    <div class="stats-label">New</div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-number" id="contacted-enquiries">0</div>
                    <div class="stats-label">Contacted</div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-number" id="closed-enquiries">0</div>
                    <div class="stats-label">Closed</div>
                </div>
            </div>
        </div>

        <!-- Filter Row -->
        <div class="row mb-4">
            <div class="col-md-6">
                <select id="statusFilter" class="form-control">
                    <option value="">All Statuses</option>
                    <option value="new">New</option>
                    <option value="contacted">Contacted</option>
                    <option value="closed">Closed</option>
                </select>
            </div>
            <div class="col-md-6">
                <select id="serviceFilter" class="form-control">
                    <option value="">All Services</option>
                    <option value="UI-UX Design">UI-UX Design</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Mobile Apps">Mobile Apps</option>
                    <option value="E-commerce">E-commerce</option>
                    <option value="Custom Software">Custom Software</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>

        <!-- Enquiries List -->
        <div id="enquiries-container">
            <!-- Enquiries will be loaded here via JavaScript -->
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="sling-assets/lib/jquery/jquery.min.js"></script>
    <script src="sling-assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
    $(document).ready(function() {
        loadEnquiries();
        
        // Filter change events
        $('#statusFilter, #serviceFilter').change(function() {
            loadEnquiries();
        });
    });

    function loadEnquiries() {
        const statusFilter = $('#statusFilter').val();
        const serviceFilter = $('#serviceFilter').val();
        
        $.ajax({
            url: 'sling-assets/admin-panel/fetch_enquiries.php',
            type: 'GET',
            data: {
                status: statusFilter,
                service: serviceFilter
            },
            dataType: 'json',
            success: function(data) {
                displayEnquiries(data.enquiries);
                updateStats(data.stats);
            },
            error: function() {
                $('#enquiries-container').html('<div class="alert alert-danger">Error loading enquiries</div>');
            }
        });
    }

    function displayEnquiries(enquiries) {
        let html = '';
        
        if (enquiries.length === 0) {
            html = '<div class="alert alert-info text-center">No enquiries found</div>';
        } else {
            enquiries.forEach(function(enquiry) {
                html += `
                    <div class="enquiry-card">
                        <div class="enquiry-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="mb-0">
                                        <i class="fa fa-user"></i> ${enquiry.name}
                                        <small class="ml-2">(${enquiry.service})</small>
                                    </h5>
                                </div>
                                <div class="col-md-4 text-right">
                                    <span class="status-badge status-${enquiry.status}">${enquiry.status}</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="enquiry-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="field-label">Email</div>
                                    <div class="field-value">${enquiry.email}</div>
                                    
                                    <div class="field-label">Phone</div>
                                    <div class="field-value">${enquiry.phone}</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-label">Company</div>
                                    <div class="field-value">${enquiry.company || 'Not provided'}</div>
                                    
                                    <div class="field-label">Date</div>
                                    <div class="field-value">${formatDate(enquiry.created_at)}</div>
                                </div>
                            </div>
                            
                            <div class="field-label">Message</div>
                            <div class="field-value">${enquiry.message}</div>
                        </div>
                        
                        <div class="enquiry-footer">
                            <div class="enquiry-id">
                                <small class="text-muted">ID: #${enquiry.id}</small>
                            </div>
                            
                            <div class="action-buttons">
                                <a href="mailto:${enquiry.email}?subject=Response to your enquiry - ${enquiry.service}&body=Dear ${enquiry.name},%0A%0AThank you for your enquiry regarding ${enquiry.service}.%0A%0ABest regards,%0ASling Software Solutions Team" 
                                   class="btn btn-email btn-sm">
                                    <i class="fa fa-envelope"></i> Email
                                </a>
                                
                                <a href="https://api.whatsapp.com/send?phone=${enquiry.phone.replace(/[^0-9]/g, '')}&text=Hi ${enquiry.name}, Thank you for your enquiry about ${enquiry.service}. We would like to discuss your requirements." 
                                   target="_blank" class="btn btn-whatsapp btn-sm">
                                    <i class="fa fa-whatsapp"></i> WhatsApp
                                </a>
                                
                                <select class="form-control form-control-sm d-inline-block" style="width: auto;" 
                                        onchange="updateStatus(${enquiry.id}, this.value)">
                                    <option value="new" ${enquiry.status === 'new' ? 'selected' : ''}>New</option>
                                    <option value="contacted" ${enquiry.status === 'contacted' ? 'selected' : ''}>Contacted</option>
                                    <option value="closed" ${enquiry.status === 'closed' ? 'selected' : ''}>Closed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                `;
            });
        }
        
        $('#enquiries-container').html(html);
    }

    function updateStats(stats) {
        $('#total-enquiries').text(stats.total || 0);
        $('#new-enquiries').text(stats.new || 0);
        $('#contacted-enquiries').text(stats.contacted || 0);
        $('#closed-enquiries').text(stats.closed || 0);
    }

    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
    }

    function updateStatus(id, status) {
        $.ajax({
            url: 'sling-assets/admin-panel/update_status.php',
            type: 'POST',
            data: {
                id: id,
                status: status
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    loadEnquiries(); // Reload to update stats and display
                } else {
                    alert('Error updating status');
                }
            },
            error: function() {
                alert('Error updating status');
            }
        });
    }
    </script>
</body>
</html>