<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $faviconV = @filemtime(public_path('favicon.ico')) ?: '20260804-01';
    ?>
    <meta name="theme-color" content="#0F766E">
    <title>Admin Login - Apotek Medistra Farma</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico?v=<?php echo e($faviconV); ?>">
    <link rel="shortcut icon" href="/favicon.ico?v=<?php echo e($faviconV); ?>">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f766e 0%, #14b8a6 45%, #2563eb 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0f172a;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.96);
            border-radius: 1.2rem;
            box-shadow: 0 20px 35px rgba(15, 118, 110, 0.18);
            width: 100%;
            max-width: 450px;
            padding: 2.5rem 2rem;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.25);
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-logo {
            margin-bottom: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-header h1 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #0f766e;
        }

        .login-header p {
            color: #475569;
            font-size: 0.975rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #1f2937;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e5e7eb;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: #0f766e;
            box-shadow: 0 0 0 3px rgba(20,184,166,0.12);
        }

        .form-errors {
            color: #dc2626;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .btn-login {
            width: 100%;
            padding: 0.8rem;
            background: linear-gradient(135deg, #0f766e 0%, #14b8a6 45%, #2563eb 100%);
            color: white;
            border: none;
            border-radius: 0.75rem;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 10px 20px rgba(14, 165, 164, 0.2);
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #0f766e 0%, #0ea5e9 100%);
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(37, 99, 235, 0.22);
        }

        .login-footer {
            margin-top: 1.5rem;
            text-align: center;
            color: #6b7280;
            font-size: 0.875rem;
        }

        .login-footer a {
            color: #0f766e;
            text-decoration: none;
            font-weight: 600;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid;
        }

        .alert-error {
            background: #fee2e2;
            color: #7f1d1d;
            border-left-color: #dc2626;
        }

        .alert-info {
            background: #ecfeff;
            color: #0f766e;
            border-left-color: #0ea5e9;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 1.5rem;
                margin: 1rem;
            }

            .login-header h1 {
                font-size: 1.25rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <div class="login-logo">
                <img src="<?php echo e(asset('logo apotek medistra farma.png')); ?>" alt="Apotek Medistra Farma" style="max-height: 110px; max-width: 170px; object-fit: contain; border-radius: 18px; background: rgba(255,255,255,0.9); padding: 0.6rem; box-shadow: 0 10px 20px rgba(15,118,110,0.12);">
            </div>
            <h1>Apotek Medistra Farma</h1>
            <p>Masuk ke panel administrasi</p>
        </div>

        <?php if($message = Session::get('error')): ?>
            <div class="alert alert-error">
                ✕ <?php echo e($message); ?>

            </div>
        <?php endif; ?>

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-info">
                ✓ <?php echo e($message); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('login.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input 
                    type="email" 
                    id="email"
                    name="email" 
                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="admin@medistrafarma.com"
                    required
                    value="<?php echo e(old('email')); ?>"
                >
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="form-errors"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input 
                    type="password" 
                    id="password"
                    name="password" 
                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="••••••••"
                    required
                >
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="form-errors"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn-login">Masuk</button>
        </form>

        <div class="login-footer">
            <p style="margin-top: 1.5rem;">
                <a href="<?php echo e(route('home')); ?>">← Kembali ke home</a>
            </p>
        </div>
    </div>
</body>
</html>




<?php /**PATH C:\Users\Ali Attaziri\medistrafarma\resources\views\admin\login.blade.php ENDPATH**/ ?>