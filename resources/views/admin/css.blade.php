<style>
    :root {
      --primary: #2c3e50;
      --secondary: #34495e;
      --accent: #3498db;
      --light: #ecf0f1;
      --danger: #e74c3c;
      --success: #2ecc71;
      --warning: #f39c12;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background-color: #f5f6fa;
    }

    .admin-container {
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar Styles */
    .sidebar {
      width: 250px;
      background: var(--primary);
      color: white;
      transition: all 0.3s;
      position: fixed;
      height: 100vh;
      z-index: 1000;
    }

    .sidebar-header {
      padding: 20px;
      background: var(--secondary);
      display: flex;
      align-items: center;
    }

    .sidebar-header img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .sidebar-menu {
      padding: 20px 0;
    }

    .sidebar-menu h3 {
      color: var(--light);
      font-size: 14px;
      padding: 0 20px;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .sidebar-menu ul {
      list-style: none;
    }

    .sidebar-menu li a {
      display: block;
      padding: 12px 20px;
      color: var(--light);
      text-decoration: none;
      transition: all 0.3s;
      display: flex;
      align-items: center;
    }

    .sidebar-menu li a i {
      margin-right: 10px;
      font-size: 18px;
    }

    .sidebar-menu li a:hover, .sidebar-menu li a.active {
      background: var(--secondary);
      border-left: 4px solid var(--accent);
    }

    /* Main Content Styles */
    .main-content {
      flex: 1;
      margin-left: 250px;
      padding: 20px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
      background: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }

    .header h1 {
      color: var(--primary);
      font-size: 24px;
    }

    .user-actions {
      display: flex;
      align-items: center;
    }

    .user-actions .user-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-left: 15px;
      cursor: pointer;
    }

    /* Cards */
    .cards {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      margin-bottom: 30px;
    }

    .card {
      background: white;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .card h3 {
      color: var(--secondary);
      font-size: 14px;
      margin-bottom: 10px;
    }

    .card h2 {
      color: var(--primary);
      font-size: 24px;
    }

    .card.primary {
      border-left: 4px solid var(--accent);
    }

    .card.success {
      border-left: 4px solid var(--success);
    }

    .card.warning {
      border-left: 4px solid var(--warning);
    }

    .card.danger {
      border-left: 4px solid var(--danger);
    }

    /* Tables */
    .content-table {
      background: white;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 20px;
      margin-bottom: 20px;
    }

    .content-table h2 {
      color: var(--primary);
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table thead tr {
      background: var(--secondary);
      color: white;
    }

    table th, table td {
      padding: 12px 15px;
      text-align: left;
    }

    table tbody tr {
      border-bottom: 1px solid #dddddd;
    }

    table tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
    }

    table tbody tr:last-of-type {
      border-bottom: 2px solid var(--secondary);
    }

    .action-btn {
      padding: 5px 10px;
      border-radius: 3px;
      color: white;
      border: none;
      cursor: pointer;
      margin-right: 5px;
    }

    .edit-btn {
      background: var(--accent);
    }

    .delete-btn {
      background: var(--danger);
    }

    /* Forms */
    .form-container {
      background: white;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: var(--secondary);
      font-weight: 500;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 3px;
      font-size: 16px;
    }

    .form-control:focus {
      outline: none;
      border-color: var(--accent);
    }

    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
      transition: all 0.3s;
    }

    .btn-primary {
      background: var(--accent);
      color: white;
    }

    .btn-primary:hover {
      background: #2980b9;
    }

    .btn-danger {
      background: var(--danger);
      color: white;
    }

    .btn-danger:hover {
      background: #c0392b;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .sidebar {
        width: 80px;
      }
      .sidebar-header span, .sidebar-menu li a span {
        display: none;
      }
      .sidebar-menu li a i {
        margin-right: 0;
        font-size: 20px;
      }
      .sidebar-menu li a {
        justify-content: center;
        padding: 15px 0;
      }
      .main-content {
        margin-left: 80px;
      }
      .cards {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 576px) {
      .cards {
        grid-template-columns: 1fr;
      }
    }
    /* Add these styles to your CSS */
    .logout-item {
        padding: 0;
        margin: 0;
    }

    .logout-form {
        display: block;
        width: 100%;
    }

    .logout-button {
        width: 100%;
        text-align: left;
        padding: 12px 15px;
        background: none;
        border: none;
        color: inherit;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .logout-button:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    .logout-button i {
        margin-right: 10px;
        width: 20px;
    }
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right", // Change position if needed
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
  </style>
