// public/js/notification.js
const notificationBell = document.querySelector('#notification-bell');
const notificationCount = document.querySelector('#notification-count');

// Fetch the number of new notifications
fetch('/notifications/count')
    .then(response => response.json())
    .then(data => {
        if (data.count > 0) {
            notificationBell.classList.add('has-notifications');
            notificationCount.textContent = data.count;
        }
    });
