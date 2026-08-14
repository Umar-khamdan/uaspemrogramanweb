<style>
    body {
        background-color: #f4f7f6;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar-brand {
        font-weight: 700;
        letter-spacing: 1px;
    }
    .sidebar {
        background: linear-gradient(180deg, #2c3e50 0%, #3498db 100%);
        min-height: calc(100vh - 56px);
        box-shadow: 2px 0 5px rgba(0,0,0,0.05);
    }
    .sidebar .list-group-item {
        background: transparent;
        color: rgba(255,255,255,0.8);
        border: none;
        border-radius: 8px;
        margin-bottom: 5px;
        padding: 12px 20px;
        transition: all 0.3s ease;
    }
    .sidebar .list-group-item:hover, .sidebar .list-group-item.active {
        background: rgba(255,255,255,0.2) !important;
        color: #fff !important;
        padding-left: 25px;
    }
    .main-content {
        padding: 30px;
    }
    .card-custom {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }
    .card-custom:hover {
        transform: translateY(-5px);
    }
    @media (max-width: 768px) {
        .sidebar { min-height: auto; }
        .main-content { padding: 15px; }
    }
</style>
