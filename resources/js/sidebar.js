document.addEventListener('DOMContentLoaded', function() {
    var sidebar = document.getElementById('sidebar');

    // Function to close the sidebar
    function closeSidebar() {
        sidebar.style.width = '0';
    }

    // Toggle sidebar on button click
    document.getElementById('toggleSidebar').addEventListener('click', function() {
        sidebar.style.width = sidebar.style.width === '250px' ? '0' : '250px';
    });

    // Close sidebar when clicking outside of it or on the "X" button
    document.addEventListener('click', function(event) {
        if (event.target.id !== 'toggleSidebar' && event.target.closest('#sidebar') === null) {
            closeSidebar();
        }
    });

    // Close sidebar when clicking the "X" button
    document.getElementById('closeSidebarButton').addEventListener('click', function(event) {
        event.preventDefault();
        closeSidebar();
    });
});