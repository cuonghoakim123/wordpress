/**
 * Onboarding JavaScript
 * Hand in Hand Foundation
 */

// Onboarding functionality
document.addEventListener('DOMContentLoaded', function() {
    console.log('Onboarding.js loaded successfully');
    
    // Initialize onboarding if needed
    initializeOnboarding();
});

function initializeOnboarding() {
    console.log('Onboarding functionality initialized');
    
    // Check if this is user's first visit
    const hasVisited = localStorage.getItem('handinhand_visited');
    
    if (!hasVisited) {
        // Mark as visited
        localStorage.setItem('handinhand_visited', 'true');
        
        // Show welcome message or tour (if needed)
        showWelcomeMessage();
    }
    
    // Handle any onboarding-specific interactions
    setupOnboardingInteractions();
}

function showWelcomeMessage() {
    // Create a subtle welcome notification
    const welcomeNotification = document.createElement('div');
    welcomeNotification.className = 'welcome-notification';
    welcomeNotification.innerHTML = `
        <div class="welcome-content">
            <i class="fas fa-heart"></i>
            <span>Chào mừng bạn đến với Hand in Hand Foundation!</span>
            <button onclick="closeWelcomeMessage()" class="close-btn">&times;</button>
        </div>
    `;
    
    // Add styles
    welcomeNotification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #4a9fa5, #e6394a);
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        z-index: 10000;
        animation: slideInRight 0.5s ease;
        max-width: 300px;
    `;
    
    // Add animation keyframes
    if (!document.getElementById('welcome-animations')) {
        const style = document.createElement('style');
        style.id = 'welcome-animations';
        style.textContent = `
            @keyframes slideInRight {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            .welcome-content {
                display: flex;
                align-items: center;
                gap: 10px;
            }
            .welcome-content i {
                color: #ffeb3b;
            }
            .close-btn {
                background: none;
                border: none;
                color: white;
                font-size: 1.2em;
                cursor: pointer;
                margin-left: auto;
            }
        `;
        document.head.appendChild(style);
    }
    
    document.body.appendChild(welcomeNotification);
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        if (welcomeNotification.parentNode) {
            closeWelcomeMessage();
        }
    }, 5000);
}

function closeWelcomeMessage() {
    const notification = document.querySelector('.welcome-notification');
    if (notification) {
        notification.style.animation = 'slideInRight 0.3s ease reverse';
        setTimeout(() => {
            notification.remove();
        }, 300);
    }
}

function setupOnboardingInteractions() {
    // Add any interactive elements for new users
    const ctaButtons = document.querySelectorAll('.cta-button, .btn-primary');
    
    ctaButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            // Add subtle pulse effect for first-time users
            if (!localStorage.getItem('handinhand_interactions')) {
                this.style.animation = 'pulse 1s infinite';
            }
        });
        
        button.addEventListener('click', function() {
            // Mark that user has interacted
            localStorage.setItem('handinhand_interactions', 'true');
        });
    });
}

// Make functions globally available
window.closeWelcomeMessage = closeWelcomeMessage;

// Export for module use
window.OnboardingJS = {
    initialize: initializeOnboarding,
    showWelcome: showWelcomeMessage
};