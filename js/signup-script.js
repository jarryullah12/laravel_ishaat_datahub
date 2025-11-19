// Sign Up Form JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Get form elements
    const signupForm = document.getElementById('signupForm');
    const togglePasswordBtn = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('confirmPassword');
    const submitBtn = signupForm.querySelector('button[type="submit"]');
    
    // Password toggle functionality
    togglePasswordBtn.addEventListener('click', function() {
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        
        // Toggle icon
        const icon = this.querySelector('i');
        if (type === 'text') {
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
    
    // Real-time password confirmation validation
    confirmPasswordField.addEventListener('input', function() {
        const password = passwordField.value;
        const confirmPassword = this.value;
        
        if (confirmPassword.length > 0) {
            if (password === confirmPassword) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
                this.nextElementSibling.textContent = 'Passwords match!';
                this.nextElementSibling.className = 'valid-feedback';
            } else {
                this.classList.remove('is-valid');
                this.classList.add('is-invalid');
                this.nextElementSibling.textContent = 'Passwords do not match.';
                this.nextElementSibling.className = 'invalid-feedback';
            }
        } else {
            this.classList.remove('is-valid', 'is-invalid');
        }
    });
    
    // Password strength validation
    passwordField.addEventListener('input', function() {
        const password = this.value;
        const minLength = 8;
        const hasNumber = /\d/.test(password);
        const hasLetter = /[a-zA-Z]/.test(password);
        const hasSpecialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password);
        
        if (password.length >= minLength && hasNumber && hasLetter) {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            
            // Update password strength indicator
            let strength = 'Good';
            if (hasSpecialChar && password.length >= 10) {
                strength = 'Strong';
            }
            
            const helpText = this.parentElement.nextElementSibling;
            helpText.innerHTML = `Password strength: <span class="text-success font-weight-bold">${strength}</span>`;
        } else {
            this.classList.remove('is-valid');
            if (password.length > 0) {
                this.classList.add('is-invalid');
            }
            
            const helpText = this.parentElement.nextElementSibling;
            helpText.innerHTML = 'Password must be at least 8 characters with numbers and letters.';
        }
        
        // Re-validate confirm password if it has value
        if (confirmPasswordField.value.length > 0) {
            confirmPasswordField.dispatchEvent(new Event('input'));
        }
    });
    
    // Email validation
    const emailField = document.getElementById('email');
    emailField.addEventListener('input', function() {
        const email = this.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (email.length > 0) {
            if (emailRegex.test(email)) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            } else {
                this.classList.remove('is-valid');
                this.classList.add('is-invalid');
            }
        } else {
            this.classList.remove('is-valid', 'is-invalid');
        }
    });
    
    // Name fields validation
    function validateNameField(field) {
        field.addEventListener('input', function() {
            const name = this.value.trim();
            const nameRegex = /^[a-zA-Z\s]+$/;
            
            if (name.length > 0) {
                if (nameRegex.test(name) && name.length >= 2) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                } else {
                    this.classList.remove('is-valid');
                    this.classList.add('is-invalid');
                }
            } else {
                this.classList.remove('is-valid', 'is-invalid');
            }
        });
    }
    
    validateNameField(document.getElementById('firstName'));
    validateNameField(document.getElementById('lastName'));
    
    // Form submission
    signupForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Remove any existing messages
        const existingMessages = document.querySelectorAll('.success-message, .error-message');
        existingMessages.forEach(msg => msg.remove());
        
        // Validate all fields
        let isValid = true;
        const formData = new FormData(this);
        const data = {};
        
        // Collect form data
        for (let [key, value] of formData.entries()) {
            data[key] = value.trim();
        }
        
        // Validation rules
        const validations = [
            { field: 'firstName', message: 'First name is required and should contain only letters.', validate: (val) => val && /^[a-zA-Z\s]+$/.test(val) && val.length >= 2 },
            { field: 'lastName', message: 'Last name is required and should contain only letters.', validate: (val) => val && /^[a-zA-Z\s]+$/.test(val) && val.length >= 2 },
            { field: 'email', message: 'Please provide a valid email address.', validate: (val) => val && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val) },
            { field: 'password', message: 'Password must be at least 8 characters with numbers and letters.', validate: (val) => val && val.length >= 8 && /\d/.test(val) && /[a-zA-Z]/.test(val) },
            { field: 'confirmPassword', message: 'Passwords do not match.', validate: (val) => val === data.password }
        ];
        
        // Validate each field
        validations.forEach(validation => {
            const field = document.getElementById(validation.field) || document.querySelector(`[name="${validation.field}"]`);
            const value = data[validation.field];
            
            if (!validation.validate(value)) {
                field.classList.add('is-invalid');
                field.classList.remove('is-valid');
                isValid = false;
            } else {
                field.classList.add('is-valid');
                field.classList.remove('is-invalid');
            }
        });
        
        if (isValid) {
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Creating Account...';
            submitBtn.disabled = true;
            submitBtn.classList.add('loading');
            
            // Simulate API call
            setTimeout(() => {
                // Reset button
                submitBtn.innerHTML = '<i class="fas fa-user-plus mr-2"></i>Create Account';
                submitBtn.disabled = false;
                submitBtn.classList.remove('loading');
                
                // Show success message
                const successMessage = document.createElement('div');
                successMessage.className = 'success-message';
                successMessage.innerHTML = '<i class="fas fa-check-circle mr-2"></i>Account created successfully! Please check your email to verify your account.';
                successMessage.style.display = 'block';
                
                // Insert message before form
                const form = document.querySelector('.signup-form');
                form.insertBefore(successMessage, form.firstChild);
                
                // Reset form
                this.reset();
                document.querySelectorAll('.form-control').forEach(field => {
                    field.classList.remove('is-valid', 'is-invalid');
                });
                
                // Scroll to top
                window.scrollTo({ top: 0, behavior: 'smooth' });
                
            }, 2000);
            
        } else {
            // Show error message
            const errorMessage = document.createElement('div');
            errorMessage.className = 'error-message';
            errorMessage.innerHTML = '<i class="fas fa-exclamation-circle mr-2"></i>Please correct the errors below and try again.';
            errorMessage.style.display = 'block';
            
            // Insert message before form
            const form = document.querySelector('.signup-form');
            form.insertBefore(errorMessage, form.firstChild);
            
            // Scroll to first error
            const firstError = document.querySelector('.is-invalid');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstError.focus();
            }
        }
    });
    
    
    // Add smooth animations for form interactions
    document.querySelectorAll('.form-control').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
            this.parentElement.style.transition = 'transform 0.2s ease';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
        });
    });
    
    // Preload animations
    setTimeout(() => {
        document.body.classList.add('loaded');
    }, 100);
    
});
