/**
 * Visit Sabang Website
 * Main JavaScript file
 * 
 * Last updated: 2025-04-13
 * Author: M-Aidil-Fitrah
 */

document.addEventListener('DOMContentLoaded', function() {
    // ===== Utility functions =====
    const $ = (selector) => document.querySelector(selector);
    const $$ = (selector) => Array.from(document.querySelectorAll(selector));

    // ===== Animate elements on scroll =====
    const animateElements = $$('.animate-on-scroll');
    
    // Initial check for elements in viewport
    checkIfInView();
    
    // ===== Mobile menu functionality =====
    const mobileMenuButton = $('#mobileMenuButton');
    const closeMenuButton = $('#closeMenu');
    const mobileMenu = $('#mobileMenu');
    
    if (mobileMenuButton && mobileMenu && closeMenuButton) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
        });
        
        closeMenuButton.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = ''; // Re-enable scrolling
        });
    }
    
    // ===== Cookie notice functionality =====
    const cookieNotice = $('#cookieNotice');
    const acceptCookiesBtn = $('#acceptCookies');
    const rejectCookiesBtn = $('#rejectCookies');
    
    // Check if user has already interacted with cookie notice
    if (cookieNotice && acceptCookiesBtn && rejectCookiesBtn) {
        if (localStorage.getItem('cookiesAccepted') || localStorage.getItem('cookiesRejected')) {
            cookieNotice.classList.add('hidden');
        } else {
            cookieNotice.classList.remove('hidden');
        }
        
        acceptCookiesBtn.addEventListener('click', function() {
            localStorage.setItem('cookiesAccepted', 'true');
            cookieNotice.classList.add('hidden');
        });
        
        rejectCookiesBtn.addEventListener('click', function() {
            localStorage.setItem('cookiesRejected', 'true');
            cookieNotice.classList.add('hidden');
        });
    }
    
    // ===== Hero slider functionality =====
    initializeHeroSlider();
    
    // ===== Navigation links active state =====
    const navLinks = $$('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('href') === '#') {
                e.preventDefault();
                navLinks.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });
    
    // ===== Image gallery functionality (for accommodation & destination details) =====
    initializeGallery();
    
    // ===== Booking form functionality =====
    initializeBookingForm();
    
    // ===== Filters functionality =====
    initializeFilters();

    // ===== Destination carousel functionality =====
    const prevDestButton = $('#prevDestination');
    const nextDestButton = $('#nextDestination');
    
    if (prevDestButton && nextDestButton) {
        const destinationContainers = $$('.destination-carousel .grid');
        let currentPage = 0;
        
        prevDestButton.addEventListener('click', function() {
            if (currentPage > 0) {
                currentPage--;
                updateDestinationCarousel();
            }
        });
        
        nextDestButton.addEventListener('click', function() {
            if (destinationContainers && currentPage < destinationContainers.length - 1) {
                currentPage++;
                updateDestinationCarousel();
            }
        });
        
        function updateDestinationCarousel() {
            if (destinationContainers) {
                destinationContainers.forEach((container, index) => {
                    if (index === currentPage) {
                        container.style.display = 'grid';
                    } else {
                        container.style.display = 'none';
                    }
                });
                
                prevDestButton.disabled = currentPage === 0;
                nextDestButton.disabled = currentPage === destinationContainers.length - 1;
            }
        }
    }
    
    // ===== Add scroll event listener =====
    window.addEventListener('scroll', checkIfInView);
    
    // ===== Smooth scrolling for anchor links =====
    $$('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            if (targetId !== '#') {
                e.preventDefault();
                const targetElement = $(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100, // Offset for fixed header
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // ===== Add hover animations for buttons =====
    const buttons = $$('.btn-amber');
    
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
        });
    });
    
    // ===== Image lazy loading with animation =====
    initializeLazyLoading();

    // ===== Driver search functionality =====
    initializeDriverSearch();

    // ===== Date utilities =====
    setDefaultDates();

    // ===== Functions =====

    // Check if elements are in viewport and animate them
    function checkIfInView() {
        const windowHeight = window.innerHeight;
        const windowTopPosition = window.scrollY;
        const windowBottomPosition = windowTopPosition + windowHeight;
        
        animateElements.forEach(function(element) {
            const elementHeight = element.offsetHeight;
            const elementTopPosition = element.offsetTop;
            const elementBottomPosition = elementTopPosition + elementHeight;
            
            // Check if element is in viewport
            if (
                (elementBottomPosition >= windowTopPosition && elementTopPosition <= windowBottomPosition) || 
                (elementTopPosition <= windowBottomPosition && elementBottomPosition >= windowTopPosition)
            ) {
                element.classList.add('animate-fade-in');
            }
        });
    }

    // Initialize hero slider on homepage
    function initializeHeroSlider() {
        const heroContainer = $('.relative.h-screen');
        
        if (!heroContainer) return;
        
        const heroImages = [
            '/api/placeholder/1920/1080', // Image 1 (already displayed in HTML)
            '/api/placeholder/1920/1081', // Image 2
            '/api/placeholder/1920/1082'  // Image 3
        ];
        
        const heroTitles = [
            'TEMUKAN PESONA TERSEMBUNYI SABANG',
            'PENGALAMAN DIVING TERBAIK DI INDONESIA',
            'NIKMATI KEINDAHAN ALAM UJUNG BARAT'
        ];
        
        const heroDescriptions = [
            'Surga ujung barat Indonesia dengan keindahan bawah laut yang memukau',
            'Jelajahi terumbu karang yang indah dan beragam biota laut eksotis',
            'Dari pantai hingga gunung, Sabang menawarkan pengalaman tak terlupakan'
        ];
        
        const heroImage = heroContainer.querySelector('img');
        const heroTitle = heroContainer.querySelector('h1');
        const heroDescription = heroContainer.querySelector('p');
        const dotIndicators = $$('.dot-indicator');
        
        let currentHeroIndex = 0;
        
        // Change hero image and text on dot indicator click
        dotIndicators.forEach(dot => {
            dot.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                updateHero(index);
            });
        });
        
        // Auto change hero slides every 7 seconds
        if (heroImage && heroTitle && heroDescription) {
            setInterval(function() {
                currentHeroIndex = (currentHeroIndex + 1) % heroImages.length;
                updateHero(currentHeroIndex);
            }, 7000);
        }
        
        function updateHero(index) {
            // Add fade out animation
            if (heroImage && heroTitle && heroDescription) {
                heroImage.style.transition = 'opacity 0.5s ease';
                heroTitle.style.transition = 'opacity 0.5s ease';
                heroDescription.style.transition = 'opacity 0.5s ease';
                
                heroImage.style.opacity = '0';
                heroTitle.style.opacity = '0';
                heroDescription.style.opacity = '0';
                
                setTimeout(() => {
                    heroImage.src = heroImages[index];
                    heroTitle.textContent = heroTitles[index];
                    heroDescription.textContent = heroDescriptions[index];
                    
                    // Set the active dot indicator
                    dotIndicators.forEach((dot, i) => {
                        if (i === index) {
                            dot.classList.add('active');
                        } else {
                            dot.classList.remove('active');
                        }
                    });
                    
                    // Add fade in animation
                    heroImage.style.opacity = '1';
                    heroTitle.style.opacity = '1';
                    heroDescription.style.opacity = '1';
                }, 500);
            }
            
            currentHeroIndex = index;
        }
    }

    // Initialize image gallery on detail pages
    function initializeGallery() {
        const galleryImages = $$('.rounded-lg.overflow-hidden.shadow-sm.cursor-pointer img');
        const mainImage = $('.mb-6.rounded-lg.overflow-hidden.shadow-lg img');
        
        if (galleryImages.length > 0 && mainImage) {
            galleryImages.forEach(img => {
                img.addEventListener('click', function() {
                    mainImage.src = this.src;
                    mainImage.alt = this.alt;
                    
                    // Animate the image change
                    mainImage.style.opacity = '0';
                    mainImage.style.transition = 'opacity 0.3s ease';
                    
                    setTimeout(() => {
                        mainImage.style.opacity = '1';
                    }, 100);
                });
            });
        }
    }

    // Initialize booking form on accommodation detail pages
    function initializeBookingForm() {
        const bookingForm = $('.sticky.top-24 form');
        const checkInInput = $('#check-in');
        const checkOutInput = $('#check-out');
        const roomTypeSelect = $('#room-type');
        const priceDisplay = $('.text-amber-500.font-bold');
        
        if (bookingForm && checkInInput && checkOutInput && roomTypeSelect) {
            roomTypeSelect.addEventListener('change', updateBookingSummary);
            checkInInput.addEventListener('change', updateBookingSummary);
            checkOutInput.addEventListener('change', updateBookingSummary);
            
            function updateBookingSummary() {
                // Get selected room type
                const roomType = roomTypeSelect.value;
                let basePrice = 1500000; // Default Deluxe Room price
                let roomTypeName = 'Deluxe Room';
                
                // Set room price based on selection
                if (roomType === 'premium') {
                    basePrice = 2500000;
                    roomTypeName = 'Premium Suite';
                } else if (roomType === 'villa') {
                    basePrice = 3800000;
                    roomTypeName = 'Private Villa';
                }
                
                // Calculate number of nights
                let numberOfNights = 1;
                if (checkInInput.value && checkOutInput.value) {
                    const checkIn = new Date(checkInInput.value);
                    const checkOut = new Date(checkOutInput.value);
                    const timeDiff = checkOut - checkIn;
                    numberOfNights = Math.ceil(timeDiff / (1000 * 3600 * 24));
                    if (numberOfNights < 1) numberOfNights = 1;
                }
                
                // Calculate total price
                const roomTotal = basePrice * numberOfNights;
                const taxAndService = roomTotal * 0.15; // 15% tax and service
                const totalPrice = roomTotal + taxAndService;
                
                // Update the price summary
                const priceElements = bookingForm.querySelectorAll('.flex.justify-between');
                if (priceElements.length >= 3) {
                    // Update room price line
                    priceElements[0].querySelector('span:first-child').textContent = `${roomTypeName} x ${numberOfNights} malam`;
                    priceElements[0].querySelector('span:last-child').textContent = `Rp ${roomTotal.toLocaleString('id-ID')}`;
                    
                    // Update tax & service line
                    priceElements[1].querySelector('span:last-child').textContent = `Rp ${taxAndService.toLocaleString('id-ID')}`;
                    
                    // Update total price
                    priceElements[2].querySelector('span:last-child').textContent = `Rp ${totalPrice.toLocaleString('id-ID')}`;
                }
            }
        }
    }

    // Initialize filters on listings pages
    function initializeFilters() {
        const filterButtons = $$('.px-4.py-2.rounded');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-amber-400', 'hover:bg-amber-500');
                    btn.classList.add('bg-gray-200', 'hover:bg-gray-300');
                });
                
                // Add active class to clicked button
                this.classList.remove('bg-gray-200', 'hover:bg-gray-300');
                this.classList.add('bg-amber-400', 'hover:bg-amber-500');
                
                // Here you would typically filter the content
                // For demo purposes, we'll just log the filter
                console.log('Filter applied:', this.textContent.trim());
            });
        });
    }

    // Lazy loading for images
    function initializeLazyLoading() {
        const images = $$('img');
        
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.style.transition = 'opacity 0.5s ease';
                        img.style.opacity = '1';
                        observer.unobserve(img);
                    }
                });
            });
            
            images.forEach(img => {
                if (!img.complete) {
                    img.style.opacity = '0';
                    imageObserver.observe(img);
                }
            });
        } else {
            // Fallback for browsers without IntersectionObserver support
            images.forEach(img => {
                img.style.opacity = '1';
            });
        }
    }

    // Initialize driver search functionality
    function initializeDriverSearch() {
        const driverSearchForm = document.querySelector('form');
        
        if (driverSearchForm && window.location.href.includes('drivers.html')) {
            driverSearchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const date = $('#date').value;
                const duration = $('#duration').value;
                const passengers = $('#passengers').value;
                const destination = $('#destination').value;
                
                // For demo purposes, just log the search
                console.log('Driver search:', { date, duration, passengers, destination });
                
                // Here you would typically send this data to a server or filter drivers
                alert('Pencarian driver berhasil. Menampilkan driver yang tersedia sesuai kriteria Anda.');
            });
        }
    }

    // Set default dates for booking forms
    function setDefaultDates() {
        const checkInInputs = $$('input[type="date"]#check-in');
        const checkOutInputs = $$('input[type="date"]#check-out');
        
        const today = new Date();
        const tomorrow = new Date(today);
        tomorrow.setDate(tomorrow.getDate() + 1);
        
        const todayStr = formatDate(today);
        const tomorrowStr = formatDate(tomorrow);
        
        checkInInputs.forEach(input => {
            if (!input.value) {
                input.value = todayStr;
                input.min = todayStr;
            }
        });
        
        checkOutInputs.forEach(input => {
            if (!input.value) {
                input.value = tomorrowStr;
                input.min = tomorrowStr;
            }
        });
        
        function formatDate(date) {
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        }
    }
});