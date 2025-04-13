/**
 * Visit Sabang Website
 * Authentication JS file
 * 
 * Last updated: 2025-04-13
 * Author: M-Aidil-Fitrah
 */

document.addEventListener('DOMContentLoaded', function() {
    // ===== Utility functions =====
    const $ = (selector) => document.querySelector(selector);
    const $$ = (selector) => Array.from(document.querySelectorAll(selector));

    // ===== Tab switching functionality =====
    const loginTab = $('#loginTab');
    const registerTab = $('#registerTab');
    const loginForm = $('#loginForm');
    const registerForm = $('#registerForm');
    const switchToRegister = $('#switchToRegister');
    const switchToLogin = $('#switchToLogin');

    function switchTab(activeTab, activeForm, inactiveTab, inactiveForm) {
        activeTab.classList.add('active');
        activeTab.classList.remove('bg-gray-200');
        inactiveTab.classList.remove('active');
        inactiveTab.classList.add('bg-gray-200');

        activeForm.classList.add('active');
        inactiveForm.classList.remove('active');
    }

    loginTab.addEventListener('click', () => {
        switchTab(loginTab, loginForm, registerTab, registerForm);
    });

    registerTab.addEventListener('click', () => {
        switchTab(registerTab, registerForm, loginTab, loginForm);
    });

    switchToRegister.addEventListener('click', (e) => {
        e.preventDefault();
        switchTab(registerTab, registerForm, loginTab, loginForm);
    });

    switchToLogin.addEventListener('click', (e) => {
        e.preventDefault();
        switchTab(loginTab, loginForm, registerTab, registerForm);
    });

    // ===== Password toggle functionality =====
    const passwordToggles = $$('.password-toggle');
    passwordToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const passwordField = this.previousElementSibling;
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    });

    // ===== Form validation =====
    function validateEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    function validatePhone(phone) {
        const re = /^(\+62|62|0)[0-9]{9,12}$/;
        return re.test(String(phone));
    }

    function showError(field, errorElement, message) {
        field.classList.add('border-red-500');
        field.classList.add('bg-red-50');
        errorElement.textContent = message;
        errorElement.style.display = 'block';
    }

    function clearError(field, errorElement) {
        field.classList.remove('border-red-500');
        field.classList.remove('bg-red-50');
        errorElement.style.display = 'none';
    }

    // Login form validation
    const loginEmail = $('#loginEmail');
    const loginPassword = $('#loginPassword');
    const loginEmailError = $('#loginEmailError');
    const loginPasswordError = $('#loginPasswordError');

    loginEmail.addEventListener('input', function() {
        if (validateEmail(this.value)) {
            clearError(this, loginEmailError);
        } else {
            showError(this, loginEmailError, 'Email tidak valid');
        }
    });

    loginPassword.addEventListener('input', function() {
        if (this.value.length >= 8) {
            clearError(this, loginPasswordError);
        } else {
            showError(this, loginPasswordError, 'Password minimal 8 karakter');
        }
    });

    // Register form validation
    const registerName = $('#registerName');
    const registerEmail = $('#registerEmail');
    const registerPhone = $('#registerPhone');
    const registerPassword = $('#registerPassword');
    const registerConfirmPassword = $('#registerConfirmPassword');
    const registerNameError = $('#registerNameError');
    const registerEmailError = $('#registerEmailError');
    const registerPhoneError = $('#registerPhoneError');
    const registerPasswordError = $('#registerPasswordError');
    const registerConfirmPasswordError = $('#registerConfirmPasswordError');

    registerName.addEventListener('input', function() {
        if (this.value.trim() !== '') {
            clearError(this, registerNameError);
        } else {
            showError(this, registerNameError, 'Nama tidak boleh kosong');
        }
    });

    registerEmail.addEventListener('input', function() {
        if (validateEmail(this.value)) {
            clearError(this, registerEmailError);
        } else {
            showError(this, registerEmailError, 'Email tidak valid');
        }
    });

    registerPhone.addEventListener('input', function() {
        if (validatePhone(this.value)) {
            clearError(this, registerPhoneError);
        } else {
            showError(this, registerPhoneError, 'Format nomor telepon tidak valid');
        }
    });

    registerPassword.addEventListener('input', function() {
        if (this.value.length >= 8) {
            clearError(this, registerPasswordError);
            
            // Check if confirm password matches
            if (registerConfirmPassword.value !== '' && this.value === registerConfirmPassword.value) {
                clearError(registerConfirmPassword, registerConfirmPasswordError);
            } else if (registerConfirmPassword.value !== '') {
                showError(registerConfirmPassword, registerConfirmPasswordError, 'Password tidak sama');
            }
        } else {
            showError(this, registerPasswordError, 'Password minimal 8 karakter');
        }
    });

    registerConfirmPassword.addEventListener('input', function() {
        if (this.value === registerPassword.value) {
            clearError(this, registerConfirmPasswordError);
        } else {
            showError(this, registerConfirmPasswordError, 'Password tidak sama');
        }
    });

    // ===== Form submission =====
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Reset errors
        clearError(loginEmail, loginEmailError);
        clearError(loginPassword, loginPasswordError);
        
        let isValid = true;
        
        if (!validateEmail(loginEmail.value)) {
            showError(loginEmail, loginEmailError, 'Email tidak valid');
            isValid = false;
        }
        
        if (loginPassword.value.length < 8) {
            showError(loginPassword, loginPasswordError, 'Password minimal 8 karakter');
            isValid = false;
        }
        
        if (isValid) {
            // For demo purposes, we'll simulate a successful login
            // In a real application, you would send the form data to your server
            console.log('Login form submitted:', {
                email: loginEmail.value,
                password: loginPassword.value,
                remember: $('#remember').checked
            });
            
            // Store user data in localStorage (for demo purposes only)
            localStorage.setItem('userLoggedIn', 'true');
            localStorage.setItem('userEmail', loginEmail.value);
            
            // Redirect to home page
            showSuccessMessage('Login berhasil! Mengalihkan ke halaman utama...');
            setTimeout(() => {
                window.location.href = 'index.html';
            }, 1500);
        }
    });

    registerForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Reset errors
        clearError(registerName, registerNameError);
        clearError(registerEmail, registerEmailError);
        clearError(registerPhone, registerPhoneError);
        clearError(registerPassword, registerPasswordError);
        clearError(registerConfirmPassword, registerConfirmPasswordError);
        
        let isValid = true;
        
        if (registerName.value.trim() === '') {
            showError(registerName, registerNameError, 'Nama tidak boleh kosong');
            isValid = false;
        }
        
        if (!validateEmail(registerEmail.value)) {
            showError(registerEmail, registerEmailError, 'Email tidak valid');
            isValid = false;
        }
        
        if (!validatePhone(registerPhone.value)) {
            showError(registerPhone, registerPhoneError, 'Format nomor telepon tidak valid');
            isValid = false;
        }
        
        if (registerPassword.value.length < 8) {
            showError(registerPassword, registerPasswordError, 'Password minimal 8 karakter');
            isValid = false;
        }
        
        if (registerPassword.value !== registerConfirmPassword.value) {
            showError(registerConfirmPassword, registerConfirmPasswordError, 'Password tidak sama');
            isValid = false;
        }
        
        if (!$('#terms').checked) {
            alert('Anda harus menyetujui syarat dan ketentuan untuk melanjutkan.');
            isValid = false;
        }
        
        if (isValid) {
            // For demo purposes, we'll simulate a successful registration
            // In a real application, you would send the form data to your server
            console.log('Register form submitted:', {
                name: registerName.value,
                email: registerEmail.value,
                phone: registerPhone.value,
                password: registerPassword.value
            });
            
            // Store user data in localStorage (for demo purposes only)
            localStorage.setItem('userLoggedIn', 'true');
            localStorage.setItem('userName', registerName.value);
            localStorage.setItem('userEmail', registerEmail.value);
            
            // Show success message and redirect
            showSuccessMessage('Registrasi berhasil! Mengalihkan ke halaman utama...');
            setTimeout(() => {
                window.location.href = 'index.html';
            }, 1500);
        }
    });

    // Success message function
    function showSuccessMessage(message) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded shadow-lg z-50';
        messageDiv.textContent = message;
        document.body.appendChild(messageDiv);
        
        setTimeout(() => {
            messageDiv.remove();
        }, 3000);
    }

    // Check if user is already logged in
    if (localStorage.getItem('userLoggedIn') === 'true') {
        // If on login page, redirect to home
        if (window.location.pathname.includes('login.html')) {
            window.location.href = 'index.html';
        }
    } else {
        // If not on login page and not logged in, redirect to login
        if (!window.location.pathname.includes('login.html')) {
            window.location.href = 'login.html';
        }
    }

    // ===== Logout functionality (to be added to script.js) =====
    /* 
    // Add this code to script.js to implement logout functionality
    
    // Check for logout button in the navbar
    const logoutButton = document.querySelector('.logout-button');
    if (logoutButton) {
        logoutButton.addEventListener('click', function(e) {
            e.preventDefault();
            localStorage.removeItem('userLoggedIn');
            localStorage.removeItem('userName');
            localStorage.removeItem('userEmail');
            window.location.href = 'login.html';
        });
    }
    */
});