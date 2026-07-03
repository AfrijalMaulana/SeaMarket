// SeaMarket Custom JavaScript

// Toggle password visibility
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    if (toggleBtn && passwordInput) {
        toggleBtn.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            // toggle icon (requires Bootstrap Icons)
            this.innerHTML = type === 'password' ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
        });
    }
});

// Close Bootstrap alerts programmatically (if needed)
function closeAlert(element) {
    const alert = bootstrap.Alert.getOrCreateInstance(element);
    alert.close();
}

// Navbar toggle for mobile (Bootstrap handles it, but keep placeholder)
// No extra code needed; included for future custom behaviour.
