<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        :root {
            color-scheme: dark;
            --bg: #080b16;
            --card: rgba(255, 255, 255, 0.12);
            --card-border: rgba(255, 255, 255, 0.24);
            --text: #f8fbff;
            --muted: #b9c4d6;
            --accent: #7c3aed;
            --accent-2: #06b6d4;
            --shadow: 0 24px 80px rgba(0, 0, 0, 0.35);
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: grid;
            place-items: center;
            overflow: hidden;
            background:
                radial-gradient(circle at 20% 20%, rgba(124, 58, 237, 0.42), transparent 32rem),
                radial-gradient(circle at 80% 10%, rgba(6, 182, 212, 0.32), transparent 30rem),
                linear-gradient(135deg, #080b16 0%, #10172a 52%, #171021 100%);
            color: var(--text);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body::before,
        body::after {
            content: "";
            position: fixed;
            width: 18rem;
            height: 18rem;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--accent), var(--accent-2));
            filter: blur(12px);
            opacity: 0.18;
            z-index: 0;
        }

        body::before {
            top: -5rem;
            right: 10%;
        }

        body::after {
            bottom: -6rem;
            left: 8%;
        }

        .card {
            position: relative;
            z-index: 1;
            width: min(92vw, 42rem);
            padding: clamp(2rem, 6vw, 4rem);
            border: 1px solid var(--card-border);
            border-radius: 32px;
            background: var(--card);
            box-shadow: var(--shadow);
            text-align: center;
            backdrop-filter: blur(24px) saturate(160%);
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.25rem;
            padding: 0.45rem 0.85rem;
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.08);
            color: var(--muted);
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .status-dot {
            width: 0.55rem;
            height: 0.55rem;
            border-radius: 50%;
            background: #34d399;
            box-shadow: 0 0 18px #34d399;
        }

        h1 {
            margin: 0;
            font-size: clamp(3rem, 10vw, 6.5rem);
            line-height: 0.9;
            letter-spacing: -0.08em;
        }

        .gradient-text {
            display: block;
            background: linear-gradient(90deg, #ffffff 0%, #a5f3fc 42%, #c4b5fd 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        p {
            max-width: 34rem;
            margin: 1.5rem auto 0;
            color: var(--muted);
            font-size: clamp(1rem, 2.5vw, 1.18rem);
            line-height: 1.7;
        }

        .meta {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.75rem;
            margin-top: 2rem;
        }

        .pill {
            padding: 0.75rem 1rem;
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.07);
            color: #dbeafe;
            font-size: 0.92rem;
        }
    </style>
</head>
<body>
    <main class="card" aria-label="Modern hello world card">
        <div class="eyebrow"><span class="status-dot"></span> Live preview</div>
        <h1>Hello,<span class="gradient-text">World!</span></h1>
        <p>A modern PHP landing page with a glassmorphism card, vibrant gradients, and responsive typography.</p>
        <div class="meta" aria-label="Server details">
            <span class="pill">PHP <?= PHP_VERSION ?></span>
            <span class="pill">Host <?= htmlspecialchars(php_uname('n'), ENT_QUOTES, 'UTF-8') ?></span>
        </div>
    </main>
</body>
</html>
