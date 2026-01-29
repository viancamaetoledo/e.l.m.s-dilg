// DOM Elements
const loginModal = document.getElementById('loginModal');
const loginNavBtn = document.getElementById('loginNavBtn');
const loginPortalBtn = document.getElementById('loginPortalBtn');
const closeModalBtn = document.querySelector('.close-modal');
const submitLoginBtn = document.getElementById('submitLogin');
const loginForm = document.getElementById('loginForm');
const forgotPasswordLink = document.getElementById('forgotPassword');

// Show modal when clicking login buttons
function showLoginModal() {
    loginModal.style.display = 'flex';
    document.body.style.overflow = 'hidden'; // Prevent scrolling
}

// Hide modal
function hideLoginModal() {
    loginModal.style.display = 'none';
    document.body.style.overflow = 'auto'; // Re-enable scrolling
}

// Event Listeners for showing modal
loginNavBtn.addEventListener('click', showLoginModal);
loginPortalBtn.addEventListener('click', showLoginModal);

// Event Listeners for hiding modal
closeModalBtn.addEventListener('click', hideLoginModal);

// Close modal when clicking outside of modal content
loginModal.addEventListener('click', function(e) {
    if (e.target === loginModal) {
        hideLoginModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && loginModal.style.display === 'flex') {
        hideLoginModal();
    }
});

// Handle form submission
submitLoginBtn.addEventListener('click', function() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    // Basic validation
    if (!username || !password) {
        alert('Please enter both username and password');
        return;
    }
    
    // Show loading state
    const originalText = submitLoginBtn.innerHTML;
    submitLoginBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Logging in...';
    submitLoginBtn.disabled = true;
    
    // Simulate login process
    setTimeout(function() {
        // In a real application, this would be an AJAX request to the server
        // For demo purposes, we'll just show a success message
        alert(`Login attempt for user: ${username}\n\nIn a real application, this would authenticate with the ELMS server.`);
        
        // Reset button
        submitLoginBtn.innerHTML = originalText;
        submitLoginBtn.disabled = false;
        
        // Close modal after "successful" login
        hideLoginModal();
        
        // In a real implementation, you would redirect to the ELMS dashboard
        // window.location.href = 'YOUR_ELMS_DASHBOARD_URL';
    }, 1500);
});

// Forgot password handler
forgotPasswordLink.addEventListener('click', function(e) {
    e.preventDefault();
    hideLoginModal();
    
    // In a real application, this would open a password recovery form
    alert('Password recovery link has been sent to your registered email.\n\n(Simulation: In a real application, this would trigger password reset)');
});

// Allow form submission with Enter key
loginForm.addEventListener('submit', function(e) {
    e.preventDefault();
    submitLoginBtn.click();
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        // Don't prevent default for modal triggers
        if (this.id === 'loginNavBtn') return;
        
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if(targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if(targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Add active class to current navigation item
window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.main-nav a');
    
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if(scrollY >= (sectionTop - 100)) {
            current = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if(link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});