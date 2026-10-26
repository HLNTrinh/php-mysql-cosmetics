<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= htmlspecialchars($pageTitle ?? 'Admin | Cosmetics Beauty') ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet">

  <style>
    :root {
      --pink: #d96c91;
      --pink-dark: #c6537a;
      --pink-light: #fff0f5;
      --text: #49343e;
      --muted: #987f8a;
      --border: #f0e4e9;
      --bg: #fffafd;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background: var(--bg);
      color: var(--text);
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      width: 250px;
      padding: 26px 16px;
      overflow-y: auto;
      background: linear-gradient(180deg, #fff0f5, #fce4ec);
      border-right: 1px solid #f4dce5;
    }

    .brand {
      margin-bottom: 34px;
      padding: 0 12px;
      color: #5c3544;
      font-size: 21px;
      font-weight: 800;
    }

    .brand span {
      color: #df7f9e;
    }

    .menu-label {
      margin: 22px 12px 10px;
      color: #bd8b9e;
      font-size: 10px;
      font-weight: bold;
      letter-spacing: 1.3px;
    }

    .menu-link {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 5px;
      padding: 12px 14px;
      color: #795565;
      text-decoration: none;
      border-radius: 11px;
      transition: .2s;
    }

    .menu-link i {
      font-size: 17px;
    }

    .menu-link:hover,
    .menu-link.active {
      color: var(--pink-dark);
      background: #fff;
      box-shadow: 0 4px 14px #d96c9112;
    }

    .menu-link.active {
      font-weight: 700;
    }

    .main {
      min-height: 100vh;
      margin-left: 250px;
      padding: 28px 32px 24px;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 18px;
      margin-bottom: 28px;
    }

    .page-title {
      margin: 0 0 7px;
      font-size: 27px;
      font-weight: 800;
    }

    .muted,
    .subtitle {
      color: var(--muted);
    }

    .admin-info {
      display: flex;
      align-items: center;
      gap: 11px;
    }

    .avatar {
      display: grid;
      place-items: center;
      width: 42px;
      height: 42px;
      flex-shrink: 0;
      color: var(--pink-dark);
      background: #f8dce7;
      border-radius: 50%;
      font-size: 19px;
    }

    .panel {
      padding: 22px;
      margin-top: 24px;
      background: white;
      border: 1px solid var(--border);
      border-radius: 16px;
      box-shadow: 0 4px 18px #a95c7808;
    }

    .panel-title {
      margin: 0;
      font-size: 16px;
      font-weight: 800;
    }

    .panel-subtitle {
      margin-top: 6px;
      color: var(--muted);
      font-size: 12px;
    }

    .btn-pink {
      padding: 9px 14px;
      color: white;
      background: var(--pink);
      border: 1px solid var(--pink);
      border-radius: 10px;
      font-weight: 600;
    }

    .btn-pink:hover {
      color: white;
      background: var(--pink-dark);
    }

    .form-control,
    .form-select {
      min-height: 42px;
      border-color: #eadde3;
      border-radius: 10px;
      font-size: 13px;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #df91ac;
      box-shadow: 0 0 0 .2rem #d96c911a;
    }

    .table {
      margin-bottom: 0;
      vertical-align: middle;
    }

    .table thead th {
      padding: 14px 12px;
      color: #987f8a;
      background: #fff7fa;
      border-bottom: 1px solid var(--border);
      font-size: 10px;
      letter-spacing: .4px;
      white-space: nowrap;
    }

    .table tbody td {
      padding: 13px 12px;
      border-color: #f5edf0;
    }

    .footer {
      padding: 24px 0 0;
      color: #b39ca6;
      text-align: center;
      font-size: 11px;
    }

    @media (max-width: 992px) {
      .sidebar {
        width: 76px;
        padding: 22px 9px;
      }

      .brand {
        padding: 0;
        text-align: center;
        font-size: 0;
      }

      .brand::before {
        content: "L";
        font-size: 25px;
      }

      .brand span,
      .menu-label,
      .menu-link span {
        display: none;
      }

      .menu-link {
        justify-content: center;
        padding: 13px 5px;
      }

      .menu-link i {
        font-size: 20px;
      }

      .main {
        margin-left: 76px;
        padding: 22px 18px;
      }
    }

    @media (max-width: 576px) {
      .main {
        padding: 16px 12px;
      }

      .topbar {
        align-items: flex-start;
      }

      .page-title {
        font-size: 22px;
      }

      .admin-text {
        display: none;
      }

      .panel {
        padding: 15px;
      }
    }
  </style>
</head>

<body>