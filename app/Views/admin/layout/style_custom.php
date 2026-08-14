<style>
    /* Reset & Base */
    *, ::after, ::before { box-sizing: border-box; }
    body { margin: 0; font-family: 'Segoe UI', Roboto, sans-serif; font-size: 1rem; background-color: #f8fafc; color: #334155; }
    .container-fluid { width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; }
    .row { display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; }
    
    /* Layout Grid */
    .col-md-3 { position: relative; width: 100%; padding-right: 15px; padding-left: 15px; flex: 0 0 25%; max-width: 25%; }
    .col-md-9 { position: relative; width: 100%; padding-right: 15px; padding-left: 15px; flex: 0 0 75%; max-width: 75%; }
    .col-6 { flex: 0 0 50%; max-width: 50%; padding: 10px; }
    .mb-4 { margin-bottom: 1.5rem; }
    .mt-3 { margin-top: 1rem; }
    
    /* Top Navbar (Solid Dark Navy) */
    .navbar { position: sticky; top: 0; background: #1e293b; padding: 1rem 1.5rem; color: #fff; z-index: 1000; }
    .navbar-brand { font-size: 1.25rem; font-weight: 700; color: #fff; text-decoration: none; }
    
    /* Sidebar (Solid Slate Blue) */
    .sidebar { background: #334155; min-height: calc(100vh - 60px); padding: 20px 15px; }
    .list-group-item { display: block; background: transparent; color: #94a3b8 !important; font-weight: 600; border: none; border-radius: 6px; margin-bottom: 5px; padding: 12px 15px; text-decoration: none; transition: all 0.2s ease; }
    .list-group-item:hover { background: #475569; color: #fff !important; }
    .list-group-item.active { background: #0284c7 !important; color: #fff !important; }
    
    /* Content Area & Cards */
    .main-content { padding: 30px; }
    .card { background: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border: 1px solid #e2e8f0; }
    .card h5 { margin: 0 0 8px 0; color: #64748b; font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.5px; }
    .card h2 { margin: 0; font-size: 2.25rem; color: #1e293b; }
    
    /* Flat Border Colors for Cards */
    .bg-card-artikel { border-top: 4px solid #0284c7; }
    .bg-card-feedback { border-top: 4px solid #10b981; }
    
    /* Table & Bootstrap Buttons Replacement */
    .table { width: 100%; margin-bottom: 1rem; color: #334155; vertical-align: top; border-collapse: collapse; }
    .table th, .table td { padding: .75rem; border-bottom: 1px solid #e2e8f0; }
    .table th { background-color: #f1f5f9; text-align: left; color: #475569; font-weight: 600; }
    
    /* Solid UI Buttons */
    .btn { display: inline-block; padding: .5rem 1rem; font-size: 0.9rem; font-weight: 600; border-radius: 6px; text-decoration: none; cursor: pointer; border: none; text-align: center; transition: background 0.2s; }
    .btn-primary { color: #fff; background-color: #0284c7; }
    .btn-primary:hover { background-color: #0369a1; }
    .btn-warning { color: #fff; background-color: #f59e0b; }
    .btn-warning:hover { background-color: #d97706; }
    .btn-danger { color: #fff; background-color: #ef4444; }
    .btn-danger:hover { background-color: #dc2626; }
    .btn-success { color: #fff; background-color: #10b981; }
    .btn-success:hover { background-color: #059669; }
    
    /* Forms */
    .form-control, .form-select { display: block; width: 100%; padding: .5rem .75rem; font-size: 0.95rem; color: #334155; background-color: #fff; border: 1px solid #cbd5e1; border-radius: 6px; outline: none; }
    .form-control:focus, .form-select:focus { border-color: #0284c7; }
    .is-invalid { border-color: #ef4444; }
    .invalid-feedback { color: #ef4444; font-size: .875rem; margin-top: 4px; }

    /* Responsive */
    @media (max-width: 768px) {
        .col-md-3, .col-md-9, .col-6 { flex: 0 0 100%; max-width: 100%; }
        .sidebar { min-height: auto; }
    }
</style>
