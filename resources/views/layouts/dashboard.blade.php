<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com/3.2.0"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        /* Sidebar Animation */
        .sidebar {
            transition: all 0.3s ease-in-out;
        }
        
        /* Content Animation */
        .main-content {
            transition: all 0.3s ease-in-out;
        }
        
        /* Menu Item Hover Animation */
        .menu-item {
            transition: all 0.2s ease-in-out;
        }
        
        .menu-item:hover {
            transform: translateX(5px);
        }
        
        /* Card Hover Animation */
        .card {
            transition: all 0.3s ease-in-out;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        /* Dropdown Animation */
        .dropdown-content {
            transition: all 0.2s ease-in-out;
            opacity: 0;
            transform: translateY(-10px);
            visibility: hidden;
        }
        
        .dropdown-content.show {
            opacity: 1;
            transform: translateY(0);
            visibility: visible;
        }
    </style>
    
    <title>@yield('title', 'Dashboard PPDB - SMK NEGERI 3 PALU')</title>
</head>
<body>
    @yield('content')
    
    @stack('scripts')
    
    <script>
        // Add animation classes to elements
        document.addEventListener('DOMContentLoaded', function() {
            // SweetAlert2 Notification
            @if (session('swal'))
                Swal.fire({
                    icon: '{{ session('swal.icon') }}',
                    title: '{{ session('swal.title') }}',
                    text: '{{ session('swal.text') }}',
                    showCancelButton: {{ session('swal.showCancelButton') ? 'true' : 'false' }},
                    confirmButtonText: '{{ session('swal.confirmButtonText') ?? 'OK' }}',
                    cancelButtonText: '{{ session('swal.cancelButtonText') ?? 'Batal' }}',
                    confirmButtonColor: '{{ session('swal.confirmButtonColor') ?? '#10B981' }}',
                    cancelButtonColor: '{{ session('swal.cancelButtonColor') ?? '#6B7280' }}',
                    customClass: @json(session('swal.customClass') ?? []),
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{ route('register.ppdb') }}';
                    } else {
                        // Jika user klik "Nanti", hapus session swal
                        @php session()->forget('swal'); @endphp
                    }
                });
            @endif

            // Add sidebar class
            const sidebar = document.querySelector('.bg-[#121636]');
            if (sidebar) {
                sidebar.classList.add('sidebar');
            }
            
            // Add main content class
            const mainContent = document.querySelector('.flex-1.flex.flex-col');
            if (mainContent) {
                mainContent.classList.add('main-content');
            }
            
            // Add menu item animation class
            const menuItems = document.querySelectorAll('.flex.items-center.px-6.py-3');
            menuItems.forEach(item => {
                item.classList.add('menu-item');
            });
            
            // Add card animation class
            const cards = document.querySelectorAll('.bg-white.rounded-lg.shadow');
            cards.forEach(card => {
                card.classList.add('card');
            });
            
            // Handle dropdown animation
            const dropdownButtons = document.querySelectorAll('[x-data]');
            dropdownButtons.forEach(button => {
                const dropdown = button.querySelector('[x-show]');
                if (dropdown) {
                    dropdown.classList.add('dropdown-content');
                    
                    // Use Alpine.js to handle transitions
                    button.setAttribute('x-on:click', 'open = !open; $nextTick(() => { if(open) $el.querySelector(".dropdown-content").classList.add("show"); else $el.querySelector(".dropdown-content").classList.remove("show"); })');
                }
            });
        });
    </script>
</body>
</html> 