<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <title>Iniciar Sesión — Panel Administrativo | Pacha Mama Spirit Perú</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/icono-home.png') }}" type="image/png">

    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}">

    <style>
        :root {
            --brand-primary: #2aa8a8;
            --brand-primary-hover: #228b8b;
            --brand-primary-light: #e8f8f8;
            --brand-navy: #1a2e45;
            --brand-navy-dark: #0f1b29;
            --brand-gold: #d4a843;
            --brand-gold-soft: rgba(212, 168, 67, 0.15);
            --slate-50: #f8fafc;
            --slate-100: #f1f5f9;
            --slate-200: #e2e8f0;
            --slate-400: #94a3b8;
            --slate-500: #64748b;
            --slate-700: #334155;
            --slate-800: #1e293b;
            --slate-900: #0f172a;
            --radius-md: 10px;
            --radius-lg: 16px;
            --font-heading: 'Josefin Sans', sans-serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-glow: 0 0 35px rgba(42, 168, 168, 0.35);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            height: 100%;
            font-family: var(--font-body);
            background-color: var(--slate-50);
            color: var(--slate-800);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .auth-container {
            display: flex;
            min-height: 100vh;
            width: 100%;
            overflow-x: hidden;
        }

        /* ============================================================
           LADO IZQUIERDO: Hero Showcase (Desktop)
           ============================================================ */
        .auth-hero-panel {
            position: relative;
            flex: 1 1 54%;
            min-height: 100vh;
            background-image: url('{{ asset("img/panoramico/Machu-Picchu-Camino-Inca-Peru.webp") }}');
            background-size: cover;
            background-position: center center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 3.5rem 4rem;
            color: #ffffff;
            overflow: hidden;
        }

        .auth-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(
                135deg,
                rgba(15, 27, 41, 0.94) 0%,
                rgba(22, 96, 96, 0.82) 50%,
                rgba(10, 20, 32, 0.96) 100%
            );
            z-index: 1;
        }

        .auth-hero-pattern {
            position: absolute;
            inset: 0;
            background-image: radial-gradient(rgba(255, 255, 255, 0.08) 1px, transparent 1px);
            background-size: 24px 24px;
            opacity: 0.6;
            z-index: 2;
        }

        .auth-hero-glow-1 {
            position: absolute;
            top: -15%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(42, 168, 168, 0.4) 0%, transparent 70%);
            filter: blur(80px);
            z-index: 2;
            pointer-events: none;
        }

        .auth-hero-glow-2 {
            position: absolute;
            bottom: -15%;
            right: -10%;
            width: 550px;
            height: 550px;
            background: radial-gradient(circle, rgba(212, 168, 67, 0.25) 0%, transparent 70%);
            filter: blur(90px);
            z-index: 2;
            pointer-events: none;
        }

        .auth-hero-content {
            position: relative;
            z-index: 10;
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: space-between;
        }

        .hero-top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .hero-back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 9999px;
            transition: all 0.25s ease;
        }

        .hero-back-link:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateX(-3px);
        }

        .hero-badge-status {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #5dd5d5;
            background: rgba(42, 168, 168, 0.18);
            border: 1px solid rgba(93, 213, 213, 0.3);
            padding: 0.4rem 0.85rem;
            border-radius: 9999px;
            backdrop-filter: blur(6px);
        }

        .hero-pulse-dot {
            width: 8px;
            height: 8px;
            background-color: #22c55e;
            border-radius: 50%;
            box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
            animation: pulseGreen 2s infinite;
        }

        @keyframes pulseGreen {
            0% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
            }
            70% {
                box-shadow: 0 0 0 8px rgba(34, 197, 94, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
            }
        }

        .hero-main-body {
            max-width: 580px;
            padding: 2.5rem 0;
        }

        .hero-logo-wrapper {
            margin-bottom: 2rem;
            display: inline-block;
        }

        .hero-logo-img {
            height: 64px;
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.4));
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-family: var(--font-heading);
            font-size: 0.85rem;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--brand-gold);
            font-weight: 700;
            margin-bottom: 0.75rem;
        }

        .hero-title {
            font-family: var(--font-heading);
            font-size: 2.65rem;
            font-weight: 700;
            line-height: 1.15;
            margin-bottom: 1.25rem;
            color: #ffffff;
            letter-spacing: -0.02em;
        }

        .hero-title span {
            background: linear-gradient(120deg, #ffffff 40%, #5dd5d5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            font-size: 1.05rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.82);
            margin-bottom: 2.5rem;
            font-weight: 400;
        }

        .hero-feature-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.85rem;
        }

        .hero-feature-card {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.85rem 1.25rem;
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: var(--radius-lg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transition: all 0.25s ease;
        }

        .hero-feature-card:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(93, 213, 213, 0.35);
            transform: translateX(4px);
        }

        .hero-feature-icon {
            width: 42px;
            height: 42px;
            min-width: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(42, 168, 168, 0.35) 0%, rgba(26, 46, 69, 0.6) 100%);
            border: 1px solid rgba(93, 213, 213, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5dd5d5;
            font-size: 1.05rem;
        }

        .hero-feature-text h4 {
            font-size: 0.95rem;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 0.15rem;
        }

        .hero-feature-text p {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.7);
            margin: 0;
            line-height: 1.35;
        }

        .hero-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.6);
        }

        .hero-footer a {
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            transition: color 0.2s;
        }

        .hero-footer a:hover {
            color: #5dd5d5;
        }

        /* ============================================================
           LADO DERECHO: Panel de Formulario de Login (PC)
           ============================================================ */
        .auth-form-panel {
            flex: 1 1 46%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 3rem 2.5rem;
            background-color: #ffffff;
            position: relative;
        }

        .auth-form-card {
            width: 100%;
            max-width: 440px;
        }

        .form-header {
            margin-bottom: 2rem;
            text-align: left;
        }

        .form-mobile-brand {
            display: none;
            margin-bottom: 1.5rem;
        }

        .form-mobile-brand img {
            height: 48px;
            width: auto;
        }

        .form-title {
            font-family: var(--font-heading);
            font-size: 2rem;
            font-weight: 700;
            color: var(--brand-navy);
            line-height: 1.2;
            margin-bottom: 0.5rem;
            letter-spacing: -0.01em;
        }

        .form-subtitle {
            font-size: 0.95rem;
            color: var(--slate-500);
            line-height: 1.5;
        }

        .alert-box {
            padding: 0.85rem 1rem;
            border-radius: var(--radius-md);
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            line-height: 1.45;
        }

        .alert-box-danger {
            background-color: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
        }

        .alert-box-danger i {
            color: #dc2626;
            font-size: 1rem;
            margin-top: 0.15rem;
        }

        .alert-box-success {
            background-color: #f0fdf4;
            border: 1px solid #bbf7d0;
            color: #166534;
        }

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 1.35rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
        }

        .form-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--slate-700);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon-left {
            position: absolute;
            left: 1rem;
            color: var(--slate-400);
            font-size: 1rem;
            pointer-events: none;
            transition: color 0.2s ease;
        }

        .form-control {
            width: 100%;
            height: 48px;
            padding: 0 1rem 0 2.75rem;
            font-family: var(--font-body);
            font-size: 0.925rem;
            color: var(--slate-900);
            background-color: var(--slate-50);
            border: 1.5px solid var(--slate-200);
            border-radius: var(--radius-md);
            outline: none;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            background-color: #ffffff;
            border-color: var(--brand-primary);
            box-shadow: 0 0 0 4px rgba(42, 168, 168, 0.15);
        }

        .input-wrapper:focus-within .input-icon-left {
            color: var(--brand-primary);
        }

        .form-control.is-invalid {
            border-color: #ef4444;
            background-color: #fffafb;
        }

        .form-control.is-invalid:focus {
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.15);
        }

        .btn-toggle-password {
            position: absolute;
            right: 0.6rem;
            height: 36px;
            width: 36px;
            border: none;
            background: transparent;
            color: var(--slate-400);
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .btn-toggle-password:hover {
            color: var(--brand-navy);
            background-color: var(--slate-100);
        }

        .btn-toggle-password:focus-visible {
            outline: 2px solid var(--brand-primary);
            color: var(--brand-primary);
        }

        .field-feedback-error {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.8rem;
            color: #dc2626;
            margin-top: 0.25rem;
        }

        .form-options-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.5rem;
            margin-top: -0.25rem;
        }

        .custom-checkbox-label {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            cursor: pointer;
            user-select: none;
            font-size: 0.875rem;
            color: var(--slate-700);
            font-weight: 500;
        }

        .custom-checkbox-input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .checkbox-box {
            width: 19px;
            height: 19px;
            min-width: 19px;
            border: 1.5px solid var(--slate-300);
            border-radius: 5px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .checkbox-box i {
            color: #ffffff;
            font-size: 0.7rem;
            opacity: 0;
            transform: scale(0.5);
            transition: all 0.2s ease;
        }

        .custom-checkbox-input:checked + .checkbox-box {
            background-color: var(--brand-primary);
            border-color: var(--brand-primary);
            box-shadow: 0 0 0 3px rgba(42, 168, 168, 0.2);
        }

        .custom-checkbox-input:checked + .checkbox-box i {
            opacity: 1;
            transform: scale(1);
        }

        .custom-checkbox-input:focus-visible + .checkbox-box {
            outline: 2px solid var(--brand-primary);
            outline-offset: 2px;
        }

        .link-forgot {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--brand-primary);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .link-forgot:hover {
            color: var(--brand-primary-hover);
            text-decoration: underline;
        }

        .btn-submit-login {
            height: 50px;
            width: 100%;
            margin-top: 0.5rem;
            border: none;
            border-radius: var(--radius-md);
            background: linear-gradient(135deg, #2aa8a8 0%, #1a2e45 100%);
            color: #ffffff;
            font-family: var(--font-heading);
            font-size: 1.05rem;
            font-weight: 600;
            letter-spacing: 0.04em;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.65rem;
            box-shadow: 0 4px 14px rgba(42, 168, 168, 0.35);
            transition: all 0.25s ease;
        }

        .btn-submit-login:hover {
            background: linear-gradient(135deg, #228b8b 0%, #0f1b29 100%);
            box-shadow: 0 6px 20px rgba(42, 168, 168, 0.45);
            transform: translateY(-2px);
        }

        .btn-submit-login:active {
            transform: translateY(0);
            box-shadow: 0 2px 8px rgba(42, 168, 168, 0.3);
        }

        .btn-submit-login i {
            font-size: 0.95rem;
            transition: transform 0.25s ease;
        }

        .btn-submit-login:hover i {
            transform: translateX(4px);
        }

        .btn-submit-login:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        .form-footer-security {
            margin-top: 2.25rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--slate-200);
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            align-items: center;
            text-align: center;
        }

        .security-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            font-size: 0.75rem;
            color: var(--slate-500);
            background: var(--slate-100);
            padding: 0.35rem 0.75rem;
            border-radius: 9999px;
            border: 1px solid var(--slate-200);
        }

        .security-badge i {
            color: #10b981;
            font-size: 0.75rem;
        }

        .agency-copy {
            font-size: 0.75rem;
            color: var(--slate-400);
        }

        .mobile-back-link {
            display: none;
            margin-top: 1rem;
            font-size: 0.85rem;
            color: var(--slate-600);
            text-decoration: none;
            gap: 0.4rem;
            align-items: center;
        }

        .mobile-back-link:hover {
            color: var(--brand-primary);
        }

        /* ============================================================
           RESPONSIVE BREAKPOINTS (Mobile & Tablet)
           ============================================================ */
        @media (max-width: 1024px) {
            .auth-container {
                flex-direction: column;
            }

            .auth-hero-panel {
                flex: none;
                min-height: auto;
                padding: 2.5rem 1.75rem;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-feature-grid {
                display: none;
            }

            .hero-footer {
                display: none;
            }

            .auth-form-panel {
                flex: 1 1 auto;
                min-height: auto;
                padding: 2.5rem 1.5rem 3.5rem;
                background-color: var(--slate-50);
            }

            .auth-form-card {
                background: #ffffff;
                padding: 2rem 1.75rem;
                border-radius: var(--radius-lg);
                border: 1px solid var(--slate-200);
                box-shadow: var(--shadow-md);
            }

            .form-mobile-brand {
                display: block;
            }

            .mobile-back-link {
                display: inline-flex;
            }
        }

        @media (max-width: 480px) {
            .hero-top-bar {
                flex-direction: row;
            }

            .hero-title {
                font-size: 1.7rem;
            }

            .hero-description {
                font-size: 0.925rem;
                margin-bottom: 1rem;
            }

            .auth-form-card {
                padding: 1.5rem 1.25rem;
            }

            .form-title {
                font-size: 1.65rem;
            }

            .form-options-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.75rem;
            }
        }
    </style>
</head>
<body>

<div class="auth-container">

    <!-- ============================================================
         LADO IZQUIERDO: Hero Showcase (Desktop)
         ============================================================ -->
    <aside class="auth-hero-panel" aria-label="Información de Pacha Mama Spirit">
        <div class="auth-hero-overlay"></div>
        <div class="auth-hero-pattern"></div>
        <div class="auth-hero-glow-1"></div>
        <div class="auth-hero-glow-2"></div>

        <div class="auth-hero-content">
            <!-- Barra superior -->
            <div class="hero-top-bar">
                <a href="{{ route('index') }}" class="hero-back-link" title="Volver al sitio web de Pacha Mama Spirit">
                    <i class="fas fa-arrow-left"></i>
                    <span>Volver a la web</span>
                </a>
                <div class="hero-badge-status">
                    <span class="hero-pulse-dot"></span>
                    <span>Portal Seguro</span>
                </div>
            </div>

            <!-- Cuerpo principal -->
            <div class="hero-main-body">
                <div class="hero-logo-wrapper">
                    <img src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}"
                         alt="Pacha Mama Spirit Perú"
                         class="hero-logo-img">
                </div>

                <div class="hero-eyebrow">
                    <i class="fas fa-compass"></i>
                    <span>Panel de Control & Administración</span>
                </div>

                <h1 class="hero-title">
                    Experiencias Auténticas en el <span>Corazón de los Andes</span>
                </h1>

                <p class="hero-description">
                    Plataforma centralizada para la administración de tours, blogs, expediciones personalizadas y contenidos multilingües de <strong>Pacha Mama Spirit Perú</strong>.
                </p>

                <!-- Tarjetas de características -->
                <div class="hero-feature-grid">
                    <div class="hero-feature-card">
                        <div class="hero-feature-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <div class="hero-feature-text">
                            <h4>Destinos & Expediciones</h4>
                            <p>Gestión de itinerarios para Cusco, Machu Picchu, Camino Inca y Perú.</p>
                        </div>
                    </div>

                    <div class="hero-feature-card">
                        <div class="hero-feature-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <div class="hero-feature-text">
                            <h4>Sincronización Multilingüe</h4>
                            <p>Contenido segmentado y optimizado para Español, Inglés y Portugués.</p>
                        </div>
                    </div>

                    <div class="hero-feature-card">
                        <div class="hero-feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="hero-feature-text">
                            <h4>Seguridad & Autenticación</h4>
                            <p>Sesiones cifradas y acceso restringido para personal autorizado.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie del hero -->
            <footer class="hero-footer">
                <div>
                    <span>Cusco — Perú • Operador Turístico Autorizado</span>
                </div>
                <div>
                    <span>© {{ date('Y') }} Pacha Mama Spirit</span>
                </div>
            </footer>
        </div>
    </aside>

    <!-- ============================================================
         LADO DERECHO: Formulario de Login (PC & Móvil)
         ============================================================ -->
    <main class="auth-form-panel">
        <div class="auth-form-card">

            <!-- Marca móvil (oculta en PC) -->
            <div class="form-mobile-brand text-center">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" alt="Pacha Mama Spirit">
                </a>
            </div>

            <!-- Cabecera del formulario -->
            <div class="form-header">
                <h2 class="form-title">Iniciar Sesión</h2>
                <p class="form-subtitle">Ingresa tus credenciales para acceder al dashboard</p>
            </div>

            {{-- Alerta general de errores --}}
            @if ($errors->any())
                <div class="alert-box alert-box-danger" role="alert">
                    <i class="fas fa-exclamation-triangle"></i>
                    <div>
                        <strong>No pudimos iniciar tu sesión</strong>
                        <div>{{ $errors->first() }}</div>
                    </div>
                </div>
            @endif

            {{-- Alerta de estado de sesión --}}
            @if (session('status'))
                <div class="alert-box alert-box-success" role="alert">
                    <i class="fas fa-check-circle"></i>
                    <div>{{ session('status') }}</div>
                </div>
            @endif

            <!-- Formulario de autenticación -->
            <form method="POST" action="{{ route('login') }}" class="auth-form" id="loginForm" novalidate>
                @csrf

                <!-- Campo Email -->
                <div class="form-group">
                    <label for="email" class="form-label">
                        <span>Correo Electrónico</span>
                    </label>
                    <div class="input-wrapper">
                        <input id="email"
                               type="email"
                               name="email"
                               class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email', 'mirandadjmdjm@gmail.com') }}"
                               required
                               autocomplete="email"
                               autofocus
                               placeholder="nombre@pachamamaspirit.com"
                               aria-describedby="emailError">
                        <i class="fas fa-envelope input-icon-left" aria-hidden="true"></i>
                    </div>
                    @error('email')
                        <div class="field-feedback-error" id="emailError">
                            <i class="fas fa-circle-exclamation"></i>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <!-- Campo Contraseña con Mostrar/Ocultar -->
                <div class="form-group">
                    <label for="password" class="form-label">
                        <span>Contraseña</span>
                    </label>
                    <div class="input-wrapper">
                        <input id="password"
                               type="password"
                               name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               required
                               autocomplete="current-password"
                               placeholder="Ingresa tu contraseña"
                               style="padding-right: 3rem;"
                               aria-describedby="passwordError">
                        <i class="fas fa-lock input-icon-left" aria-hidden="true"></i>
                        <button type="button"
                                class="btn-toggle-password"
                                id="btnTogglePassword"
                                aria-label="Mostrar contraseña"
                                title="Mostrar u ocultar contraseña">
                            <i class="fas fa-eye" id="togglePasswordIcon"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="field-feedback-error" id="passwordError">
                            <i class="fas fa-circle-exclamation"></i>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <!-- Fila: Recordar Contraseña & Olvidaste contraseña -->
                <div class="form-options-row">
                    <label class="custom-checkbox-label" for="remember">
                        <input type="checkbox"
                               name="remember"
                               id="remember"
                               class="custom-checkbox-input"
                               {{ old('remember') ? 'checked' : 'checked' }}>
                        <span class="checkbox-box" aria-hidden="true">
                            <i class="fas fa-check"></i>
                        </span>
                        <span>Recordar contraseña</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="link-forgot" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>

                <!-- Botón de Envío -->
                <button type="submit" class="btn-submit-login" id="btnSubmit">
                    <span id="btnSubmitText">Ingresar al Sistema</span>
                    <i class="fas fa-arrow-right" id="btnSubmitIcon"></i>
                </button>
            </form>

            <!-- Pie de seguridad y asistencia -->
            <div class="form-footer-security">
                <div class="security-badge">
                    <i class="fas fa-lock"></i>
                    <span>Conexión segura SSL & Encriptación 256 bits</span>
                </div>
                <div class="agency-copy">
                    Pacha Mama Spirit Perú • Panel Administrativo
                </div>
                <a href="{{ route('index') }}" class="mobile-back-link">
                    <i class="fas fa-arrow-left"></i>
                    <span>Volver a la página principal</span>
                </a>
            </div>

        </div>
    </main>

</div>

<!-- JavaScript para alternar visibilidad de contraseña y UX del botón -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const toggleBtn = document.getElementById('btnTogglePassword');
        const toggleIcon = document.getElementById('togglePasswordIcon');
        const loginForm = document.getElementById('loginForm');
        const submitBtn = document.getElementById('btnSubmit');
        const submitText = document.getElementById('btnSubmitText');
        const submitIcon = document.getElementById('btnSubmitIcon');

        // Mostrar / Ocultar Contraseña
        if (toggleBtn && passwordInput && toggleIcon) {
            toggleBtn.addEventListener('click', function (e) {
                e.preventDefault();
                const isPassword = passwordInput.getAttribute('type') === 'password';

                if (isPassword) {
                    passwordInput.setAttribute('type', 'text');
                    toggleIcon.classList.remove('fa-eye');
                    toggleIcon.classList.add('fa-eye-slash');
                    toggleBtn.setAttribute('aria-label', 'Ocultar contraseña');
                } else {
                    passwordInput.setAttribute('type', 'password');
                    toggleIcon.classList.remove('fa-eye-slash');
                    toggleIcon.classList.add('fa-eye');
                    toggleBtn.setAttribute('aria-label', 'Mostrar contraseña');
                }
            });
        }

        // Estado de carga en envío de formulario
        if (loginForm && submitBtn) {
            loginForm.addEventListener('submit', function () {
                if (loginForm.checkValidity()) {
                    submitBtn.disabled = true;
                    if (submitText) submitText.textContent = 'Accediendo...';
                    if (submitIcon) {
                        submitIcon.classList.remove('fa-arrow-right');
                        submitIcon.classList.add('fa-circle-notch', 'fa-spin');
                    }
                }
            });
        }
    });
</script>

</body>
</html>
