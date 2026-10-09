<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmission Successful</title>
    
    <!-- Bootstrap CSS for layout and responsive utilities -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts: Share Tech Mono for that futuristic, terminal look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --neon-green: #39ff14;
            --dark-space: #000000;
            --faded-green: rgba(57, 255, 20, 0.1);
        }

        body {
            background-color: var(--dark-space);
            color: var(--neon-green);
            font-family: 'Share Tech Mono', monospace;
            overflow: hidden; /* Prevent scrollbars from glowing effects */
            position: relative;
        }

        /* CRT Scanline effect for extra retro-futuristic feel */
        .scanlines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,0) 50%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.3));
            background-size: 100% 4px;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.6;
        }

        .alien-box {
            background-color: rgba(0, 15, 0, 0.8);
            border: 2px solid var(--neon-green);
            border-radius: 12px;
            box-shadow: 0 0 20px var(--neon-green), inset 0 0 15px var(--faded-green);
            animation: pulse-glow 3s infinite alternate;
            position: relative;
            z-index: 10;
        }

        /* Pulsing animation for the box shadow */
        @keyframes pulse-glow {
            0% {
                box-shadow: 0 0 15px var(--neon-green), inset 0 0 10px var(--faded-green);
            }
            100% {
                box-shadow: 0 0 35px var(--neon-green), inset 0 0 25px rgba(57, 255, 20, 0.3);
            }
        }

        .neon-text {
            text-shadow: 0 0 5px var(--neon-green), 0 0 15px var(--neon-green), 0 0 30px var(--neon-green);
            letter-spacing: 2px;
        }
        
        .sub-text {
            text-shadow: 0 0 5px var(--neon-green);
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .alien-icon {
            width: 80px;
            height: 80px;
            fill: none;
            stroke: var(--neon-green);
            stroke-width: 2;
            filter: drop-shadow(0 0 8px var(--neon-green));
            margin-bottom: 1.5rem;
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        .btn-alien {
            background-color: transparent;
            color: var(--neon-green);
            border: 1px solid var(--neon-green);
            box-shadow: 0 0 10px var(--faded-green);
            text-shadow: 0 0 5px var(--neon-green);
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .btn-alien:hover, .btn-alien:focus {
            background-color: var(--neon-green);
            color: var(--dark-space);
            box-shadow: 0 0 25px var(--neon-green);
            outline: none;
        }
    </style>
</head>
<body>
    <div class="scanlines"></div>

    <!-- vh-100 ensures the container takes up the full viewport height, d-flex centers content -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        
        <!-- Responsive column sizing for the box -->
        <div class="col-11 col-md-8 col-lg-6">
            
            <!-- The centered alien notification box -->
            <div class="alien-box p-4 p-md-5 text-center">
                
                <!-- Custom SVG UFO/Signal Icon -->
                <svg class="alien-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <!-- Beam -->
                    <path d="M12 14L8 22H16L12 14Z" stroke-dasharray="2 2"/>
                    <!-- UFO Dome -->
                    <path d="M16 9C16 6.79086 14.2091 5 12 5C9.79086 5 8 6.79086 8 9"/>
                    <!-- UFO Body -->
                    <ellipse cx="12" cy="11" rx="9" ry="3"/>
                    <!-- Signal Waves -->
                    <path d="M12 1V3" />
                    <path d="M15.5 2.5L14 4" />
                    <path d="M8.5 2.5L10 4" />
                </svg>

                <!-- Neon Glowing Text -->
                <h1 class="neon-text mb-4">TRANSMISSION SUCCESSFUL</h1>
                
                <p class="sub-text mb-5">
                    Your signal has been beamed across the galaxy.<br>
                    The mothership has received your encoded datalink. Awaiting further planetary directives...
                </p>

                <!-- Action Button -->
                <div>
                    <button class="btn btn-alien px-5 py-3 fw-bold" onclick="acknowledgeSignal()">
                        ACKNOWLEDGE
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Simple interaction for the button to add a bit of life
        function acknowledgeSignal() {
            const btn = document.querySelector('.btn-alien');
            btn.textContent = 'LINK SEVERED';
            btn.style.backgroundColor = 'var(--neon-green)';
            btn.style.color = 'var(--dark-space)';
            
            // Add a brief glitch effect to the box on click
            const box = document.querySelector('.alien-box');
            box.style.transform = 'translate(2px, 2px)';
            setTimeout(() => box.style.transform = 'translate(-2px, -2px)', 50);
            setTimeout(() => box.style.transform = 'translate(2px, -2px)', 100);
            setTimeout(() => box.style.transform = 'translate(0, 0)', 150);
        }
    </script>
</body>
</html>